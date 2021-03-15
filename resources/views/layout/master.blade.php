<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Digitalopment">
    <meta name="keywords" content="HTMl, CSS, JavaScript">
    <meta name="description" content="Web Development">
    <meta name="robots" content="NOINDEX, NOFOLLOW">
    <link rel="stylesheet" href="/assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/frontend/css/lity.min.css">
    <link rel="stylesheet" href="/assets/frontend/css/hover-box.css">
    <link rel="stylesheet" href="/assets/frontend/css/animate.min.css" />
    <link rel="stylesheet" href="/assets/frontend/css/aos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/frontend/css/magnific-popup.css" />
    <link rel="stylesheet" href="/assets/frontend/css/slick.min.css">
    <link rel="stylesheet" href="/assets/frontend/css/style.css">
    <title>@yield('page-title') | Digitalopment- Web Development & Digital Marketing Agency</title>
  </head>
  <body>
        <!-- PRELOADER -->
        <div id="preloadcontainer">   
          <div id="preload-content"> 
              <img src="/assets/frontend/img/Canvas.gif">
          </div> 
      </div>
    <!-- PRELOADER -->
    <!-- START HEADER -->
    <header class="wrap_nav">
      <nav class="navbar navbar-expand-lg custom-nav navbar-light">
        <div class="container max-con">
          <a class="navbar-brand cutom-logo" href="/"><img src="/assets/frontend/img/logo.png"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav custom-ul ml-auto btn-15">
              @if($menu_header)
              @foreach($menu_header as $menu)
              <li class="nav-item {{ $menu['link'] == request()->path() ? 'active' : '' }}">
                <a class="nav-link" data-menu-name="{{ $menu['label'] }}" id="custom-a" href="{{ $menu['link'] }}">{{ $menu['label'] }}</a></li>
              @endforeach
              @endif
            </ul>
          </div>
          <div class="d-lg-block d-md-block d-none search__digitalop">
            <i class="fa fa-search search-btn search-btn-overlay"></i>
            <div class="block search-overlay">
              <div class="centered">
                <div class="search-box">
                  <i id="" class="fa fa-times fa-2x close-btn"></i>
                  <div class="search__logo">
                    <img src="/assets/frontend/img/logo.png" alt="">
                  </div>
                  <form>
                    <div class="autocomplete">
                      <input id="myinput" type="text" name="search" placeholder="Search">
                    </div>
                    <div class="digi-btn">
                      <button type="submit" class="btn btn-light">Search</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="quote-btn">
            <a href="form.html"><button type="button" class="btn btn-light">Get A Quote</button></a>
          </div>
          <!-- HAMBURGER MENU START FOR DESKTOP -->
          <div class="hamburger-menu d-lg-block d-md-block d-none">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
            <span></span>
            </label>
            <div class="menu__box">
              <div class="container">
                <div class="menu_box_1">
                  <a href="/"><img src="/assets/frontend/img/logo.png" alt="logo"></a>
                  <label for="menu__toggle"><i class="fas fa-times"></i></label>
                </div>
                <div class="main__top">
                  <div class="form-group has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                </div>
                <div class="menu-bar">
                  <ul>
                    <li class="active"><a class="menu__item" href="#">Home</a></li>
                    <li><a class="menu__item" href="aboutus.html">About us</a></li>
                    <li><a class="menu__item" href="services.html">Services</a></li>
                    <li><a class="menu__item" href="portfolio.html">Portfolio</a></li>
                    <li><a class="menu__item" href="blog.html">Blog</a></li>
                    <li><a class="menu__item" href="contact.html">Contact Us</a></li>
                  </ul>
                  <div class="get-btn text-left">
                    <a href="form.html"><button type="button" class="btn btn-light">Get A Quote</button></a>
                  </div>
                  <div class="follow-section">
                    <h3>Follow Us</h3>
                    <p class="follow-para">59 Street, B4 Gulshan Iqbal karachi</p>
                    <p class="follow-para1">+92 333 22 91 394</p>
                    <div class="social-icons">
                      <ul>
                        <li><a href="#"><i class="fab fa-facebook-f facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-whatsapp whatsapp"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- HAMBURGER MENU END FOR DESKTOP -->
        </div>
      </nav>
      <!-- MOBILE HEADER MENU START -->
      <div class="navbar__footer d-lg-none d-md-none d-sm-block">
        <div id="para" style="display: none;">
          <div id="carousel__Example__Indicators" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="/assets/frontend/img/box.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>Web Development</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="/assets/frontend/img/box-2.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>App Development</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="/assets/frontend/img/box-2.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>App Development</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="/assets/frontend/img/box-3.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>Software Development</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="/assets/frontend/img/box-4.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>Startup Solution</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="/assets/frontend/img/box-6.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>Resource Augmentation</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="/assets/frontend/img/box.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>Web Development</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="/assets/frontend/img/box-2.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>App Development</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="/assets/frontend/img/box-2.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>App Development</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="/assets/frontend/img/box-3.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>Software Development</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="/assets/frontend/img/box-4.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>Startup Solution</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="/assets/frontend/img/box-6.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>Resource Augmentation</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev custom-prev" href="#carousel__Example__Indicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon custom__btn__prev" aria-hidden="true"> < </span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next custom-next" href="#carousel__Example__Indicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon custom__btn__next" aria-hidden="true"> > </span>
            <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <ul class="navbar-ul">
          <li><a href="/" class="navbar__11 active"><img src="/assets/frontend/img/home.png" class="icon-i"></a></li>
          <li><a href="#" class="navbar__11"><img src="/assets/frontend/img/search.png" class="icon-i search-btn" alt=""></a></li>
          <li><a class="navbar__11" id="flip"><img src="/assets/frontend/img/services.png" class="icon-i"></a></li>
          <li><a onclick="openNav()"><img src="/assets/frontend/img/menu.png" class="icon-i"></a></li>
        </ul>
        <div id="mobileNav" class="mobileNav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="container">
              <div class="menu_box_1">
                <a href="/"><img src="/assets/frontend/img/logo.png" alt="logo"></a>
                <!-- <label for="menu__toggle_1"><i class="fas fa-times"></i></label> -->
              </div>
              <div class="main__top">
                <div class="form-group has-search">
                  <span class="fa fa-search form-control-feedback"></span>
                  <input type="text" class="form-control" placeholder="Search">
                </div>
              </div>
              <div class="menu-bar">
                <ul>
                  <li class="active"><a class="menu__item" href="/">Home</a></li>
                  <li><a class="menu__item" href="aboutus.html">About us</a></li>
                  <li><a class="menu__item" href="services.html">Services</a></li>
                  <li><a class="menu__item" href="portfolio.html">Portfolio</a></li>
                  <li><a class="menu__item" href="blog.html">Blog</a></li>
                  <li><a class="menu__item" href="contact.html">Contact Us</a></li>
                </ul>
                <div class="get-btn text-left">
                  <a href="form.html"><button type="button" class="btn btn-light">Get A Quote</button></a>
                </div>
                <div class="follow-section">
                  <h3>Follow Us</h3>
                  <p class="follow-para">59 Street, B4 Gulshan Iqbal karachi</p>
                  <p class="follow-para1">+92 333 22 91 394</p>
                  <div class="social-icons">
                    <ul>
                      <li><a href="#"><i class="fab fa-facebook-f facebook"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-linkedin linkedin"></i></a></li>
                      <li><a href="#"><i class="fab fa-whatsapp whatsapp"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <!-- <div class="hamburger-menu d-block d-lg-none d-md-none">
          <input id="menu__toggle_1" type="checkbox" />
          <label class="menu__btn" for="menu__toggle_1">
          <span>&nbsp;</span>
          </label>
          <div class="menu__box">
            <div class="container">
              <div class="menu_box_1">
                <a href="/"><img src="/assets/frontend/img/logo.png" alt="logo"></a>
                <label for="menu__toggle_1"><i class="fas fa-times"></i></label>
              </div>
              <div class="main__top">
                <div class="form-group has-search">
                  <span class="fa fa-search form-control-feedback"></span>
                  <input type="text" class="form-control" placeholder="Search">
                </div>
              </div>
              <div class="menu-bar">
                <ul>
                  <li class="active"><a class="menu__item" href="/">Home</a></li>
                  <li><a class="menu__item" href="aboutus.html">About us</a></li>
                  <li><a class="menu__item" href="services.html">Services</a></li>
                  <li><a class="menu__item" href="portfolio.html">Portfolio</a></li>
                  <li><a class="menu__item" href="blog.html">Blog</a></li>
                  <li><a class="menu__item" href="contact.html">Contact Us</a></li>
                </ul>
                <div class="get-btn text-left">
                  <a href="form.html"><button type="button" class="btn btn-light">Get A Quote</button></a>
                </div>
                <div class="follow-section">
                  <h3>Follow Us</h3>
                  <p class="follow-para">59 Street, B4 Gulshan Iqbal karachi</p>
                  <p class="follow-para1">+92 333 22 91 394</p>
                  <div class="social-icons">
                    <ul>
                      <li><a href="#"><i class="fab fa-facebook-f facebook"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-linkedin linkedin"></i></a></li>
                      <li><a href="#"><i class="fab fa-whatsapp whatsapp"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <div class="block search-overlay">
          <div class="centered">
            <div class="search-box">
              <i class="fa fa-times fa-2x close-btn"></i>
              <div class="search__logo">
                <img src="/assets/frontend/img/logo.png" alt="">
              </div>
              <form>
                <div class="autocomplete">
                  <input id="myInput" type="text" name="search" placeholder="Search">
                </div>
                <div class="digi-btn">
                  <button type="submit" class="btn btn-light">Search</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- MOBILE HEADER MENU END -->
    </header>
    <!-- END HEADER -->
    <!-- START MAIN CONTENT -->
    @yield('main-content')
    <!-- END MAIN CONTENT -->
    <!-- START FOOTER SECTION -->
    <footer>
      <div class="footer-main">
        <div class="container max-con">
          <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6">
              <div class="digi-section">
                <div class="digi-logo">
                  <a href="/"><img src="/assets/frontend/img/logo.png" alt="Logo"></a>
                </div>
                <div class="footer-content">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="custom-digi">
                        <h4>Pakistan</h4>
                        <p><span>Email : </span>contact@digitalopment.com</p>
                        <p><span>Phone : </span>+ 92 333 433 229</p>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="custom-digi">
                        <h4>UK</h4>
                        <p><span>Email : </span>contact@digitalopment.com</p>
                        <p><span>Phone : </span>+ 92 333 433 229</p>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="custom-digi digi-content-2">
                        <h4>UAE</h4>
                        <p><span>Email : </span>contact@digitalopment.com</p>
                        <p><span>Phone : </span>+ 92 333 433 229</p>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="custom-digi digi-content-2">
                        <h4>USA</h4>
                        <p><span>Email : </span>contact@digitalopment.com</p>
                        <p><span>Phone : </span>+ 92 333 433 229</p>
                      </div>
                    </div>
                  </div>
                  <div class="follow-section">
                    <div class="social-icons mt-3">
                      <ul>
                        <li><a href="#"><i class="fab fa-facebook-f facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-whatsapp whatsapp"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6">
              <div class="subscribe-scetion">
                <form>
                  <label>Subscribe our Newsletter</label>
                  <div class="input-group input-main">
                    <input type="email" class="form-control border-right-0" placeholder="Email">
                    <span class="input-group-append custom-input">
                    <a href="#"><button class="btn border-left-0" type="button"><i class="fas fa-arrow-right"></i></button></a>
                    </span>
                  </div>
                </form>
                <div class="site-map">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="site-main">
                        <h5>Site Map</h5>
                        <ul>
                          <li><a href="/">Home</a></li>
                          <li><a href="services.html">Services</a></li>
                          <li><a href="aboutus.html">About Us</a></li>
                          <li><a href="career.html">Careers</a></li>
                          <li><a href="contact.html">Contact</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="site-main">
                        <h5>Help</h5>
                        <ul>
                          <li><a href="#">Faq's</a></li>
                          <li><a href="#">Terms and condition</a></li>
                          <li><a href="#">Privacy Policy</a></li>
                          <li><a href="blog.html">Blog</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyrights">
          <div class="row custom-reverse">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <div class="copy-text">
                <p>Copyright © 2020 Digitalopment (Pvt. ltd)</p>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 text-right">
              <div class="term-text">
                <p>Terms of Use | Privacy Policy</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- END FGOOTER SECTION -->
    <script src="/assets/frontend/js/jquery.min.js"></script>
    <script src="/assets/frontend/js/popper.min.js"></script>
    <script src="/assets/frontend/js/bootstrap.min.js"></script>
    <script src="/assets/frontend/js/script.js"></script>
    <script src="/assets/frontend/js/lity.min.js"></script>
    <script src="/assets/frontend/js/aos.js"></script>
    <script src="/assets/frontend/js/isotope.min.js"></script>
    <script src="/assets/frontend/js/jquery.isonscreen.min.js"></script>
    <script src="/assets/frontend/js/services.js"></script>
    <script src="/assets/frontend/js/contact.js"></script>
    <script src="/assets/frontend/js/slick.min.js"></script>
  </body>
</html>

<script>
  $( function() {
  var $grid = $('.grid').isotope({
    itemSelector: 'article'
  });
  
  // filter buttons
  $('.filters-button-group').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });
  });
  
  // debounce so filtering doesn't happen every millisecond
  function debounce( fn, threshold ) {
  var timeout;
  return function debounced() {
    if ( timeout ) {
      clearTimeout( timeout );
    }
    function delayed() {
      fn();
      timeout = null;
    }
    timeout = setTimeout( delayed, threshold || 100 );
  }
  }
  
  $(window).bind("load", function() {
  $('#all').click();
  });
</script>