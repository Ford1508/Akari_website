<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

        <style>
            
            .zoom:hover {
                transition: transform .3s;
                transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
            }
        </style>
        <style>
            .card-1 {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem;
            }
        </style>
        <style>
            .card-1:hover {
                transition: box-shadow 0.3s ease-in-out;
                transition: transform .4s;
                transform: scale(0.9); 
                box-shadow: 0 0 30px 0 rgb(217, 255, 0);
            }
            
        </style>

        <style>
            .container {
                box-shadow: 0 0 35px 0 rgba(17, 0, 255, 0.26);
                border: 1px solid rgb(129, 0, 0);
            }
            
        </style>
        <style>
            .container:hover {
                transition: box-shadow 0.3s ease-in-out;
                box-shadow: 0 0 60px 0 rgba(155, 2, 134, 0.589);
            }
            
        </style>
        <style>
            h1 {
                margin-left: 2%;
                margin-top: 1%
            }
        </style>
    </head>
    <body style="background-image: url('https://itvn.blog/wp-content/uploads/2020/07/Top-50-h%C3%ACnh-n%E1%BB%81n-m%C3%A1y-t%C3%ADnh-4k-%C4%91%E1%BA%B9p-v%C3%A0-ch%E1%BA%A5t-l%C6%B0%E1%BB%A3ng-nh%E1%BA%A5t-scaled.jpg')">
        <div style="margin-top: 5%"></div>
        <div>
            <div class="container" style="background-color: rgb(99, 99, 99)">
                <div className="row">
                    <div style="margin-top: 1em"></div>
                    <div className="d-flex flex-column align-items-center text-center p-3 py-5">
                        <div class="card" style="background-color: rgb(0, 0, 0)">
                            <h1 class="text-light">アーカイバ</h1>
                        </div>
                        <div style="margin-top: 1em"></div>
                        <div class="card-body" style="background-image: url('https://cdn.wallpapersafari.com/73/91/pw678m.jpg')"> <!-- style="background-color: rgb(0, 29, 43)" -->
                            <div className="row mt-2">
                                <div class="">
                                    <div class="row pre-scrollable"> <!-- class="d-flex flex-row flex-nowrap overflow-auto" -->
                                        <div class="col-6 col-sm-4 col-md-3 p-2">
                                            <a href="">
                                                <div class="card-1">
                                                    <img src="https://www.pixsy.com/wp-content/uploads/2021/04/ben-sweet-2LowviVHZ-E-unsplash-1.jpeg" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">タイトル</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 p-2">
                                            <a href="">
                                                <div class="card-1">
                                                    <img src="https://www.pixsy.com/wp-content/uploads/2021/04/ben-sweet-2LowviVHZ-E-unsplash-1.jpeg" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">タイトル</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 p-2">
                                            <a href="">
                                                <div class="card-1">
                                                    <img src="https://www.pixsy.com/wp-content/uploads/2021/04/ben-sweet-2LowviVHZ-E-unsplash-1.jpeg" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">タイトル</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 p-2">
                                            <a href="">
                                                <div class="card-1">
                                                    <img src="https://www.pixsy.com/wp-content/uploads/2021/04/ben-sweet-2LowviVHZ-E-unsplash-1.jpeg" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">タイトル</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 p-2">
                                            <a href="">
                                                <div class="card-1">
                                                    <img src="https://www.pixsy.com/wp-content/uploads/2021/04/ben-sweet-2LowviVHZ-E-unsplash-1.jpeg" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">タイトル</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 p-2">
                                            <a href="">
                                                <div class="card-1">
                                                    <img src="https://www.pixsy.com/wp-content/uploads/2021/04/ben-sweet-2LowviVHZ-E-unsplash-1.jpeg" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">タイトル</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                    <div style="margin-top: 1em"></div>
                </div>
            </div>
        </div>
        <script src="js/app.js">
        </script>
    </body>
</html>