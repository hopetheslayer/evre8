<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Blog Medium Image Sidebar Right | Porto - Responsive HTML5 Template 7.0.0</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/8evre/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/8evre/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/8evre/vendor/animate/animate.min.css">
    <link rel="stylesheet" href="/8evre/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="/8evre/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/8evre/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/8evre/vendor/magnific-popup/magnific-popup.min.css">



    <!-- Theme CSS -->
    <link rel="stylesheet" href="/8evre/css/theme.css">
    <link rel="stylesheet" href="/8evre/css/theme-elements.css">
    <link rel="stylesheet" href="/8evre/css/theme-blog.css">
    <link rel="stylesheet" href="/8evre/css/theme-shop.css">

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="/8evre/css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="/8evre/css/custom.css">

    <!-- Head Libs -->
    <script src="/8evre/vendor/modernizr/modernizr.min.js"></script>

    @yield('css')

</head>
<body>

<div class="body">

    <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            @foreach($ayar as $a)
                                <a href="/">

                                    <img alt="Porto"  height="40" src="/uploads/theme/{{$a->logo}}">
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown">
                                                <a data-hash class="dropdown-item dropdown-toggle " href="{{'/'}}">
                                                    Anasayfa
                                                </a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{route('blog')}}">Blog</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="{{route('front.psikolog')}}">Psikologlar</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" data-hash data-hash-offset="68" href="#contact">İletişim</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                            <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                    <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                    <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                        <form role="search" action="page-search-results.html" method="get">
                                            <div class="simple-search input-group">
                                                <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                                <span class="input-group-append">
															<button class="btn" type="submit">
																<i class="fa fa-search header-nav-top-icon"></i>
															</button>
														</span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div role="main" class="main">

        <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 align-self-center p-static order-2 text-center">

                        <h1 class="text-light font-weight-bold text-8">@yield('alt-title') </h1>
                        <span class="sub-title text-light">@yield('alt-des')</span>
                    </div>


                </div>
            </div>
        </section>

        @yield('content')


    </div>

   @include('frontend.frontend-partials.footer')
</div>

<!-- Vendor -->
<script src="/8evre/vendor/jquery/jquery.min.js"></script>
<script src="/8evre/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="/8evre/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="/8evre/vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="/8evre/vendor/popper/umd/popper.min.js"></script>
<script src="/8evre/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/8evre/vendor/common/common.min.js"></script>
<script src="/8evre/vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="/8evre/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="/8evre/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="/8evre/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="/8evre/vendor/isotope/jquery.isotope.min.js"></script>
<script src="/8evre/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="/8evre/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/8evre/vendor/vide/jquery.vide.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="/8evre/js/theme.js"></script>

<!-- Theme Custom -->
<script src="/8evre/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="/8evre/js/theme.init.js"></script>

@yield('js')

</body>
</html>
