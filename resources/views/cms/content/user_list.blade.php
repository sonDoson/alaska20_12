@extends('cms.layout.cms_layout')
@section('content')

<h2 id="title" >Danh sách người dùng</h2>
<div class="box list" >
    <a href="/cms/User/Add"><button class="btn btn-add btn-submit" style="float: right;">Thêm <i class="fas fa-plus"></i></button></a>
    <table class="table">
        <tbody class="header">
            <tr>
                <th style="width: 80px;"></th>
                <th class="th-size" id="th_name_en" ><div class="btn-table" >Tên<div style="display: inline-block;" id="th_name_en_arrow"></div></div></th>
                <th class="th-size" id="th_name_vn" ><div class="btn-table">Email<div style="display: inline-block;" id="th_name_vn_arrow"></div></div></th>
                <th class="th-size" ><div class="btn-table">Vai trò<div style="display: inline-block;" id="th_category_arrow"></div></div></th>
                <th id="th_created_at"><div class="btn-table">Ngày đăng ký<div style="display: inline-block;" id="th_created_at_arrow"></div></div></th>
                <th class="th-btn" ></th>
            </tr>
        </tbody>
        <tbody id="tr_wrap">
        @foreach($user_list as $key => $value)
            <tr class="something">
                <td class="table-id">&nbsp;{{ $key }}</td>
                <td class="table-name">&nbsp;{{ $value['name'] }}</td>
                <td class="table-name">&nbsp;{{ $value['email'] }}</td>
                <td class="table-name">&nbsp;{{ $value['role'] }}</td>
                <td class="table-time"></td>
                <td class="table-btn">
                    <div class="btn-list-wrap">
                        <a href="{{ asset('cms/User/Edit?id=') . $key }}"><button class="btn-list edit"><i class="fas fa-pen"></i></button></a>
                        <button class="btn-list delete"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="page-mode" value="{{ '#page-mode-' . $page_mode->page_present }}">
        <div class="page-mode-btn-wrap" style="text-align: center;">
        <button style="display:none;" id="btn-backward"><i class="fas fa-backward"></i></button>
        @for($page = $page_round[0]; $page <= $page_round[1]; $page++)
            <button class="page-number" id="{{ 'page-mode-' . $page }}" value="{{ $page }}">{{ $page }}</button>
        @endfor
        <button style="display:inline-block;" id="btn-forward"><i class="fas fa-forward"></i></button>
        </div>
    </div>
</div>
<div class="popup_wrap"></div>
<!--javascript-->
<script src="{{ asset('js/userjs/delete_conf.js') }}" ></script>
<script src="{{ asset('js/function/getMethodUrl.js') }}" ></script>
<script>
    $().ready(function(){
        var page_active = $('.page-mode').attr('value');
        $(page_active).css('background-color', 'grey');
        //Click action
        $('.page-number').on('click', function(){
            get[0] = $(this).attr('value');//push to get method
            makingUrlAndGo();
        });
    });
</script>
@stop
