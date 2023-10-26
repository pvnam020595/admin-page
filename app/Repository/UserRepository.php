<?php

namespace App\Repository;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use App\Models\UserVerify;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class UserRepository implements UserRepositoryInterface
{

  public function userStore(array $inforUser)
  {
    try {
      return User::create($inforUser);
    } catch (QueryException $e) {
      Log::info($e->getMessage());
      return false;
    }
  }
  // public function insertEmailVerify(array $inforUser)
  // {
  //   return UserVerify::create($inforUser);
  // }

  // public function verifyEmail(array $dataVerify)
  // {
  //   return UserVerify::where('code', $dataVerify['otp'])->where('email', $dataVerify['email'])
  //     ->where('expired', '<', date('Y-m-d H:i:s'))->get();
  // }
}
