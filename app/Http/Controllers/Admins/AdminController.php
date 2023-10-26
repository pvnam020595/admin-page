<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admins\AdminRequest;
use App\Models\Admins\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;
use Illuminate\Session\DatabaseSessionHandler;
class AdminController extends Controller
{
  public function register()
  {
    return view('admins.registers');
  }
  public function viewLogin()
  {
    return view('admins.login');
  }
  public function dashboard()
  {
    return view('admins.dashboard');
  }

  public function login(AdminRequest $adminRequest)
  {
    try
    {
      $adminValidated = $adminRequest->validated();
      $amdin = Admin::where("email", $adminValidated['email'])->get()->first();
      if (empty($amdin))
      {
        return redirect()->route("admin.login")->withInput()->withErrors(["Email is not exist!"]);
      }
      if (!Hash::check($adminValidated['password'], $amdin->password)) 
      {
        return redirect()->route("admin.login")->withInput()->withErrors(["Password incorrect!"]);
      }
      if(Auth::guard('admin')->attempt([
                                        'email' => $adminValidated['email'],
                                        'password' => $adminValidated['password']
                                      ]))
      {
        return redirect()->route('admin.dashboard');
      }
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function storeUser(Request $request)
  {
  }

  //   public function emailVerify(EmailVerifyRequest $emailVerifyRequest)
  //   {
  //     try {
  //       $data = $emailVerifyRequest->adminValidated();
  //       $result = $this->userRepositoryInterface->verifyEmail($data);
  //       return response()->json($result, 200);
  //     } catch (Throwable $e) {
  //       throw $e;
  //     }
  //   }
}
