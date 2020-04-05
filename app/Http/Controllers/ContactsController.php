<?php

namespace App\Http\Controllers;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Session;
use View;
use App\Models\Contacts;
use Illuminate\Http\Request;
use Validator;
use App\Mail\ContactForm;
use Mail;

class ContactsController extends Controller
{

    public function __construct()
    {
        $this->middleware('throttle:30')->only('sendmail');
    }


    public function index()
    {
        return view('contacts.index');
    }


    public function sendmail(Request $request, Contacts $contact)
    {

        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|min:11',
            'message' => 'required|string|max:3500'
        ]);
        if ($validator->fails()){
            return response()
                ->json(['errors' => $validator->errors()],422);
        }


        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = 'Wiadomość z witryny';
        $contact->phone = $request->phone;
        $contact->body = $request->message;
        $contact->lang = app()->getLocale();
        $contact->ip = $request->ip();
        $contact->save();


           Mail::to($contact->admin_email)->send(new ContactForm($contact));
           return response()->json(['success'=>__('messages.email-send-success')],200);


    }

}
