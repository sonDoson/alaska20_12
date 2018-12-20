@extends('client.layout.vl_posts_layout')
@section('content')
    <div class="content-wrap col-md-0 col-lg-10 col-xl-7" style="padding-right:0;">
        <div class="content-text font-resize">
            <h2>{!! $section_0[$lang[0]] !!}</h2>
            <div class="fb-like" 
            data-href="" 
            data-layout="button" 
            data-action="like" 
            data-size="small" 
            data-show-faces="true" 
            data-share="true"></div><br />
              <!-- Your like button code -->
            <br />
            {!! $section_0[$lang[1]] !!}
        </div>
    </div>
    <script>
        $().ready(function(){
            var url = window.location.href; 
            $('.fb-like').attr('data-href', url);
        });
    </script>
@stop