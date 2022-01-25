<ul>
    @foreach($items as $menu_item)
        <li><i class="bx bx-chevron-right"></i><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
    @endforeach
</ul>
