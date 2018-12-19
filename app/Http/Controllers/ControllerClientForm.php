<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\Config\Config;
use App\Sources\Cls\WebClass\Func\Category;
use App\Sources\Cls\WebClass\Func\Method\PostsGetItems;
use DB;

class ControllerClientForm extends Controller
{
    public function getClientForm(Request $request){
        //contact footer
        $cont = DB::table('contact')->where('id', 1)->first();
        $contact = array();
        $contact['name_en'] = $cont->name_en;
        $contact['name_vn'] = $cont->name_vn;
        $contact['value_en'] = $cont->value_en;
        $contact['value_vn'] = $cont->value_vn;
        $contact['link']['facebook']['link'] = $cont->facebook;
        $contact['link']['facebook']['icon'] = 'fab fa-facebook';
        $contact['link']['youtube']['link'] = $cont->youtube;
        $contact['link']['youtube']['icon'] = 'fab fa-youtube';
        $contact['link']['instagram']['link'] = $cont->instagram;
        $contact['link']['instagram']['icon'] = 'fab fa-instagram';
        $contact['map'] = $cont->map;
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
        //section 0 get posts
        $db_section_0 = DB::table('posts_static_posts')->where('id', $request->id)->first();
        $section_0['name_en'] = $db_section_0->name_en;
        $section_0['name_vn'] = $db_section_0->name_vn;
        $section_0['value_en'] = $db_section_0->value_en;
        $section_0['value_vn'] = $db_section_0->value_vn;
        //section 1
        $section_1 = PostsGetItems::postsGetItems('posts_posts', 4);
        return view('client.content.lv_posts_static', compact('lang', 'contact', 'category', 'section_1', 'section_0', 'category_item', 'id_cat'));
    }
}
