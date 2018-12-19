<?php
namespace App\Sources\Cls\WebClass\Func\MethodClient;

use Illuminate\Support\Facades\DB;
use App\Sources\Cls\WebClass\Func\Method\CmsPostsCategoryInfo;

class ClientItemList{
    public static function getListItem($table, $id_category = null){
        $table_posts = $table . "_posts";
        $table_images = $table . "_images";
        $table_category = $table . "_category";
        $table_subtitle = $table . "_subtitle";
        //category
        $db_category = DB::table($table_category)->get();
        $category = array();
        foreach($db_category as $key => $value){
            $category[$value->id]['name_en'] = $value->name_en;
            $category[$value->id]['name_vn'] = $value->name_vn;
        }
        //get posts
        if($id_category !== null){
            $db_posts = DB::table($table_posts)->where('id_category', $id_category)->get();
        }   else    {
            $db_posts = DB::table($table_posts)->get();
        }
        
        //mixing data
        $return = array();
        foreach($db_posts as $key => $value){
            $return[$value->id]['category_en'] = $category[$value->id_category]['name_en'];
            $return[$value->id]['category_vn'] = $category[$value->id_category]['name_vn'];
            $return[$value->id]['name_en'] = $value->name_en;
            $return[$value->id]['name_vn'] = $value->name_vn;
            //get subtitle
            $db_subtitle = DB::table($table_subtitle)->where('id_posts', $value->id)->first();
            $return[$value->id]['subtitle_en'] = $db_subtitle->value_en;
            $return[$value->id]['subtitle_vn'] = $db_subtitle->value_vn;
            //get images
            $db_image = DB::table($table_images)->where('id_posts', $value->id)->first();
            $return[$value->id]['image'] = $db_image->image_path;
            
            $return[$value->id]['created'] = $value->created_at;
        }
        return $return;
    }
}