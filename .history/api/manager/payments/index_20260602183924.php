<?php
// POST /api/manager/payments.php
// Corps : { "saleId": 123, "amount": 5000, "method": "cash" }
try {
    $ctx = mgrAuthContext();
    $service = $ctx['service'];
    $data = mgrReadJson();
    $result = $service->recordPayment($ctx['departementId'], $data['saleId'], $data['amount'], $data['method'] ?? 'cash');
    mgrRespond(201, ['success' => true, 'data' => $result]);
} catch (Throwable $e) {
    mgrRespond(400, ['success' => false, 'message' => $e->getMessage()]);
}