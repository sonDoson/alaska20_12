<?php
namespace App\Sources\Cls\WebClass\Func;

use Illuminate\Support\Facades\DB;
use App\Sources\Cls\WebClass\Func\Method\CmsAdmisstionEdit;
use App\Sources\Cls\WebClass\Func\Method\CmsAdmisstionGetPosts;

class CmsAdmissions{
    public static function admissionsList(){
        return DB::table('registration_category')->get();
    }
    public static function admisstionEdit($request){
        return CmsAdmisstionEdit::admisstionEdit($request);
    }
    public static function admisstionGetPosts($id){
        return CmsAdmisstionGetPosts::admisstionGetPosts($id);
    }
}