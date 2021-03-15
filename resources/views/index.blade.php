@extends('layout.master')
@section('page-title')
Home
@endsection
@section('main-content')    
<!-- START HOME CAROUSEL -->
    <div class="main">
      <div id="carouselExampleFade" class="carousel slide carousel-fade slider-main-content" data-ride="carousel" data-interval="true">
        <div class="container max-con">
          <ol class="carousel-indicators custom-indicators">
            @foreach($sliders as $row => $value)
            <li data-target="#carouselExampleFade" data-slide-to="{{ $row }}" class="@if($loop->first) active @endif"></li>
            @endforeach
          </ol>
        </div>
        <div class="carousel-inner">
          @foreach($sliders as $slider)
          <div class="carousel-item @if($loop->first) active @endif">
            <div class="custom-carousel">
              <div class="container-fluid p-0">
                <div class="row digi__reverse">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="carousel-rotate">
                      <img src="/assets/frontend/img/Ellipse_1.png" class="rotate" alt="">
                    </div>
                    <div class="carousel-inside">
                      <h5 class="animate__animated animate__fadeInUp">{{ $slider->short_title }}</h5>
                      <h2 class="animate__animated animate__fadeInUp">{{ $slider->title }}</h2>
                      <p class="animate__animated animate__fadeInUp">{{ substr($slider->description,0,155) }}</p>
                      <div class="carousel-button">
                        <a href="{{ $slider->button_link }}"><button type="button" class="btn btn-light">{{ $slider->button }}</button></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="circle-main-2">
                      <img src="/assets/frontend/img/Ellipse_2.png" class="animate__animated animate__fadeInLeft" alt="">
                    </div>
                    <div class="carousel-image2" style="background-color:{{ $slider->background_color }} ">
                      <img src="/uploads/{{ $slider->slider_img }}" class="animate__animated animate__fadeInRight" alt="{{ $slider->slider_alt }}">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- END HOME CAROUSEL -->
    <!-- START COUNTRY SECTION -->
    @if($video)
    <div class="country-section" data-aos="fade-up" data-aos-duration="2000">
      <div class="container max-con">
        <div class="country-main">
          <p>{{ $video->short_title }}</p>
          
          <h3>{{ substr($video->title,0,15) }} <br> {{ substr($video->title,15,25) }}</h3>
        </div>
        <div class="country-circle">
          <img src="/assets/frontend/img/digi-circle.png" class="rotate-circle" alt="">
        </div>
        <div class="wrapper">
          <div class="video-main">
            <div class="promo-video">
              <div class="waves-block">
                <div class="waves wave-1"></div>
                <div class="waves wave-2"></div>
                <div class="waves wave-3"></div>
              </div>
            </div>
            <a href="{{ $video->popup_video }}" class="video video-popup mfp-iframe" data-lity><i class="fa fa-play"></i></a>
          </div>
        </div>
        <div class="country-image">
          <img src="/uploads/{{ $video->background_img }}" alt="{{ $video->background_alt }}">
        </div>
      </div>
    </div>
    @endif
    <!-- END COUNTRY SECTION -->
    <!-- SERVICES MAIN SECTION START -->
    <div class="variety-section" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
      <div class="container max-con">
       @if($serviceinfo)
        <div class="variety-info">
          <h4>{{ $serviceinfo->sub_title }}</h4>
          <h3>{{ substr($serviceinfo->title,0,15) }} <br> {{ substr($serviceinfo->title,15,25) }}</h3>
        </div>
        @endif
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="variety-image">
              <img src="/assets/frontend/img/service-circle.png" class="rotate-circle" alt="">
            </div>
          </div>
        </div>
        <div class="variety-icons">
          <div class="row">
            @foreach($services as $service)
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
              <div class="card__collection clear-fix">
                <div class="cards cards--two">
                  <div class="icon-info">
                    <img src="/uploads/{{ $service->service_img }}" alt="{{ $service->service_img_alt }}"> 
                    <div class="icon-main">
                      <div class="alag-div">
                        <h2 class="strong-web"> {{ $service->service_word }} </h2>
                        <h4>{{ $service->service_title }}</h4>
                      </div>
                      <p>{{ $service->service_description }}</p>
                    </div>
                  </div>
                  <span class="cards--two__rect"></span>
                  <span class="cards--two__tri"></span>
                  <a href="{{ $service->service_link }}">{{ $service->service_text }}</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <!-- SERVICES MAIN SECTION END -->
    <!-- CLIENT SLIDER SECTION START -->
    <div class="client-slider-section">
      <div class="container max-con">
        <div class="client-info">
          <h4>{{ $portinfo->sub_title }}</h4>
          <h3>{{ $portinfo->title }}</h3>
        </div>
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="client-image">
              <img src="/assets/frontend/img/service-circle.png" class="rotate-circle" alt="">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <div class="wrap__circle">
              <div class="circle__slider"></div>
              <div class="client-slider"></div>
            </div>
            <div class="line__image">
              <img src="/assets/frontend/img/line.png" alt="">
            </div>
          </div>
          <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
            <div class="text-lg-right client__back">
              <img src="/assets/frontend/img/client-slider.png" width="140">
            </div>
            <div class="content-slider"></div>
          </div>
        </div>
      </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade amazing-slider" data-ride="carousel">
      <div class="carousel-inner slide-inner">
        <div class="carousel-item slide-item active">
          <div class="container max-con">
            <div class="screen-img">
              <img src="/assets/frontend/img/screen1.png" alt="">
            </div>
            <div class="row content__info">
              <div class="col-8">
                <h2>custom website</h2>
              </div>
              <div class="col-4 text-lg-right">
                <div class="logo-slider">
                  <img src="/assets/frontend/img/logo1.png" alt="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">&nbsp;</div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 text-lg-right">
                <div class="content">
                  <h3>palace beautystore</h3>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container max-con">
            <div class="screen-img">
              <img src="/assets/frontend/img/screen2.png" alt="">
            </div>
            <div class="row content__info">
              <div class="col-8">
                <h2>Wordpress</h2>
              </div>
              <div class="col-4 text-lg-right">
                <div class="logo-slider">
                  <img src="/assets/frontend/img/logo3.png" alt="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">&nbsp;</div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 text-lg-right">
                <div class="content">
                  <h3>the elegance</h3>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container max-con">
            <div class="screen-img">
              <img src="/assets/frontend/img/screen3.png" alt="">
            </div>
            <div class="row content__info">
              <div class="col-8">
                <h2>custom website</h2>
              </div>
              <div class="col-4 text-lg-right">
                <div class="logo-slider">
                  <img src="/assets/frontend/img/logo3.png" alt="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">&nbsp;</div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 text-lg-right">
                <div class="content">
                  <h3>palace beautystore</h3>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="container"> -->
      <div class="carousel-next-pre">
        <div class="">
          <div class="row">
            <div class="col-6 carousel-arrows">
              <a class="carousel-control-prev1" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <img src="/assets/frontend/img/left-arrow.png" class="arrow__left"  alt="">
              </a>
            </div>
            <div class="col-6">
              <a class="carousel-control-next1" href="#carouselExampleIndicators" role="button" data-slide="next">
              <img src="/assets/frontend/img/right-arrow.png" class="arrow__right" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- </div> -->
    </div>
    <!-- CLIENT SLIDER SECTION END -->
    <!-- WHY US SECTION START -->
    <div class="why-main-section" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
      <div class="container max-con">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="why-main">
              <h4>// Why Us ?</h4>
              <h3>Improve and Innovate <br> with the Tech Trends</h3>
              <p>We hire and build your own remote dedicated development teams tailored to your specific needs. Get professional fulltime developers who work exclusively for you as a part of your company. We handle all the practical aspects related to hiring and hosting your team at our premises, thus saving you half a cost and a lot of efforts.</p>
              <div id="counter" class="why-counter">
                <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-4">
                    <div class="counter-center">
                      <span data-count="330" class="counter-value">0</span><span> +</span>
                      <p>Active Clients</p>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-4">
                    <div class="counter-center">
                      <span data-count="850" class="counter-value">100</span><span> +</span>
                      <p>Projects Done</p>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-4">
                    <div class="counter-center">
                      <span data-count="25" class="counter-value">100</span><span> +</span>
                      <p>Team Advisors</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="tiles">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="why-box-1">
                    <a class="tile">
                      <div class="title-sec">
                        <h3 class="title-1">Our Mission</h3>
                      </div>
                      <img src="/assets/frontend/img/why-box-1.png" />
                      <div class="details">
                        <span class="info">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Doloremque sequi maxime nostrum itaque ipsa laborum sed.</span>
                        <div class="read-btn">
                          <button type="button" class="btn btn-outline-light social">Read More</button>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="why-box-2">
                    <a class="tile">
                      <h3 class="title-1">Our Vision</h3>
                      <img src="/assets/frontend/img/why-box-2.png" />
                      <div class="details">
                        <span class="info">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Doloremque sequi maxime nostrum itaque ipsa laborum sed.</span>
                        <div class="read-btn">
                          <button type="button" class="btn btn-outline-light social">Read More</button>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="why-box-3">
                    <a class="tile">
                      <h3 class="title-1">Our Philosophy</h3>
                      <img src="/assets/frontend/img/why-box-3.png" />
                      <div class="details">
                        <span class="info">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Doloremque sequi maxime nostrum itaque ipsa laborum sed.</span>
                        <div class="read-btn">
                          <button type="button" class="btn btn-outline-light social">Read More</button>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="why-box-4">
                    <a class="tile">
                      <h3 class="title-1">Our Strategy</h3>
                      <img src="/assets/frontend/img/why-box-4.png" />
                      <div class="details">
                        <span class="info">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Doloremque sequi maxime nostrum itaque ipsa laborum sed.</span>
                        <div class="read-btn">
                          <button type="button" class="btn btn-outline-light social">Read More</button>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- WHY US SECTION END -->
    <!-- GET A QUOTE SECTION START -->
    <div class="container max-con" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
      <div class="get__quote">
        <div class="quote__circle">
          <h2>Get a Quote</h2>
          <div class="quote__border__ashab">
            <hr class="qoute__border">
            <hr class="quote__dark__border">
          </div>
        </div>
        <div class="quote__form">
          <form>
            <div class="form-row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <p>Full Name*</p>
                  <input type="text" class="form-control" placeholder="Your Full Name">
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <p>Your Company Name*</p>
                  <input type="text" class="form-control" placeholder="Your Company Name">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <p>Your Email Address*</p>
                  <input type="text" class="form-control" placeholder="Your Full Name">
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <p>Your Phone*</p>
                  <input class="form-control input-phone" name="phone_no" id="phone_no" type="number" placeholder="1234567890" onKeyPress="if(this.value.length==10) return false;" required="">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <p>Your Website</p>
                  <input type="text" class="form-control" placeholder="Your Full Name">
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <label>I'm interested in*</label>
                <br>
                <div class="custom-select">
                  <select>
                    <option>Select Your Field</option>
                    <option>Website Design & Development</option>
                    <option>Mobile Application</option>
                    <option>Digital Marketing</option>
                    <option>UX / UI Design</option>
                    <option>Branding</option>
                    <option>Partnership</option>
                    <option>Others</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <label>My Budget*</label>
                <br>
                <div class="custom-select">
                  <select>
                    <option>Select Your Field</option>
                    <option>$2500 to $3000 </option>
                    <option>$2500 to $3000 </option>
                    <option>$2500 to $3000 </option>
                    <option>$2500 to $3000 </option>
                    <option>$2500 to $3000 </option>
                  </select>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">&nbsp;</div>
            </div>
            <div class="form-group mt-lg-5">
              <p>Your Message</p>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message"></textarea>
            </div>
            <div class="quote__button">
              <a href="#"><button type="button" class="btn btn-outline-light">Send Inquiry</button></a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- GET A QUOTE SECTION END -->
    <!-- LATEST NEWS SECTION START -->
    <div class="latest-news" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
      <div class="container max-con">
        <div class="latest-title">
          <h2>Our Latest News</h2>
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 latest___blog">
            <div class="date-info">
              <h4>22</h4>
              <span>Mar</span>
            </div>
            <div class="latest-info">
              <div class="latest-image img-hover-zoom img-hover-zoom--colorize">
                <img src="/assets/frontend/img/image.png" alt="News">
              </div>
              <div class="row">
                <div class="col-6">
                  <p>By : Digitalopment</p>
                </div>
                <div class="col-6 text-right">
                  <p><img src="/assets/frontend/img/clock.png" alt=""> 12 Dec 2020</p>
                </div>
              </div>
            </div>
            <div class="news-info">
              <a href="blog.html">
                <h4>Why I say old chap that.</h4>
              </a>
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 latest___blog">
            <div class="date-info">
              <h4>22</h4>
              <span>Mar</span>
            </div>
            <div class="latest-info">
              <div class="latest-image img-hover-zoom img-hover-zoom--colorize">
                <img src="/assets/frontend/img/image-1.png" alt="News">
              </div>
              <div class="row">
                <div class="col-6">
                  <p>By : Digitalopment</p>
                </div>
                <div class="col-6 text-right">
                  <p><img src="/assets/frontend/img/clock.png" alt=""> 12 Dec 2020</p>
                </div>
              </div>
            </div>
            <div class="news-info">
              <a href="blog.html">
                <h4>Why I say old chap that.</h4>
              </a>
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 latest___blog">
            <div class="date-info">
              <h4>22</h4>
              <span>Mar</span>
            </div>
            <div class="latest-info">
              <div class="latest-image img-hover-zoom img-hover-zoom--colorize">
                <img src="/assets/frontend/img/image-2.png" alt="News">
              </div>
              <div class="row">
                <div class="col-6">
                  <p>By : Digitalopment</p>
                </div>
                <div class="col-6 text-right">
                  <p><img src="/assets/frontend/img/clock.png" alt=""> 12 Dec 2020</p>
                </div>
              </div>
            </div>
            <div class="news-info">
              <a href="blog.html">
                <h4>Why I say old chap that.</h4>
              </a>
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 latest___blog">
            <div class="date-info">
              <h4>22</h4>
              <span>Mar</span>
            </div>
            <div class="latest-info">
              <div class="latest-image img-hover-zoom img-hover-zoom--colorize">
                <img src="/assets/frontend/img/image.png" alt="News">
              </div>
              <div class="row">
                <div class="col-6">
                  <p>By : Digitalopment</p>
                </div>
                <div class="col-6 text-right">
                  <p><img src="/assets/frontend/img/clock.png" alt=""> 12 Dec 2020</p>
                </div>
              </div>
            </div>
            <div class="news-info">
              <a href="blog.html">
                <h4>Why I say old chap that.</h4>
              </a>
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- LATEST NEWS SECTION END -->
@endsection