@extends('layout.master')
@section('page-title')
    Contact
@endsection
@section('main-content') 
<section>
  <div class="contact-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <div class="contact-heading">
            <h4>Get in touch Your trusted<br>Business Find</h4>
          </div>
          <div class="contact-one">
            <div class="rtl-slider-2">
              <div class="rtl-slider-contact contact-slider1">
              </div>
              <div class="rtl-slider-contact contact-slider2">
              </div>
              <div class="rtl-slider-contact contact-slider3">
              </div>
              <div class="rtl-slider-contact contact-slider4">
              </div>
              <div class="rtl-slider-contact contact-slider5">
              </div>
            </div>
          </div>
          <div class="contact-card">
            <div class="rtl-slider-nav-2">
              <div class="rtl-slider-contact contact-info">
                <li>Web Development</li>
              </div>
              <div class="rtl-slider-contact contact-info">
                <li>mobile App Development</li>
              </div>
              <div class="rtl-slider-contact contact-info">
                <li>software Development</li>
              </div>
              <div class="rtl-slider-contact contact-info">
                <li>Resource Augmentation</li>
              </div>
              <div class="rtl-slider-contact contact-info">
                <li>Ecommerce Solution</li>
              </div>
            </div>
          </div>
          <div class="main-contact">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="digi-contact">
                  <h4>Pakistan</h4>
                  <p><span>Email : </span>contact@digitalopment.com</p>
                  <p><span>Phone : </span>+ 92 333 433 229</p>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="digi-contact">
                  <h4>UK</h4>
                  <p><span>Email : </span>contact@digitalopment.com</p>
                  <p><span>Phone : </span>+ 92 333 433 229</p>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="digi-contact digi-contact-2">
                  <h4>UAE</h4>
                  <p><span>Email : </span>contact@digitalopment.com</p>
                  <p><span>Phone : </span>+ 92 333 433 229</p>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="digi-contact digi-contact-2">
                  <h4>USA</h4>
                  <p><span>Email : </span>contact@digitalopment.com</p>
                  <p><span>Phone : </span>+ 92 333 433 229</p>
                </div>
              </div>
            </div>
            <div class="follow-contact">
              <h3>Follow Us</h3>
              <div class="contact-icons mt-3 mt-md-1">
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
        <div class="col-lg-5 col-md-6 col-sm-12">
          <div class="contact-input">
            <h2>Get in Touch</h2>
            <form>
              <div class="form-group">
                <label for="formGroupExampleInput">Name</label>
                <input type="text" class="form-control" required='' id="formGroupExampleInput"  placeholder="Full Name">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Email Address</label>
                <input type="text" class="form-control" required='' placeholder="example@youremail.com">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Your Subject</label>
                <input type="text" class="form-control" required='' placeholder="Your subject">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Your Message</label>
                <textarea type="text" class="form-control" required='' placeholder="Write Your Message"></textarea>
              </div>
            <a href="#"><button type="submit" class="btn btn-light">Send Message</button></a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection