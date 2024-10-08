<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller {
    public function __invoke(Request $request) {
        return view('welcome');
    }
}
