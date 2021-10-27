<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
</head>
<body>
<!-- header section starts  -->
<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="{{ route('web.home') }}" class="logo"><span>A</span>kari</a>
    <nav class="navbar">
        <a href="{{ route('web.home') }}">home</a>
        <div class="dropdown">
            <a href="#">Ăn uống</a>
            <div class="dropdown-content">
                <a href="#">Thức ăn</a>
                <a href="#">Thức uống</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Du lịch</a>
            <div class="dropdown-content">
                <a href="#">Du lịch sinh thái</a>
                <a href="#">Resort</a>
                <a href="#">Bảo tàng mỹ thuật</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Giải trí</a>
            <div class="dropdown-content">
                <a href="#">Công viên</a>
                <a href="#">Siêu thị</a>
                <a href="#">Rạp chiếu phim</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Dịch vụ</a>
            <div class="dropdown-content">
                <a href="#">Giặt ủi</a>
                <a href="#">Xe thuê</a>
                <a href="#">Spa</a>
            </div>
        </div>
    </nav>
    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        @if (Auth::check())
            <div class="dropdown">
                <button class="dropbtn"><i class="fas fa-user" id="login-btn"></i></button>
                <div class="dropdown-content">
                    <a href="#">Bài đăng của tôi</a>
                    <a href="#">Lưu trữ</a>
                    <a href="#">Thông tin cá nhân</a>
                    <a href="{{ route('web.handle.logout') }}">Logout</a>
                </div>
            </div>
            <a class="fas fa-plus" id="plus-btn" href="{{route('baiviet.create')}}"></a>
        @else
            <a href="{{ route('web.form.login') }}" class="login">Login</a>
        @endif
    </div>
    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>
</header>
<!-- header section ends -->

@yield('content')

<!-- brand section  -->
<section class="brand-container">
    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{ asset('assets/web/images/1.jpg') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/web/images/2.jpg') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/web/images/3.jpg') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/web/images/4.jpg') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/web/images/5.jpg') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/web/images/6.jpg') }}" alt=""></div>
        </div>
    </div>
</section>
<!-- footer section  -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">packages</a>
            <a href="#">services</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>
    </div>
    <h1 class="credit"> created by <span> team Akari </span> | all rights reserved! </h1>
</section>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="{{ asset('assets/web/script/script.js') }}"></script>

</body>
</html>