<ul>
    <li>
        <a href="{{route('front.faq', app()->getLocale())}}">
            {{getTrans('faq_page')}}
        </a>
    </li>
    <li>
        <a href="{{route('front.privacy', app()->getLocale())}}">
            {{getTrans('privacy_page')}}
        </a>
    </li>
    <li>
        <a href="{{route('front.terms', app()->getLocale())}}">
            {{getTrans('term_page')}}
        </a>
    </li>
</ul>
