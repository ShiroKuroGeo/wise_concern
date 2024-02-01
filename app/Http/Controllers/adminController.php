<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;
use App\Models\User;
use Carbon\Carbon;
use App\Models\ticket;
use App\Models\joborder;
use App\Models\WiseRequest;
use App\Models\wiseticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function account()
    {
        $user = User::orderBy('created_at', 'asc')->get();

        return view('admin.account')->with('accounts', $user);
    }

    public function createAccount(Request $request)
    {
        $user = User::create($request->all());

        return redirect()->route('admin-accounts')->with('acc', 'Successfully Added this account!');
    }

    public function login()
    {
        if (session('user_id') != null) {
            return redirect()->route('admin-dashboard');
        } else {
            return view('wiseconcern');
        }
    }

    public function dashboard()
    {
        if (session('user_id') == null) {
            return redirect()->route('admin-login');
        } else {
            //Wise Request Daily Pending
            $dialycebu = WiseRequest::where('department', 'Cebu Sales')->where('status', 1)->whereDay('created_at', now()->day)->get();
            $dialybohol = WiseRequest::where('department', 'Bohol Sales')->where('status', 1)->whereDay('created_at', now()->day)->get();
            $dialyMakati = WiseRequest::where('department', 'Makati Sales')->where('status', 1)->whereDay('created_at', now()->day)->get();
            $dialyOsamiz = WiseRequest::where('department', 'Osamiz Sales')->where('status', 1)->whereDay('created_at', now()->day)->get();
            $dialyMarketing = WiseRequest::where('department', 'Marketing')->where('status', 1)->whereDay('created_at', now()->day)->get();
            $dialyHuman = WiseRequest::where('department', 'Human Resource')->where('status', 1)->whereDay('created_at', now()->day)->get();
            $dialyAccounting = WiseRequest::where('department', 'Accounting')->where('status', 1)->whereDay('created_at', now()->day)->get();

            //Wise Ticket Daily Pending
            $dailyTicketcebu = wiseticket::where('department', 'Cebu Sales')->where('status', 1)->whereDay('created_at', now()->day)->get();
            $dailyTicketbohol = wiseticket::where('department', 'Bohol Sales')->where('status', 1)->whereDay('created_at', now()->day)->get();
            $dailyTicketMakati = wiseticket::where('department', 'Makati Sales')->where('status', 1)->whereDay('created_at', now()->day)->get();
            $dailyTicketOsamiz = wiseticket::where('department', 'Osamiz Sales')->where('status', 1)->whereDay('created_at', now()->day)->get();
            $dailyTicketMarketing = wiseticket::where('department', 'Marketing')->where('status', 1)->whereDay('created_at', now()->day)->get();
            $dailyTicketHuman = wiseticket::where('department', 'Human Resource')->where('status', 1)->whereDay('created_at', now()->day)->get();
            $dailyTicketAccounting = wiseticket::where('department', 'Accounting')->where('status', 1)->whereDay('created_at', now()->day)->get();

            //Wise Request Daily Done
            $dialycebuDone = WiseRequest::where('department', 'Cebu Sales')->where('status', 2)->whereDay('created_at', now()->day)->get();
            $dialyboholDone = WiseRequest::where('department', 'Bohol Sales')->where('status', 2)->whereDay('created_at', now()->day)->get();
            $dialyMakatiDone = WiseRequest::where('department', 'Makati Sales')->where('status', 2)->whereDay('created_at', now()->day)->get();
            $dialyOsamizDone = WiseRequest::where('department', 'Osamiz Sales')->where('status', 2)->whereDay('created_at', now()->day)->get();
            $dialyMarketingDone = WiseRequest::where('department', 'Marketing')->where('status', 2)->whereDay('created_at', now()->day)->get();
            $dialyHumanDone = WiseRequest::where('department', 'Human Resource')->where('status', 2)->whereDay('created_at', now()->day)->get();
            $dialyAccountingDone = WiseRequest::where('department', 'Accounting')->where('status', 2)->whereDay('created_at', now()->day)->get();

            //Wise Ticket Daily Done
            $dailyTicketcebuDone = wiseticket::where('department', 'Cebu Sales')->where('status', 2)->whereDay('created_at', now()->day)->get();
            $dailyTicketboholDone = wiseticket::where('department', 'Bohol Sales')->where('status', 2)->whereDay('created_at', now()->day)->get();
            $dailyTicketMakatiDone = wiseticket::where('department', 'Makati Sales')->where('status', 2)->whereDay('created_at', now()->day)->get();
            $dailyTicketOsamizDone = wiseticket::where('department', 'Osamiz Sales')->where('status', 2)->whereDay('created_at', now()->day)->get();
            $dailyTicketMarketingDone = wiseticket::where('department', 'Marketing')->where('status', 2)->whereDay('created_at', now()->day)->get();
            $dailyTicketHumanDone = wiseticket::where('department', 'Human Resource')->where('status', 2)->whereDay('created_at', now()->day)->get();
            $dailyTicketAccountingDone = wiseticket::where('department', 'Accounting')->where('status', 2)->whereDay('created_at', now()->day)->get();

            //Wise Count Pending and Done Concern and Ticket Daily
            $countAllPendingDaily = WiseRequest::where('status', 1)->whereDay('created_at', now()->day)->count();
            $countAllDoneDaily = WiseRequest::where('status', 2)->whereDay('created_at', now()->day)->count();

            //Wise Request Month Pending
            $cebu = WiseRequest::where('department', 'Cebu Sales')->where('status', 1)->whereMonth('created_at', now()->month)->get();
            $bohol = WiseRequest::where('department', 'Bohol Sales')->where('status', 1)->whereMonth('created_at', now()->month)->get();
            $Makati = WiseRequest::where('department', 'Makati Sales')->where('status', 1)->whereMonth('created_at', now()->month)->get();
            $Osamiz = WiseRequest::where('department', 'Osamiz Sales')->where('status', 1)->whereMonth('created_at', now()->month)->get();
            $Marketing = WiseRequest::where('department', 'Marketing')->where('status', 1)->whereMonth('created_at', now()->month)->get();
            $Human = WiseRequest::where('department', 'Human Resource')->where('status', 1)->whereMonth('created_at', now()->month)->get();
            $Accounting = WiseRequest::where('department', 'Accounting')->where('status', 1)->whereMonth('created_at', now()->month)->get();

            //Wise Ticket Month Pending
            $ticketcebu = wiseticket::where('department', 'Cebu Sales')->where('status', 1)->whereMonth('created_at', now()->month)->get();
            $ticketbohol = wiseticket::where('department', 'Bohol Sales')->where('status', 1)->whereMonth('created_at', now()->month)->get();
            $ticketMakati = wiseticket::where('department', 'Makati Sales')->where('status', 1)->whereMonth('created_at', now()->month)->get();
            $ticketOsamiz = wiseticket::where('department', 'Osamiz Sales')->where('status', 1)->whereMonth('created_at', now()->month)->get();
            $ticketMarketing = wiseticket::where('department', 'Marketing')->where('status', 1)->whereMonth('created_at', now()->month)->get();
            $ticketHuman = wiseticket::where('department', 'Human Resource')->where('status', 1)->whereMonth('created_at', now()->month)->get();
            $ticketAccounting = wiseticket::where('department', 'Accounting')->where('status', 1)->whereMonth('created_at', now()->month)->get();

            //Wise Request Month done
            $donecebu = WiseRequest::where('department', 'Cebu Sales')->where('status', 2)->whereMonth('created_at', now()->month)->get();
            $donebohol = WiseRequest::where('department', 'Bohol Sales')->where('status', 2)->whereMonth('created_at', now()->month)->get();
            $doneMakati = WiseRequest::where('department', 'Makati Sales')->where('status', 2)->whereMonth('created_at', now()->month)->get();
            $doneOsamiz = WiseRequest::where('department', 'Osamiz Sales')->where('status', 2)->whereMonth('created_at', now()->month)->get();
            $doneMarketing = WiseRequest::where('department', 'Marketing')->where('status', 2)->whereMonth('created_at', now()->month)->get();
            $doneHuman = WiseRequest::where('department', 'Human Resource')->where('status', 2)->whereMonth('created_at', now()->month)->get();
            $doneAccounting = WiseRequest::where('department', 'Accounting')->where('status', 2)->whereMonth('created_at', now()->month)->get();

            //Wise Ticket Month done
            $doneticketcebu = wiseticket::where('department', 'Cebu Sales')->where('status', 2)->whereMonth('created_at', now()->month)->get();
            $doneticketbohol = wiseticket::where('department', 'Bohol Sales')->where('status', 2)->whereMonth('created_at', now()->month)->get();
            $doneticketMakati = wiseticket::where('department', 'Makati Sales')->where('status', 2)->whereMonth('created_at', now()->month)->get();
            $doneticketOsamiz = wiseticket::where('department', 'Osamiz Sales')->where('status', 2)->whereMonth('created_at', now()->month)->get();
            $doneticketMarketing = wiseticket::where('department', 'Marketing')->where('status', 2)->whereMonth('created_at', now()->month)->get();
            $doneticketHuman = wiseticket::where('department', 'Human Resource')->where('status', 2)->whereMonth('created_at', now()->month)->get();
            $doneticketAccounting = wiseticket::where('department', 'Accounting')->where('status', 2)->whereMonth('created_at', now()->month)->get();

            //Wise Yesterdays Concern and Ticket
            $allYesterdayRequest = WiseRequest::whereDate('created_at', now()->subDay()->toDateString())->get();
            $allYesterdayTicket = wiseticket::whereDate('created_at', now()->subDay()->toDateString())->get();

            //Wise Count all Concern and Ticket Month
            $countRequest = WiseRequest::count();
            $countTicket = wiseticket::count();

            return view('admin.dashboard', [
                //Wise Request Daily
                'dailycebu' => $dialycebu,
                'dailybohol' => $dialybohol,
                'dailymakati' => $dialyMakati,
                'dailyosamiz' => $dialyOsamiz,
                'dailymarketing' => $dialyMarketing,
                'dailyhuman' => $dialyHuman,
                'dailyaccounting' => $dialyAccounting,

                //Wise Ticket Daily
                'dailyticketcebu' => $dailyTicketcebu,
                'dailyticketbohol' => $dailyTicketbohol,
                'dailyticketmakati' => $dailyTicketMakati,
                'dailyticketosamiz' => $dailyTicketOsamiz,
                'dailyticketmarketing' => $dailyTicketMarketing,
                'dailytickethuman' => $dailyTicketHuman,
                'dailyticketaccounting' => $dailyTicketAccounting,

                //Wise Request Daily
                'dialycebuDone' => $dialycebuDone,
                'dialyboholDone' => $dialyboholDone,
                'dialyMakatiDone' => $dialyMakatiDone,
                'dialyOsamizDone' => $dialyOsamizDone,
                'dialyMarketingDone' => $dialyMarketingDone,
                'dialyHumanDone' => $dialyHumanDone,
                'dialyAccountingDone' => $dialyAccountingDone,

                //Wise Ticket Daily
                'dailyTicketcebuDone' => $dailyTicketcebuDone,
                'dailyTicketboholDone' => $dailyTicketboholDone,
                'dailyTicketMakatiDone' => $dailyTicketMakatiDone,
                'dailyTicketOsamizDone' => $dailyTicketOsamizDone,
                'dailyTicketMarketingDone' => $dailyTicketMarketingDone,
                'dailyTicketHumanDone' => $dailyTicketHumanDone,
                'dailyTicketAccountingDone' => $dailyTicketAccountingDone,

                //Wise Count all Concern and Ticket Month
                'dailycountAllPending' => $countAllPendingDaily,
                'dailycountAllDone' => $countAllDoneDaily,

                //Wise Request Month Pending
                'cebu' => $cebu,
                'bohol' => $bohol,
                'makati' => $Makati,
                'osamiz' => $Osamiz,
                'marketing' => $Marketing,
                'human' => $Human,
                'accounting' => $Accounting,

                //Wise Ticket Month Pending
                'ticketcebu' => $ticketcebu,
                'ticketbohol' => $ticketbohol,
                'ticketMakati' => $ticketMakati,
                'ticketOsamiz' => $ticketOsamiz,
                'ticketMarketing' => $ticketMarketing,
                'ticketHuman' => $ticketHuman,
                'ticketAccounting' => $ticketAccounting,

                //Wise Request Month Done
                'donecebu' => $donecebu,
                'donebohol' => $donebohol,
                'doneMakati' => $doneMakati,
                'doneOsamiz' => $doneOsamiz,
                'doneMarketing' => $doneMarketing,
                'doneHuman' => $doneHuman,
                'doneAccounting' => $doneAccounting,

                //Wise Ticket Month Done
                'doneticketcebu' => $doneticketcebu,
                'doneticketbohol' => $doneticketbohol,
                'doneticketMakati' => $doneticketMakati,
                'doneticketOsamiz' => $doneticketOsamiz,
                'doneticketMarketing' => $doneticketMarketing,
                'doneticketHuman' => $doneticketHuman,
                'doneticketAccounting' => $doneticketAccounting,

                //Wise Request Month Pending
                'cebu' => $cebu,
                'bohol' => $bohol,
                'makati' => $Makati,
                'osamiz' => $Osamiz,
                'marketing' => $Marketing,
                'human' => $Human,
                'accounting' => $Accounting,

                //Wise Ticket Month Pending
                'ticketcebu' => $ticketcebu,
                'ticketbohol' => $ticketbohol,
                'ticketMakati' => $ticketMakati,
                'ticketOsamiz' => $ticketOsamiz,
                'ticketMarketing' => $ticketMarketing,
                'ticketHuman' => $ticketHuman,
                'ticketAccounting' => $ticketAccounting,

                //Wise Yesterdays Concern and Ticket
                'allYesterdayRequest' => $allYesterdayRequest,
                'allYesterdayTicket' => $allYesterdayTicket,

                //Wise Count all Concern and Ticket Month
                'countRequest' => $countRequest,
                'countTicket' => $countTicket,

            ]);
        }
    }

    public function doneRequestFour($value)
    {
        $request = joborder::find($value);

        if ($request) {
            $newStatus = $request->status == 1 ? 2 : 1;

            $request->update(['status' => $newStatus]);

            return redirect()->back()->with('200', 'Successfully updated this account status!');
        } else {
            return redirect()->back()->with(400, 'Cannot find this request');
        }
    }

    public function doneOrdersFour($value)
    {
        $orders = ticket::find($value);

        if ($orders) {
            $newStatus = $orders->status == 1 ? 2 : 1;

            $orders->update(['status' => $newStatus]);

            return redirect()->back()->with('200', 'Successfully updated this account status!');
        } else {
            return redirect()->back()->with(400, 'Cannot find this order');
        }
    }

    public function doneRequest($value)
    {
        $request = WiseRequest::find($value);

        if ($request) {
            $newStatus = $request->status == 1 ? 2 : 1;

            $request->update(['status' => $newStatus]);

            return redirect()->back()->with('200', 'Successfully updated this account status!');
        } else {
            return redirect()->back()->with(400, 'Cannot find this request');
        }
    }

    public function doneOrders($value)
    {
        $orders = wiseticket::find($value);

        if ($orders) {
            $newStatus = $orders->status == 1 ? 2 : 1;

            $orders->update(['status' => $newStatus]);

            return redirect()->back()->with('200', 'Successfully updated this account status!');
        } else {
            return redirect()->back()->with(400, 'Cannot find this order');
        }
    }

    public function restricAccount($value)
    {
        $user = User::find($value);

        if ($user) {
            $newStatus = $user->status == 1 ? 2 : 1;

            $user->update(['status' => $newStatus]);

            return redirect()->route('admin-accounts')->with('res', 'Successfully updated this account status!');
        } else {
            return redirect()->route('admin-accounts')->with('res', 'User not found!');
        }
    }

    public function retrieveData()
    {
        $monthlyCounts = [];

        for ($month = 1; $month <= 12; $month++) {
            $monthlyCounts[$month] = WiseRequest::whereMonth('created_at', $month)
                ->whereYear('created_at', now()->year)
                ->count();
        }

        return $monthlyCounts;
    }

    public function retrieveDataPendingDone()
    {
        $today = Carbon::now();

        $WiseRequestCountDone = WiseRequest::countByStatusAndDay(2, $today);
        $wiseticketCountsDone = wiseticket::countByStatusAndDay(2, $today);

        $WiseRequestCountPending = WiseRequest::countByStatusAndDay(1, $today);
        $wiseticketCountsPending = wiseticket::countByStatusAndDay(1, $today);

        $pendingDone = [$WiseRequestCountDone + $wiseticketCountsDone, $WiseRequestCountPending + $wiseticketCountsPending];

        return $pendingDone;
    }

    public function concern($value)
    {
        if (session('user_id') == null) {
            return redirect()->route('admin-login');
        } else {
            $RequestWithPictures = WiseRequest::with('wiserequestfiles')->where('department', $value)->get();
            $ticketWithPictures = wiseticket::with('wiseticketfiles')->where('department', $value)->get();

            return view('admin.concern', [
                'ticket' => $RequestWithPictures,
                'concern' => $ticketWithPictures,
                'data' => $value,
            ]);
        }
    }

    public function request()
    {
        if (session('user_id') == null) {
            return redirect()->route('admin-login');
        } else {
            $ticketsWithPictures = ticket::with('userfiles2s')->get();
            $joborderWithPictures = joborder::with('userfiles')->get();

            return view('admin.request', [
                'ticket' => $ticketsWithPictures,
                'concern' => $joborderWithPictures,
            ]);
        }
    }

    public function loginAdmin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->put('user_id', Auth::user()->id);

            if ($user->role == 1) {
                return redirect('/user');
            } elseif ($user->role == 2) {
                return redirect('/admin');
            } else {
                return back()->with('error', 'Invalid role');
            }
        }

        return back()->with('error', 400);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->forget('user_id');
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin-login')
            ->withSuccess('You have logged out successfully!');;
    }
}
