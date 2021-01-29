<header>
    <div class="notifications-bar"></div>
    <div class="container">
        <div class="logo">
            <a href="/">
                <img src="https://www.boolean.careers/images/misc/logo.png" alt="Logo">
            </a>
        </div>
        <div class="navbar">
            <ul>
                @foreach(config('navigation.routes') as $route)
                    <li class="unstyled-list">
                        <a href="{{route($route['path'])}}" class="{{Route::currentRouteName() == $route['path'] ? 'active' : '' }} {{$route['path'] ==  'iscriviti' ? 'cta' : ''}}">{{$route['title']}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>