<?php
namespace App\Sources\Cls\WebClass\Func;
use DB;

class ClientContact{
    public static function getContact(){
        $cont = DB::table('contact')->where('id', 1)->first();
        $contact = array();
        $contact['name_en'] = $cont->name_en;
        $contact['name_vn'] = $cont->name_vn;
        $contact['value_en'] = $cont->value_en;
        $contact['value_vn'] = $cont->value_vn;
        //$contact['phone'] = $cont->value_vn;
        //$contact['fax'] = $cont->value_vn;
        //$contact['address'] = $cont->value_vn;
        $contact['link']['facebook']['link'] = $cont->facebook;
        $contact['link']['facebook']['icon'] = 'fab fa-facebook';
        $contact['link']['youtube']['link'] = $cont->youtube;
        $contact['link']['youtube']['icon'] = 'fab fa-youtube';
        $contact['link']['instagram']['link'] = $cont->instagram;
        $contact['link']['instagram']['icon'] = 'fab fa-instagram';
        $contact['map'] = $cont->map;
        return $contact;
    }
}