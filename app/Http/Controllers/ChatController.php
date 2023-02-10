<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Message;

class ChatController extends Controller
{
    // inertia render Chat/Chat.vue
    public function show(): Response
    {
        return Inertia::render('Chat/Chat', [
            'status' => 'lahdha ntesti l faza hedhi',
        ]);
    }

    public function send(Request $request): void
    {
        echo $request->message;
    }
}