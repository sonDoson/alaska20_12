<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Sources\Cls\WebClass\Func\Cms;
use App\Sources\Cls\WebClass\Func\CmsAdmissions;

class ControllerCmsRecruiment extends Controller
{
    public function getCmsRecruimentList(){
        $menu = Cms::menu();
        $category = DB::table('registration_category')->where('id', 2)->first();
        $list = CmsAdmissions::admissionsList(2);
        $name_class = "list";
        return view('cms.content.admissions_list', compact('menu', 'name_class', 'list', 'category'));
    }
}
