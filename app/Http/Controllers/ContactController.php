<?php

namespace App\Http\Controllers;
use App\Http\Requests\MessageRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function edit($id)
    {
        $message = Contact::findOrFail($id);
        // dd($message); 
        return view('contact.edit', compact('message'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'message' => 'required'
        ]);

        Contact::whereId($id)->update($validatedData);

        return redirect()->route('contact.show')->with('success', 'Message is updated');
    }
    public function destroy($id)
    {
        // $message = Myform::findOrfail($id);
        
        // $message->delete();

        DB::table('contacts')->where('id', $id)->delete();
        
        return redirect()->route('contact.show')->with('success', 'Message deleted');
    }
}
