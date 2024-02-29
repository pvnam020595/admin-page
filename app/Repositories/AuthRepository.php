<?php

namespace App\Repositories;

use App\Models\Admins\Admin;
use App\Models\User;
use App\Repositories\Interfaces\AuthRepositoryInterface;
use Illuminate\Support\Facades\Log;
use Throwable;

class AuthRepository implements AuthRepositoryInterface
{

  public function userStore(array $inforUser): Admin
  {
    try {
      return Admin::create($inforUser);
    } catch (Throwable $th) {
      Log::info($th->getCode());
      return redirect()->route("./");
    }
  }
}
