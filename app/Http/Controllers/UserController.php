<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $this->authorize("create", User::class);
        $users = User::simplePaginate(5);
        return view('components.admin.userList', compact('users'));
    }
}
