<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\Func\Cms;

class ControllerCmsAdmissions extends Controller
{
    public function getCmsAdmissionsList(){
        $menu = Cms::menu();
        $name_class = "list";
        return view('cms.content.admissions_list', compact('menu', 'name_class'));
    }
    public function getCmsAdmissionsFiles(){
        $menu = Cms::menu();
        $name_class = "list";
        return view('cms.content.admissions_files', compact('menu', 'name_class'));
    }
}
