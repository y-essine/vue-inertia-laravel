<?php

namespace App\Http\Controllers;

use App\Events\ChatMessageEvent;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Message;

class ChatController extends Controller
{
    // inertia render Chat/Chat.vue
    public function show(): Response
    {
        $messages = Message::with('user')->latest()->take(5)->get();
        return Inertia::render('Chat/Chat', [
            'messages' => $messages,
        ]);
    }

    public function send(Request $request): Response
    {
        $request->validate([
            'message' => 'required',
        ]);
        
        $message = Message::create([
            'message' => $request->message,
            'user_id' => auth()->user()->id,
        ]);

        $message['user'] = auth()->user();

        broadcast(new ChatMessageEvent($message))->toOthers();

        $messages = Message::with('user')->latest()->take(5)->get();
        return Inertia::render('Chat/Chat', [
            'messages' => $messages,
        ]);
    }
}