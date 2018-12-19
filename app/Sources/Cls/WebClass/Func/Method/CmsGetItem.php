<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use App\Sources\Cls\WebClass\Func\Method\etc\FormatTime;

class CmsGetItem{
    public static function getItem($id_posts, $table, $stress = null, $subtitle = null){ 
        $table_posts = $table . "_posts";
        $table_category = $table . "_category";
        
        //get data
        $data_posts = DB::table($table_posts)
                      ->where('id', $id_posts)->first();
        //get category
        $data_category = DB::table($table_category)
                         ->where('id', $data_posts->id_category)->first();
        //get image
        $images = DB::table($table . '_images')->where('id_posts', $id_posts)->get();
        $image = array();
        if($images !== null){
            foreach($images as $key => $value){
                $image[] = $value->image_path;
            }
        }
        //check stress
        if($stress !== null){
            $table_stress = $table . "_stress";
            $stress = DB::table($table_stress)->where('id_posts', $id_posts)->first();
            if(!empty($stress->id_posts)){
                $stress = true;
            }   else    {
                $stress = false;
            }
        }
        //subtitle
        if($subtitle !== null){
            $table_subtitle = $table . "_subtitle";
            $subtitle = DB::table($table_subtitle)->where('id_posts', $id_posts)->first();
        }
        //time
        if($data_posts->created_at !== null){
            $date_format = FormatTime::formatTimeByName($data_posts->created_at);
        }
        //return
        $return = array();
        $return['id'] = $data_posts->id;
        $return['id_category'] = $data_category->id;
        $return['category_en'] = $data_category->name_en;
        $return['category_vn'] = $data_category->name_vn;
        if($subtitle !== null){
            $return['subtitle_en'] = $subtitle->value_en;
            $return['subtitle_vn'] = $subtitle->value_vn;
        }   else    {
            $return['subtitle_en'] = null;
            $return['subtitle_vn'] = null;
        }
        $return['name_en'] = $data_posts->name_en;
        $return['name_vn'] = $data_posts->name_vn;
        $return['value_en'] = $data_posts->value_en;
        $return['value_vn'] = $data_posts->value_vn;
        $return['created_at'] = $date_format;
        $return['images'] = $image;
        $return['stress'] = $stress;
        return $return;
    }
}