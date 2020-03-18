<?php

namespace App\Http\Controllers;
use Session;
use View;
use App\Models\Contacts;
use Illuminate\Http\Request;
use Validator;


class ContactsController extends Controller
{
    public function index()
    {
//        dd(request()->ip());
        return view('contacts.index');
    }

    public function sendmail(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'numeric',
            'message' => 'required|string|max:1500'
        ]);
        if ($validator->fails()){
            return response()
                ->json(['errors' => $validator->errors()],422);
        }


        $contact = new Contacts();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = 'subject';
        $contact->phone = $request->phone;
        $contact->body = $request->message;
        $contact->lang = app()->getLocale();
        $contact->ip = $request->ip();
        $contact->save();

        return response()->json(['success'=>'BLA BLA BLA SUCESS !!!! ']);
    }

}
