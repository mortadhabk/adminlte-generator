<header class="header axil-header header-style-1">
    <div id="axil-sticky-placeholder"></div>
    <div class="axil-mainmenu">
        <div class="container">
            <div class="header-navbar">
                <div class="header-logo">
                    <a href="index-1.html"><img class="light-version-logo" src="{!!asset('assets/media/logo.png')!!}" alt="logo"></a>
                    <a href="index-1.html"><img class="dark-version-logo" src="{!!asset('assets/media/logo-3.png')!!}" alt="logo"></a>
                    <a href="index-1.html"><img class="sticky-logo" src="{!!asset('assets/media/logo-2.png')!!}" alt="logo"></a>
                </div>
                <div class="header-main-nav">
                    <!-- Start Mainmanu Nav -->
                    <nav class="mainmenu-nav" id="mobilemenu-popup">
                        <div class="d-block d-lg-none">
                            <div class="mobile-nav-header">
                                <div class="mobile-nav-logo">
                                    <a href="index-1.html">
                                        <img class="light-mode" src="assets/media/logo-2.png" alt="Site Logo">
                                        <img class="dark-mode" src="assets/media/logo-3.png" alt="Site Logo">
                                    </a>
                                </div>
                                <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <ul class="mainmenu">
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">Projects</a>
                                <ul class="axil-submenu">
                                    @foreach($ProjectItems as $item)
                                    <li><a href="#">{{ $item->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">Services</a>
                                <ul class="axil-submenu">
                                    <li><a href="service.html">Service</a></li>
                                    <li><a href="service-2.html">Service Two</a></li>
                                    <li><a href="service-design.html">Service Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">Portfolio</a>
                                <ul class="axil-submenu">
                                    <li><a href="portfolio.html">Two Column</a></li>
                                    <li><a href="portfolio-2.html">Three Column</a></li>
                                    <li><a href="portfolio-3.html">Four Column</a></li>
                                    <li><a href="portfolio-4.html">Three Column Width</a></li>
                                    <li><a href="portfolio-5.html">Four Column Width</a></li>
                                    <li><a href="single-portfolio.html">Portfolio Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">Pages</a>
                                <ul class="axil-submenu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="our-office.html">Our Office</a></li>
                                    <li><a href="case-study.html">Case Study</a></li>
                                    <li><a href="single-case-study.html">Case Study Details</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="single-team.html">Team Details</a></li>
                                    <li><a href="our-clients.html">Our Clients</a></li>
                                    <li><a href="testimonial.html">Testimonial</a></li>
                                    <li><a href="pricing-table.html">Pricing Table</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">Blog</a>
                                <ul class="axil-submenu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single-blog.html">Standard Post</a></li>
                                    <li><a href="single-blog-gallery.html">Gallery Post</a></li>
                                    <li><a href="single-blog-video.html">Video Post</a></li>
                                    <li><a href="single-blog-audio.html">Audio Post</a></li>
                                    <li><a href="single-blog-quote.html">Quote Post</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- End Mainmanu Nav -->
                </div>
                <div class="header-action">
                    <ul class="list-unstyled">
                        <li class="sidemenu-btn d-lg-block d-none">
                            <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenuRight">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </li>
                        <li class="mobile-menu-btn sidemenu-btn d-lg-none d-block">
                            <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#mobilemenu-popup">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </li>
                        <li class="my_switcher d-block d-lg-none">
                            <ul>
                                <li title="Light Mode">
                                    <a href="javascript:void(0)" class="setColor light" data-theme="light">
                                        <i class="fal fa-lightbulb-on"></i>
                                    </a>
                                </li>
                                <li title="Dark Mode">
                                    <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                                        <i class="fas fa-moon"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>