<?php

namespace App\DTO;

use Illuminate\Http\Request;

class AdminDTO {

    public $email;
    public $password;

    public function __construct(
        string $email,
        string $password,
    ) {
        $this->email = $email;
        $this->password = $password;
    }

    public static  function fromRequest(Request $request): AdminDTO
    {
        $email = $request->input('email');
        $password = $request->input('password');
        return new self($email, $password);
    }
}