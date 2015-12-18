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
                    <a href="{{ URL::to('') }}">Home</a>
                </li>
                <li class="{{ (Request::is('features') ? 'active' : '') }}">
                    <a href="{{ URL::to('features') }}">Features</a>
                </li>
                <li class="{{ (Request::is('about') ? 'active' : '') }}">
                    <a href="{{ URL::to('about') }}">About</a>
                </li>
                <li class="{{ (Request::is('blog') ? 'active' : '') }}">
                    <a href="{{ URL::to('blog') }}">Blog</a>
                </li>
                <li class="{{ (Request::is('contact') ? 'active' : '') }}">
                    <a href="{{ URL::to('contact') }}">Contact</a>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="{{ (Request::is('auth/register/') ? 'active' : '') }}">
                    <a href="{{ URL::to('auth/register/') }}">Join</a>
                </li>
                <li class="{{ (Request::is('auth/login/') ? 'active' : '') }}">
                    <a href="{{ URL::to('auth/login/') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>