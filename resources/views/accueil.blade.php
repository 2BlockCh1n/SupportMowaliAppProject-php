@extends('layouts.template')

@section('title')
    Accueil
@endsection

@section('signin_session')
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Sign in</button>
@endsection

@section('content')
    <div class="row">
    <img src="{{ URL::asset('assets/images/afrique-phone.webp')}}" alt="home-font picture"/>
    </div>
@endsection