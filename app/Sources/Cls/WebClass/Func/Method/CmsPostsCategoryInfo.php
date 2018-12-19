<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;

class CmsPostsCategoryInfo{
    public static function postsListCategoryInfo($id_category){
        $db_category = DB::table('posts_category')
                       ->where('id', $id_category)
                       ->first();
        $return = array();
        $return[$db_category->id]['name_vn'] = $db_category->name_vn;
        $return[$db_category->id]['name_en'] = $db_category->name_en;
        return $return;
    }
}