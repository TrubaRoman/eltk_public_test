<?php

namespace App\Http\Controllers;

use App\Mail\CvMali;
use App\Models\Cv;
use App\Models\Joboffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mail;
use Validator;
class JobofferController extends Controller
{
    public function __construct()
    {
        $this->middleware('throttle:10')->only('send');
    }

    public function index()
    {

        $offers = Joboffer::where('status',1)->orderBy('sort')->get();
        return view('joboffer.index',['offers' => $offers]);
    }

    public function send(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=> 'required|string',
            'surname'=> 'required|string',
            'phone' => 'required|string',
            'email' => 'nullable|email',
            'offer' => 'required|string',
            'driving_license' => 'required|bool',
            'sep' => 'required|bool',
            'udt' => 'required|bool',
            'experience' => 'integer|required',
            'description'=> 'nullable|string|max:1000',
            'cv'=> 'nullable|file|mimes:ppt,pptx,doc,docx,pdf,xls,xlsx|max:500'
        ]);
        if ($validator->fails()){
            return response()
                ->json(['errors' => $validator->errors()],422);
        }

        $cv = new Cv();
        $cv->name = $request->name;
        $cv->surname = $request->surname;
        $cv->phone = $request->phone;
        $cv->email = $request->email;
        $cv->offer = $request->offer;
        $cv->driving_license = $request->driving_license;
        $cv->sep = $request->sep;
        $cv->udt = $request->udt;
        $cv->experience = $request->experience;
        $cv->message = $request->description;
        $cv->lang = app()->getLocale();
        $cv->ip = $request->ip();
        $cv->uploadCV($request->file('cv'));


      if (Mail::to(config('mail.admin-email'))->send(new CvMali($cv)) )$cv->save();

        return response()->json(['success'=>__('messages.email-send-success')],200);
    }

}
