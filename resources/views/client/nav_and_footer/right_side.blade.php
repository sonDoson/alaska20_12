<div class="right-side col-sm-1 col-md-1 col-lg-1 col-xl-3">
    <ul>
        <li class="right-side-title"><div class="inner"><h2>{{ $category[$id_cat]['name_vn'] }}</h2></div></li>
        @foreach($category_item[$id_cat] as $key => $value)
        <a href="{{ asset('/cat') . '/' . $id_cat . '/' . $value['id'] }}"><li><div class="inner">{!! $value['name_vn'] !!}</div></li></a>
        @endforeach
    </ul>    
    <br />
</div>