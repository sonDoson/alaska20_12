@extends('client.layout.master_client_layout')
@section('content')
    <div class="bn-section-0-container col-lg-12 col-xl-9" style="1px solid black;">
    <div class="big-news bn-section-0 row" style="margin-top: -20px;">
        @if($section_3 !== null)
            @foreach($section_3 as $key => $value)
            <div class="big-news-item col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" style="margin-top: 20px;">
                <a style="color: #000" href="{{ asset('/static-posts?id=') . $key }}">
                <div class="section-3-item">
                    <h4>&nbsp;&nbsp;{!! $value[$lang[0]] !!}</h4>
                    <div class="section-3-item-image" style="background-image:url({{ $value['image'] }})"></div>
                    <div class="section-3-item-content font-resize">
                        <div class="section-3-item-content-text">
                            <p>{!! $value['subtitle_vn'] !!}</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        @endif
        <!---->
        @if(!empty($section_0[key($section_0)]))
        @foreach($section_0[key($section_0)] as $key => $value)
        <div class="big-news-item col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" style="margin-top: 20px;">
            <a style="color: #000" href="{!! '/cat/' . $value['id_category']. '/' . $value['id'] !!}">
                <div class="big-news-item-image" style="background-image:url({{ $value['images'][0] }})"></div>
                <div class="big-news-item-content font-resize">
                    <b>{!! $value[$lang[0]] !!}</b>
                    <div  class="big-news-item-content-text" style="">
                        <p>{!! $value[$lang[1]] !!}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @endif
    </div>
    </div>
@stop