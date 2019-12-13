@extends('layouts.template')

@section('title')
    Accueil
@endsection

@section('signin_session')
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Sign in</button>
@endsection

@section('content')
    <div class="container bg-light shadow-lg p-3 mb-5 bg-white rounded" style="height: 800px;">

        <div class="carousel" data-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ URL::asset('assets/images/image7.png')}}" alt="Un tigre">
                </div>
                
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ URL::asset('assets/images/image1.png')}}" alt="Un tigre">
                </div>

                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ URL::asset('assets/images/image2.png')}}" alt="Un tigre">
                </div>

                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ URL::asset('assets/images/image3.png')}}" alt="Un tigre">
                </div>

                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ URL::asset('assets/images/image4.png')}}" alt="Un tigre">
                </div>

                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ URL::asset('assets/images/image5.png')}}" alt="Un tigre">
                </div>

                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ URL::asset('assets/images/image6.png')}}" alt="Un tigre">
                </div>

            </div>
            
        </div>

    </div>
@endsection