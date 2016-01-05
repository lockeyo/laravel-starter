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

    <div class="container" id="me-features-home">
        <div class="row">
            <div class="col-md-4">
                <p class="center"><i class="fa fa-money"></p></i>
                <h3>Awesome Feature 1</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-md-4">
                <p class="center"><i class="fa fa-line-chart"></p></i>
                <h3>Awesome Feature 2</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-md-4">
                <p class="center"><i class="fa fa-user"></p></i>
                <h3>Awesome Feature 3</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>
@endsection

<!-- Scripts -->
@section('scripts')
    <script type="text/javascript">
        var slider = $('.banner').unslider();
    </script>
@endsection