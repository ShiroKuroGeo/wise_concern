<?php

namespace App\Http\Controllers;

use App\Models\joborder;
use App\Models\Userfiles;
use Illuminate\Http\Request;

class joborderController extends Controller
{

    function orderForFourseason()
    {
        return view('employee.fourseason.order');
    }

    public function storeOrderForFourseason(Request $request)
    {
        $jobOrder = Joborder::create($request->all());

        if ($request->hasFile('pictures')) {
            foreach ($request->file('pictures') as $file) {
                $path = $file->storeAs('img/employeefiles', $file->getClientOriginalName(), 'public');
        
                // Get the URL of the stored file
                $url = asset('storage/' . $path);
                Userfiles::create(['joborders_id' => $jobOrder->id, 'pictures' => $path]);
            }
        }

        return view('success')->with('success', 'Successfully send to IT Office!');
    }

    public function categoryChoseOrder($value = null)
    {
        if ($value === null) {
            return redirect()->route('wiseindex');
        } else {
            return view('employee.wise.order')->with('data', $value);
        }
    }
}
