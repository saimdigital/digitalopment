@extends('layout.master')
@section('page-title')
    Portfolio
@endsection
@section('main-content') 
<section>
  <div class="portfolio-main">
    <div class="container-fluid">
      <div class="portfolio-left">
        <img class="rotate" src="/assets/frontend/img/Ellipse_24.png" alt="">
        <div class="portfolio-info">
          <h2 class="portfolio-bold">Our Portfolio</h2>
          <h6 class="port-trusted">Your trusted</h6>
          <hr>
          <h4>Digital Marketing <br><strong>Partner</strong></h4>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
          <button type="button" class="btn btn-light about-button ml-0">Get Started<span>&#10230;</span></button>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container max-con">
  <div class="button-group filters-button-group">
    <button class="button is-checked" data-filter="*">All</button>
    <button class="button" data-filter=".beach">Technology</button>
    <button class="button" data-filter=".bird">Financial</button>
    <button class="button" data-filter=".boat">Construction</button>
    <button class="button" data-filter=".lighthouse">Hospitality</button>
  </div>
  <section id="grid-container" class="transitions-enabled fluid masonry js-masonry grid">
    <article class="beach">
      <div class="album-images" data-album="album 1">
        <div class="album-img-1">
          <img src="/assets/frontend/img/Image_14.png">
        </div>
         <!-- <div class="overlay"></div> -->
        <div class="image-box">
          <a href="portfolioinside.html">
            <h4>Altawakkal</h4>
          </a>
          <p>Ecommerce store</p>
        </div>
      </div>
    </article>
    <article class="beach boat">
      <div class="album-images" data-album="album 1">
        <div class="album-img-1">
          <img src="/assets/frontend/img/Image_23.png">
        </div>
        <div class="image-box">
          <a href="portfolioinside.html">
            <h4>Clickawash</h4>
          </a>
          <p>Ecommerce store</p>
        </div>
      </div>
    </article>
    <article class="bird">
      <div class="album-images" data-album="album 1">
        <div class="album-img-1">
          <img src="/assets/frontend/img/Image_22.png">
        </div>
        
        <div class="image-box">
          <a href="portfolioinside.html">
            <h4>Bari Textiles</h4>
          </a>
          <p>Ecommerce store</p>
        </div>
      </div>
    </article>
    <article class="beach bird">
      <div class="album-images" data-album="album 1">
        <div class="album-img-1">
          <img src="/assets/frontend/img/Image_15.png">
        </div>
        
        <div class="image-box">
          <a href="portfolioinside.html">
            <h4>Clickawash</h4>
          </a>
          <p>Ecommerce store</p>
        </div>
      </div>
    </article>
    <article class="bird">
      <div class="album-images" data-album="album 1">
        <div class="album-img-1">
          <img src="/assets/frontend/img/Image_16.png">
        </div>
        
        <div class="image-box">
          <a href="portfolioinside.html">
            <h4>Palacebeauty</h4>
          </a>
          <p>Ecommerce store</p>
        </div>
      </div>
    </article>
    <article class="lighthouse">
      <div class="album-images" data-album="album 1">
        <div class="album-img-1">
          <img src="/assets/frontend/img/Image_24.png">
        </div>
        
        <div class="image-box">
          <a href="portfolioinside.html">
            <h4>Copier</h4>
          </a>
          <p>Ecommerce store</p>
        </div>
      </div>
    </article>
    <article class="boat">
      <div class="album-images" data-album="album 1">
        <div class="album-img-1">
          <img src="/assets/frontend/img/Image_21.png">
        </div>
        
        <div class="image-box">
          <a href="portfolioinside.html">
            <h4>Altawakkal</h4>
          </a>
          <p>Ecommerce store</p>
        </div>
      </div>
    </article>
    <article class="beach">
      <div class="album-images" data-album="album 1">
        <div class="album-img-1">
          <img src="/assets/frontend/img/Image_20.png">
        </div>
        
        <div class="image-box">
          <a href="portfolioinside.html">
            <h4>Copier</h4>
          </a>
          <p>Ecommerce store</p>
        </div>
      </div>
    </article>
    <article class="lighthouse">
      <div class="album-images" data-album="album 1">
        <div class="album-img-1">
          <img src="/assets/frontend/img/Image_17.png">
        </div>

        <div class="image-box">
          <a href="portfolioinside.html">
            <h4>Orderpak</h4>
          </a>
          <p>Ecommerce store</p>
        </div>
      </div>
    </article>
  </section>
</div>
@endsection