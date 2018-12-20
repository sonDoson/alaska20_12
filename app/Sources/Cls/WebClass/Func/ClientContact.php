<?php
namespace App\Sources\Cls\WebClass\Func;
use DB;

class ClientContact{
    public static function getContact(){
        $cont = DB::table('contact')->where('id', 1)->first();
        $cont_ex = DB::table('contact_ex')->where('id', 1)->first();
        $contact = array();
        $contact['name_en'] = $cont->name_en;
        $contact['name_vn'] = $cont->name_vn;
        $contact['value_en'] = $cont->value_en;
        $contact['value_vn'] = $cont->value_vn;
        $contact['phone'] = $cont_ex->phone;
        $contact['fax'] = $cont_ex->fax;
        $contact['address'] = $cont_ex->address;
        $contact['email'] = $cont_ex->email;
        $contact['footer_text']['value_en'] = $cont_ex->value_en;
        $contact['footer_text']['value_vn'] = $cont_ex->value_vn;
        $contact['email'] = $cont_ex->email;
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