<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Sources\Cls\WebClass\Func\Method\CmsTotalPostEdit;
use App\Sources\Cls\WebClass\Func\Method\CmsSubtitle;
use App\Sources\Cls\WebClass\Func\Method\PostsAddStress;

class CmsPostsUpdate{
    public static function postsEdit($request){
        
        //database posts
        $flag = 0;
        $db_posts = DB::table('posts_posts')->where('id', $request->id_posts)->first();
        //edit value
        if($request->category !== null){
            DB::table('posts_posts')->where('id', $request->id_posts)->update(['id_category' => $request->category]);
        }
        if($request->name['en'] !== null){
            DB::table('posts_posts')->where('id', $request->id_posts)->update(['name_en' => $request->name['en']]);
        }
        if($request->name['vn'] !== null){
            DB::table('posts_posts')->where('id', $request->id_posts)->update(['name_vn' => $request->name['vn']]);
        }
        DB::table('posts_posts')->where('id', $request->id_posts)->update(['value_en' => $request->value['en'], 'value_vn' => $request->value['vn']]);
        //edit subtitle
        DB::table('posts_subtitle')->where('id_posts', $request->id_posts)->update(['value_en' => $request->sub['en'], 'value_vn' => $request->sub['vn']]);
        //edit image
        if($request->hasFile('images')){
            //delete old image
            $db_old_images = DB::table('posts_posts_images')->where('id_posts', $request->id_posts)->get();
            $paths = array();
            foreach($db_old_images as $key => $value){
                unlink( public_path($value->image_path));
            }
            DB::table('posts_posts_images')->where('id_posts', $request->id_posts)->delete();
            $images = $request->file('images');
            foreach($images as $key => $image){
                //name
                $name = $id_posts . '_' . $key . '.' . $image->getClientOriginalExtension();
                //path
                $path = '/uploads/images/posts_posts';
                $destinationPath = public_path($path);
                $image->move($destinationPath, $name);
                //Store database
                $table_images = 'posts_posts_images';
                $image_path = $path . '/' . $name;
                DB::table($table_images)->insert(
                    ['id_posts' => $id_posts, 'image_name' => $name, 'image_path' => $image_path]
                );
            }
        }
        //edit stress
        if($request->stress == true){
            $stress = DB::table('posts_posts_stress')->where('id_posts', $request->id_posts)->first();
            if(empty($stress)){
                PostsAddStress::postsAddStress('posts_posts', $db_posts->id_category, $request->id_posts);
            }
        }   else    {
            DB::table('posts_posts_stress')->where('id_posts', $request->id_posts)->delete();
        }
    }
}