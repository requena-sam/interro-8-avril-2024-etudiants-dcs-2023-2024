<?php

namespace App\Http\Controllers;

class RegisterUserController
{
    public function create()
    {
        view('users.register.php');
    }

    public function store()
    {

    }
}