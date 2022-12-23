<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Base\Base;
use App\Http\Requests\UserRequest;

class UserController extends Base
{
    //    
    /**
     * showUser
     *
     * @return void
     */
    public function showUser() {
        return Base::display('users');
    }

    
    /**
     * create
     *
     * @param  mixed $request
     * @return void
     */
    public function createUser(UserRequest $userRequest)
    {   
        $data = $userRequest->validated();
        return Base::store($data, 'users');
    }

    /**
     * Update data User
     *
     * @param  mixed $request
     * @return void
     */
    public function updateUser(UserRequest $userRequest)
    {
        $id = $userRequest->id;
        $data = $userRequest->validated();
        return Base::update($data, 'users', $id, 'id');
    }

    /**
     * Delete data User
     *
     * @param  mixed $request
     * @return void
     */
    public function deleteUser(Request $request)
    {
        $id = $request->id;
        return Base::delete('users', 'id', '=', $id);
    }
}
