<?php
namespace App\Sources\Cls\WebClass\Func;

use App\Sources\Cls\WebClass\Func\Method\CmsPostsCategoryList;
use App\Sources\Cls\WebClass\Func\Method\CmsPostsListByCategory;
use App\Sources\Cls\WebClass\Func\Method\CmsPostsGetItem;
use App\Sources\Cls\WebClass\Func\Method\CmsPostsUpdate;
use App\Sources\Cls\WebClass\Func\Method\CmsPostsAdd;

class CmsPosts{
    public static function postsList(){
        return CmsPostsCategoryList::postsList();
    }
    public static function postsListByCategory($id_category, $request = null){
        return CmsPostsListByCategory::postsListByCategory($id_category, $request);
    }
    public static function postsAdd($request){
        return CmsPostsAdd::postsAdd($request);
    }
    public static function postsEdit($request){
        CmsPostsUpdate::postsEdit($request);
    }
    public static function postsDelete($request){
        return CmsPostsDelete::postsDelete($request);
    }
    public static function postsItem($id_posts){
        return CmsPostsGetItem::postsGetSingleItem($id_posts);
    }
}