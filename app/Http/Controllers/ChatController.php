<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class ChatController extends Controller
{
    function index()
    {
        $chatDB = DB :: table('chat')->get();
        return view('chat', ['chats' => $chatDB]);
    }
}
