<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use App\Sources\Cls\WebClass\Func\Method\CmsPostsCategoryInfo;

class CmsListRequest{
    public static function listRequest($table, $request = null){
        $category = CmsPostsCategoryInfo::postsListCategoryInfo($id_category);
        if($request == null){
            $db_posts = DB::table($table)
                        ->where('id_category', $id_category)
                        ->orderBy('id', 'desc')->take(10)->get();
        }
        if($request->input !== null){
            
        }
        return $db_posts;
    }
}