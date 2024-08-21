<?php

namespace App\Services;

class PaymentGateway {

 public $secretKey;
 public function __construct($secretKey) {
  $this->secretKey = $secretKey;
 }

  function excute() {
   return "Payment gateway";
  }


}