<!doctype html>
<html dir=ltr lang=en>
<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=keywords
          content="auto parts, baby store, ecommerce, electronics, fashion, food, marketplace, modern, multi vendor, multipurpose, organic, responsive, shop, shopping, store">
    <meta name=description content="Zeomart - Multi-Vendor & Marketplace HTML Template">
    <meta name=CreativeLayers content=ATFN>
    <link rel=stylesheet href="{{asset('css/bootstrap.min.css')}}">
    <link rel=stylesheet href="{{asset('css/ace-responsive-menu.css')}}">
    <link rel=stylesheet href="{{asset('css/menu.css')}}">
    <link rel=stylesheet href="{{asset('css/fontawesome.css')}}">
    <link rel=stylesheet href="{{asset('css/flaticon.css')}}">
    <link rel=stylesheet href="{{asset('css/bootstrap-select.min.css')}}">
    <link rel=stylesheet href="{{asset('css/animate.css')}}">
    <link rel=stylesheet href="{{asset('css/slider.css')}}">
    <link rel=stylesheet href="{{asset('css/style.css')}}">
    <link rel=preconnect href="https://fonts.googleapis.com">
    <link rel=preconnect href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&family=Poppins:wght@700&display=swap"
          rel=stylesheet>
    <link rel=stylesheet href="css/responsive.css">
    <title>Zeomart - Multi-Vendor & Marketplace HTML Template</title>
    <link href="{{asset('images/favicon.ico')}}'" sizes=128x128 rel="shortcut icon" type=image/x-icon>
    <link href="{{asset('images/favicon.ico')}}'" sizes=128x128 rel="shortcut icon">
    <link href="{{asset('images/apple-touch-icon-60x60.png')}}" sizes=60x60 rel=apple-touch-icon>
    <link href="{{asset('images/apple-touch-icon-72x72.png')}}" sizes=72x72 rel=apple-touch-icon>
    <link href="{{asset('images/apple-touch-icon-114x114.png')}}" sizes=114x114 rel=apple-touch-icon>
    <link href="{{asset('images/apple-touch-icon-180x180.png')}}" sizes=180x180 rel=apple-touch-icon>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .hero {
            background: #D1ECFD url("{{asset('images/home/bg-circle.svg')}}") no-repeat bottom right;
            /*			background-color: #fde8ed;*/
            background-size: 75% !important;
            height: 600px;
            padding: 24px 0 20px 0;
            position: relative;
            padding-left: 40px;
        }

        .hero1 {
            background: url("{{asset('images/home/banner.png')}}") no-repeat bottom right;
            background-size: 60% auto;
            height: 100%;
            display: inline-block;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="wrapper ovh">
    <div class=preloader></div>
    <x-site.header />
    <div class="body_content_wrapper position-relative pt30">
        {{ $slot }}
    </div>
    <x-site.footer />
    <a class=scrollToHome href="index.html#"><i class="fas fa-angle-up"></i></a>
</div>
<script src="{{asset('js/jquery-3.6.0.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.0.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('js/jquery.mmenu.all.js')}}"></script>
<script src="{{asset('js/ace-responsive-menu.js')}}"></script>
<script src="{{asset('js/jquery-scrolltofixed-min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/slider.js')}}"></script>
<script src="{{asset('js/scrollbalance.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
