<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;

class CmsUserProfile{
    public static function userProfile($id){
        return DB::table('users')->where('id', $id)->first();
    }
}