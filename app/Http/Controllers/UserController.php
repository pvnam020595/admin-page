<?php

namespace App\Http\Controllers;

use App\Events\CustomRegistered;
use App\Exceptions\IsRequestApiException;
use App\Http\Requests\EmailVerifyRequest;
use App\Interfaces\UserRepositoryInterface;
use App\Http\Requests\UserRequest;
use App\Mail\RegisterMail;
use App\Models\User;
use App\Traits\VerifyEmail;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;
use Illuminate\Validation\Validator;
/**
 *
 */
class UserController
{
  use VerifyEmail;

  public function index()
  {
    return view('home');
  }
  public UserRepositoryInterface $userRepositoryInterface;

  public function __construct(UserRepositoryInterface $userRepositoryInterface)
  {
    $this->userRepositoryInterface = $userRepositoryInterface;
  }
  public function register()
  {
    return view('registers');
  }
  public function viewLogin()
  {
    return view('login');
  }

  public function login(UserRequest $userRequest)
  {
    try {
      // $validated = $userRequest->validated();
      // if(empty($validated)) {
      //   return "code in here";
      // }
      // dd($validated);
      // $validator = new \Validator();
      dd($userRequest->setValidator());
      // die();
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function storeUser(Request $request)
  {
  }

  public function emailVerify(EmailVerifyRequest $emailVerifyRequest)
  {
    try {
      $data = $emailVerifyRequest->validated();
      $result = $this->userRepositoryInterface->verifyEmail($data);
      return response()->json($result, 200);
    } catch (Throwable $e) {
      throw $e;
    }
  }
}
