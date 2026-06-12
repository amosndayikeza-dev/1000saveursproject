// sales-page.js
(function() {
    function formatMoney(amount) {
        return (Number(amount) || 0).toLocaleString('fr-FR') + ' FBU';
    }

    function formatDate(dateStr) {
        if (!dateStr) return '—';
        const d = new Date(dateStr);
        return isNaN(d.getTime()) ? dateStr : d.toLocaleDateString('fr-FR');
    }

    function escapeHtml(str) {
        if (!str) return '';
        return String(str).replace(/[&<>]/g, function(m) {
            if (m === '&') return '&amp;';
            if (m === '<') return '&lt;';
            if (m === '>') return '&gt;';
            return m;
        });
    }

    // Exécuter après chargement du DOM
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', loadSales);
    } else {
        loadSales();
    }})();