// admin-common.js
// Fonctions de sidebar et modales (identiques au manager)

function hideSidebar() {
    document.getElementById('container-left')?.classList.add('tft-hidden');
}
function showSidebar() {
    document.getElementById('container-left')?.classList.remove('tft-hidden');
}
function showContainerRight() {
    document.getElementById('container-right')?.classList.add('active');
}
function closeModalInfos() {
    document.getElementById('container-right')?.classList.remove('active');
}
function showContainerRightNotification() {
    // Implémenter si besoin
}
function showContainerRightParametre() {}
function showProfil() {}
function showNotification() {}
function showParametre() {}
function closeModal() {
    document.getElementById('deconnection-modal').style.display = 'none';
}
function deconnectionModal() {
    document.getElementById('deconnection-modal').style.display = 'flex';
}

// Gestion du mode clair/sombre (si changeMode existe déjà, ne pas écraser)
if (typeof changeMode !== 'function') {
    window.changeMode = function() {
        document.body.classList.toggle('light-mode');
        // ou toute autre logique
    };
}