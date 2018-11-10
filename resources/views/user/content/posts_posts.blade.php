@extends('user.layout.master_user_layout')
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

<h2 id="title" >Thêm Bài Viết</h2>
<div class="wrap-inline-block">
<div class="box form">
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <table>
        <tr>
            <td class="post-td"><label>Chọn Danh Mục: </label></td>
            <td class="post-td">
                <select name="category" style="min-width: 200px;">
                    @foreach($data_category as $key => $value)
                        <option value="{{ $key }}">{{ $value['name_vn'] }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td class="post-td"><label>Tên Bài Viết: </label></td>
            <td class="post-td">
                <input class="input-style" type="text" name="name[en]" placeholder="Tên tiếng Anh" />
                <input class="input-style" type="text" name="name[vn]" placeholder="Tên tiếng Việt" />
            </td>
        </tr>
        <tr>
            <td class="post-td"><label>Ảnh Bìa: </label></td>
            <td class="post-td">
                <input class="input-style" type="file" name="images[]"  multiple />
            </td>
        </tr>
        <tr>
            <td class="post-td"><label></label></td>
            <td class="post-td">
                <label class="container">Nổi Bật
                    <input type="checkbox" name="stress">
                    <span class="checkmark"></span>
                </label>
            </td>
        </tr>

        </table>
        <label>Bài Viết: </label>
        <br />
        <div>
            <div id="btn_switch_language_wrap" style="width: auto;height:auto">
                <button id="btn_single_active" type="button" value="text_editor_en" class="btn_ck btn_switch_language">En</button>
                <button type="button" value="text_editor_vn" class="btn_ck btn_switch_language">Vn</button>
            </div>
            <div id="text_editor_wrap">
                <div id="text_editor_en" ><textarea type="text" name="value[en]" ></textarea></div>
                <div style="" id="text_editor_vn" ><textarea type="text" name="value[vn]" ></textarea></div>
            </div>
        </div>
        
        <button class="btn btn-submit">Thêm <i class="fas fa-plus"></i></button>
    </form>
</div>
</div>
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

    $('#text_editor_vn').css('display', 'none');
    $().ready(function(){
        $('#btn_switch_language_wrap').on('click', '.btn_switch_language', function(){
            $(this).siblings().removeAttr('id');
            $(this).attr('id', 'btn_single_active');
            var id_name = '#' + $(this).attr('value');
            $(id_name).css('display', 'block');
            $(id_name).siblings().css('display', 'none');
        });
    });
</script>
@stop
