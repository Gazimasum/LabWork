<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\StudentImport;
use Session;
use Excel;
use File;
use App\Model\Student;

class StudentController extends Controller
{

  public function addStudent()
{
  $student = Student::orderby('id','asc')->get();
  return view('backend.pages.add-student',compact('student'));
}
  public function import(Request $request)
       {
           $this->validate($request, [
           'file'  => 'required|mimes:xls,xlsx'
           ]);
           Excel::import(new StudentImport,request()->file('file'));
           return back()->with('success', 'Excel Data Imported successfully.');

   }
}
