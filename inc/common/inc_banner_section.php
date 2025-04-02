<?php
// D:\Documents\OneDrive - Newstarsec\php\ftp_assets\ns\visapass\inc\XXXXXX\XXXX.php
$arr_Banner = array(
  array(
    'id' => '1',
    'img' => 'assets/images/main-slider/image-1.jpg',
    'title' => 'Counsel LAw Firm',
    'title_lg' => 'Best LAw Firm <br> Since 1968',
    'text' => 'Quis autem velo eum iure reprehenderit rui in ea voluatacera suam nihil molestiae conseuatur vel illum.',
    'url' => 'contact.php',
    'more' => 'Free Consultation ',
  ),
  array(
    'id' => '2',
    'img' => 'assets/images/main-slider/image-1.jpg',
    'title' => 'Counsel LAw Firm',
    'title_lg' => 'Best LAw Firm <br> Since 1968',
    'text' => 'Quis autem velo eum iure reprehenderit rui in ea voluatacera suam nihil molestiae conseuatur vel illum.',
    'url' => 'contact.php',
    'more' => 'Free Consultation ',
  ),
  array(
    'id' => '1',
    'img' => 'assets/images/main-slider/image-1.jpg',
    'title' => 'Counsel LAw Firm',
    'title_lg' => 'Best LAw Firm <br> Since 1968',
    'text' => 'Quis autem velo eum iure reprehenderit rui in ea voluatacera suam nihil molestiae conseuatur vel illum.',
    'url' => 'contact.php',
    'more' => 'Free Consultation ',
  ),
);
?>
<!-- Banner Section -->
<section page="inc_banner_section" class="banner-section"> 
  <!-- Social Nav -->
  <ul class="social-nav">
    <li class="facebook"><a href="#"><span class="fa fa-facebook-f"></span></a></li>
    <li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
    <li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
  </ul>
  <div class="main-slider-carousel owl-carousel owl-theme">
    <?php foreach ($arr_Banner as $k => $val) { ?>
    <div class="slide" style="background-image: url(<?php echo $val["img"] ?> )">
      <div class="auto-container"> 
        
        <!-- Content Column -->
        <div class="content-column">
          <div class="inner-column">
            <div class="title"><?php echo $val["title"] ?> </div>
            <h1><?php echo $val["title_lg"] ?> </h1>
            <div class="text"><?php echo $val["text"] ?> </div>
            <div class="btns-box"> <a href="<?php echo $val["url"] ?> " class="theme-btn btn-style-one"><span class="txt"><?php echo $val["more"] ?> <i class="arrow flaticon-right"></i></span></a> </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</section>
<!-- End Banner Section -->