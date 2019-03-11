<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Auth;

class UsersController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('verified');
    }

    public function dashboard()
    {

        $id = Auth::user()->id;
        $data['properties'] = DB::table('transaction')
                                ->Join('properties','properties.id','=','transaction.property_id')
                                ->where('transaction.user_id','=', $id)
                                ->paginate(3);

        $data['total'] = DB::table('transaction')->where('transaction.user_id' ,'=', $id)->sum('amount');
    
        return view('dashboard.dashboard', $data);
    }
}
