<?php
try{
    $ctx = mgrAuthContext();
    $service = $ctx['service'];
    $data = mgrReadJson();
    $result = $service->recordPayment($ctx['departementId',$data['saleId',$data['amount',$data]]])
}