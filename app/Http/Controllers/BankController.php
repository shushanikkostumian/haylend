<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankController extends Controller
{
    public function show() {
        return view('bank.dashboard');

    }
}