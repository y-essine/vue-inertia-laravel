<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class ChatController extends Controller
{
    // inertia render Chat/Chat.vue
    public function show(Request $request): Response
    {
        return Inertia::render('Chat/Chat', [
            'status' => 'lahdha ntesti l faza hedhi',
        ]);
    }
}