<nav>
    <div id="nav_header" style="width: 140px; height: 120px; margin: 0 auto;">
        <img src="{{ asset('uploads/logo/logo02.png') }}" alt="alaska school" width="100%" height="auto" style="margin-top: 30px;" />
    </div>
    <div id="nav_u">
        <ul>
            <li><a href="{{ asset('/user/setting') }}">setting</a></li>
            <li><a href="{{ asset('/logout') }}">logout</a></li>
        </ul>
    </div>
    <div id="menu">
    @php
        function showCategories($categories, $parent_id = 0, $link = "")
        {
            echo "<ul>";
            foreach ($categories as $key => $item)
            {
                if ($item->stick_id == $parent_id)
                {
                    $link_url = '';
                    if($link != null){$link_url = "/cms/" . $link . str_replace(' ', '-', $item->value_en);}
                    echo "<a href=\"". $link_url ."\">" . "<li id=\"". str_replace(' ', '-', $item->value_en) ."\" >" . $item->icon . $item->value_vn;
                    unset($categories[$key]);
                    showCategories($categories, $item->id, str_replace(' ', '-', $item->value_en) . "/");
                    echo "</li>";
                    echo "</a>";
                }
            }
            echo "</ul>";
        }
        showCategories($menu);
    @endphp
    </div>
</nav>

<script>

</script>