<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\Func\Cms;
use App\Sources\Cls\WebClass\Func\CmsPosts;
use DB;

class ControllerCmsPostsStaticPosts extends Controller
{
    public function getCmsPostsStaticPostsList(Request $request){
        $menu = Cms::menu();
        $name_class = "list";
        $route = "Static-Posts";
        return view('cms.content.posts_static_posts_list', compact('menu', 'name_class', 'route'));
    }
    public function getCmsPostsMessageEdit(){
        $menu = Cms::menu();
        $name_class = "list";
        $layout = "WebUserPost.css";
        $db_item = CmsItem::getItem($request->id, 'posts_static');
        return view('cms.content.posts_static_edit', compact('menu', 'layout', 'name_class', 'db_item'));
    }
}
