<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;
use App\Exports\EmployeeExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{

	public function table()
    {
         $employees= Employee::all();
         return view('backend.pages.xl-table')->with('employee',$employees);
    }
    public function export()
    {
        return Excel::download(new EmployeeExport, 'xl.xlsx');
    }
}
