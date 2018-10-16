@extends('widget.layouts.structure')
@section('content')
    <div class="spin">
        <div class=" decor">
            <img src="https://media.vinfast.vn/frontend02/web_images/vf-livestream-backdrop-animate-logo-3.png" alt="">
        </div>
        <div class="frontpic">
            <img src="https://i.imgur.com/vL5dYTd.jpg" alt="">
        </div>
        <div class=" decor">
            <img src="https://media.vinfast.vn/frontend02/web_images/vf-livestream-backdrop-animate-logo-3.png" alt="">
        </div>
    </div>
    <div class="carousel-setting">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner carousel-setting">
                <div class="carousel-item active">
                    <img src="https://i.imgur.com/03glcRW.png" alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://i.imgur.com/6brC7Je.png" alt="">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
         <div class="video col-md-12" style="background-color: black; padding-top: 40px">
             <span style="padding-left: 80px">Showcase</span>
             <div style="margin-left: 240px; margin-top: 10px;">
                 <iframe  width="850px" height="450px" src="https://www.youtube.com/embed/8Imu2COnlPU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                 </iframe>
             </div>
         </div>
    <div>
        <img src="https://i.imgur.com/yuKORjb.png" alt="">
    </div>


@endsection