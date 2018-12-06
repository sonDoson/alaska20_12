<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\Func\Cms;

class ControllerCmsRecruiment extends Controller
{
    public function getCmsRecruimentList(){
        $menu = Cms::menu();
        $name_class = "list";
        return view('cms.content.recruiment_list', compact('menu', 'name_class'));
    }
    public function getCmsRecruimentFiles(){
        $menu = Cms::menu();
        $name_class = "list";
        return view('cms.content.recruiment_files', compact('menu', 'name_class'));
    }
}
