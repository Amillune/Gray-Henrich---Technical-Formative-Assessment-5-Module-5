<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'username' => 'admin'],
            ['id' => 2, 'username' => 'cashier1'],
            ['id' => 3, 'username' => 'cashier2'],
            ['id' => 4, 'username' => 'manager'],
            ['id' => 5, 'username' => 'staff']
        ];

        return view('users', compact('users'));
    }
}