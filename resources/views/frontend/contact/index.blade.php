<!-- Template -->
@extends('templates.default')

<!-- Name of the page -->
@section('title') Contact @endsection

<!-- Meta-Tags for the page -->
@section('meta')

@endsection

<!-- Content -->
@section('content')
    <div id="newsletter-header" class="jumbotron">
        <div class="container">
            <div class="pull-left">
                <h1>Contact</h1>
                <p>Feel free to send us a meesage.</p>
                <a href="#contact-form"><button class="btn btn-lg btn-success">Write a message</button></a>
            </div>

            <div class="pull-right">
                <h3>Tel: +49 123 4567890</h3>
                <h3>E-Mail: mail@project.com</h3>
                <h3>
                    The real street 123<br />
                    Karlsurhe<br />
                    Germany
                </h3>
            </div>
        </div>
    </div>

    <div id="map" style="width: 100%; height: 400px;"></div>

@endsection

<!-- Scripts -->
@section('scripts')
    <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
    <script type="text/javascript">
        function initMap() {

            var myLatLng = {lat: 49.000817, lng: 8.404572};

            // Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                scrollwheel: false,
                zoom: 14
            });

            // Create a marker and set its position.
            var marker = new google.maps.Marker({
                map: map,
                position: myLatLng,
                title: 'Where I work!'
            });
        }
    </script>
@endsection
