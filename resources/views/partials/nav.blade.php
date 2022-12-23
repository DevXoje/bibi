<nav class="navbar">
    @php
        $links=[
            [
              "route"=>"home",
              "text"=>"home"
            ],
            [
              "route"=>"posts.index",
              "text"=>"blog"
            ],
            [
              "route"=>"books.index",
              "text"=>"books"
            ],
            [
              "route"=>"pictures.index",
              "text"=>"gallery"
            ],
            [
              "route"=>"about",
              "text"=>"about me"
            ],
            [
              "route"=>"contact",
              "text"=>"contact"
            ],
            [
                "route"=>"dashboard",
                "text"=>"dashboard"
            ]
        ];
    @endphp
    <button class="menu-toggle">
        {{--icons bars and cross--}}menu
    </button>
    <ul class="navbar_nav">
        @foreach ($links as $link )
            <li class="nav_item {{ Route::currentRouteName()=== $link["route"] ? 'active' : '' }}">
                <a class="nav_link" href="{{ route($link["route"]) }}">
                    {{ __('navigation.'.$link["text"]) }}
                </a>
            </li>
        @endforeach

    </ul>
    @include("partials.language_switcher")

</nav>
