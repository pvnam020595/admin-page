<?php

namespace App\Repositories;

use App\Models\Admins\Admin;
use App\Models\Admins\Modules;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class DashboardRepository
{
 public function getModules(): array {
  $adminData = Admin::where("id", Auth::id())->first();
  // $moduels = Modules::query()->whereHas()
 }
}
