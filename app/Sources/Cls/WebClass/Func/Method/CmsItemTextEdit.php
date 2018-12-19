<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use App\Sources\Cls\WebClass\Func\Method\CmsImagesEdit;

class CmsItemTextEdit{
    public static function itemEdit($request, $table, $id_posts){
        $table_posts = $table . "_posts";
        $table_subtitle = $table . "_subtitle";
        //edit name
        $sub_title = DB::table($table_subtitle)->where('id_posts', $request->id_posts)->first();
        if(!empty($sub_title)){
            DB::table($table_subtitle)->where('id_posts', $request->id_posts)
            ->update([
                'value_vn' => $request->sub['vn'],
                'value_en' => $request->sub['en']
            ]);
        }   else    {
            DB::table($table_subtitle)->insert([
                'id_posts' => $id_posts,
                'value_vn' => $request->sub['vn'],
                'value_en' => $request->sub['en']
            ]);
        }
        //edit name
        if($request->name['en'] !== null){
            DB::table($table_posts)->where('id', $request->id_posts)->update(['name_en' => $request->name['en']]);
        }
        if($request->name['vn'] !== null){
            DB::table($table_posts)->where('id', $request->id_posts)->update(['name_vn' => $request->name['vn']]);
        }
        //edit images
        CmsImagesEdit::imagesEdit($request, $table, $request->id_posts);
        //edit value
        DB::table($table_posts)->where('id', $request->id_posts)
        ->update(['value_vn' => $request->value['vn'], 'value_en' => $request->value['en']]);
    }
}