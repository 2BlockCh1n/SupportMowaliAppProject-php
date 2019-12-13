@extends('layouts.template')

@section('title')
    Accueil
@endsection

@section('signin_session')
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Sign in</button>
@endsection

@section('content')
    <div class="row" style="background-image:url({{ URL::asset('assets/images/afrique-phone.webp')}})">
    
    </div>
@endsection