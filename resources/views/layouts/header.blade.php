
<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="site-preloader-wrap">
            <div class="spinner"></div>
            </div>
            <header class="header" id="header">
            <div class="primary-header">
            <div class="container">
            <div class="primary-header-inner">
            <div class="header-logo">
            <a href="#"><img src="img/logo.gif" alt="Indico"></a>
            </div>
            <div class="header-menu-wrap">
            <ul class="dl-menu">
            <li><a href="/">Home</a>
            {{-- <ul>
            <li><a href="index.html">Home Default</a></li>
            <li><a href="index-2.html">Home Modern</a></li>
            </ul> --}}
            </li>
            <li><a href="about">About</a>
            {{-- <ul>
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="about-company.html">About Company</a></li>
            </ul> --}}
            </li>
            <li><a href="services">Services</a>
            {{-- <ul>
            <li><a href="services-1.html">Services 01</a></li>
            <li><a href="services-2.html">Services 02</a></li>
            </ul> --}}
            </li>
            <!-- <li><a href="appointment">Appointment</a></li> -->
            <li><a href="projects">Our Projects</a></li>
            <li><a href="gallery">Gallery</a></li>
            <li><a href="team">Our Team</a></li>
            {{-- <li><a href="#">Pages</a>
            <ul>

             <li><a href="project-single.html">Project Single</a></li>

            <li><a href="testimonial.html">Testimonial</a></li>
            <li><a href="404.html">404 Error</a></li>
            </ul>
            </li> --}}
            <!-- <li><a href="blogs">Blogs</a></li> -->
            {{-- <li><a href="blogs">Blog</a>
            <ul>

            <li><a href="blog-classic.html">Blog Classic</a></li>
            <li><a href="blog-single.html">Blog Single</a></li>
            </ul>
            </li> --}}
            <li><a href="contact">Contact</a></li>

            </ul>
            </div>
            <div class="header-right">
            {{-- <a class="menu-btn" href="#">Request a Quote</a> --}}
            @guest
            <a href="{{route('login')}}" class="menu-btn">Login</a>
            <a href="{{route('register')}}" class="menu-btn mx-1">Register</a>
            <a href="http://build.eaglecarports.com/?dealer=D0014184-MAIN" class="btn btn-success">Build Your Building</a>
            @endguest

            <div class="mobile-menu-icon">
            <div class="burger-menu">
            <div class="line-menu line-half first-line"></div>
            <div class="line-menu"></div>
            <div class="line-menu line-half last-line"></div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </header>
