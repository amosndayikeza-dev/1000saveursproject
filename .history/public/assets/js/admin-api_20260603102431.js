// admin-api.js
const AdminAPI = (function() {
    const BASE = '/1000saveursproject/api';

    async function request(url, options = {}) {
        const response = await fetch(url, {
            credentials: 'same-origin',
            headers: { 'Content-Type': 'application/json' },
            ...options
        });
        if (!response.ok) {
            const error = await response.json().catch(() => ({ message: 'Erreur serveur' }));
            throw new Error(error.message || `HTTP ${response.status}`);
        }
        return response.json();
    }

    return {
        users: {
            list: (params = {}) => {
                const query = new URLSearchParams(params).toString();
                return request(`${BASE}/users.php?${query}`);
            },
            get: (id) => request(`${BASE}/users.php?action=get&id=${id}`),
            create: (data) => request(`${BASE}/users.php?action=create`, { method: 'POST', body: JSON.stringify(data) }),
            update: (id, data) => request(`${BASE}/users.php?action=update&id=${id}`, { method: 'PUT', body: JSON.stringify(data) }),
            delete: (id) => request(`${BASE}/users.php?action=delete&id=${id}`, { method: 'DELETE' }),
            setActive: (id, active) => request(`${BASE}/users.php?action=${active ? 'activate' : 'deactivate'}&id=${id}`, { method: 'POST' })
        }
    };
})();