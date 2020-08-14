<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .welcome hr {
	            border-top: 2px solid rgba(62,44,100, 0.6);
	            width: 95%;	
	            margin-bottom: 2rem;
            }
            .fa-java {
	            color: purple;
            }
            .fa-python {
                color: blue;
            }
            .fa-php {
                color: purple;
            }
            .fa-java, .fa-python, .fa-php {
                font-size: 4em;
                margin: 1rem;
            }
            hr.light {
                border-top: 1px solid #d5d5d5;
                width: 75%;
            }
           
            .btn-custom {
                border-radius: 50px;
                margin-top: 20px;
                
                
                
                color: white !important;
                padding: 10px 20px 10px;
                margin-right: 20px;
               
            }
            .btn-primary1 {
            background-color: #005288;
            color: white;
            margin-left: 500px;
        }
        .btn-primary2 {
            background-color: #005288;
            color: white;
            margin-right: 500px;
        }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Chào Mừng đến với Webprofile
                </div>
                
                <div class="container-fluid padding">
                    <div class="row welcome text-center">
                        
                        <!-- Horizontal Rule -->
                        <hr>
                        
                    </div>
                    <div class="container-fluid padding">
                        <div class="row text-center padding">
                            <div class="col-xs-12 col-sm-6 col-md-6 ">
                            <a href="https://www.topcv.vn/mau-cv" class="btn btn-primary1 btn-shadow btn-custom" style="font-weight: bold;">TRANG CHỦ</a>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                            <a href="https://www.topcv.vn/mau-cv" class="btn btn-primary2 btn-shadow btn-custom" style="font-weight: bold;">TẠO PROFILE</a>
                            
                            </div>
                            
                        </div>
                        <hr class="my-4">
                    </div>
                </div>
                <div class="container-fluid padding">
                    <div class="row padding text-center">
                        <div class="col-md-12">
                            <h2>Giới thiệu</h2>
                            <p>Webprofile giúp Kết nối cơ hội việc làm thông qua CV.</p>
                            <p>Ứng viên sẽ được nhà tuyển dụng săn đón </p>
                            <br>
                        </div>
                    </div>
                    <hr class="my-4">
                </div>
            
        </div>
        
        
    </body>
</html>
