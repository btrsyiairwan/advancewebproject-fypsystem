<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class adminControl extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.user");
    }
}
