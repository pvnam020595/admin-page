<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\Interfaces\AuthRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    private $authRepository;

    public function __construct(AuthRepositoryInterface $authRepository) {
        $this->authRepository = $authRepository;
    }
    public function register(Request $request):View
    {
        return view('admins.register');
    }
    public function store(Request $request): User
    {
        return $this->authRepository->userStore([]);
    }
}
