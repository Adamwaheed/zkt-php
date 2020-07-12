<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Reader;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = Attendance::count();
        $synced = Attendance::whereSync(1)->count();



        $employee_count = \DB::table('attendances')->distinct('pin')->count('pin');

        $errors = Attendance::whereSync(0)->whereNotNull('message')->with(['reader'])->get();

       $readers = Reader::with('lastRecord')->get();


        return view('home')
            ->with('total',$total)
            ->with('synced',$synced)
            ->with('employee_count',$employee_count)
            ->with('errors',$errors)
            ->with('readers',$readers);
    }
}
