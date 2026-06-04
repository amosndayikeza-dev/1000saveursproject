// admin-dashboard.js

async function loadUserInfo() {
    try {
        const res = await fetch('/1000saveursproject/api/auth.php?action=me');
        const data = await res.json();
        if (data.status === 'success' && data.user) {
            const name = (data.user.firstName || '') + ' ' + (data.user.lastName || '');
            document.getElementById('userName').innerText = name.trim() || data.user.email;
            document.getElementById('userRole').innerText = 'Admin';
            document.getElementById('profile-name').innerText = name.trim() || data.user.email;
        }
    } catch(e) { console.error(e); }
}

async function loadAdminStats() {
    // CA du jour
    try {
        const today = new Date().toISOString().slice(0,10);
        const res = await fetch(`/1000saveursproject/api/reports.php?type=sales&startDate=${today}&endDate=${today}`);
        const data = await res.json();
        if (data.status === 'success') {
            const revenue = data.summary?.totalRevenue || 0;
            document.getElementById('today-revenue').innerText = revenue.toLocaleString('fr-FR') + ' FBU';
        }
    } catch(e) { console.error(e); }

    // Produits
    try {
        const res = await fetch('/1000saveursproject/api/manager/products.php');
        const data = await res.json();
        if (data.success) {
            document.getElementById('total-products').innerText = data.data?.length || 0;
        }
    } catch(e) { console.error(e); }

    // Employés
    try {
        const res = await fetch('/1000saveursproject/api/manager/employees.php');
        const data = await res.json();
        if (data.success) {
            document.getElementById('total-employees').innerText = data.data?.length || 0;
        }
    } catch(e) { console.error(e); }

    // Dettes impayées
    try {
        const res = await fetch('/1000saveursproject/api/manager/debts.php?status=pending');
        const data = await res.json();
        if (data.success) {
            const total = data.summary?.totalOutstanding || 0;
            document.getElementById('pending-debts').innerText = total.toLocaleString('fr-FR') + ' FBU';
        }
    } catch(e) { console.error(e); }

    // Nombre total d'utilisateurs (admin)
    try {
        const res = await fetch('/1000saveursproject/api/users.php?action=list');
        const data = await res.json();
        if (data.status === 'success') {
            document.getElementById('total-users').innerText = data.data?.length || 0;
        }
    } catch(e) { console.error(e); }
}

// Déconnexion
async function logout() {
    await fetch('/1000saveursproject/api/auth.php?action=logout', { method: 'POST' });
    window.location.href = '/1000saveursproject/public/login.php';
}

document.addEventListener('DOMContentLoaded', () => {
    loadUserInfo();
    loadAdminStats();
    const logoutBtn = document.getElementById('logoutyes');
    if (logoutBtn) logoutBtn.addEventListener('click', (e) => { e.preventDefault(); logout(); });
});