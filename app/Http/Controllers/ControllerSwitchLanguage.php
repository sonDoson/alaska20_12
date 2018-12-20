<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ControllerSwitchLanguage extends Controller
{
    public function postsSwitchLanguage(Request $request){
        if($request->switch_lang == null){
            Session::put('lang', 'vn');
        }   else    {
            Session::put('lang', 'en');
        }
        return back();
    }
}
