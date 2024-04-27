<?php

namespace App\Http\Controllers\CMS;

use App\DTO\AdminDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\CMS\AdminRequest;
use App\Services\AdminService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admins.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function login(AdminRequest $request)
    {
        $logined = (new AdminService)->login(AdminDTO::fromRequest($request));
        if ($logined) {
            $request->session()->regenerate();
            
            return redirect()->route('dashboard.index');
        }
        return back()->withErrors([
            'login_error' => 'The provided credentials do not match our records.',
        ]);
    }
}
