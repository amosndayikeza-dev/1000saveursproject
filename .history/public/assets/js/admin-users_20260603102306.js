// admin-users.js
let currentEditId = null;

async function loadUsers() {
    const tbody = document.getElementById('users-table-body');
    if (!tbody) return;
    tbody.innerHTML = '<tr><td colspan="7" class="mgr-empty-hint">Chargement...</td></tr>';
    const role = document.getElementById('filter-role').value;
    const active = document.getElementById('filter-active').value;
    const params = {};
    if (role) params.role = role;
    if (active !== '') params.active = active;
    try {
        const res = await AdminAPI.users.list(params);
        const users = res.data || [];
        if (users.length === 0) {
            tbody.innerHTML = '<tr><td colspan="7" class="mgr-empty-hint">Aucun utilisateur</td></tr>';
            return;
        }
        tbody.innerHTML = users.map(u => `
            <tr class="tft-b-bottom-gris">
                <td class="tft-title4 tft-clr-white3">${u.id}</td>
                <td class="tft-title4 tft-clr-white3">${escapeHtml(u.last_name || '')}</td>
                <td class="tft-title4 tft-clr-white3">${escapeHtml(u.first_name || '')}</td>
                <td class="tft-title4 tft-clr-white3">${escapeHtml(u.email)}</td>
                <td class="tft-title4 tft-clr-white3">${escapeHtml(u.role)}</td>
                <td class="tft-title4 tft-clr-white3">${u.is_active ? '<span class="badge-active">Actif</span>' : '<span class="badge-inactive">Inactif</span>'}</td>
                <td class="actions">
                    <button class="tft-icon-btn" onclick="editUser(${u.id})"><i class="fas fa-edit"></i></button>
                    <button class="tft-icon-btn" onclick="toggleActive(${u.id}, ${!u.is_active})"><i class="fas ${u.is_active ? 'fa-ban' : 'fa-check-circle'}"></i></button>
                    <button class="tft-icon-btn" onclick="deleteUser(${u.id})"><i class="fas fa-trash-alt"></i></button>
                </td>
            <tr>
        `).join('');
    } catch (err) {
        console.error(err);
        tbody.innerHTML = `<tr><td colspan="7" class="mgr-empty-hint tft-clr-red">Erreur : ${escapeHtml(err.message)}</td></tr>`;
    }
}

function escapeHtml(str) {
    return String(str ?? '').replace(/[&<>]/g, function(m) {
        if (m === '&') return '&amp;';
        if (m === '<') return '&lt;';
        if (m === '>') return '&gt;';
        return m;
    });
}

function openUserModal(user = null) {
    currentEditId = user?.id || null;
    document.getElementById('modal-title').innerText = user ? 'Modifier utilisateur' : 'Ajouter utilisateur';
    document.getElementById('user-id').value = user?.id || '';
    document.getElementById('last-name').value = user?.last_name || '';
    document.getElementById('first-name').value = user?.first_name || '';
    document.getElementById('email').value = user?.email || '';
    document.getElementById('role').value = user?.role || 'admin';
    document.getElementById('is-active').value = user?.is_active ? '1' : '0';
    document.getElementById('password').value = '';
    document.getElementById('user-modal').style.display = 'flex';
}

function closeUserModal() {
    document.getElementById('user-modal').style.display = 'none';
}

// Gestion du formulaire
document.getElementById('user-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    const id = document.getElementById('user-id').value;
    const data = {
        last_name: document.getElementById('last-name').value,
        first_name: document.getElementById('first-name').value,
        email: document.getElementById('email').value,
        role: document.getElementById('role').value,
        is_active: parseInt(document.getElementById('is-active').value)
    };
    const password = document.getElementById('password').value;
    if (password) data.password = password;
    try {
        if (id) {
            await AdminAPI.users.update(id, data);
            alert('Utilisateur mis à jour');
        } else {
            await AdminAPI.users.create(data);
            alert('Utilisateur créé');
        }
        closeUserModal();
        loadUsers();
    } catch (err) {
        alert(err.message);
    }
});

// Fonctions globales pour les boutons
window.editUser = async (id) => {
    try {
        const res = await AdminAPI.users.get(id);
        openUserModal(res.user);
    } catch (err) {
        alert(err.message);
    }
};

window.toggleActive = async (id, newState) => {
    if (confirm(`Voulez-vous ${newState ? 'activer' : 'désactiver'} cet utilisateur ?`)) {
        try {
            await AdminAPI.users.setActive(id, newState);
            loadUsers();
        } catch (err) {
            alert(err.message);
        }
    }
};

window.deleteUser = async (id) => {
    if (confirm('Supprimer définitivement cet utilisateur ? Cette action est irréversible.')) {
        try {
            await AdminAPI.users.delete(id);
            loadUsers();
        } catch (err) {
            alert(err.message);
        }
    }
};

// Initialisation
document.addEventListener('DOMContentLoaded', loadUsers);