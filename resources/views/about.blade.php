@extends('layout.master')
@section('title','About')
@section('content')
<div class="col-md-6">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="resources/assets/img/chinese.jpeg" style="width: 100%; height: 50vh;" alt="Chinese">
                <div class="carousel-caption">
                    <h3><a href="#" class="btn btn-carousal">Chinese</a></h3>
                    <p>Checkout these Chinese Cuisine!</p>
                </div>
            </div>

            <div class="item">
                <img src="resources/assets/img/bangladeshi.jpeg" style="width: 100%; height: 50vh;" alt="Bangladeshi">
                <div class="carousel-caption">
                    <h3><a href="#" class="btn btn-carousal">Bangladeshi</a></h3>
                    <p>Mouth watering deshi foods!</p>
                </div>
            </div>

            <div class="item">
                <img src="resources/assets/img/indian.jpeg" style="width: 100%; height: 50vh;" alt="Indian">
                <div class="carousel-caption">
                    <h3><a href="#" class="btn btn-carousal">Indian</a></h3>
                    <p>Indian Traditional Cuisine!</p>
                </div>
            </div>
            
             <div class="item">
                <img src="resources/assets/img/images.jpeg" style="width: 100%; height: 50vh;" alt="Burger">
                <div class="carousel-caption">
                    <h3><a href="#" class="btn btn-carousal">Burgers</a></h3>
                    <p>Cheesy Double patty berger!</p>
                </div>
            </div>
            
             <div class="item">
                <img src="resources/assets/img/images (3).jpeg" style="width: 100%; height: 50vh;" alt="Biriyani">
                <div class="carousel-caption">
                    <h3><a href="#" class="btn btn-carousal">Biriyani</a></h3>
                    <p>Mutton Biriyani!</p>
                </div>
            </div>
            
             <div class="item">
                <img src="resources/assets/img/images (2).jpeg" style="width: 100%; height: 50vh;" alt="Tacos">
                <div class="carousel-caption">
                    <h3><a href="#" class="btn btn-carousal">Tacos</a></h3>
                    <p>Mexican Love!</p>
                </div>
            </div>
            
             <div class="item">
                <img src="resources/assets/img/images (1).jpeg" style="width: 100%; height: 50vh;" alt="Shaslick">
                <div class="carousel-caption">
                    <h3><a href="#" class="btn btn-carousal">Shaslick</a></h3>
                    <p>Combination of chicken, onion, carrots and many more!</p>
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

</div>
 
<head>
<style>
body {background-color: cadetblue;}
h1   {color: blue;}
p    {color: white;}
</style>
</head>
<div class="col-md-6">
<h2>ABOUT FOOD REVIEW<h2>
<h4>Providing western cuisine such as salad, soup, varieties of fried chicken, pizza & pasta, using 100% full taste of coffee bean for international coffee such as cappuccino, latte, espresso & others refreshing drinks. Can accommodate for up to …….. person at a time.

 serving fresh & healthiest western cuisine such as salad, soup, varieties of fried & grilled chicken menu, pizza and refreshing cold & hot beverages likes international coffee.</h4>
<h2>Why choose FOOD REVIEW</h2>

<h4>serving fresh & healthiest western cuisine such as salad, soup, varieties of fried & grilled chicken menu, pizza and refreshing cold & hot beverages likes international coffee.

<h2>What makes "FOOD REVIEW" different?</h2> 

<h4>We are using only 100% Olive Oil in "bbq". You will be treated with the inimitable bbq’s taste and not compromising on the value of healthy-eating.</h4>
</div>

@endsection