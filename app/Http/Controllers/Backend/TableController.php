<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;
use App\User;

class TableController extends Controller
{
  public function table()
  {
       $employees= Employee::all();
       return view('backend.pages.table')->with('employee',$employees);
  }
  public function user_table()
  {
       $users = User::all();
       return view('backend.pages.user-table')->with('user',$users);
  }

}
