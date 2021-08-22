<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    //
    public function insertform()
    {
        return view('message_create');
    }

    public function insert(Request $request)
    {
        $title = $request->input('title');
        $message = $request->input('message');
        $sender = $request->input('sender');
        $reciever = $request->input('reciever');
        $data=array('title'=>$title,
                    "message"=>$message,
                    "sender"=>$sender,
                    "reciever"=>$reciever);
        DB::table('message')->insert($data);
        echo "Message sent successfully.<br/>";
        echo '<a href = "/message">Click Here</a> to go back.';
    }
}
