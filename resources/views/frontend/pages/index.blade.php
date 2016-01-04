<!-- Template -->
@extends('templates.default')

<!-- Name of the page -->
@section('title') Home @endsection

<!-- Meta-Tags for the page -->
@section('meta')

@endsection

<!-- Content -->
@section('content')

    <div class="banner">
        <ul>
            <li id="slider1">
                <div class="container">
                    <h1>The best cat content in the world.</h1>
                </div>
            </li>
            <li id="slider2">
                <div class="container">
                    <h1>Do your job.</h1>
                </div>
            </li>
            <li id="slider3">
                <div class="container">
                    <h1>Pretty cool, huh?</h1>
                </div>
            </li>
        </ul>
    </div>

    <div class="container">
        <h1>Home</h1>

        {{ Lang::get('home.welcome') }}
    </div>
@endsection

<!-- Scripts -->
@section('scripts')
    <script type="text/javascript">
        var slider = $('.banner').unslider();
    </script>
@endsection