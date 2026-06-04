<?php
try{
    $ctx = mgrAuthContext();
    $service = $ctx['service'];
    $data = mgrReadJson();
    $result = $service->recordPay
}