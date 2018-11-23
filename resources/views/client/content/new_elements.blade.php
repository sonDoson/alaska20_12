<!--SECTION 1-->

<div class="section" id="section-1">
    <div class="title">
        <h2 style="display: inline-block;">{{ $category[4][$lang[0]] }}</h2>
        <p style="display: inline-block"><a href="/cat/4">| xem tất cả</a></p>
    </div>
    <div class="short-news row" style="width: auto;padding: 0px!important;margin-left:0;">
    @if(!empty($section_1[key($section_1)]))
    @if(sizeof($section_1[key($section_1)]) > 4 && sizeof($section_1[key($section_1)]) < 7)
    @for($i=3; $i < sizeof($section_1[key($section_1)]); $i++)
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 ml-0" style="padding-left: 0;">
        <a href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
        <div class="short-news-item">
            <div class="short-news-item-timetag">
                <div class="wrap-item-timetag">
                    <p>{!! $section_1[key($section_1)][$i]['created_at'][0] !!}</p>
                    <p>{!! $section_1[key($section_1)][$i]['created_at'][1] !!}</p>
                </div>
            </div>
            <div class="short-news-item-content">
                <h4>{!! $section_1[key($section_1)][$i][$lang[0]] !!}</h4>
                <p>{!! $section_1[key($section_1)][$i][$lang[1]] !!}</p>
            </div>
        </div>
        </a>
        </div>
    @endfor
    @endif
    @if(sizeof($section_1[key($section_1)]) >= 7)
    @for($i=3; $i < 7; $i++)
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 ml-0" style="padding-left: 0;">
        <a href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
        <div class="short-news-item">
            <div class="short-news-item-timetag">
                <div class="wrap-item-timetag">
                    <p>{!! $section_1[key($section_1)][$i]['created_at'][0] !!}</p>
                    <p>{!! $section_1[key($section_1)][$i]['created_at'][1] !!}</p>
                </div>
            </div>
            <div class="short-news-item-content">
                <h4>{!! $section_1[key($section_1)][$i][$lang[0]] !!}</h4>
                <p>{!! $section_1[key($section_1)][$i][$lang[1]] !!}</p>
            </div>
        </div>
        </a>
        </div>
    @endfor
    @endif
    @endif
    </div>
    
    <div class="big-news row" style="width: auto;padding: 0px!important;margin-left:0;">
    @if(!empty($section_1[key($section_1)]))
    @if(sizeof($section_1[key($section_1)]) <= 4)
    @for($i=0; $i < sizeof($section_1[key($section_1)]); $i++)
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 ml-0" style="padding-left: 0; margin-bottom: 20px;">
        <a style="color: #000" href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
        <div class="big-news-item">
            <div class="big-news-item-image" style="background-image:url({{ $section_1[key($section_1)][$i]['images'][0] }})"></div>
            <div class="big-news-item-content font-resize">
                <b>{!! $section_1[key($section_1)][$i][$lang[0]] !!}</b>
                <div class="big-news-item-content-text">
                    <p>{!! $section_1[key($section_1)][$i][$lang[1]] !!}</p>
                </div>
                <br />
                <p>{!! $section_1[key($section_1)][$i]['created_at']['string'] !!}</p>
            </div>
        </div>
        </a>
        </div>
    @endfor
    @else
    @for($i=0; $i < 4; $i++)
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 ml-0" style="padding-left: 0; margin-bottom: 20px;">
        <a style="color: #000" href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
        <div class="big-news-item">
            <div class="big-news-item-image" style="background-image:url({{ $section_1[key($section_1)][$i]['images'][0] }})"></div>
            <div class="big-news-item-content font-resize">
                <b>{!! $section_1[key($section_1)][$i][$lang[0]] !!}</b>
                <div class="big-news-item-content-text">
                    <p>{!! $section_1[key($section_1)][$i][$lang[1]] !!}</p>
                </div>
                <p style="margin-top: 10px;">{!! $section_1[key($section_1)][$i]['created_at']['string'] !!}</p>
            </div>
        </div>
        </a>
        </div>
    @endfor
    @endif
    @endif
    </div>
</div>