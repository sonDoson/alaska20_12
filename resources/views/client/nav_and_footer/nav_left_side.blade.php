<div class="nav-left col-md-1 col-lg-1 col-xl-2">
    <ul>
        @foreach($contact['link'] as $key => $value)
            @if($value['link'] !== '')
            <li><a href="{{ $value['link'] }}" style="color: #ffffff"><i class="{{ $value['icon'] }}"></i></a></li>
            @endif
        @endforeach
    </ul>
</div>