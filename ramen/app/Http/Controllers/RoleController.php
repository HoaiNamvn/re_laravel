<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

class RoleController extends Controller
{
    function show()
    {
        // $users = Role::find(3)
        //     ->users;
        // return $users;
        $roles = User::find(2)
            ->roles;
        return $roles;
    }
}
