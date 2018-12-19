<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CmsFilesUpload{
    
    public static function filesUpload($request, $table, $id_posts){
        if($request->hasFile('files')){
            $files = $request->file('files');
            foreach($files as $key => $file){
                //name
                $name = $id_posts . '_' . $key . '.' . $file->getClientOriginalExtension();
                
                //path
                $path = '/uploads/files/' . $table;
                $destinationPath = public_path($path);
                $file->move($destinationPath, $name);
                
                //Store database
                $table = explode("_", $table);
                $table_files = $table[0] . '_files';
                $file_path = $path . '/' . $name;
                DB::table($table_files)->insert(
                    ['id_posts' => $id_posts, 'file_name' => $name, 'image_path' => $file_path]
                );
            }
        }
    }
    public static function fileUploadSingle($request, $table, $id_posts){
        if($request->hasFile('file')){
            $file = $request->file('file');
            //name
            $name = $id_posts . '_' . 'single' . '.' . $file->getClientOriginalExtension();
            
            //path
            $path = '/uploads/files/' . $table;
            $destinationPath = public_path($path);
            $file->move($destinationPath, $name);
            
            //Store database
            $table = explode("_", $table);
            $table_files = $table[0] . '_files';
            $file_path = $path . '/' . $name;
            DB::table($table_files)->insert(
                ['id_posts' => $id_posts, 'file_name' => $name, 'file_path' => $file_path]
            );
        }
    }
}