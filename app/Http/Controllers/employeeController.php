<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ticket;


class employeeController extends Controller
{
    public function wiseconcern()
    {
        return view('wise')->with('message', 'Check Email Ready');
    }

    public function concern()
    {
        return view('employee.ticket');
    }

    public function request()
    {
        return view('employee.request');
    }

    public function categorychose($value = null)
    {
        if ($value === null) {
            return redirect()->route('wiseindex');
        } else {
            return view('employee.ticket')->with('data', $value);
        }
    }

}
