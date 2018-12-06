@extends('cms.layout.cms_layout')
@section('content')

<h2 id="title" >Vai trò người dùng</h2>

<div class="box list" >
    <a href="/cms/User/Role/Add"><button class="btn btn-add btn-submit" style="float: right;">Thêm <i class="fas fa-plus"></i></button></a>
    <table class="table">
        <tbody class="header">
            <tr>
                <th style="width: 80px;"></th>
                <th>Vai trò</th>
                <th class="th-btn" ></th>
            </tr>
        </tbody>
        <tbody id="tr_wrap">
        @foreach($user_role_name as $key => $values)
            <tr class="something">
                <td class="table-id">&nbsp;{{ $key + 1 }}</td>
                <td>&nbsp;{{ $values->name }}</td>
                <td class="table-btn">
                    <div class="btn-list-wrap">
                        <button class="btn-list edit"><i class="fas fa-pen"></i></button>
                        <button class="btn-list delete"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script>

</script>
@stop
