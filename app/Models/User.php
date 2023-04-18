<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Exception;

class User
{
    private $table = 'users';

    public function showUser()
    {
        try {
            return DB::table($this->table)->get();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function createUser($dataValided)
    {
        DB::beginTransaction();
        try {
            DB::table($this->table)->insertGetId($dataValided);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }
    // use HasApiTokens, HasFactory, Notifiable;

    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array<int, string>
    //  */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    // /**
    //  * The attributes that should be hidden for serialization.
    //  *
    //  * @var array<int, string>
    //  */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast.
    //  *
    //  * @var array<string, string>
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

}
