<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Sources\Cls\WebClass\Func\Cms;
use App\Sources\Cls\WebClass\Web\WebDataUserWelcome;

class ControllerCmsRollBack extends Controller
{
    public function getCmsRollBack(){
        $menu = Cms::menu();
        //$menu = Cms::exportMenu();
        $data = new WebDataUserWelcome;
        $name_class = $data->class_name;
        $data_nav = $data->navData();
        return view('cms.content.roll_back', compact('menu', 'name_class'));
    }
}
