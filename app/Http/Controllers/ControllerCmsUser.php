<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\Func\Cms;
use App\Sources\Cls\WebClass\Func\CmsUser;
use App\Sources\Cls\WebClass\Func\PageMode;

class ControllerCmsUser extends Controller
{
    public function getCmsUserList(Request $request){
        //validator user role
        $user_validator = CmsUser::userRoleValidator(1, 'view');
        if($user_validator === 0){return redirect()->route('getCmsRollBack');}
        //
        $menu = Cms::menu();
        $name_class = "list";
        $user_list = CmsUser::userList();
        //page mode
        $page_mode = new PageMode(3, 2, 'users', 1);
        $page_round = $page_mode->page_round();
        return view('cms.content.user_list', compact('menu', 'name_class', 'user_list', 'page_mode', 'page_round'));
    }
    public function getCmsUserAdd(){
        //validator user role
        $user_validator = CmsUser::userRoleValidator(1, 'add');
        if($user_validator === 0){return redirect()->route('getCmsRollBack');}
        
        $menu = Cms::menu();
        $name_class = "list";
        $layout = "WebUserPost.css";
        $user_role_name = CmsUser::roleCategory();
        return view('cms.content.user_add', compact('menu', 'name_class', 'user_role_name', 'layout'));
    }
    public function postCmsUserAdd(Request $request){
        $return = CmsUser::userAdd($request);
        var_dump($return);
    }
    //Edit
    public function getCmsUserEdit(Request $request){
        //validator user role
        $user_validator = CmsUser::userRoleValidator(1, 'edit');
        if($user_validator === 0){return redirect()->route('getCmsRollBack');}
        
        $menu = Cms::menu();
        $name_class = "list";
        $layout = "WebUserPost.css";
        $user_role_name = CmsUser::roleCategory();
        
        //get user profile
        $user_profile = CmsUser::userProfile($request->id);
        return view('cms.content.user_edit', compact('menu', 'name_class', 'user_role_name', 'layout', 'user_profile'));
    }
    public function postCmsUserEdit(Request $request){
        return redirect()->route('getCmsRollBack');
    }
    
    //Delete
    public function postCmsUserDelete(Request $request){
        //validator user role
        $user_validator = CmsUser::userRoleValidator(1, 'delete');
        if($user_validator === 0){
            return redirect()->route('getCmsRollBack');
        }
        
    }
    
    
    //Role
    public function getCmsUserRole(){
        //validator user role
        $user_validator = CmsUser::userRoleValidator(1, 'view');
        if($user_validator === 0){
            return redirect()->route('getCmsRollBack');
        }
        //
        $menu = Cms::menu();
        $name_class = "list";
        $user_role_name = CmsUser::roleCategory();
        return view('cms.content.user_role', compact('menu', 'name_class','user_role_name'));
    }
    public function getCmsUserRoleAdd(){
        //validator user role
        $user_validator = CmsUser::userRoleValidator(1, 'add');
        if($user_validator === 0){
            return redirect()->route('getCmsRollBack');
        }
        //
        $menu = Cms::menu();
        $menu_category = Cms::menuCategory();
        $layout = "WebUserPost.css";
        $name_class = "list";
        return view('cms.content.user_role_add', compact('layout', 'menu', 'name_class', 'menu_category'));
    }
    public function postCmsUserRoleAdd(Request $request){
        $return = CmsUser::userRoleAdd($request);
        var_dump($return);
    }
    //Delete
    public function postCmsUserRoleDelete(Request $request){
        //validator user role
        $user_validator = CmsUser::userRoleValidator(1, 'delete');
        if($user_validator === 0){
            return redirect()->route('getCmsRollBack');
        }
    }
    public function getCmsUserRoleEdit(){
        
    }
}