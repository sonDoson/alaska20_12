<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;

class CmsAdmisstionGetPosts{
    public static function admisstionGetPosts($id){
        $db_posts = DB::table('registration_posts')->where('id', $id)->first();
        //subtitle
        $db_posts_subtitle = DB::table('registration_subtitle')->where('id_posts', $id)->first();
        //mixxing
        $return['id_posts'] = $db_posts->id;
        $return['name_en'] = $db_posts->name_en;
        $return['name_vn'] = $db_posts->name_vn;
        $return['value_en'] = $db_posts->value_en;
        $return['value_vn'] = $db_posts->value_vn;
        $return['sub_en'] = $db_posts_subtitle->value_en;
        $return['sub_vn'] = $db_posts_subtitle->value_vn;
        return $return;
    }
}