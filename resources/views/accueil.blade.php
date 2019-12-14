@extends('layouts.template')

@section('title')
    Accueil
@endsection

@section('signin_session')
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Sign in</button>
@endsection

@section('content')
    <div class="container" style="height: 500px; padding-top:10px;">
        <!-- Creation du div qui englobera tout le carousel -->
        <div id="option" class="carousel slide" data-ride="carousel">

            <!-- Ajout des indicateurs de pagination en bas de page -->
            <ul class="carousel-indicators">
                <li data-target="#option" data-slide-to="0" class="active"></li>
                <li data-target="#option" data-slide-to="1"></li>
                <li data-target="#option" data-slide-to="2"></li>
                <li data-target="#option" data-slide-to="3"></li>
                <li data-target="#option" data-slide-to="4"></li>
                <li data-target="#option" data-slide-to="5"></li>
                <li data-target="#option" data-slide-to="6"></li>    
            </ul>

            <!-- Mise en place du daporama d'image -->
            <div class="carousel-iner" style="padding-top:10px;">
                <!-- On met en place les éléments du diaporama -->
                <div class="carousel-item active">
                    <img src="{{ URL::asset('assets/images/image7.PNG')}}" alt="mowali-images"/>
                </div>

                <div class="carousel-item">
                    <img src="{{ URL::asset('assets/images/image1.PNG')}}" alt="mowali-images"/>
                </div>

                <div class="carousel-item">
                    <img src="{{ URL::asset('assets/images/image2.PNG')}}" alt="mowali-images"/>
                </div>

                <div class="carousel-item">
                    <img src="{{ URL::asset('assets/images/image3.PNG')}}" alt="mowali-images"/>
                </div>

                <div class="carousel-item">
                    <img src="{{ URL::asset('assets/images/image4.PNG')}}" alt="mowali-images"/>
                </div>
                
                <div class="carousel-item">
                    <img src="{{ URL::asset('assets/images/image5.PNG')}}" alt="mowali-images"/>
                </div>

                <div class="carousel-item">
                    <img src="{{ URL::asset('assets/images/image6.PNG')}}" alt="mowali-images"/>
                </div>

                <!-- On met en place les controle précédent / suivant-->
                <div style="padding-bottom: 10px;">
                    <a href="#option" class="carousel-control-prev" data-slide="prev">
                        <!-- on met en place l'icone-->
                        <span class="carousel-control-prev-icon"><span>
                    </a>

                    <a href="#option" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection