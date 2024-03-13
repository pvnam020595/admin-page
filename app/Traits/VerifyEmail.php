<?php

namespace App\Traits;

trait VerifyEmail
{
 public function generateOPT()
 {
  return rand('123456', '999999');
 }
 
}
