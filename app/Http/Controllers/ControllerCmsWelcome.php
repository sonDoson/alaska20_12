<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Sources\Cls\WebClass\Func\Cms;
use App\Sources\Cls\WebClass\Web\WebDataUserWelcome;

class ControllerCmsWelcome extends Controller
{
    public function getCmsWelcome(){
        $menu = Cms::menu();
        //$menu = Cms::exportMenu();
        $data = new WebDataUserWelcome;
        $name_class = $data->class_name;
        $data_nav = $data->navData();
        $user = Auth::user();
        //var_dump($user);
        return view('cms.content.welcome', compact('menu', 'name_class'));
    }
}
