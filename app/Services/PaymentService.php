<?php


namespace App\Services;

class PaymentService {

 public $paymentGateway;
 public function __construct(PaymentGateway $paymentGateway) {
  $this->paymentGateway = $paymentGateway;
 }
  function excute() {
    return $this->paymentGateway->excute();
  }

}