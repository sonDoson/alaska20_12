@extends('cms.layout.cms_layout')
@section('content')
<h2 id="title" >Danh sách - {{ $category->name_vn }}</h2>
<div class="box list" >
    <form class="form" method="POST" action="" style="display: inline-block; float: left;">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <input class="input-style" name="input" type="text" placeholder="search.." />
    </form>
    <a href="{{ '/cms/Posts/' . $route . '-Add'  }}"><button class="btn btn-add btn-submit" style="display: inline-block; float: right;">Thêm <i class="fas fa-plus"></i></button></a>
    <table class="table">
        <tbody class="header">
            <tr>
                <th style="width: 80px;"></th>
                <th class="th-size" style="width: 500px;"><div class="btn-table" >Tên bài viết<div style="display: inline-block;" id="th_name_en_arrow"></div></div></th>
                <th class="th-size" style="width: 200px;"><div class="btn-table">Danh Mục<div style="display: inline-block;" id="th_name_vn_arrow"></div></div></th>
                <th id="th_created_at"><div class="btn-table">Thời gian<div style="display: inline-block;" id="th_created_at_arrow"></div></div></th>
                <th class="th-btn" ></th>
            </tr>
        </tbody>
        <tbody id="tr_wrap">
        @foreach($db_list as $key => $value)
            <tr class="something">
                <td class="table-id">&nbsp;{!! $key !!}</td>
                <td class="table-name">&nbsp;{!! $value['name_vn'] !!}</td>
                <td class="table-name">&nbsp;{!! $value['category_vn'] !!}</td>
                <td class="table-time">{!! $value['created'] !!}</td>
                <td class="table-btn">
                    <div class="btn-list-wrap">
                        <a href="{{ asset('cms/Posts') . '/' . $route . '-Edit?id=' . $key }}"><button class="btn-list edit"><i class="fas fa-pen"></i></button></a>
                        <button class="btn-list delete"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </td>
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
