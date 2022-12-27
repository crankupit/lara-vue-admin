<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return inertia('Auth/Register');
    }

    public function register()
    {
        dd('Register request received, Add the logic in App\Http\Controllers\Admin\RegisterController.php');
    }
}
