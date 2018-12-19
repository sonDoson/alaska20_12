<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;

class CmsPostsCategoryList{
    public static function postsList(){
        $db_category = DB::table('posts_category')->get();
        $db_total_posts = DB::table('total_posts')->where('table_name', 'posts_category')->get();
        //mixing
        $total = array();
        foreach($db_total_posts as $value){
            $total[$value->id_category] = $value->num_posts;
            $update[$value->id_category] = $value->updated_at;
        }
        $return = array();
        foreach($db_category as $key => $value){
            $return[$value->id]['name_en'] = $value->name_en;
            $return[$value->id]['name_vn'] = $value->name_vn;
            $return[$value->id]['total'] = $total[$value->id];
            $return[$value->id]['update'] = $update[$value->id];
        }
        return $return;
    }
}