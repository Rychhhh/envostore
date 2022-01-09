<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Menampilan semua data user
    public function index() {
        $alluser = User::all();

        return view('admin.user.index', compact(
            'alluser'
        ));
    }
}
