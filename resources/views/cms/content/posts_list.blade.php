@extends('cms.layout.cms_layout')
@section('content')
<h2 id="title" >Danh mục bài viết</h2>
<div class="box list" >
    <table class="table">
        <tbody class="header">
            <tr>
                <th style="width: 80px;"></th>
                <th class="th-size"><div class="btn-table" >Danh mục<div style="display: inline-block;" id="th_name_en_arrow"></div></div></th>
                <th class="th-size"><div class="btn-table">Tổng số bài viết<div style="display: inline-block;" id="th_name_vn_arrow"></div></div></th>
                <th id="th_created_at"><div class="btn-table">Bài mới nhất<div style="display: inline-block;" id="th_created_at_arrow"></div></div></th>
            </tr>
        </tbody>
        <tbody id="tr_wrap">
        @foreach($db_list as $key => $value)
            <tr class="something">
                <td class="table-id">&nbsp;{!! $key !!}</td>
                <td class="table-name">&nbsp;{!! $value['name_vn'] !!}</td>
                <td class="table-name">&nbsp;{!! $value['total'] !!}</td>
                <td class="table-time">{!! $value['update'] !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="popup_wrap"></div>
<!--javascript-->
<script src="{{ asset('js/userjs/delete_conf.js') }}" ></script>
<script src="{{ asset('js/function/getMethodUrl.js') }}" ></script>
@stop
