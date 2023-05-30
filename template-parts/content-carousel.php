<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Future_Bridge
 */

?>   

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="first-slide" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide-img.jpg"
        alt="First slide">
      <div class="container">
        <div class="carousel-caption text-left">
          <h1>We are FutureBridge</h1>
          <p>The future is here. The opportunities are limitless.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">I Read More</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="second-slide" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide-img.jpg"
        alt="Second slide">  
      <div class="container">
        <div class="carousel-caption text-left">
          <h1>We are FutureBridge</h1>
          <p>The future is here. The opportunities are limitless.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">I Read More</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="third-slide" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide-img.jpg"
        alt="Third slide">
      <div class="container">
        <div class="carousel-caption text-left">
          <h1>We are FutureBridge</h1>
          <p>The future is here. The opportunities are limitless.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">I Read More</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>