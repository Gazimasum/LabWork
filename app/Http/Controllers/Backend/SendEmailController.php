<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Mail;

class SendEmailController extends Controller
{
  function index()
  {
   return view('backend.pages.send_email');
  }
  function send(Request $request)
   {
    $this->validate($request, [
     'name'     =>  'required',
     'email'  =>  'required|email',
     'message' =>  'required'
    ]);

       $data = array(
           'name'      =>  $request->name,
           'message'   =>   $request->message
          
       );

    Mail::to($request->email)->send(new SendMail($data));
    return back()->with('success', 'Thanks for contacting us!');

   }
}
