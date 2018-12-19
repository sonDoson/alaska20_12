<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Sources\Cls\WebClass\Func\Method\CmsFilesUpload;

class CmsFilesEdit{
    
    public static function filesEdit($request, $table, $id_posts){
        $table_posts = $table . "_posts";
        $table_files = $table . "_files";
        if($request->hasFile('files')){
            //delete old image
            $db_old_files = DB::table($table_files)->where('id_posts', $request->id_posts)->get();
            foreach($db_old_files as $key => $value){
                unlink( public_path($value->file_path));
            }
            DB::table($table_files)->where('id_posts', $request->id_posts)->delete();
            //add new image
            CmsFilesUpload::fliesUpload($request, $table_posts, $request->id_posts);
        }
    }
    public static function fileEditSingle($request, $table, $id_posts){
        $table_posts = $table . "_posts";
        $table_files = $table . "_files";
        if($request->hasFile('file')){
            //delete old image
            $db_old_file = DB::table($table_files)->where('id_posts', $request->id_posts)->first();
            unlink(public_path($db_old_file->file_path));
            DB::table($table_files)->where('id_posts', $request->id_posts)->delete();
            //add new image
            CmsFilesUpload::fileUploadSingle($request, $table_posts, $request->id_posts);
        }
    }
}