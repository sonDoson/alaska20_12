<?php
namespace App\Sources\Cls\WebClass\Func;

use App\Sources\Cls\WebClass\Func\Method\CmsUserRoleAdd;
use App\Sources\Cls\WebClass\Func\Method\CmsUserRoleCategory;
use App\Sources\Cls\WebClass\Func\Method\CmsUserList;
use App\Sources\Cls\WebClass\Func\Method\CmsUserAdd;
use App\Sources\Cls\WebClass\Func\Method\CmsUserRoleValidator;

class CmsUser{
    public static function userAdd($request){
        return CmsUserAdd::userAdd($request);
    }
    public static function userRoleAdd($request){
        return CmsUserRoleAdd::userRoleAdd($request);
    }
    public static function roleCategory(){
        return CmsUserRoleCategory::roleCategory();
    }
    public static function userList(){
        return CmsUserList::userList();
    }
    public static function userRoleValidator($route, $action){
        return CmsUserRoleValidator::userRoleValidator($route, $action);
    }
}