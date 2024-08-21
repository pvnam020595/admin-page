<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Interviews\Post;
use App\Models\Interviews\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nam = Hash::make('123456');
        $credentials = [
            'email' => 'nam@gmail.com',
            'password' => '123456',
          ];
          if (Auth::guard('users')->attempt($credentials)) {
            return true;
          }
          return false;
        
        // dd($nam);
       
        // //
        // // $users = User::get();
        // // foreach($users as $user) {
        // //     $post[] = $user->through('posts')->has('comments')->get()->toArray();
        // // }
        // $user = User::find(1);
        // // dd($user->roles);
        // foreach ($user->roles as $role) {
        //     dd($role->pivot);
        // }
        
        // return view('interviews.post', ['post' => $user]);
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
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
