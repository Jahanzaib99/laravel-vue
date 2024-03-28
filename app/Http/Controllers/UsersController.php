<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(50);
        return Inertia::render('Dashboard', ['users' => $users]);
    }
}
