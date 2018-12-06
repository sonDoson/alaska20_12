<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;

class CmsMenuCategory{
    
    public static function menuCategory(){
        $menu_category = DB::table('cms_menu')->where('stick_id', 0)->get();
        return $menu_category;
    }
}