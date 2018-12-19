<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use App\Sources\Cls\WebClass\Func\Method\CmsPostsCategoryInfo;

class CmsSubtitle{
    public static function postsSubtitleAdd($table_name, $id_posts, $value_en, $value_vn){
        $db_total = DB::table($table_name)
                    ->insert([
                        'id_posts' => $id_posts, 
                        'value_en' => $value_en,
                        'value_vn' => $value_vn
                    ]);
    }
}