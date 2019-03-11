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
       /*  $id = $properties->id;

        $data['image'] = DB::table('images')->where('p_id','=', $id)->first();
        $data['images'] = DB::table('images')->where('p_id','=', $id)->paginate(2); */
        
        return view('pages.listing', $data);
    }

    public function details($url)
    {
        $details = DB::table('properties')->where('slug','=', $url)->first();
        $data['details'] = $details;
        $id = $details->id;

        $data['image'] = DB::table('images')->where('p_id','=', $id)->first();
        $data['images'] = DB::table('images')->where('p_id','=', $id)->get();
        return view('pages.details', $data);
    }

    public function buy(Request $request)
    {
        $data['transaction_code'] = 'CF-'.$this->MakeUnique();
        $data['user_id'] = Auth::user()->id;
        $data['property_id'] = $request->property_id;
        $data['amount'] = $request->amount;
        $data['quantity'] = $request->quantity;
        $data['status'] = '0';

        DB::table('transaction')->insert($data);

        return redirect()->route('checkout', $data);
    }

    public function checkout(Request $request)
    {
        $trxn_code = $request->input('transaction_code');
        $prop_id = $request->input('property_id');
        $data['property'] = DB::table('properties')->where('id','=', $prop_id)->first();
        $data['trxn'] = DB::table('transaction')->where('transaction_code','=', $trxn_code)->first();
        
        return view('pages.checkout', $data);
    }

    public function MakeUnique($length=6) {
        $salt       = "0123456789";
        $len        = strlen($salt);
        $makepass   = '';
        mt_srand(10000000*(double)microtime());
        for ($i = 0; $i < $length; $i++) {
            $makepass .= $salt[mt_rand(0,$len - 1)];
        }
    return $makepass;
}
}
