<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Model\Userimage;
use PDF;

class PdfController extends Controller
{
  public function downloadPDF($id) {
      $user = User::find($id);
      $image = Userimage::where('user_id',$id)->first();

      if ($image!=null) {
      $pdf = PDF::loadView('backend.pdf', compact('user','image'));

      }
      else {
        $image = 'user.png';
        $pdf = PDF::loadView('backend.pdf', compact('user','image'));
      }


      return $pdf->download('userdetails.pdf');
}
}
