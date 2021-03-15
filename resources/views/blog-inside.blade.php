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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/lity.min.css">
    <link rel="stylesheet" href="assets/css/hover-box.css">
    <link rel="stylesheet"  href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Blog Inside | Digitalopment- Web Development & Digital Marketing Agency</title>
  </head>
  <body>
    <!-- START HEADER -->
    <header class="wrap_nav">
      <nav class="navbar navbar-expand-lg custom-nav navbar-light">
        <div class="container max-con">
          <a class="navbar-brand cutom-logo" href="/"><img src="assets/img/logo.png"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav custom-ul ml-auto btn-15">
              <li class="nav-item active"><a class="nav-link" data-menu-name="Home" id="custom-a" href="/">Home <span class="sr-only">(current)</span></a></li>
              <li class="nav-item"><a class="nav-link" data-menu-name="About Us" href="aboutus.html">About Us</a></li>
              <li class="nav-item"><a class="nav-link" data-menu-name="Portfolio" href="portfolio.html">Portfolio</a></li>
              <li class="nav-item"><a class="nav-link" data-menu-name="Services" href="services.html">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-menu-name="Careers" href="career.html">Careers</a></li>
              <li class="nav-item"><a class="nav-link" data-menu-name="Blog" href="blog.html">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-menu-name="Contact" href="contact.html">Contact</a></li>
            </ul>
          </div>
          <div class="d-lg-block d-md-block d-none search__digitalop">
            <i class="fa fa-search search-btn search-btn-overlay"></i>
            <div class="block search-overlay">
              <div class="centered">
                <div class="search-box">
                  <i id="" class="fa fa-times fa-2x close-btn"></i>
                  <div class="search__logo">
                    <img src="assets/img/logo.png" alt="">
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
                  <a href="/"><img src="assets/img/logo.png" alt="logo"></a>
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
                        <img src="assets/img/box.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>Web Development</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="assets/img/box-2.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>App Development</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="assets/img/box-2.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>App Development</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="assets/img/box-3.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>Software Development</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="assets/img/box-4.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>Startup Solution</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="assets/img/box-6.png" alt="First slide">
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
                        <img src="assets/img/box.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>Web Development</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="assets/img/box-2.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>App Development</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="assets/img/box-2.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>App Development</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="assets/img/box-3.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>Software Development</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="assets/img/box-4.png" alt="First slide">
                      </div>
                      <a href="services.html">
                        <p>Startup Solution</p>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 custom__iconbox">
                    <div class="icon__main__box">
                      <div class="icon__box">
                        <img src="assets/img/box-6.png" alt="First slide">
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
          <li><a href="/" class="navbar__11 active"><img src="assets/img/home.png" class="icon-i"></a></li>
          <li><a href="#" class="navbar__11"><img src="assets/img/search.png" class="icon-i search-btn" alt=""></a></li>
          <li><a class="navbar__11" id="flip"><img src="assets/img/services.png" class="icon-i"></a></li>
          <li><a onclick="openNav()"><img src="assets/img/menu.png" class="icon-i"></a></li>
        </ul>
        <div id="mobileNav" class="mobileNav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="container">
              <div class="menu_box_1">
                <a href="/"><img src="assets/img/logo.png" alt="logo"></a>
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
                <a href="/"><img src="assets/img/logo.png" alt="logo"></a>
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
                <img src="assets/img/logo.png" alt="">
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
    <!-- START BLOG BANNER SECTION -->
    <div class="main">
      <div class="blog__inside__section">
        <h2 class="blog__inside__title">Topic Inside</h2>
      </div>
      <div class="container max-con">
        <div class="row">
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <div class="blog__inside__main">
              <h5>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h5>
              <div class="blog__calendar__main">
                <h4>16</h4>
                <span>jan</span>
              </div>
              <img src="assets/img/blog-main.png">
              <p>Why I say old chap that is, spiffing jolly good a load of old tosh spend a penny tosser arse over tit, excuse my French owt to do with me up the kyver matie boy at public school. Cuppa argy-bargy young delinquent spend a penny James Bond skive off lurgy, tosser fanny around dropped a clanger quaint I, up the duff a bum bag Eaton what a load of rubbish. Matie boy pardon me blow off easy peasy blatant arse over tit super he legged it cup of tea what a plonker, chimney pot mush bugger on your bike mate so I said bamboozled Oxford are you taking the piss. Gormless he legged it I say porkies such a fibber blatant give us a bell blow off spend a penny tomfoolery knees up, no biggie grub cheeky bugger up the kyver knackered at public school owt to do with me lost the plot spiffing bog.</p>
              <p>Cras mush pardon you knees up he lost his bottle it's all gone to pot faff about porkies arse, barney argy-bargy cracking goal loo cheers spend a penny bugger all mate in my flat, hunky-dory well get stuffed mate David morish bender lavatory. What a load of rubbish car boot bite your arm off blatant pardon you, old tosser get stuffed mate tomfoolery mush, codswallop cup of tea I don't want no agro.!</p>
              <blockquote class="wp__block__quote">
                <p>Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty.</p>
                <span>Steve Jobs</span>
              </blockquote>
              <p>Cras mush pardon you knees up he lost his bottle it's all gone to pot faff about porkies arse, barney argy-bargy cracking goal loo cheers spend a penny bugger all mate in my flat, hunky-dory well get stuffed mate David morish bender lavatory. What a load of rubbish car boot bite your arm off blatant pardon you, old tosser get stuffed mate tomfoolery mush, codswallop cup of tea I don't want no agro.!</p>
              <div class="share__comment">
                <div class="row">
                  <div class="col-6">
                    <div class="bloginside__share">
                      <p><span>SHARE :</span><span><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-vimeo-v"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a></span></p>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="bloginside__comment">
                      <a href="#">
                        <p><i class="far fa-comment"></i>33 COMMENTS</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="bloginside__profile">
              <div class="row">
                <div class="col-3">
                  <div class="probile__image">
                    <img src="assets/img/comment.png" alt="">
                  </div>
                </div>
                <div class="col-9">
                  <div class="profile__info">
                    <h5>Bodrum Salvador</h5>
                    <p>Tinkety tonk old fruit Harry gormless morish Jeffrey what a load of rubbish burke what a plonker hunky.!</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bloginside__related">
              <h4 class="related__title">Related Post</h4>
              <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                  <div class="blog__box__inside">
                    <div class="blog__date__inside">
                      <h4>22</h4>
                      <span>Mar</span>
                    </div>
                    <div class="blog__info__image img-hover-zoom--colorize ">
                      <img src="assets/img/blog-img-1.png" alt="News">
                    </div>
                    <div class="blog__news__info">
                      <a href="blog-inside.html">
                        <h4>Why I say old chap that.</h4>
                      </a>
                      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sit amet, consetetur sadipscing elitr.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                  <div class="blog__box__inside">
                    <div class="blog__date__inside">
                      <h4>22</h4>
                      <span>Mar</span>
                    </div>
                    <div class="blog__info__image img-hover-zoom--colorize ">
                      <img src="assets/img/blog-img-1.png" alt="News">
                    </div>
                    <div class="blog__news__info">
                      <a href="blog-inside.html">
                        <h4>Why I say old chap that.</h4>
                      </a>
                      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sit amet, consetetur sadipscing elitr.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                  <div class="blog__box__inside">
                    <div class="blog__date__inside">
                      <h4>22</h4>
                      <span>Mar</span>
                    </div>
                    <div class="blog__info__image img-hover-zoom--colorize ">
                      <img src="assets/img/blog-img-1.png" alt="News">
                    </div>
                    <div class="blog__news__info">
                      <a href="blog-inside.html">
                        <h4>Why I say old chap that.</h4>
                      </a>
                      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sit amet, consetetur sadipscing elitr.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="comment__section">
              <h4>2 Comment</h4>
            </div>
            <div class="comment__section__inside">
              <div class="row">
                <div class="col-lg-2 col-3">
                  <div class="comment__image">
                    <img src="assets/img/comment-1.png" alt="">
                  </div>
                </div>
                <div class="col-lg-10 col-9">
                  <div class="comment__info">
                    <div class="row">
                      <div class="col-7">
                        <div class="comment__section__info">
                          <h5>Fletch Skinner</h5>
                          <p>Just Now</p>
                        </div>
                      </div>
                      <div class="col-5">
                        <div class="comment__reply">
                          <a href="#">
                            <p>REPLY<i class="fas fa-arrow-right"></i></p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="new__inside__pera">
                <p>Cuppa the bee's knees the full monty bloke cockup pear shaped bubble and squeak lavatory naff, chip shop bodge burke do one have.!</p>
                <hr>
              </div>
              <div class="row">
                <div class="col-lg-2 col-3">
                  <div class="comment__reply__image">
                    <img src="assets/img/comment-2.png" alt="">
                  </div>
                </div>
                <div class="col-lg-10 col-9">
                  <div class="comment__reply__info">
                    <div class="row">
                      <div class="col-7">
                        <div class="comment__section__info__2">
                          <h5>Fletch Skinner</h5>
                          <p>Just Now</p>
                        </div>
                      </div>
                      <div class="col-5">
                        <div class="comment__reply">
                          <a href="#">
                            <p>REPLY<i class="fas fa-arrow-right"></i></p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="new__inside__pera__2">
                <p>Cuppa the bee's knees the full monty bloke cockup pear shaped bubble and squeak lavatory naff, chip shop bodge burke do one have.!</p>
              </div>
            </div>
            <div class="comment__section__inside__2">
              <div class="row">
                <div class="col-lg-2 col-3">
                  <div class="comment__image">
                    <img src="assets/img/comment-3.png" alt="">
                  </div>
                </div>
                <div class="col-lg-10  col-9">
                  <div class="comment__info">
                    <div class="row">
                      <div class="col-7">
                        <div class="comment__section__info">
                          <h5>Fletch Skinner</h5>
                          <p>Just Now</p>
                        </div>
                      </div>
                      <div class="col-5">
                        <div class="comment__reply">
                          <a href="#">
                            <p>REPLY<i class="fas fa-arrow-right"></i></p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="new__inside__pera">
                <p>Cuppa the bee's knees the full monty bloke cockup pear shaped bubble and squeak lavatory naff, chip shop bodge burke do one have.!</p>
              </div>
            </div>
            <div class="leave__comment">
              <h5>Leave a Comment</h5>
            </div>
            <div class="inside__leave__input">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="form-group">
                    <input type="fname" class="form-control" id="exampleInputfName" aria-describedby="fNameHelp" placeholder="Name">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Comment"></textarea>
              </div>
              <a href="#"><button type="button" class="btn btn-light">Post Comment</button></a> 
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 sidebarhide">
            <div class="blog__sidebar">
              <div class="input-group input__append p-0">
                <input type="search" placeholder="Search blog">
              </div>
              <div class="input-group-btn input__append__btn">
                <button type="button">
                <i class="fa fa-search"></i>
                </button>
              </div>
              <h6>Recent Posts</h6>
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="side__image img-hover-zoom--colorize">
                    <img src="assets/img/post-1.png">
                  </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 pl-0">
                  <div class="side__info">
                    <a href="#">
                      <h4>Fast App development</h4>
                    </a>
                    <span>JULY 06, 2019</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="side__image img-hover-zoom--colorize">
                    <img src="assets/img/post-2.png">
                  </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 pl-0">
                  <div class="side__info">
                    <a href="#">
                      <h4>Fast App development</h4>
                    </a>
                    <span>JULY 06, 2019</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="side__image img-hover-zoom--colorize">
                    <img src="assets/img/post-3.png">
                  </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 pl-0">
                  <div class="side__info">
                    <a href="#">
                      <h4>Fast App development</h4>
                    </a>
                    <span>JULY 06, 2019</span>
                  </div>
                </div>
              </div>
              <div class="sidebar__categories">
                <h5>Categories</h5>
                <ul>
                  <a href="#">
                    <li>Fashion<span>(24)</span></li>
                  </a>
                  <a href="#">
                    <li>gaming<span>(09)</span></li>
                  </a>
                  <a href="#">
                    <li>food for thought<span>(07)</span></li>
                  </a>
                  <a href="#">
                    <li>uncategorized<span>(03)</span></li>
                  </a>
                  <a href="#">
                    <li>orderpak vendors<span>(04)</span></li>
                  </a>
                  <a href="#">
                    <li>wireframing<span>(24)</span></li>
                  </a>
                </ul>
              </div>
              <aside class="blog__widget">
                <h4 class="blog__tag__title">Tags</h4>
                <ul class="list">
                  <li>
                    <a href="#">orderpak</a>
                  </li>
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">Cooling System </a>
                  </li>
                  <li>
                    <a href="#">orders</a>
                  </li>
                  <li>
                    <a href="#">Landing</a>
                  </li>
                  <li>
                    <a href="#">Corporate</a>
                  </li>
                  <li>
                    <a href="#">Wheels</a>
                  </li>
                </ul>
              </aside>
              <div class="insta__blog">
                <h5>Instagram</h5>
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/insta-1.png">
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/insta-2.png">
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/insta-3.png">
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/insta-4.png">
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/insta-5.png">
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/insta-6.png">
                  </div>
                </div>
              </div>
              <div class="insta__blog">
                <h5>Tweet</h5>
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/tweet-1.png">
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/tweet-2.png">
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/tweet-3.png">
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/tweet-4.png">
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/tweet-5.png">
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/tweet-6.png">
                  </div>
                </div>
              </div>
              <div class="insta__blog">
                <h5>Tweet</h5>
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/tweet-1.png">
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/tweet-2.png">
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/tweet-3.png">
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/tweet-4.png">
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/tweet-5.png">
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 img-hover-zoom--colorize">
                    <img src="assets/img/tweet-6.png">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END BLOG BANNER SECTION -->
    <!-- START FOOTER SECTION -->
    <footer>
      <div class="footer-main">
        <div class="container max-con">
          <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6">
              <div class="digi-section">
                <div class="digi-logo">
                  <a href="/"><img src="assets/img/logo.png" alt="Logo"></a>
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
    <!-- END FOOTER SECTION -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lity.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/jquery.isonscreen.min.js"></script>
  </body>
</html>