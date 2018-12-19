<?php
namespace App\Sources\Cls\WebClass\Func;

use App\Sources\Cls\WebClass\Func\MethodClient\ClientItemList;

class ClientItem{
    public static function getListItem($table, $id_category = null){
        return ClientItemList::getListItem($table, $id_category);
    }
}