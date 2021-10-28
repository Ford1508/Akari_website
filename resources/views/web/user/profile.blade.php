
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <!-- custom css file link  -->
        <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
        <style>
            input[readonly]{
                background-color:white;
                border: 1em;
                font-size: 1.2em;
            }
        </style>
    </head>
{{-- @extends('web.layouts.template') --}}
{{-- @section('title','profile') --}}
    <body style="background-color: rgb(255, 225, 185)">
{{-- @section('content')   --}}
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
                @if (Auth::check())
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fas fa-user" id="login-btn"></i></button>
                        <div class="dropdown-content">
                            <a href="#">Bài đăng của tôi</a>
                            <a href="#">Lưu trữ</a>
                            <a href="{{ route('web.user.profile', Auth::user()->id) }}">Thông tin cá nhân</a>
                            <a href="{{ route('web.handle.logout') }}">Logout</a>
                        </div>
                    </div>
                @else
                    <a href="{{ route('web.form.login') }}" class="login">Login</a>
                @endif
            </div>
        </header>
        <section class="container" style="margin-top:5%">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-6 border-right" >
                        <div class="" >
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src= "{{asset('assets/web/images/'.$user->image)}}"/>
                                
                                <span class="font-weight-bold" style="font-size: 1.2em">{{ $user['name']}}</span>
                                <span class="text-black-50" style="font-size: 1.2em">{{ $user['email'] }}</span>
                                <span> </span>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="card">
                                <ul class="list-group list-group-flush" >
                                    <li class="list-group-item"><a class="dropdown-item" style="font-size: 1.5em" href="{{ route('web.user.profile', Auth::user()->id) }}"><b class="text-primary">個人情報</b></a></li>
                                    <li class="list-group-item"><a class="dropdown-item" style="font-size: 1.5em" href="https://www.w3schools.com/"><b class="text-primary">パスワードを変更する</b></a></li>
                                    <li class="list-group-item"><a class="dropdown-item" style="font-size: 1.5em" href="{{ route('web.user.uploadimg.form',['id' => $user['id']]) }}"><b class="text-primary">プロフィール写真を更新する</b></a></li>
                                    <li class="list-group-item"><a class="dropdown-item" style="font-size: 1.5em" href="{{ route('web.handle.logout') }}"><b class="text-primary">ログアウト</b></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                    <div class="col-md-6 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <h4 class="font-weight-bold" style="font-size: 2em">個人情報</h4>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels" style="font-size: 1.5em">名前</label>
                                <input type="text" class="form-control" style="font-weight:bold;" placeholder="Enter your name" value = "{{ $user['real_name']}} " readonly/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels" style="font-size: 1.5em">電話番号</label>
                                <input type="text" class="form-control" style="font-weight:bold;" placeholder="enter phone number" value="{{ $user['phone_number'] }}" readonly />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels" style="font-size: 1.5em">メールアドレス</label>
                                <input type="email" id="inputEmail" class="form-control" style="font-weight:bold;" placeholder="Enter your email" value="{{ $user['email'] }}" readonly/>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <label class="labels" style="font-size: 1.5em">性別</label>
                            </div>
                            <div class="col-md-3"></div>   
                            <div class="col-md-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" {{ $user['gender'] == 1 ? 'checked' : '' }} disabled='disabled'/>
                                    <label class="form-check-label" for="inlineRadio1" style="font-size: 1.5em">男性</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" {{ $user['gender'] == 0 ? 'checked' : '' }} disabled='disabled'/>
                                    <label class="form-check-label" for="inlineRadio2" style="font-size: 1.5em">女性</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels" style="font-size: 1.5em">誕生日: </label>
                                <input type="date" class="form-control" style="font-size: 1.5em" value="{{ $user['birth'] }}" data-date-format="mm/dd/yy" id="dp2" readonly>
                            </div>
                        </div>
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button"><a href="{{ route('web.user.edit.form',['id' => $user['id']]) }}"><span class="font-weight-bold">Edit</span></a></button> {{-- {{ route('web.user.edit.form',['id' => $user['id']]) }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
        <script src="js/app.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-- custom js file link  -->
        <script src="{{ asset('assets/web/script/script.js') }}"></script>
    </body>
</html>
{{-- @endsection --}}
