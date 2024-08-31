<?php

namespace App\Http\Controllers\Auth;

abstract class Controller
{
    public function test(){
        return 'User::first->get()';
    }
}
