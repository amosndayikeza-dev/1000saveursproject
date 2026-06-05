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

    async function loadSales() {
        const tbody = document.getElementById('sales-table-body');
        if (!tbody) return;
        tbody.innerHTML = '<tr><td colspan="7" class="mgr-empty-hint">Chargement des ventes…</td></tr>';
        try {
            const response = await ManagerAPI.sales.list();
            if (response && response.success) {
                const sales = response.data || [];
                if (sales.length === 0) {
                    tbody.innerHTML = '<tr><td colspan="7" class="mgr-empty-hint">Aucune vente trouvée</td></tr>';
                    return;
                }
                tbody.innerHTML = sales.map(sale => `
                    <tr class="tft-b-bottom-gris">
                        <td class="tft-title4 tft-clr-white3">${sale.sale_id || sale.id || '—'}</td>
                        <td class="tft-title4 tft-clr-white3">${escapeHtml(sale.product_name)}</td>
                        <td class="tft-title4 tft-clr-white3">${sale.quantity}</td>
                        <td class="tft-title4 tft-clr-white3">${formatMoney(sale.unit_price)}</td>
                        <td class="tft-title4 tft-clr-orangesav">${formatMoney(sale.line_total)}</td>
                        <td class="tft-title4 tft-clr-white3">${formatDate(sale.sold_at)}</td>
                        <td class="tft-title4 tft-clr-white3">${sale.is_paid ? 'Payé' : 'Impayé'}</td>
                    </tr>
                `).join('');
            } else {
                tbody.innerHTML = `<tr><td colspan="7" class="mgr-empty-hint tft-clr-red">Erreur de chargement des ventes</td></tr>`;
            }
        } catch (error) {
            console.error(error);
            tbody.innerHTML = `<tr><td colspan="7" class="mgr-empty-hint tft-clr-red">Impossible de charger les ventes</td></tr>`;
        }
    }

    // Exécuter après chargement du DOM
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', loadSales);
    } else {
        loadSales();
    }
})();