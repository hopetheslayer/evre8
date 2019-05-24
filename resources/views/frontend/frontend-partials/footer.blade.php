
<footer id="footer" class="pt-5 pb-2">
    <div class="container">
        <div class="container mt-4 pt-2 pb-5 footer-top-light-border">
            <div class="row py-4">
                @foreach($ayar as $a)
                <div class="col-md-3 text-center text-md-left">
                    <h5 class="text-4 text-color-light mb-3 mt-4 mt-lg-0">İLETİŞİM BİLGİLERİ</h5>
                    <p class="text-3 mb-0 text-color-light opacity-7">ADRES</p>
                    <p class="text-3 mb-3">{{$a->adres}}</p>
                    <p class="text-3 mb-0 text-color-light opacity-7">TELEFON</p>
                    <p class="text-3 mb-0"><i class="fa fa-phone"></i> {{$a->telefon}}</p>
                    <p class="text-3 mb-0"><i class="fa fa-phone-square"></i> {{$a->telefon_2}}</p>
                    <p class="text-3 mb-0 text-color-light opacity-7">EMAIL</p>
                    <p class="text-3 mb-0"><a href="mailto:{{$a->mail}}" class="">{{$a->mail}}</a></p>
                </div>
                <div class="col-md-9 text-center text-md-left">
                    <div class="row">
                        <div class="col-md-7 col-lg-5 mb-0">
                            <h5 class="text-4 text-color-light mb-3 mt-4 mt-lg-0">Hızlı Dolaşım</h5>
                            <div class="row">
                                <div class="col-md-5">
                                    <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">About us</a></p>
                                    <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">Contact Us</a></p>
                                    <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">My account</a></p>
                                </div>
                                <div class="col-md-5">
                                    <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">Orders history</a></p>
                                    <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">Advanced search</a></p>
                                    <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">Login</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-4">
                            <h5 class="text-4 text-color-light mb-3 mt-4 mt-lg-0">HİZMETLERİMİZ</h5>
                            <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">Super Fast Theme</a></p>
                            <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">SEO Optmized</a></p>
                            <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">RTL Support</a></p>
                        </div>
                        <div class="col-lg-3">
                            <h5 class="text-4 text-color-light mb-3 mt-4 mt-lg-0">Faydalı LİNKLER</h5>
                            <p class="mb-1 mt-lg-3 pt-lg-3"><a href="" class="text-3">Powerful Admin Panel</a></p>
                            <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">Mobile &amp; Retina Optimized</a></p>
                        </div>
                    </div>
                    <div class="row footer-top-light-border mt-4 pt-4">
                        <div class="col-lg-5 text-center text-md-left">
                            <div class="text-center">
                            <img  src="/uploads/theme/{{$a->flogo}}" style="height: 100px; width: 150px; " alt="Payment icons" class="img-fluid mt-4 mt-lg-2">
                                <p class="text-2 mt-1">© Copyright {{date('Y')}}. Bütün Hakları Saklıdır.</p>
                            </div>

                        </div>
                        <div class="col-lg-3 text-center text-md-left">
                            <p class="text-3 mb-0 font-weight-semibold text-color-light opacity-8">Çalışma Saatlerimiz</p>
                            <p class="text-3 mb-0">Pazartesi - Cuma 9:00 - 18:00</p>
                        </div>
                        <div class="col-lg-4 text-center text-md-left">
                            <img src="/8evre/img/payment-icon.png" alt="Payment icons" class="img-fluid mt-4 mt-lg-2">
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>
</footer>
