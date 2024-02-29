<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($id = null, $name = null){
        return view('blog.user', ['id' => $id, 'name' => $name]);
    }
}
    