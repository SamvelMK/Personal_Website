<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            Samvel Mkhitaryan
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta name="author" content=""/>

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content=""/>
        <meta name="twitter:image" content=""/>
        <meta name="twitter:url" content=""/>
        <meta name="twitter:card" content=""/>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico">

        <link
            href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700"
            rel="stylesheet">

        <!-- Animate.css -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}" type="text/css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css">
        <!-- Flexslider -->
        <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css">
        <!-- Flaticons -->
        {{-- <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}" type="text/css"> --}}
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Modernizr JS -->
        <script src="{{ asset('js/modernizr-2.6.2.min.js') }}" type="text/javascript"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]> <script src="js/respond.min.js"></script> <![endif]-->

    </head>
    <body>
        <div id="colorlib-page">
            <div class="container-wrap">
                <a
                    href="#"
                    class="js-colorlib-nav-toggle colorlib-nav-toggle"
                    data-toggle="collapse"
                    data-target="#navbar"
                    aria-expanded="false"
                    aria-controls="navbar">
                    <i></i>
                </a>
                <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
                    <div class="text-center">
                        <div class="author-img" style="background-image: url(images/about.jpg);"></div>
                        <h1 id="colorlib-logo">
                            <a href="index.html">
                                Samvel Mkhitaryan</a>
                        </h1>
                        <span class="position">
                            PhD Researcher
                        </a>
                        at Maastricht University
                    </span>
                </div>
                <nav id="colorlib-main-menu" role="navigation" class="navbar">
                    <div id="navbar" class="collapse">
                        <ul>
                            <li>
                                <a href="#" data-nav-section="about">About</a>
                            </li>
                            <li>
                                <a href="#" data-nav-section="skills">Skills</a>
                            </li>
                            <li>
                                <a href="#" data-nav-section="education">Education</a>
                            </li>
                            <li>
                                <a href="#" data-nav-section="experience">Experience</a>
                            </li>
                            <li>
                                <a href="#" data-nav-section="work">Projects</a>
                            </li>
                            <li>
                                <a href="#" data-nav-section="blog">Blog</a>
                            </li>
                            <li>
                                <a href="#" data-nav-section="contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="colorlib-footer">
                    <p>
                        <small>&copy;
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY
                            3.0. -->
                            Copyright
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved. Made with
                            <i class="icon-heart" aria-hidden="true"></i>
                            by
                            <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY
                            3.0. -->
                        </span>
                    </p>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="icon-twitter2"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-linkedin2"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </aside>

            <div id="colorlib-main">
                @yield("about")
                @yield("expertise")
                @yield("contribution")
                @yield("skills")
                @yield("education")
                @yield("experience")
                @yield("projects")
                @yield("blog")
                @yield("contacts")       
            <!-- end:colorlib-main -->
        </div>
        <!-- end:container-wrap -->
    </div>
    <!-- end:colorlib-page -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Counters -->
    <script src="js/jquery.countTo.js"></script>

    <!-- MAIN JS -->
    <script src="js/main.js"></script>

</body>
</html>