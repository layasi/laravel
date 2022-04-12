<?php

namespace App\Http\Controllers;
use App\Http\Requests\MessageRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view ('contact.index');
    }
    public function store(MessageRequest $request)
    {
        $message = new Contact();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->number = $request->number;
        $message->message = $request->message;

        $message->save();

        session()->flash('success', 'Your message has been sent.');
        return redirect()->route('contact.index');
    }
    public function show()
    {
        $messages = Contact::get();
         
        // dd($messages);
        return view('contact.show', [
                    'messages' => $messages
        ]);
    }
}
