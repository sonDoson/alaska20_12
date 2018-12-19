<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\Func\Cms;
use App\Sources\Cls\WebClass\Func\CmsPosts;
use DB;

class ControllerCmsPosts extends Controller
{
    public function getCmsPostsList(){
        $menu = Cms::menu();
        $name_class = "list";
        $db_list = CmsPosts::postsList();
        return view('cms.content.posts_list', compact('menu', 'name_class', 'db_list'));
    }
    //new
    public function getCmsPostsNewsList(Request $request){
        $menu = Cms::menu();
        $name_class = "list";
        $route = "Events-and-news";
        $category = DB::table('posts_category')->where('id', 4)->first();
        $db_list = CmsPosts::postsListByCategory(4, $request->all());
        return view('cms.content.posts_news_list', compact('menu', 'name_class', 'route', 'category', 'db_list'));
    }
    public function getCmsPostsNewsAdd(){
        $menu = Cms::menu();
        $name_class = "list";
        $layout = "WebUserPost.css";
        $id_category = 4;
        $category = DB::table('posts_category')->where('id', $id_category)->first();
        return view('cms.content.posts_news_add', compact('menu', 'layout', 'name_class', 'category'));
    }
    public function postCmsPostsNewsAdd(Request $request){
        CmsPosts::postsAdd($request);
    }
    public function getCmsPostsNewsEdit(Request $request){
        $request = $request->all();
        $menu = Cms::menu();
        $name_class = "list";
        $layout = "WebUserPost.css";
        $db_item = CmsPosts::postsItem($request['id']);
        return view('cms.content.posts_news_edit', compact('menu', 'layout', 'name_class', 'db_item'));
    }
    public function postCmsPostsNewsEdit(Request $request){
        CmsPosts::postsEdit($request);
        return redirect()->route('getCmsPostsMessageList');
    }
}
