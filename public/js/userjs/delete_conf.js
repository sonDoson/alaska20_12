//popup
$().ready(function(){
    //openPop
    $('.delete').on('click', function(){
        var token = $('meta[name="csrf-token"]').attr('content');
        openPop(token);
    });
    //save
    //closePop
    $('.popup_wrap').on('click', '.pop_back', closePop);
    $('.popup_wrap').on('click', '.pop_cancel', closePop);
});
//function close popup
function closePop(){
    $('.popup').remove();
}
//function add popup
function openPop(token){
    $('.popup_wrap').append('<div class=\"popup\">' +
        '<div class=\"pop_back\"></div>' +
        '<div class=\"box pop form\">' +
            '<h3 class=\"box_title\" >Bạn có chắc muốn xóa mục này</h3>' +
            '<br />' +
            '<form method=\"POST\" action=\"/cms/User/Delete\">' +
                '<div style=\"height:0\">' +
                '<input type=\"hidden\" name=\"_token\" id=\"csrf-token\" value=\"' + token + '\" /><br />' +
                '</div>' +
                '<input style=\"width: 388px !important;\" class=\"input-style\" type=\"password\" name=\"password\" placeholder=\"Mật khẩu\" required /><br />' +
                '<br />' +
                '<button type=\"submit\" class=\"btn btn-add btn-submit pop_save\">Có <i class=\"fas fa-check\"></i></button>' +
                '<button type=\"button\" style=\"float: right;\" class=\"btn_false btn-add btn-submit pop_cancel\">Hủy <i class=\"fas fa-times\"></i></button>' +
            '</form>' +
        '</div>' +
    '</div>');
}