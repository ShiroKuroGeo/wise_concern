<?php

namespace App\Http\Controllers;

use App\Models\wiseticket;
use App\Models\wiseticketfiles;
use Illuminate\Http\Request;

class wiseticketController extends Controller
{
    function storeWiseTicket(Request $request){

        $wiseticket = wiseticket::create($request->all());

        if ($request->hasFile('pictures')) {
            foreach ($request->file('pictures') as $file) {
                $path = $file->storeAs('img/employeefiles', $file->getClientOriginalName(), 'public');
        
                $url = asset('storage/' . $path);
                wiseticketfiles::create(['wiseticketfiles_id' => $wiseticket->id, 'pictures' => $path]);
            }
        }

        return view('success')->with('success', 'Successfully send to IT Office!');
    }
}
