<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Henrich Gray'],
            ['id' => 2, 'name' => 'Gray Henrich'],
            ['id' => 3, 'name' => 'Henrich Pimentel'],
            ['id' => 4, 'name' => 'Pimentel Henrich'],
            ['id' => 5, 'name' => 'Henrich Pimentel Gray']
        ];

        return view('customers', compact('customers'));
    }
}