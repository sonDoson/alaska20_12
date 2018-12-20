<div class="cover-baner row">
    <div class="banner-01 col-12">
        <section class="banner cover_01">
            @if(!empty($section_0['images']))
                @foreach($section_0['images'] as $key => $value)
                <article>
                <img src="{{ $value }}" alt="" width="100%" height="auto" />
                </article>
                @endforeach
            @else
                @if(sizeof($section_1[key($section_1)]) <= 4)
                @for($i=0; $i < sizeof($section_1[key($section_1)]); $i++)
                <article>
                    <img src="{{ $section_1[key($section_1)][$i]['images'][0] }}" alt="" width="100%" height="auto" />
                </article>
                @endfor
                @else
                @for($i=0; $i < 4; $i++)
                <article>
                    <img src="{{ $section_1[key($section_1)][$i]['images'][0] }}" alt="" width="100%" height="auto" />
                </article>
                @endfor
                @endif
            @endif
        </section>
    </div>
</div>

