<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\Func\Category;
use App\Sources\Cls\WebClass\Func\Method\PostsGetItems;
use App\Sources\Cls\WebClass\Func\Method\PostsGetSingleItem;
use App\Sources\Cls\Config\Config;
use App\Sources\Cls\WebClass\Func\ClientContact;
use DB;

class ControllerLvPosts extends Controller
{
    public function getPosts(Request $request, $id_cat, $id_pos){
        //contact
        $contact = ClientContact::getContact();
        //section
        $lang_section = Config::configLanguage();
        $lang[] = 'name_' . $lang_section;
        $lang[] = 'value_' . $lang_section;
        //nav
        $category = Category::categoryGet('posts_category');
        foreach($category as $i => $value){
            $category_item[$i] = PostsGetItems::postsGetItemsNoName('posts_posts', $i, 5);// order by cat
        }
        //right nav
        //section 0
        $section_0 = PostsGetSingleItem::postsGetSingleItem('posts_posts', $id_pos);
        //section 1
        $section_1 = PostsGetItems::postsGetItems('posts_posts', 4);
        return view('client.content.lv_posts', compact('lang', 'contact', 'category', 'section_1', 'section_0', 'category_item', 'id_cat'));
    }
}
