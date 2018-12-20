<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;

class CmsUserProfile{
    public static function userProfile($id){
        $user = DB::table('users')->where('id', $id)->first();
        $user_info = DB::table('users_infomation')->where('id_user', $id)->first();
        return [$user, $user_info];
    }
}