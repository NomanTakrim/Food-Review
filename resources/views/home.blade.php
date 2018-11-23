@extends('layout.master')
@section('title','Home')
@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="resources/assets/img/chinese.jpeg" style="width: 100%; height: 80vh;" alt="Chinese">
                <div class="carousel-caption">
                    <h3><a href="#" class="btn btn-carousal">Chinese</a></h3>
                    <p>LA is always so much fun!</p>
                </div>
            </div>

            <div class="item">
                <img src="resources/assets/img/bangladeshi.jpeg" style="width: 100%; height: 80vh;" alt="Bangladeshi">
                <div class="carousel-caption">
                    <h3><a href="#" class="btn btn-carousal">Bangladeshi</a></h3>
                    <p>Thank you, Bangladeshi!</p>
                </div>
            </div>

            <div class="item">
                <img src="resources/assets/img/indian.jpeg" style="width: 100%; height: 80vh;" alt="Indian">
                <div class="carousel-caption">
                    <h3><a href="#" class="btn btn-carousal">Indian</a></h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection