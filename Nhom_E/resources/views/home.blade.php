@extends('layouts.client')
@section('content')
    @include('publics.client-header')

    <!-- main content -->

    @include('client.main-content')
    <!-- footer -->

    @include('publics.client-footer')
    <!-- back top top -->
    <div class="back-to-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>
    <!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
@endsection