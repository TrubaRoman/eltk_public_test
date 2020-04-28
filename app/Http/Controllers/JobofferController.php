<?php

namespace App\Http\Controllers;

use App\Models\Joboffer;
use Illuminate\Http\Request;
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
            'message'=> 'nullable|string|max:1000',
            'cv'=> 'required|file|mimes:ppt,pptx,doc,docx,pdf,xls,xlsx|max:500'
        ]);
        if ($validator->fails()){
            return response()
                ->json(['errors' => $validator->errors()],422);
        }

        return response()->json(['success'=>__('messages.email-send-success')],200);
    }

}
