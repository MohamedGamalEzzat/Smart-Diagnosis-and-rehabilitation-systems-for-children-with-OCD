<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChattttyyController extends Controller
{
        /**
     * استرجاع كل المستخدمين ما عدا المستخدم الحالي
     */
    public function showUsers()
    {
        $users = User::where('id', '!=', Auth::id())->get();
        return response()->json($users);
    }

    /**
     * استرجاع الرسائل بين المستخدم الحالي ومستخدم آخر
     */
    public function getMessages($userId)
    {
        $messages = Message::where(function($query) use ($userId) {
            $query->where('sender_id', Auth::id())
                ->orWhere('receiver_id', Auth::id());
        })
        ->where(function($query) use ($userId) {
            $query->where('sender_id', $userId)
                ->orWhere('receiver_id', $userId);
        })
        ->with('sender')
        ->get();

        return response()->json($messages);
    }

    /**
     * إرسال رسالة جديدة
     */
    public function sendMessage(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|string',
        ]);

        $message = new Message();
        $message->sender_id = Auth::id();
        $message->receiver_id = $request->receiver_id;
        $message->message = $request->message;
        $message->save();

        return response()->json(['status' => 'Message sent successfully!']);
    }
}
