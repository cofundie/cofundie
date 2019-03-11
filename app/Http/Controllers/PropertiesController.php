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
        $properties = DB::table('properties')->where('status','=', '1')->paginate(6);
        $data['properties'] = $properties;
        $id = $properties->id;

        $data['images'] = DB::table('images')->where('p_id','=', $id)->get();
        
        return view('pages.listing', $data);
    }

    public function details($url)
    {
        $data['details'] = DB::table('properties')->where('slug','=', $url)->first();
        return view('pages.details', $data);
    }
}
