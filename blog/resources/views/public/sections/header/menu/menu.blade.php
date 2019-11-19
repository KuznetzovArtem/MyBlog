<nav class="navbar navbar-expand-md  navbar-light bg-light">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto">
                @foreach ($menu as $item)
                    @if ($item->parent_menu_id)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{$item->url}}" id="{{$item->url}}"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">{{$item->display_name}}</a>
                            <div class="dropdown-menu" aria-labelledby="{{$item->url}}">
                                @include('public.sections.header.menu.sub_menu', ['items' => $item->getSubItems()])
                            </div>
                        </li>
                    @else
                        @include('public.sections.header.menu.menu_item', ['item' => $item])
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</nav>
