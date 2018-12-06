<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CmsMenu{
    
    public static function menu(){
        $id = Auth::id();
        $id_user_role = DB::table('users')->select('id_user_role')->where('id', $id)->first();
        $stick_menu_list = DB::table('user_role')->where('id_role', $id_user_role->id_user_role)->get();
        $stick_id = array();
        foreach($stick_menu_list as $key => $value){
            if($value->view == 1){
                $stick_id[] = $value->id_menu;
            }
        }
        //get menu
        $first = DB::table('cms_menu')->whereIn('stick_id', $stick_id);
        
        return DB::table('cms_menu')->whereIn('id', $stick_id)->union($first)->get()->toArray();
    }
}