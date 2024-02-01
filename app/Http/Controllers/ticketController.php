<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;
use App\Models\Userfiles2;
use App\Models\User;

class ticketController extends Controller
{

    function wiseIndex(){
        return view('wise');    
    }

    public function index()
    {
        return view('employee.fourseason.request');
    }

    public function storeticket(Request $request)
    {
        $jobOrder = ticket::create($request->all());

        if ($request->hasFile('pictures')) {
            foreach ($request->file('pictures') as $file) {
                $path = $file->storeAs('img/employeefiles', $file->getClientOriginalName(), 'public');
        
                $url = asset('storage/' . $path);
                Userfiles2::create(['tickets_id' => $jobOrder->id, 'pictures' => $path]);
            }
        }

        return view('success')->with('success', 'Successfully send to IT Office!');
    }

    public function categoryChoseRequest($value = null)
    {
        if ($value === null) {
            return redirect()->route('wiseindex');
        } else {
            return view('employee.wise.request')->with('data', $value);
        }
    }

    public function checkuser(Request $request)
    {
        $email = $request->input('checkingEmail');

        $user = User::where('email', $email)->first();

        if ($user) {
            return response()->json(['message' => 200, 'user' => $user]);
        } else {
            return response()->json(['message' => 400]);
        }
    }
}
