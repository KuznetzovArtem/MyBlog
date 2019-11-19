@foreach($items as $item)
    @if ($item->parent_menu_id)
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{$item->url}}" id="{{$item->url}}"
               data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">{{$item->display_name}}</a>
            <div class="dropdown-menu" aria-labelledby="{{$item->url}}">
                @include('public.sections.header.sub_menu', ['items' => $item->getSubItems()])
            </div>
        </li>
    @else
        <a class="dropdown-item" href="{{$item->url}}">
            {{$item->display_name}}
        </a>
    @endif
@endforeach

