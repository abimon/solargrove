<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255'],
        //     'contact' => ['required', 'string', 'max:255'],
        //     'message' => ['required','string','min:10'],
        // ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->contact,
            'message' => $request->message,
        ]);
        $data = [
            "name" => request('name'),
            "message" => request('message'), 
            "email" => request('email'), 
            "phone" => request('contact')
        ];
        Mail::send(
            'mails.message',
            $data,
            function ($message)  {
                $message->to("eddyabby59@gmail.com", "Admin")->subject('Contact Message from '.request('name'));
            }
        );

        return redirect('/')->with('message', 'Your message has been sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect('/contact/index')->with('message', 'Contact deleted successfully!');
    }
}
