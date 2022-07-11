<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\lib\bootstrap\css\bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\lib\font-awesome\css\font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\lib\select2\css\select2.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\lib\jquery.bxslider\jquery.bxslider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\lib\owl.carousel\owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\lib\fancyBox\jquery.fancybox.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\lib\jquery-ui\jquery-ui.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\reset.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\style.css ')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\responsive.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\option14.css ')}}" />
    <title>Trang chủ</title>
</head>
<body class="home option14">
<!-- HEADER -->
<div id="header" class="header style14">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-4">
                <div id="main-menu" class="main-menu menu-option14">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active">
                                        <a href="index.html">Trang chủ</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm</a>
                                        <ul class="dropdown-menu mega_dropdown" role="menu">
                                            <li class="block-container">
                                                <ul class="block">
                                                    <li class="link_container"><a href="ao.html">Áo quần</a></li>
                                                    <li class="link_container"><a href="giay.html">Giày dép</a></li>
                                                    <li class="link_container"><a href="mu.html">Mũ</a></li>
                                                    <li class="link_container"><a href="phu.html">Phụ kiện</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="tintuc.html">Giới Thiệu</a></li>
                                    <li><a href="lienhe.html">Liên hệ</a></li>
                                    
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-4 text-center"><a href="index.html"><img src="{{ asset('assets/data/option14/logo.jpg')}}" alt=""></a></div>
            <div class="col-sm-12 col-md-5 col-lg-4">
                <div class="top-header">
                    <div class="nav-top-links">
                        <a class="first-item" href="hang.html">Đơn Hàng</a>
                    </div>
                    <div class="nav-top-links">
                        <a href="dangki.html">Đăng kí</a>
                    </div>
                    <div class="nav-top-links">
                        <a href="login.html">Đăng Nhập</a>
                    </div>
                    <div class="form-search">
                        <span class="icon fa fa-search"></span>
                        <div class="form form-search-inner">
                            <input type="text" placeholder="Tên sản phẩm">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="block-slide14 owl-carousel" data-dots="true" data-loop="true" data-nav="true" data-items="1" data-autoplay="true">
    <img src="{{ asset('assets/data/option14/slide1.jpg')}}" >
    <img src="{{ asset('assets/data/option14/slide2.jpg')}}" >
    <img src="{{ asset('assets/data/option14/slide3.jpg')}}" >
    <img src="{{ asset('assets/data/option14/slide4.jpg')}}" >
</div>
	@yield('content')
<!-- Footer -->
</div>
<footer class="footer5" style="margin-top: 20px">
     <div class="container">
         <div class="footer-top">
            <div class="left">
                <div class="footer-logo"><a href="#"><img src="{{ asset('assets/data/option14/logo.jpg')}}" alt=""></a></div>
                <ul class="address-list">
                    <li class="feature-icon first">
                        <p class="no-margin"><span class="tit-name">Địa chỉ:</span><span class="tit-contain">242 Huỳnh Văn Nghệ, TP Đà Nẵng</span></p>
                    </li>
                    <li class="feature-icon">
                        <p><span class="tit-name">Điện thoại:</span><span class="tit-contain">0963768642</span></p>
                    </li>
                    <li class="feature-icon">
                        <p><span class="tit-name">Email:</span><span class="tit-contain">nntn.1911o.o@gmail.com</span></p>
                    </li>
                </ul>
            </div>

            <div class="right">
                 <div class="row">
                     <div class="col-sm-4">
                         <div class="widget-container">
                             <h3 class="widget-title">Bài viết</h3>
                             <div class="widget-body">
                                <ul>
                                    <li><a href="#">Chính sách bảo mật</a></li>
                                    <li><a href="#">Điều khoản sử dụng</a></li>
                                    <li><a href="#">Chế độ vận chuyển</a></li>
                                    <li><a href="#">Chế độ bảo hành</a></li>
                                    
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="widget-container">
                            <h3 class="widget-title">Chứng nhận</h3>
                             <p><img src="{{ asset('assets/images/tbao-bct.png')}}"></p>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="widget-container recent_post">
                            <h3 class="widget-title">Vào Shop Bằng Mã QR</h3>
                            <ul>
                                 <div class="footer-logo"><img src="qr.png"></div>
                            </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         
     </div>
</footer>

	<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
	<!-- Script-->
	<script type="text/javascript" src="{{ asset('assets/lib/jquery/jquery-1.11.2.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/lib/select2/js/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/lib/jquery.bxslider/jquery.bxslider.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/lib/owl.carousel/owl.carousel.min.js')}}"></script>
	<!-- COUNTDOWN -->
	<script type="text/javascript" src="{{ asset('assets/lib/countdown/jquery.plugin.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/lib/countdown/jquery.countdown.js')}}"></script>
	<!-- ./COUNTDOWN -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.actual.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/lib/fancyBox/jquery.fancybox.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/lib/jquery.elevatezoom.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/theme-script.js')}}"></script>

	<!-- right click prevent -->
	  <script type="text/javascript">
	    document.addEventListener("contextmenu", function(e){
	        e.preventDefault();
	    }, false);
	  </script>

</body>
</html>
<style>
    body{
        background-color: #F5F5F5;
        
    }
</style>
