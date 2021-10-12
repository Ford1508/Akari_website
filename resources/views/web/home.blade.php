@extends('web.layouts.template')

@section('title','Home')

@section('content')
<!-- home section starts  -->
<section class="home" id="home">
    <div class="content">
        <h3>adventure is worthwhile</h3>
        <p>dicover new places with us, adventure awaits</p>
        <a href="#" class="btn">discover more</a>
    </div>
    <div class="controls">
        <span class="vid-btn active" data-src="{{ asset('assets/web/images/vid-1.mp4') }}"></span>
        <span class="vid-btn" data-src="{{ asset('assets/web/images/vid-2.mp4') }}"></span>
        <span class="vid-btn" data-src="{{ asset('assets/web/images/vid-3.mp4') }}"></span>
        <span class="vid-btn" data-src="{{ asset('assets/web/images/vid-4.mp4') }}"></span>
        <span class="vid-btn" data-src="{{ asset('assets/web/images/vid-5.mp4') }}"></span>
    </div>
    <div class="video-container">
        <video src="{{ asset('assets/web/images/vid-1.mp4') }}" id="video-slider" loop autoplay muted></video>
    </div>
</section>
<!-- packages section starts  -->
<section class="packages" id="packages">
    <h1 class="heading">
        <span>N</span>
        <span>e</span>
        <span>w</span>
        <span>P</span>
        <span>o</span>
        <span>s</span>
        <span>t</span>
    </h1>
    <div class="box-container">
        <div class="box">
            <img src="{{ asset('assets/web/images/p-1.jpg') }}" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> mumbai </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">See detail</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('assets/web/images/p-2.jpg') }}" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> hawaii </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">See detail</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('assets/web/images/p-3.jpg') }}" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> sydney </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">See detail</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('assets/web/images/p-4.jpg') }}" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> paris </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">See detail</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('assets/web/images/p-5.jpg') }}" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> tokyo </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">See detail</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('assets/web/images/p-6.jpg') }}" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> eypt </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">See detail</a>
            </div>
        </div>
    </div>
</section>
<!-- packages section ends -->
<!-- services section starts  -->
<section class="services" id="services">
    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safty guide</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
    </div>
</section>
<!-- services section ends -->
<!-- gallery section starts  -->
<section class="gallery" id="gallery">
    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>
    <div class="box-container">
        <div class="box">
            <img src="{{ asset('assets/web/images/g-1.jpg') }}" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('assets/web/images/g-2.jpg') }}" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('assets/web/images/g-3.jpg') }}" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('assets/web/images/g-4.jpg') }}" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('assets/web/images/g-5.jpg') }}" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('assets/web/images/g-6.jpg') }}" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('assets/web/images/g-7.jpg') }}" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('assets/web/images/g-8.jpg') }}" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('assets/web/images/g-9.jpg') }}" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
    </div>
</section>
<!-- gallery section ends -->
<!-- review section starts  -->
<section class="review" id="review">
    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>
    <div class="swiper-container review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box">
                    <img src="{{ asset('assets/web/images/pic1.png') }}" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="{{ asset('assets/web/images/pic2.png') }}" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="{{ asset('assets/web/images/pic3.png') }}" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="{{ asset('assets/web/images/pic4.png') }}" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- review section ends -->
<!-- contact section starts  -->
<section class="contact" id="contact">
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>
    <div class="row">
        <div class="image">
            <img src="{{ asset('assets/web/images/contact-img.svg') }}" alt="">
        </div>
        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>
    </div>
</section>
<!-- contact section ends -->
@endsection