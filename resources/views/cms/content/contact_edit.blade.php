@extends('cms.layout.cms_layout')
@section('content')
@if ($errors->any())
    <div id="errors">
        <ul>
            @foreach($errors->all(':message') as $value)
                <li>{{ $value }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(isset($return))
{!! $return !!}
@endif
<h2 id="title" >Cập Nhật Thông Tin Liên Hệ</h2>
<div class="wrap-inline-block">
<div class="box form">
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <table>
        <tr>
            <td class="post-td"></td>
            <td class="post-td">
                <label><i class="fab fa-facebook" style="font-size: 30px" ></i></label>
                <input class="input-style" type="text" name="facebook" placeholder="Link facebook" />
            </td>
            <td class="post-td">
                <label><i class="fab fa-youtube" style="font-size: 30px"></i></label>
                <input class="input-style" type="text" name="youtube" placeholder="Link youtube" />
            </td>
            <td class="post-td">
                <label><i class="fab fa-instagram" style="font-size: 30px"></i></label>
                <input class="input-style" type="text" name="instagram" placeholder="Link instagram" />
            </td>
        </tr>
        <tr>
            <td class="post-td"><label><i class="fas fa-map-marked-alt" style="font-size: 30px"></i></i></label></td>
            <td class="post-td">
                <input class="input-style" type="text" name="map" placeholder="Link bản đồ GOOGLE MAP" />
            </td>
        </tr>
        <tr>
            <td class="post-td"><label>Số điện thoại: </label></td>
            <td class="post-td">
                <input class="input-style" id="ssn" type="tel" name="phone" placeholder="" />
            </td>
        </tr>
        <tr>
            <td class="post-td"><label>Số FAX: </label></td>
            <td class="post-td">
                <input class="input-style" id="ssn" type="tel" name="fax" placeholder="" />
            </td>
        </tr>
        <tr>
            <td class="post-td"><label>Địa chỉ: </label></td>
            <td class="post-td">
                <input class="input-style" type="text" name="address" placeholder="" />
            </td>
        </tr>
        <tr>
            <td class="post-td"><label>Email: </label></td>
            <td class="post-td">
                <input class="input-style" type="text" name="email" placeholder="" />
            </td>
        </tr>
        </table>
        <label>Nội dung mục liên lạc: </label>
        <br />
        <div>
            <div id="btn_switch_language_wrap" style="width: auto;height:auto">
                <button id="btn_single_active" type="button" value="text_editor_vn" class="btn_ck btn_switch_language">Vn</button>
                <button type="button" value="text_editor_en" class="btn_ck btn_switch_language">En</button>
            </div>
            <div id="text_editor_wrap">
                <div id="text_editor_vn" ><textarea type="text" name="value[vn]" >{{ $db_contact['value_vn'] }}</textarea></div>
                <div id="text_editor_en" ><textarea type="text" name="value[en]" >{{ $db_contact['value_en'] }}</textarea></div>
            </div>
        </div>
        
        <button class="btn btn-submit">Cập nhật <i class="fas fa-plus"></i></button>
    </form>
</div>
</div>
<!--javascript-->
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
<script>
//config
	var config = {};
    config.resize_enabled = false;
    config.height = '200';
	config.entities_latin = false;
	config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'undo', 'clipboard' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'align', 'blocks', 'bidi', 'paragraph' ] },
		{ name: 'basicstyles', groups: [ 'cleanup', 'basicstyles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];

	config.removeButtons ='NewPage,Save,Preview,Print,Templates,About,CopyFormatting,RemoveFormat,Blockquote,CreateDiv,PasteText,PasteFromWord,Scayt,Maximize,ShowBlocks,BidiLtr,BidiRtl,Language';

	CKEDITOR.replace( 'value[en]', config );
	CKEDITOR.replace( 'value[vn]', config );
</script>

<script>
    $().ready(function(){
        setTimeout(function() 
        {
            if($('#errors:hover') === true){
            //if($('#errors').is(':hover') === true){
                $('#errors').mouseleave(function(){
                    $('#errors').fadeOut(300);
                });
            }   else    {
                $('#errors').fadeOut(300);
            }
        }, 3000);
    });

    $('#text_editor_en').css('display', 'none');
    $().ready(function(){
        $('#btn_switch_language_wrap').on('click', '.btn_switch_language', function(){
            $(this).siblings().removeAttr('id');
            $(this).attr('id', 'btn_single_active');
            var id_name = '#' + $(this).attr('value');
            $(id_name).css('display', 'block');
            $(id_name).siblings().css('display', 'none');
        });
    });
    //number_format
    $('#ssn').keyup(function(e){
    if ((e.keyCode > 47 && e.keyCode < 58) || (e.keyCode < 106 && e.keyCode > 95)) {
    this.value = this.value.replace(/(\d{4})\.?/g, '$1.');
    return true;
    }

    //remove all chars, except dash and digits
    this.value = this.value.replace(/[^\-0-9]/g, '');
    });
</script>
@stop