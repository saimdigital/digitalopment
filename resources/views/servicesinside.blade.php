@extends('layout.master')
@section('page-title')
    Service Inside
@endsection
@section('main-content') 
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-interval="false" data-ride="carousel">
      <div class="carousel-inner " data-aos="fade-right">
        <div class="carousel-item services-inside-image active">
          <div class="services-inside">
            <div class="container max-con">
              <div class="row custom-reverse">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="animate__animated animate__fadeInLeft">
                    <div class="services-inside-details">
                      <h2 class="inside-slider">W<span class="text-design">EB DESIGN</span></h2>
                    </div>
                    <div class="services-inside-info">
                      <h2>Our digital services</h2>
                      <p>create lovely projects  deliver memorable experiences</p>
                      <br>  
                      <a href="form.html"><button type="button" class="btn btn-light">Get a Quote<span>&#10230;</span></button></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="animate__animated animate__fadeInRight">
                    <div class="services-inside-images">
                      <img src="assets/img/Ellipse_24.png">
                      <h5> WE USED</h5>
                      <p>Front End Technologies</p>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <div class="inside-icon">
                          <img class="html-5" src="assets/img/html5.png">
                          <p>html 5</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="inside-icon">
                          <img class="css-3" src="assets/img/css3.png">
                          <p>CSS 3</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="inside-icon">
                          <img class="java-script" src="assets/img/javascript.png">
                          <p>Java script</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="inside-icon">
                          <img class="boost-b" src="assets/img/b.png">
                          <p>Bootstrap 4</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <div class="inside-icon">
                          <img class="j-query" src="assets/img/jquery.png">
                          <p>jQuery</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="inside-icon">
                          <img class="angular-js" src="assets/img/angularjs.png">
                          <p>Angular</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="inside-icon">
                          <img class="native" src="assets/img/react_native.png">
                          <p>react js</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item services-inside-image-2">
          <div class="services-inside">
            <div class="container max-con">
              <div class="row custom-reverse">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="animate__animated animate__fadeInLeft">
                    <div class="services-inside-details">
                      <h2 class="inside-slider">W<span class="text-design">EB DESIGN</span></h2>
                    </div>
                    <div class="services-inside-info">
                      <h2>Our digital services</h2>
                      <p>create lovely projects  deliver memorable experiences</p>
                      <br>  
                      <a href="form.html"><button type="button" class="btn btn-light">Get a Quote<span>&#10230;</span></button></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="animate__animated animate__fadeInRight">
                    <div class="services-inside-images">
                      <img src="assets/img/Ellipse_24.png">
                      <h5> WE USED</h5>
                      <p>Back End Technologies</p>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <div class="inside-icon">
                          <img class="php" src="assets/img/php_logo.png">
                          <p>PHP</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="inside-icon">
                          <img class="python" src="assets/img/python.png">
                          <p>Python</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="inside-icon">
                          <img class="node" src="assets/img/node.png">
                          <p>Node.js</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <div class="inside-icon">
                          <img class="codeigniter" src="assets/img/codignater.png">
                          <p>Codeigniter</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="inside-icon">
                          <img class="laravel" src="assets/img/laravel-1.png">
                          <p>Laravel</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-inside-icon">
        <a class="previous2" href="#carouselExampleFade" role="button" data-slide="prev">
        <i class="fas fa-long-arrow-alt-up"></i>
        </a>
        <a class="next2" href="#carouselExampleFade" role="button" data-slide="next">
        <i class="fas fa-long-arrow-alt-down"></i>
        </a>
      </div>
    </div>
@endsection