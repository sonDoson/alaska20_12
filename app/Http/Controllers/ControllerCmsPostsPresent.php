<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\Func\Cms;
use App\Sources\Cls\WebClass\Func\CmsPosts;
use DB;

class ControllerCmsPostsPresent extends Controller
{
    public function getCmsPostsPresentList(Request $request){
        $menu = Cms::menu();
        $name_class = "list";
        $category = DB::table('posts_category')->where('id', 1)->first();
        $route = "Present";
        $db_list = CmsPosts::postsListByCategory(1, $request->all());
        return view('cms.content.posts_news_list', compact('menu', 'name_class', 'route', 'category', 'db_list'));
    }
    public function getCmsPostsPresentAdd(){
        $menu = Cms::menu();
        $name_class = "list";
        $layout = "WebUserPost.css";
        $id_category = 1;
        $category = DB::table('posts_category')->where('id', $id_category)->first();
        return view('cms.content.posts_news_add', compact('menu', 'layout', 'name_class', 'category'));
    }
}
