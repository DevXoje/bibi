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
              "text"=>"recursos"
            ],
            [
              "route"=>"pictures.index",
              "text"=>"galeria"
            ],
            [
              "route"=>"about",
              "text"=>"sobre mi"
            ],
            [
              "route"=>"contact",
              "text"=>"contacto"
            ],
        ];
    @endphp
    <button class="menu-toggle">
        {{--icons bars and cross--}}menu
    </button>
    <ul class="navbar_nav">
        @foreach ($links as $link )
            <li class="nav_item {{ Route::currentRouteName()=== $link["route"] ? 'active' : '' }}">
                <a class="nav_link" href="{{ route($link["route"]) }}">
                    {{ ucfirst(trans( $link["text"])) }}
                </a>
            </li>
        @endforeach

    </ul>
</nav>
