<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{


    public function showcheit()
    {
      $users = User::where('id', '!=', Auth::id())->get(); // استرجاع كل المستخدمين ما عدا المستخدم الحالي
        return view('pages/chrt', compact('users')); 
    }



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

  public function sendMessage(Request $request)
  {
      $message = new Message();
      $message->sender_id = Auth::id();
      $message->receiver_id = $request->receiver_id;
      $message->message = $request->message;
      $message->save();

      return response()->json(['status' => 'Message sent successfully!']);
  }
}
