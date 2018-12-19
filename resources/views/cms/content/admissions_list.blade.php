@extends('cms.layout.cms_layout')
@section('content')

<h2 id="title" >Danh sách tuyển sinh</h2>
<div class="box list" >
    <table class="table" style="border: 2px solid red;">
        <tbody class="header">
            <tr>
                <th style="width: 80px;"></th>
                <th id="th_name" ><div class="btn-table" >Form đăng ký tuyển sinh<div style="display: inline-block;" id="th_name_en_arrow"></div></div></th>
                <th class="th-btn" ></th>
            </tr>
        </tbody>
        <tbody id="tr_wrap">
        @foreach($list as $value)
            <tr class="something">
                <td class="table-id">&nbsp;&nbsp;{!! $value->id !!}</td>
                <td class="table-name">&nbsp;&nbsp;{!! $value->name_vn !!}</td>
                <td class="table-btn">
                    <div class="btn-list-wrap">
                        <a href="{{ asset('cms/Admissions/EditForm?id=') . $value->id }}"><button class="btn-list edit"><i class="fas fa-pen"></i></button></a>
                        <button class="btn-list delete" style="background-color: lightgrey!important;"><i class="fas fa-trash-alt" style="color: grey"></i></button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!--section 1-->
    <br>
    <form class="form" method="POST" action="" style="display: inline-block; float: left;">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <input class="input-style" name="input" type="text" placeholder="search.." />
    </form>
    <a href="/cms/User/Add"><button class="btn btn-add btn-submit" style="float: right;">Thêm <i class="fas fa-plus"></i></button></a>
    <table class="table">
        <tbody class="header">
            <tr>
                <th style="width: 80px;"></th>
                <th id="th_name" ><div class="btn-table" >Bài viết tuyển sinh<div style="display: inline-block;" id="th_name_en_arrow"></div></div></th>
                <th class="th-btn" ></th>
            </tr>
        </tbody>
        <tbody id="tr_wrap">
        @foreach($list as $value)
            <tr class="something">
                <td class="table-id">&nbsp;&nbsp;{!! $value->id !!}</td>
                <td class="table-name">&nbsp;&nbsp;{!! $value->name_vn !!}</td>
                <td class="table-btn">
                    <div class="btn-list-wrap">
                        <a href="{{ asset('cms/Admissions/EditForm?id=') . $value->id }}"><button class="btn-list edit"><i class="fas fa-pen"></i></button></a>
                        <button class="btn-list delete"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<!--javascript-->

<script>

</script>
@stop
