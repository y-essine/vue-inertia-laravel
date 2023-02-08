<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;

class UsersController extends Controller
{
    public function show(Request $request): Response
    {
        $users = User::all();

        return Inertia::render('Users/Users', [
            'users' => $users,
        ]);
    }
}