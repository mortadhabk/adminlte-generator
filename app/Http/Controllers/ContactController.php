<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMe;
class ContactController extends Controller
{
    public function index(Request $request)
    {

        return view('contact');
         
    }
    public function contactPost(Request $request){

        $this->validate($request, [
                        'name' => 'required',
                        'email' => 'required|email',
                        'subject' => 'required',
                        'message' => 'required'
                ]);

                Mail::send('ContactMail', array(
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'subject' => $request->get('subject'),
                    'messages' => $request->get('message')
                ), function($message) use ($request){
                    $message->from($request->email);
                    $message->to('mo@mortadhaboubaker.com', 'Mortadha boubaker')->subject($request->get('subject'));
                });
        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');

    }
}
