<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
		<meta name="author" content="Kodinger">
		<meta name="keyword" content="magz, html5, css3, template, magazine template">
		<!-- Shareable -->
		<meta property="og:title" content="HTML5 & CSS3 magazine template is based on Bootstrap 3" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
		<meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/images/preview.png" />
		<title>Magz &mdash; Responsive HTML5 &amp; CSS3 Magazine Template</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="{{ asset('userassets/scripts/bootstrap/bootstrap.min.css') }}">
		<!-- IonIcons -->
		<link rel="stylesheet" href="{{ asset('userassets/scripts/ionicons/css/ionicons.min.css') }}">
		<!-- Toast -->
		<link rel="stylesheet" href="{{ asset('userassets/scripts/toast/jquery.toast.min.css') }}">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="{{ asset('userassets/scripts/owlcarousel/dist/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('userassets/scripts/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="{{ asset('userassets/scripts/magnific-popup/dist/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('userassets/scripts/sweetalert/dist/sweetalert.css') }}">
		<!-- Custom style -->
		<link rel="stylesheet" href="{{ asset('userassets/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('userassets/css/skins/all.css') }}">
		<link rel="stylesheet" href="{{ asset('userassets/css/demo.css') }}">
	</head>
<body>
    <header class="primary">
        <div class="firstbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="brand">
                            <a href="/">
                                <img src="{{ asset('userassets/images/logo.png') }}" alt="Magz Logo">
                            </a>
                        </div>						
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <form class="search"  action="/user/search" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="keywords" class="form-control" placeholder="Type something here">									
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary"><i class="ion-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            
                        </form>								
                    </div>
               
                </div>
            </div>
        </div>

        <!-- Start nav -->
        <nav class="menu">
            <div class="container">
                <div class="brand">
                    <a href="#">
                        <img src="userassets/images/logo.png" alt="Magz Logo">
                    </a>
                </div>
                <div class="mobile-toggle">
                    <a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
                </div>
                <div class="mobile-toggle">
                    <a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
                </div>
               
            </div>
        </nav>
        <!-- End nav -->
    </header>






<section class="login first grey">
    <div class="container">
        <div class="box-wrapper">				
            <div class="box box-border">
                <div class="box-body">
                    <h4>Login</h4>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="fw">Password
                            </label>
                            <input type="password" name="password" class="form-control">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label class="fw">confirme Password
                            </label>
                            <input type="password" name="password_confirmation" class="form-control">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        </div>
                        <div class="form-group text-center">
                            <span class="text-muted">I have an account?</span> <a href="/login">Register</a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>







 <!-- Start footer -->
 <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="block">
                    <h1 class="block-title">Company Info</h1>
                    <div class="block-body">
                        <figure class="foot-logo">
                            <img src="userassets/images/logo-light.png" class="img-responsive" alt="Logo">
                        </figure>
                        <p class="brand-description">
                            Magz is a HTML5 &amp; CSS3 magazine template based on Bootstrap 3.
                        </p>
                        <a href="page.html" class="btn btn-magz white">About Us <i class="ion-ios-arrow-thin-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="block">
                    <h1 class="block-title">Popular Tags <div class="right"><a href="#">See All <i class="ion-ios-arrow-thin-right"></i></a></div></h1>
                    <div class="block-body">
                        <ul class="tags">
                            <li><a href="#">HTML5</a></li>
                            <li><a href="#">CSS3</a></li>
                            <li><a href="#">Bootstrap 3</a></li>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Creative Mind</a></li>
                            <li><a href="#">Standing On The Train</a></li>
                            <li><a href="#">at 6.00PM</a></li>
                        </ul>
                    </div>
                </div>
                <div class="line"></div>
                <div class="block">
                    <h1 class="block-title">Newsletter</h1>
                    <div class="block-body">
                        <p>By subscribing you will receive new articles in your email.</p>
                        <form class="newsletter">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="ion-ios-email-outline"></i>
                                </div>
                                <input type="email" class="form-control email" placeholder="Your mail">
                            </div>
                            <button class="btn btn-primary btn-block white">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="block">
                    <h1 class="block-title">Latest News</h1>
                    <div class="block-body">
                        
                        
                    <article class="article-mini">
                        <div class="inner">
                            <figure>
                                <a href="single.html">
                                    <img src="userassets/images/news/img16.jpg" alt="Sample Article">
                                </a>
                            </figure>
                            <div class="padding">
                                <h1><a href="single.html">Proin venenatis pellentesque arcu vitae </a></h1>
                            </div>
                        </div>
                    </article>


                        <a href="#" class="btn btn-magz white btn-block">See All <i class="ion-ios-arrow-thin-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-6">
                <div class="block">
                    <h1 class="block-title">Follow Us</h1>
                    <div class="block-body">
                        <p>Follow us and stay in touch to get the latest news</p>
                        <ul class="social trp">
                            <li>
                                <a href="#" class="facebook">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-twitter-outline"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="youtube">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-youtube-outline"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="googleplus">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="instagram">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-instagram-outline"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tumblr">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-tumblr"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dribbble">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-dribbble"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="skype">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-skype"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="rss">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-rss"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="line"></div>
                <div class="block">
                    <div class="block-body no-margin">
                        <ul class="footer-nav-horizontal">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Partner</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="page.html">About</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    COPYRIGHT &copy; MAGZ 2017. ALL RIGHT RESERVED.
                    <div>
                        Made with <i class="ion-heart"></i> by <a href="http://kodinger.com">Kodinger</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<!-- JS -->
<script src="{{ asset('userassets/js/jquery.js') }}"></script>
<script src="{{ asset('userassets/js/jquery.migrate.js') }}"></script>
<script src="{{ asset('userassets/scripts/bootstrap/bootstrap.min.js') }}"></script>
<script>var $target_end=$(".best-of-the-week");</script>
<script src="{{ asset('userassets/scripts/jquery-number/jquery.number.min.js') }}"></script>
<script src="{{ asset('userassets/scripts/owlcarousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('userassets/scripts/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('userassets/scripts/easescroll/jquery.easeScroll.js') }}"></script>
<script src="{{ asset('userassets/scripts/sweetalert/dist/sweetalert.min.js') }}"></script>
<script src="{{ asset('userassets/scripts/toast/jquery.toast.min.js') }}"></script>
<script src="{{ asset('userassets/js/demo.js') }}"></script>
<script src="{{ asset('userassets/js/e-magz.js') }}"></script>
</body>
</html>
