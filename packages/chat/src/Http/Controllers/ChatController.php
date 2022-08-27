<?php

namespace MdTanvirHasanAnik\Chat\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MdTanvirHasanAnik\Chat\Events\NewMessage;
class ChatController extends Controller
{
    public function index(){
        return view("chat::chat");
    }
    public function send(Request $request){
        event(new NewMessage());
        return $request->all();
    }
}
