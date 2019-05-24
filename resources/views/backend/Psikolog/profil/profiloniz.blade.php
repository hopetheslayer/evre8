

<!DOCTYPE html>
<html class="sticky-header-reveal">
<head>

                        <!-- I just spend my 50 hour :( . >
                         ---------------------------
                        \   ^__^
                         \  (oo)\_______
                            (__)\       )\/\
                                ||----w |
                                ||     ||
                                      -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">

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

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="/8evre/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="/8evre/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="/8evre/vendor/rs-plugin/css/navigation.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="/8evre/css/demos/demo-gym.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="/8evre/css/skins/skin-gym.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="/8evre/css/custom.css">

    <!-- Head Libs -->
    <script src="/8evre/vendor/modernizr/modernizr.min.js"></script>

</head>
<body>

<div class="body">
    <br>
    <div>
        <h2 class="text-center"> <a class="text-color-quaternary" href="{{route('psikolog.profil.getir')}}"><u>Geri Dön</u></a></h2>
    </div>



    @foreach($psikolog as $pas)
    <div role="main" class="main">
        <section class="section section-no-border section-light custom-padding-top-1 mb-0">
            <div class="container">
                <div class="row ">

                    <div  class="col-md-8">
                        <div class="pr-4">
                            <h1 class="font-weight-bold text-color-primary mb-0">{{$pas->name}} {{$pas->sname}}</h1>
                            <h4 class="font-weight-bold text-color-quaternary">{{$pas->psdetay->unvan}}</h4>
                        </div>
                        <div class="pr-4">

                            <div  style="white-space: pre-wrap; /* css-3 */
                                    white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
                                    white-space: -pre-wrap; /* Opera 4-6 */
                                    white-space: -o-pre-wrap; /* Opera 7 */
                                    word-wrap: break-word; /* Internet Explorer 5.5+ */ " >
                                {!! $pas->psdetay->hakkimda !!}</div>

                        </div>

                    </div>
                    <div style="margin-top: 50px;" class="col-md-4 ">
                        <div class="owl-carousel custom-dots-bottom-center-1 custom-position-style-1 bg-color-primary p-3" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': false, 'autoplay': true, 'autoplayTimeout': 3000}">
                            <div >
                                <img style="height: 200px; "  src="/uploads/psikolog/{{$pas->psdetay->image}}" alt class="img-fluid" />
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="section section-quaternary section-text-light m-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4 class="font-weight-bold text-color-light">Skills</h4>
                    </div>
                </div>

                <div class="row mt-3">
                    @foreach($psikolog as $uz)
                    <div class="col-md-3">
                        <ul class="list list-icons list-light text-color-light">
                            <li><i class="fas fa-check"></i> {{$uz->uzmankategoriler}}</li>

                        </ul>
                    </div>
                    @endforeach
                </div>




            </div>
        </section>


        <section class="section section-center section-no-border section-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="font-weight-bold text-color-quaternary appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><span class="text-color-primary">Get Up!</span> Challenge yourself today</h2>
                        <p class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="150">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed sem ipsum. Proin efficitur dolor accumsan purus varius tempus nec a nulla. Aliquam id vulputate massa, a rhoncus justo. Nunc luctus non ipsum a cursus. Donec laoreet iaculis egestas. Nulla finibus sed ipsum a pretium. Mauris ut nisl nec metus.</p>
                        <a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium text-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300" href="demo-gym-about-us.html">About the Gym</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
        @endforeach



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
<script src="/8evre/vendor/instafeed/instafeed.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="/8evre/js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="/8evre/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="/8evre/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Current Page Vendor and Views -->
<script src="/8evre/js/views/view.contact.js"></script>

<!-- Demo -->
<script src="/8evre/js/demos/demo-gym.js"></script>

<!-- Theme Custom -->
<script src="/8evre/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="/8evre/js/theme.init.js"></script>





<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-12345678-1', 'auto');
    ga('send', 'pageview');
</script>
 -->


</body>
</html>





