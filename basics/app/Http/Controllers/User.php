<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class User extends Controller
{
    //
    function save(Request $req)
    {
            print_r($req->input());
            $users= new Users;
            $users->name=$req->name;
            $users->address=$req->address;
            $users->save();
    }
}
