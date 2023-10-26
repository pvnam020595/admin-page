<?php

namespace App\Interfaces;
use Illuminate\Http\JsonResponse;



interface UserRepositoryInterface {

 public function userStore(array $inforUser);
 // public function insertEmailVerify(array $inforUser);

 // public function verifyEmail(array $dataVerify);
 // public function login

}