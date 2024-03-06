<?php

namespace App\Repositories\Interfaces;

use App\Models\Admins\Admin;
use App\Models\User;

interface AuthRepositoryInterface {

 public function userStore(array $inforUser): Admin;
 

}