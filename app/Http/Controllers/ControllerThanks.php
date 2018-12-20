<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\Func\Category;
use App\Sources\Cls\WebClass\Func\Method\PostsGetItems;
use App\Sources\Cls\WebClass\Func\Method\PostsGetStress;
use App\Sources\Cls\Config\Config;
use App\Sources\Cls\WebClass\Func\ClientContact;
use DB;

class ControllerThanks extends Controller
{
    public function getThanks(){
        //contact
        $contact = ClientContact::getContact();
        //section
        $lang_section = Config::configLanguage();
        $lang[] = 'name_' . $lang_section;
        $lang[] = 'value_' . $lang_section;
        //static text
        $db_static_text = DB::table('static_text_client')->get();
        $static_text = array();
        foreach($db_static_text as $key => $value){
            $static_text[$value->id_text][$value->id]['value_en'] = $value->value_en;
            $static_text[$value->id_text][$value->id]['value_vn'] = $value->value_vn;
        }
        $category = Category::categoryGet('posts_category');
        //section 0
        $section_0 = PostsGetItems::postsGetItems('posts_posts', 1);
        $link = DB::table('video_link')->where('id',1)->first();
        $link = $link->value;
        //section 1
        $section_1 = PostsGetItems::postsGetItems('posts_posts', 4);
        //section 2
        $section_2 = PostsGetStress::postsGetStress('posts_posts');
        return view('client.content.thank-you', compact('static_text', 'lang_section', 'lang', 'contact', 'category', 'section_0', 'link', 'section_1', 'section_2'));
    }
}
