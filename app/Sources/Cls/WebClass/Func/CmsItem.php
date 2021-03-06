<?php
namespace App\Sources\Cls\WebClass\Func;

use App\Sources\Cls\WebClass\Func\Method\CmsGetItem;
use App\Sources\Cls\WebClass\Func\Method\CmsItemTextEdit;

class CmsItem{
    public static function getItem($id_posts, $table, $stress = null, $subtitle = null){
        return CmsGetItem::getItem($id_posts, $table, $stress, $subtitle);
    }
    public static function itemEdit($request, $table, $id_posts){
        return CmsItemTextEdit::itemEdit($request, $table, $id_posts);
    }
}