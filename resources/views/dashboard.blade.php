@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <style type="text/css">
        #bg {
            background: rgb(241, 236, 239);
            padding: 1em;
            border: 2px solid rgb(255, 255, 255)
        }

        .lado {
            float: left;
        }

    </style>
    <div class="container">

        <div class="content">
            <center>
                <br>
                <h1>Bem Vindo ao</h1>
                <br>
                <br>
                <br>
                <a href="{{ route('home') }}">
                    <img src="{{ asset('argon') }}/img/brand/blue.png">
                </a>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </center>
        </div>
        <div class="container-fluid col-md-6">
            @include('layouts.footers.auth')
        </div>
    @endsection

    @push('js')
        <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    @endpush
