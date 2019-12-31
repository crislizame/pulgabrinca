<ul class="nav nav-primary">
    @foreach($items as $menu_item)
        @php
            $ruta = $menu_item->url == null ? $menu_item->route : '#'.$menu_item->url
        @endphp
        <li class="nav-item
@if(explode('/',request()->route()->getName())[0] == $ruta)
            active
@endif
            ">
            <a @if(count($menu_item->children) > 0) data-toggle="collapse" @endif href="{{$menu_item->url == null ? route($menu_item->route) : '#'.$menu_item->url }}">
                <i class="{{$menu_item->icon_class}}"></i>
                <p>{{$menu_item->title}}</p>
                @if(count($menu_item->children) > 0)
                    <span class="caret"></span>
                @endif
            </a>
            @if(count($menu_item->children) >0)
                <div class="collapse
                                            @if(explode('/',request()->route()->getName())[0] == $ruta)
                    show
@endif
                    " id="{{$menu_item->url}}">
                    <ul class="nav nav-collapse">
                @endif
        @forelse($menu_item->children as $menu_item2)



                                                    <li class="{{request()->routeIs($menu_item2->route) ? 'active' : '' }}">
                                                        <a href="{{route($menu_item2->route)}}">
                                                            @if($menu_item2->icon_class !== null)
                                                                <i class="{{$menu_item2->icon_class}}"></i>
                                                            @endif
                                                            <span class="sub-item">{{$menu_item2->title}}</span>
                                                        </a>
                                                    </li>



            @empty
            @endforelse
                @if(count($menu_item->children) >0)
                    </ul>
                </div>

            @endif
    </li>

        @endforeach

</ul>
