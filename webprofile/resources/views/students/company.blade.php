@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="CAbMTkP1j1AB85c6AQlyhTFPE6CX37lo4egssvlH">

    <title>Webprofile</title>

    <!-- Scripts -->
    <script src="http://127.0.0.1:8000/js/app.js" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">
    <style>
        .container{
            display: block; 
            margin-left: auto; 
            margin-right: auto;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex" href="http://127.0.0.1:8000">
                    <div><img src="/png/Webprofile.png" style="max-height:35px"></div>
                    <div class="pl-2 pt-1">webprofile</div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto navbar-right">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Tạo profile <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Các công ty</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/login">Đăng nhập</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/register">Đăng kí</a>
                        </li>
                                                                        <!-- For Employer -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Trang nhà tuyển dụng</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <div class="row container" >
            <div class="col-md-12 col-xs-12">
                <h4 class="uppercase">NHÀ TUYỂN DỤNG NỔI BẬT</h4>
                <div class="row" >
                    <div class="col-sm-3 col-xs-6 feature-company-img">
                        <a href="https://www.topcv.vn/cong-ty/tap-doan-digital-novaon/473.html" target="_blank">
                            <img  src="https://static.topcv.vn/company_logos/tap-doan-internet-novaon-5a780102ab8d7_rs.jpg" >
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 ">
                        <a href="https://www.topcv.vn/cong-ty/i-can-read/17698.html" target="_blank">
                            <img  src="https://static.topcv.vn/company_logos/i-can-read-5d1c7587834f5.jpg" >
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 ">
                        <a href="https://www.topcv.vn/cong-ty/cong-ty-tnhh-sailun-viet-nam/3163.html" target="_blank">
                            <img  src="https://static.topcv.vn/company_logos/cong-ty-tnhh-sailun-viet-nam-5d5a1f17bc7dd.jpg" >
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 ">
                        <a href="https://www.topcv.vn/cong-ty/reeracoen-vietnam-hanoi-branch/5497.html" target="_blank">
                            <img  src="https://static.topcv.vn/company_logos/reeracoen-vietnam-hanoi-branch-59afa54420a45_rs.jpg" >
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 ">
                        <a href="https://www.topcv.vn/cong-ty/cong-ty-tnhh-manulife-viet-nam/16830.html" target="_blank">
                            <img  src="https://static.topcv.vn/company_logos/cong-ty-tnhh-manulife-viet-nam-5c2f05c4d2d0b_rs.jpg" >
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 ">
                        <a href="https://www.topcv.vn/cong-ty/cong-ty-co-phan-chung-khoan-vps/1984.html" target="_blank">
                            <img src="https://static.topcv.vn/company_logos/cong-ty-cp-chung-khoan-ngan-hang-tmcp-viet-nam-thinh-vuong-5cf8b33988fe8.jpg" >
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 ">
                        <a href="https://www.topcv.vn/cong-ty/megaholdings-megaland/18167.html" target="_blank">
                            <img src="https://static.topcv.vn/company_logos/megaholdings-megaland-5c7cd4720a372_rs.jpg" >
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 ">
                        <a href="https://www.topcv.vn/cong-ty/cong-ty-co-phan-alo360-com/1136.html" target="_blank">
                            <img src="https://static.topcv.vn/company_logos/cong-ty-co-phan-alo360-com-5c6a272bc1958_rs.jpg" >
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 ">
                        <a href="https://www.topcv.vn/cong-ty/cong-ty-co-phan-cong-nghe-tai-chinh-smartosc/32574.html" target="_blank">
                            <img src="https://static.topcv.vn/company_logos/cong-ty-co-phan-cong-nghe-tai-chinh-smartosc-5e58ccc05bbe6.jpg" >
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 ">
                        <a href="https://www.topcv.vn/cong-ty/nashtech/7268.html" target="_blank">
                            <img src="https://static.topcv.vn/company_logos/nashtech-5e37de6a69f8f.jpg" >
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 ">
                        <a href="https://www.topcv.vn/cong-ty/cong-ty-co-phan-dau-tu-khoang-san-flc-stone/18870.html" target="_blank">
                            <img src="https://static.topcv.vn/company_logos/cong-ty-co-phan-dau-tu-khoang-san-flc-stone-5eb240215fcee.jpg" >
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 ">
                        <a href="https://www.topcv.vn/cong-ty/cong-ty-co-phan-dau-tu-khoang-san-flc-stone/18870.html" target="_blank">
                            <img src="https://static.topcv.vn/company_logos/cong-ty-co-phan-dau-tu-khoang-san-flc-stone-5eb240215fcee.jpg" >
                        </a>
                    </div>
                </div>     
            </div>
        </div>
        
        <!-- Footer -->
    <footer class="page-footer font-small fixed-bottom">

    <!-- Footer Elements -->
        <div class="container">

        <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1" href="https://twitter.com">
                        <i class="fa fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-gplus mx-1" href="https://github.com/manhcuongdoan/webprofile">
                        <i class="fa fa-github"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-li mx-1" href="https://vn.linkedin.com">
                        <i class="fa fa-linkedin"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-dribbble mx-1" href="https://dribbble.com">
                        <i class="fa fa-dribbble"> </i>
                    </a>
                </li>
            </ul>
            <!-- Social buttons -->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> Webprofile.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    </div>
</body>

</html>

@endsection