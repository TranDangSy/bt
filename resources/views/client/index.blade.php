@extends('.client.layouts.structure')
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
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://danhgiaxe.net/wp-content/uploads/2018/10/suv-vinfast-lux-sa2-0-voi-noi-that-sang-trong-co-gia-du-kien-bao-nhieu-2120.jpg" alt="">
            </div>
            <div class="carousel-item">
                <img src="https://danhgiaxe.net/wp-content/uploads/2018/10/suv-vinfast-lux-sa2-0-voi-noi-that-sang-trong-co-gia-du-kien-bao-nhieu-2120.jpg" alt="">
            </div>
            <div class="carousel-item">
                <img src="https://danhgiaxe.net/wp-content/uploads/2018/10/suv-vinfast-lux-sa2-0-voi-noi-that-sang-trong-co-gia-du-kien-bao-nhieu-2120.jpg" alt="">
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
@endsection
