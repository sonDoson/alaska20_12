<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;

class CmsUserList{
    public static function userList(){
        $user_role_name = DB::table('user_role_name')->get();
        $users = DB::table('users')->get();
        $user_role = array();
        foreach($user_role_name as $key => $value){
            $user_role[$value->id] = $value->name;
        }
        $db_user_info = DB::table('users_infomation')->get();
        foreach($db_user_info as $key => $value){
            $user_info[$value->id_user]['role'] = $value->id_user_role;
        }
        //mix data
        $user = array();
        foreach($users as $key => $value){
            $user[$value->id]['name'] = $value->name;
            $user[$value->id]['email'] = $value->email;
            $user[$value->id]['role'] = $user_role[$user_info[$value->id]['role']];
        }
        return $user;
    }
}