<?php

namespace App\Http\Controllers;

use App\Models\wiserequest;
use App\Models\wiserequestfiles;
use Illuminate\Http\Request;

class wiserequestController extends Controller
{
    

    public function storeWiseRequest(Request $request)
    {
        $wiserequest = wiserequest::create($request->all());

        if ($request->hasFile('pictures')) {
            foreach ($request->file('pictures') as $file) {
                $path = $file->storeAs('img/employeefiles', $file->getClientOriginalName(), 'public');
        
                // Get the URL of the stored file
                $url = asset('storage/' . $path);
                wiserequestfiles::create(['wiserequestfiles_id' => $wiserequest->id, 'pictures' => $path]);
            }
        }

        return view('success')->with('success', 'Successfully send to IT Office!');
    }
}
