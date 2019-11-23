<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Division;
use App\District;

class PagesController extends Controller
{
 public function index()
 {
   $divisions = Division::orderBy('name', 'asc')->get();
   $districts = District::orderBy('name', 'asc')->get();

   return view('backend.pages.register', compact('districts', 'divisions'));
 }

 public function sendEmail(Request $request){
      // Siapkan Data
      $email = $request->email;
      $data = array(
              'name' => $request->name,
              'email_body' => $request->email_body
          );
      // Kirim Email
      Mail::send('email_template', $data, function($mail) use($email) {
          $mail->to($email, 'no-reply')
                  ->subject("Sample Email Laravel");
          $mail->from('rizalhilman68@gmail.com', 'Testing');
      });
      // Cek kegagalan
      if (Mail::failures()) {
          return "Gagal mengirim Email";
      }
      return "Email berhasil dikirim!";
  }
}
