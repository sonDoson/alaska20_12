<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use App\Sources\Cls\WebClass\Func\Method\CmsImagesEdit;
use App\Sources\Cls\WebClass\Func\Method\CmsFilesEdit;

class CmsAdmisstionEdit{
    public static function admisstionEdit($request){
        //edit images
        CmsImagesEdit::imagesEdit($request, 'registration', $request->id_posts);
        //edit form
        CmsFilesEdit::fileEditSingle($request, 'registration', $request->id_posts);
        //edit subtile
        DB::table('registration_subtitle')->where('id_posts', $request->id_posts)
        ->update(['value_vn' => $request->sub['vn'], 'value_en' => $request->sub['en']]);
        //edit value
        DB::table('registration_posts')->where('id', $request->id_posts)
        ->update(['value_vn' => $request->value['vn'], 'value_en' => $request->value['en']]);
    }
}