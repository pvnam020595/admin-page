<?php

namespace App\Services;

use App\DTO\AdminDTO;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminService
{

  public function login(AdminDTO $dto): bool
  {
    try
    {
      $credentials = [
        'email' => $dto->email,
        'password' => $dto->password,
      ];
      if (Auth::guard('admin')->attempt($credentials, true)) {
        return true;
      }
      return false;
    } catch (\Throwable $th) {
      Log::error($th->getMessage());
      return false;
    }
  }
}
