<?php
namespace App\Sources\Cls\WebClass\Func\Method\function;
class MixData{
    public static function mixDataPostsToArray($time){ 
        //mixxing data
        $return = array();
        $return['id'] = $data_posts->id;
        $return['id_category'] = $data_category->id;
        $return['category_en'] = $data_category->name_en;
        $return['category_vn'] = $data_category->name_vn;
        $return['name_en'] = $data_posts->name_en;
        $return['name_vn'] = $data_posts->name_vn;
        $return['value_en'] = $data_posts->value_en;
        $return['value_vn'] = $data_posts->value_vn;
        $return['created_at'] = $date_format;
        $return['images'] = $image;
        $return['stress'] = $stress;
        return $return
    }
}