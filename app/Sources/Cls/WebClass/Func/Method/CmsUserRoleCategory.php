<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;

class CmsUserRoleCategory{
    public static function roleCategory(){
        $user_role_name = DB::table('user_role_name')->get();
        return $user_role_name;
    }
}