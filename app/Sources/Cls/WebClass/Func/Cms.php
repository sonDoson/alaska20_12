<?php
namespace App\Sources\Cls\WebClass\Func;

use App\Sources\Cls\WebClass\Func\Method\CmsMenu;
use App\Sources\Cls\WebClass\Func\Method\CmsMenuCategory;

class Cms{
    public static function menu(){
        return CmsMenu::menu();
    }
    public static function exportMenu(){
        return CmsMenu::exportMenu();
    }
    public static function menuCategory(){
        return CmsMenuCategory::menuCategory();
    }
}