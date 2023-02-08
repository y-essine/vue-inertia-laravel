<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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