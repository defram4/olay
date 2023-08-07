<ul>
    @foreach(getMenuPages() as $page)
        <li>
            @if(Route::has($page->label))
                <a href="{{route($page->label, app()->getLocale())}}">
                    {{ $page->title }}
                </a>
            @else
{{--                <a href="#!">--}}
{{--                    {{ $page->title }}--}}
{{--                </a>--}}
            @endif
        </li>
    @endforeach
</ul>

