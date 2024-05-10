<!DOCTYPE html>
<html>
<head>
  <title>Simple Carousel</title>
  <style>
    #slideshow {
      position: relative;
      width: 640px;
      height: 310px;
      padding: 15px;
      margin: 0 auto 2em;
      border: 1px solid #ddd;
      background: #FFF;
      background: linear-gradient(#FFF, #FFF 20%, #EEE 80%, #DDD);
      border-radius: 2px 2px 2px 2px;
      box-shadow: 0 0 3px rgba(0,0,0, 0.2);
    }

    .slider {
      position: absolute;
      left: 0; top: 0;
      width: 800%; /* adjusted to fit 8 slides */
      height: 310px;
      transition: left 1s;
    }

    .slide {
      float: left;
      width: 12.5%; /* adjusted to fit 8 slides */
      height: 310px;
    }

    .slide img {
      width: 100%;
      height: 310px;
    }

    .commands {
      position: absolute;
      top: 45%;
      padding: 5px 13px;
      border-bottom: 0;
      font-size: 1.3em;
      color: #aaa;
      text-decoration: none;
      background-color: #eee;
      background-image: linear-gradient(#fff, #ddd);
      text-shadow: 0 0 1px #aaa;
      border-radius: 50%;
      box-shadow: 1px 1px 2px rgba(0,0,0, 0.2);
    }

    .prev {
      left: -48px;
    }

    .next {
      right: -48px;
    }
  </style>
</head>
<body>
  <div id="slideshow">
    <div class="slider">
      <div class="slide"><img src="image/champagne.JPG" alt="Img1"></div>
      <div class="slide"><img src="image/fondu.JPG" alt="Img2"></div>
      <div class="slide"><img src="image/fruit.JPG" alt="Img3"></div>
      <div class="slide"><img src="image/grenade.JPG" alt="Img4"></div>
      <div class="slide"><img src="image/madeleine.JPG" alt="Img5"></div>
      <div class="slide"><img src="image/glace.JPG" alt="Img6"></div>
      <div class="slide"><img src="image/jezve.JPG" alt="Img7"></div>
      <div class="slide"><img src="image/petitdej.JPG" alt="Img8"></div>
    </div>
    <div class="commands">
      <a href="#" class="prev">‹</a>
      <a href="#" class="next">›</a>
    </div>
  </div>

  <script>
    let slideshow = document.getElementById('slideshow');
    let slider = document.querySelector('.slider');
    let prev = document.querySelector('.prev');
    let next = document.querySelector('.next');

    let currentSlide = 0;
    let slides = slider.children;

    prev.addEventListener('click', function() {
      currentSlide--;
      if (currentSlide < 0) {
        currentSlide = slides.length - 1;
      }
      slider.style.left = -currentSlide * 640 / 8 + 'px'; /* adjusted to fit 8 slides */
    });

    next.addEventListener('click', function() {
      currentSlide++;
      if (currentSlide >= slides.length) {
        currentSlide = 0;
      }
      slider.style.left = -currentSlide * 640 / 8 + 'px'; /* adjusted to fit 8 slides */
    });
  </script>
</body>
</html>