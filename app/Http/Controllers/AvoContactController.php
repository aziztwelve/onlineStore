<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\AvoContact;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Routing\Controller as BaseController;

class AvoContactController extends Controller
{
    

     public function contactpage()
    {
        $contact = AvoContact::all();

        return view('one')->with(['contact' => $contact]);
    }

    public function store(ContactFormRequest $request)
    {

        Mail::send('email.contact',
            array(
                // 'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'user_message' => $request->get('message')
            ), function($message)
        {
            $message->from('sanjiarya2112@gmail.com');
            $message->to('aziztwelv2@gmail.com', 'Mr Cool')->subject('Test');
        });

    

    return \Redirect::route('one')
      ->with('message', 'Thanks for contacting us!');

    }  


}
