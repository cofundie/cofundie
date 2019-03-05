<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Session;
use Validator;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;

class PropertiesController extends Controller
{
    //
    public function listing()
    {
        $data['properties'] = DB::table('properties')->where('status','=', '1')->paginate(6);
        
        return view('pages.listing', $data);
    }
}
