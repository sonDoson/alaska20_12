<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Sources\Cls\WebClass\Func\Method\CmsTotalPostEdit;
use App\Sources\Cls\WebClass\Func\Method\CmsSubtitle;
use App\Sources\Cls\WebClass\Func\Method\CmsImagesUpload;// wrong database
use App\Sources\Cls\WebClass\Func\Method\PostsAddStress;

class CmsPostsDelete{
    public static function postsDelete($request){
        $table_posts = "posts_posts";
        //list images
        $item_images = DB::table($table_posts . '_images')->where('id_posts', $id_posts)->get();
        //delete image
        //unlink images
        foreach($item_images as $key => $value){
            unlink( public_path($value->image_path));
        }
        //del image
        DB::table($table_posts . '_images')->where('id_posts', $id_posts)->delete();
        //delete stress
        $stress = DB::table($table_posts . '_stress')->where('id_posts', $id_posts)->get();
        if(!empty($stress)){
            DB::table($table_posts . '_stress')->where('id_posts', $id_posts)->delete();
        }
        //edit total posts
        $id_category = DB::table($table_posts)->where('id', $id_posts)->first();
        $id_category = $id_category->id_category;
        CmsTotalPostEdit::postsTotalEdit("posts_category", $id_category, -1);
        //delete item
        Db::table($table_posts)->where('id', $id_posts)->delete();
        return null;
    }
}