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

    <!-- Features -->
    <section id="home-features">
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
    </section>
    <!-- Features -->

    <!-- Plans -->
    <section id="home-plans">
        <div class="container">
            <div class="row">

                <!-- item -->
                <div class="col-md-4 text-center">
                    <div class="panel panel-danger panel-pricing">
                        <div class="panel-heading">
                            <i class="fa fa-desktop"></i>
                            <h3>Plan 1</h3>
                        </div>
                        <div class="panel-body text-center">
                            <p><strong>$100 / Month</strong></p>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item"><i class="fa fa-check"></i> Personal use</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Unlimited projects</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> 27/7 support</li>
                        </ul>
                        <div class="panel-footer">
                            <a class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</a>
                        </div>
                    </div>
                </div>
                <!-- /item -->

                <!-- item -->
                <div class="col-md-4 text-center">
                    <div class="panel panel-warning panel-pricing">
                        <div class="panel-heading">
                            <i class="fa fa-desktop"></i>
                            <h3>Plan 2</h3>
                        </div>
                        <div class="panel-body text-center">
                            <p><strong>$200 / Month</strong></p>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item"><i class="fa fa-check"></i> Personal use</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Unlimited projects</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> 27/7 support</li>
                        </ul>
                        <div class="panel-footer">
                            <a class="btn btn-lg btn-block btn-warning" href="#">BUY NOW!</a>
                        </div>
                    </div>
                </div>
                <!-- /item -->

                <!-- item -->
                <div class="col-md-4 text-center">
                    <div class="panel panel-success panel-pricing">
                        <div class="panel-heading">
                            <i class="fa fa-desktop"></i>
                            <h3>Plan 3</h3>
                        </div>
                        <div class="panel-body text-center">
                            <p><strong>$300 / Month</strong></p>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item"><i class="fa fa-check"></i> Personal use</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Unlimited projects</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> 27/7 support</li>
                        </ul>
                        <div class="panel-footer">
                            <a class="btn btn-lg btn-block btn-success" href="#">BUY NOW!</a>
                        </div>
                    </div>
                </div>
                <!-- /item -->

            </div>
        </div>
    </section>
    <!-- /Plans -->

@endsection

<!-- Scripts -->
@section('scripts')
    <script type="text/javascript">
        var slider = $('.banner').unslider();
    </script>
@endsection