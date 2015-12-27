<nav class="navbar navbar-default navbar">
    <div class="container   ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url() }}">Your App</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ (Request::is('/') ? 'active' : '') }}">
                    <a href="{{ URL::to('') }}">{{ Lang::get('header-nav.home') }}</a>
                </li>
                <li class="{{ (Request::is('features') ? 'active' : '') }}">
                    <a href="{{ URL::to('features') }}">{{ Lang::get('header-nav.features') }}</a>
                </li>
                <li class="{{ (Request::is('about') ? 'active' : '') }}">
                    <a href="{{ URL::to('about') }}">{{ Lang::get('header-nav.about') }}</a>
                </li>
                <li class="{{ (Request::is('blog') ? 'active' : '') }}">
                    <a href="{{ URL::to('blog') }}">{{ Lang::get('header-nav.blog') }}</a>
                </li>
                <li class="{{ (Request::is('contact') ? 'active' : '') }}">
                    <a href="{{ URL::to('contact') }}">{{ Lang::get('header-nav.contact') }}</a>
                </li>

            </ul>

            @if(!Auth::check())
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ (Request::is('auth/register/') ? 'active' : '') }}">
                        <a href="{{ URL::to('auth/register/') }}">{{ Lang::get('header-nav.join') }}</a>
                    </li>
                    <li class="{{ (Request::is('auth/login/') ? 'active' : '') }}">
                        <a href="{{ URL::to('auth/login/') }}">{{ Lang::get('header-nav.login') }}</a>
                    </li>
                </ul>
            @else
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ (Request::is('dashboard') ? 'active' : '') }}">
                        <a href="{{ URL::to('dashboard') }}">{{ Lang::get('header-nav.dashboard') }}</a>
                    </li>

                </ul>
            @endif
        </div>
    </div>
</nav>