<?php
require "memberheader.php";
?>


<html lang="en" dir="ltr">
<body>

<div class="entire-container">

  <!--landing -->
  <div class="landing-container">
    <video autoplay loop muted>
      <source src="battlefieldvid2.mp4">
    </video>
  </div>

  <div class="landing-text">
    <div class="landing-inner-text">
      <h2>Welcome to Rocket&trade; Games</h2>
      <p> Play over 100 online games for free!</p>
      <button type="button" name="button">Browse games</button>
    </div>
  </div>
  <!--end of landing-->


  <!-- slides -->
  <div class="featured-games">
    <h2> Featured Games</h2>
  </div>
  <div class="slide-container">
    <div class="slide-inner">
      <div class="image-section slideone">
      </div>
      <div class="text-section">
        <div class="inner-text">
          <h3>Battlefield&trade; 5</h3>
          <p> Random text. This is some really random text.</p>
          <button class="play" type="button" name="button">Play</button>
          <button class="learn-more" type="button" name="button">Learn more</button>
        </div>
      </div>
    </div>
    <div class="slide-inner">
      <div class="image-section slidetwo">
      </div>
      <div class="text-section">
        <div class="inner-text">
          <h3>The Sims&trade; 4</h3>
          <p> Random text. This is some really random text.</p>
          <button class="play" type="button" name="button">Play</button>
          <button class="learn-more" type="button" name="button">Learn more</button>
        </div>
      </div>
    </div>
    <div class="slide-inner">
      <div class="image-section slidethree">
      </div>
      <div class="text-section">
        <div class="inner-text">
          <h3>Fortnite</h3>
          <p> Random text. This is some really random text.</p>
          <button class="play" type="button" name="button">Play</button>
          <button class="learn-more" type="button" name="button">Learn more</button>
        </div>
      </div>
    </div>
  </div>

  <div class="arrow-slides">
    <button class="prevbtn"><i class="fas fa-chevron-left"></i></button>
    <button class="nextbtn"><i class="fas fa-chevron-right"></i></button>
  </div>
  <!--slides-->

  <div class="filler">

  </div>

</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('.slide-container').slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      swipe: false,
      arrows:true,
      prevArrow: '.prevbtn',
      nextArrow: '.nextBtn',
      centerMode: true,
      centerPadding: '400px',
    });
  });

$(document).ready(function(){
  $(".logo").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
    });
  });
</script>

</body>
</html>
