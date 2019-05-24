<!DOCTYPE html>
<html lang="tr" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Calendar - Apex responsive bootstrap 4 admin template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="/evre8/assets/img/ico/apple-icon-60.html">
    <link rel="apple-touch-icon" sizes="76x76" href="/evre8/assets/img/ico/apple-icon-76.html">
    <link rel="apple-touch-icon" sizes="120x120" href="/evre8/assets/img/ico/apple-icon-120.html">
    <link rel="apple-touch-icon" sizes="152x152" href="/evre8/assets/img/ico/apple-icon-152.html">
    <link rel="shortcut icon" type="image/x-icon" href="/evre8/assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="/evre8/assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="/evre8/assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="/evre8/assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="/evre8/assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/evre8/assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="/evre8/assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="/evre8/assets/vendors/css/fullcalendar.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="/evre8/assets/css/app.css">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->

    @yield('css')
</head>
<body data-col="2-columns" class=" 2-columns ">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">


    <!-- main menu-->
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    <div data-active-color="white" data-background-color="man-of-steel" data-image="/evre8/assets/img/sidebar-bg/01.jpg" class="app-sidebar">
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
            <div class="logo clearfix"><a href="{{route('psikolog.dashboard')}}" class="logo-text float-left">
                    <div class="logo-img"><img src="/evre8/assets/img/logo.png"/></div><span class="text align-middle">APEX</span></a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="expanded" class="ft-toggle-right toggle-icon"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a></div>
        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="sidebar-content">
            <div class="nav-container">
                <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                    <li class=" nav-item"><a href="{{route('Danisan.index')}}"><i class="ft-users"></i><span data-i18n="" class="menu-title">Danisan</span></a>
                    <li class=" nav-item"><a href="{{route('Calisma-Saatleri.index')}}"><i class="ft-clock"></i><span data-i18n="" class="menu-title">Çalışma Saatleri</span></a>
                    <li class=" nav-item"><a href="{{route('Takvim.index')}}"><i class="ft-calendar"></i><span data-i18n="" class="menu-title">Randevular</span></a>
                    <li class=" nav-item"><a href="{{route('Psikolog-blog.index')}}"><i class="ft-trending-up"></i><span data-i18n="" class="menu-title">Blog</span></a>
                    <li class=" nav-item"><a href="{{route('Destek-Biletlerim.index')}}"><i class="ft-cast"></i><span data-i18n="" class="menu-title">Destek Biletleri</span></a>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-settings"></i><span data-i18n="" class="menu-title">Ayarlar</span></a>
                        <ul class="menu-content" style="">
                            <li class=" nav-item"><a href="{{route('psikolog.profil.getir')}}"><i class="ft-user"></i><span data-i18n="" class="menu-title">Üyelik Ayarları</span></a>
                        </ul>
                        <ul class="menu-content" style="">
                            <li class=" nav-item"><a href="{{route('psikolog.sifre.getir')}}"><i class="ft-lock"></i><span data-i18n="" class="menu-title">Şifre Değiştir</span></a>
                        </ul>
                        <ul class="menu-content" style="">
                            <li class=" nav-item"><a href="{{route('psikolog.mail.getir')}}"><i class="ft-mail"></i><span data-i18n="" class="menu-title">Email Değiştir</span></a>
                        </ul>
                    </li>

                    <hr>
                    <li class=" nav-item">
                            <a class="dropdown-item"  href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit()">
                                <i class="ft-log-out"></i><span data-i18n="" class="menu-title">Çıkış</span></a>
                            </a>
                            <form id="logout-form" action="{{ route('psikolog.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </li>




                </ul>
            </div>
        </div>
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
    </div>
    <!-- / main menu-->

    <div class="main-panel">

        <nav class="navbar navbar-expand-lg navbar-light bg-faded">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <form role="search" class="navbar-form navbar-right mt-1">
                        <div class="position-relative has-icon-right">
                            <input type="text" placeholder="Search" class="form-control round"/>
                            <div class="form-control-position"><i class="ft-search"></i></div>
                        </div>
                    </form>
                </div>
                <div class="navbar-container">
                    <div id="navbarSupportedContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav">


                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="main-content">
            <div class="content-wrapper">

                @yield('content')


            </div>
        </div>
        <footer class="footer footer-static footer-light">
            <p class="clearfix text-muted text-sm-center px-2"><span>Copyright  {{date('Y')}} <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">8 EVRE </a>, All rights reserved. </span></p>
        </footer>

    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

@yield('js')
<!-- Theme customizer Ends-->
<!-- BEGIN VENDOR JS-->
<script src="/evre8/assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="/evre8/assets/vendors/js/core/popper.min.js" type="text/javascript"></script>
<script src="/evre8/assets/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="/evre8/assets/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="/evre8/assets/vendors/js/prism.min.js" type="text/javascript"></script>
<script src="/evre8/assets/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="/evre8/assets/vendors/js/screenfull.min.js" type="text/javascript"></script>
<script src="/evre8/assets/vendors/js/pace/pace.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="/evre8/assets/vendors/js/moment.min.js" type="text/javascript"></script>
<script src="/evre8/assets/vendors/js/fullcalendar.min.js" type="text/javascript"></script>
<script src="/evre8/assets/vendors/js/jquery-ui.min.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN APEX JS-->
<script src="/evre8/assets/js/app-sidebar.js" type="text/javascript"></script>
<script src="/evre8/assets/js/notification-sidebar.js" type="text/javascript"></script>
<script src="/evre8/assets/js/customizer.js" type="text/javascript"></script>
<!-- END APEX JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="/evre8/assets/js/data-tables/datatable-advanced.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
</body>

</html>