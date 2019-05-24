
<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            @foreach($ayar as $a)
                                <a href="/">

                                    <img alt="Porto"  height="40" src="/uploads/theme/{{$a->logo}}">
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li >
                                            <a data-hash class="dropdown-item dropdown-toggle active " href="{{'/'}}">
                                                ANASAYFA
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" data-hash data-hash-offset="68" href="#servicess">BİZ KİMİZ</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" data-hash data-hash-offset="68" href="#projects">HİZMETLERİMİZ</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" data-hash data-hash-offset="68" href="{{route('blog')}}">Blog</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" data-hash data-hash-offset="68" href="{{route('front.psikolog')}}">Psikologlar</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" data-hash data-hash-offset="68" href="#contact">İLETİŞİM</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary btn-join-now text-uppercase custom-font-weight-medium d-none d-lg-flex" href="demo-gym-contact-us.html">RANDEVU AL</a>
            </div>
        </div>
    </div>
</header>
