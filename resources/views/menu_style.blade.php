<ul class="header-menu">
    @foreach($items as $menu_item)
        <li><a class="nav-link scrollto" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
    @endforeach
</ul>
