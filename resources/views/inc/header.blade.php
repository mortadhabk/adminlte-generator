<header class="header axil-header header-style-1">
    <div id="axil-sticky-placeholder"></div>
    <div class="axil-mainmenu">
        <div class="container">
            <div class="header-navbar">
                <div class="header-logo">
                    <a href="/"><img class="light-version-logo" src="{!!asset('assets/media/logo.png')!!}" alt="logo"></a>
                    <a href="/"><img class="dark-version-logo" src="{!!asset('assets/media/logo-3.png')!!}" alt="logo"></a>
                    <a href="/"><img class="sticky-logo" src="{!!asset('assets/media/logo-2.png')!!}" alt="logo"></a>
                </div>
                <div class="header-main-nav">
                    <!-- Start Mainmanu Nav -->
                    <nav class="mainmenu-nav" id="mobilemenu-popup">
                        <div class="d-block d-lg-none">
                            <div class="mobile-nav-header">
                                <div class="mobile-nav-logo">
                                    <a href="/">
                                        <img class="light-mode" src="assets/media/logo-2.png" alt="Site Logo">
                                        <img class="dark-mode" src="assets/media/logo-3.png" alt="Site Logo">
                                    </a>
                                </div>
                                <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <ul class="mainmenu">
                            {{-- <li class="menu-item-has-children">
                                <a href="javascript:void(0);">Category</a>
                                <ul class="axil-submenu">
                                    @foreach($categoryItems as $item)
                                    <li><a href="/{{$item}}">{{ $item }}</a></li>
                                    @endforeach
                                </ul>
                            </li>   --}}
                            @foreach($categoryItems as $item)
                            <li><a href="/{{$item}}">{{ $item }}</a></li>
                            @endforeach 
                            <li>
                                <a href="{{ route('aboutme') }}">About Me</a>
                            </li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- End Mainmanu Nav -->
                </div>
        
            </div>
        </div>
    </div>
</header>