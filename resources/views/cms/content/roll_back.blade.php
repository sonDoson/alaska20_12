@extends('cms.layout.cms_layout')
@section('content')

<div id="div-welcome" >
    <h1>Bạn không đủ thẩm quyền!</h1>
</div>

<script>
    $().ready(function(){
        $('#div-welcome').css('opacity','1');
    });
</script>
@stop
