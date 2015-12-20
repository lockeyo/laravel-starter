<!-- Template -->
@extends('templates.default')

<!-- Name of the page -->
@section('title') Blog articles @endsection

<!-- Meta-Tags for the page -->
@section('meta')

@endsection

<!-- Content -->
@section('content')

    <div class="jumbotron">
        <div class="container">
            <h1>Blog articles</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul>
                    <li><a href="#">Product news</a></li>
                    <li><a href="#">User stories</a></li>
                    <li><a href="#">Tipps and Tricks</a></li>
                    <li><a href="#">Archiv</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                Content
            </div>
        </div>
    </div>

@endsection

<!-- Scripts -->
@section('scripts')

@endsection
