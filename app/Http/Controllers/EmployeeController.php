<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees');
    }

    public function show(Employee $employee)
    {
        return view('employee', $employee);
    }
}
