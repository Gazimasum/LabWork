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
}
