<?php
$arr_project_style = array(
  array(
    'id' => '1',
    'img_bg' => 'assets/images/shape/pattern-17.png',
    'url' => 'case_details.php',
    'img' => 'assets/images/resource/case-2.jpg',
     'text' => '@ Presentation',
    'title' => 'Helping Bigbasket Scale Up',
   
),
array(
  'id' => '2',
  'img_bg' => 'assets/images/shape/pattern-17.png',
  'url' => 'case_details.php',
  'img' => 'assets/images/resource/case-3.jpg',
   'text' => '@ Presentation',
    'title' => 'Helping Bigbasket Scale Up',
  ),
array(
  'id' => '3',
  'img_bg' => 'assets/images/shape/pattern-17.png',
  'url' => 'case_details.php',
  'img' => 'assets/images/resource/case-4.jpg',
   'text' => '@ Presentation',
    'title' => 'Helping Bigbasket Scale Up',


),
array(
  'id' => '4',
  'img_bg' => 'assets/images/shape/pattern-17.png',
  'url' => 'case_details.php',
  'img' => 'assets/images/resource/case-5.jpg',
   'text' => '@ Presentation',
    'title' => 'Helping Bigbasket Scale Up',
  ),
array(
  'id' => '5',
  'img_bg' => 'assets/images/shape/pattern-17.png',
  'url' => 'case_details.php',
  'img' => 'assets/images/resource/case-2.jpg',
   'text' => '@ Presentation',
    'title' => 'Helping Bigbasket Scale Up',
  ),
);
?>
<section  page="inc_project_style_two"  class="project-style-two">
  <div class="outer-container">
    <div class="sec-title centered">
      <h2>Our Case Studies</h2>
      <div class="text">Long established fact that a reader will be distracted by the <br />
        readable content of a page.</div>
    </div>
    <div class="four-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
   
      <?php foreach ($arr_project_style as $k => $val) { ?>
      <div class="project-block-one">
        <div class="inner-box">
          <figure class="image-box">
            <div class="pattern-layer">
              <div class="pattern-2" style="background-image: url(<?php echo $val["img_bg"] ?>);"></div>
            </div>
            <img src="<?php echo $val["img"] ?>" alt=""> </figure>
          <div class="content-box">
            <div class="text"> <span><?php echo $val["text"] ?></span>
              <h4><a href="<?php echo $val["url"] ?>"><?php echo $val["title"] ?></a></h4>
            </div>
            <div class="view-btn"><a href="<?php echo $val["img"] ?>" class="lightbox-image" data-fancybox="gallery">+</a></div>
          </div>
        </div>
      </div>
<?php } ?>
      <!-- <div class="project-block-one">
        <div class="inner-box">
          <figure class="image-box">
            <div class="pattern-layer">
              <div class="pattern-2" style="background-image: url(assets/images/shape/pattern-17.png);"></div>
            </div>
            <img src="assets/images/resource/case-3.jpg" alt=""> </figure>
          <div class="content-box">
            <div class="text"> <span>@ Presentation</span>
              <h4><a href="case_details.php">Helping Bigbasket Scale Up</a></h4>
            </div>
            <div class="view-btn"><a href="assets/images/resource/case-3.jpg" class="lightbox-image" data-fancybox="gallery">+</a></div>
          </div>
        </div>
      </div>
      <div class="project-block-one">
        <div class="inner-box">
          <figure class="image-box">
            <div class="pattern-layer">
              <div class="pattern-2" style="background-image: url(assets/images/shape/pattern-17.png);"></div>
            </div>
            <img src="assets/images/resource/case-4.jpg" alt=""> </figure>
          <div class="content-box">
            <div class="text"> <span>@ Presentation</span>
              <h4><a href="case_details.php">Helping Bigbasket Scale Up</a></h4>
            </div>
            <div class="view-btn"><a href="assets/images/resource/case-4.jpg" class="lightbox-image" data-fancybox="gallery">+</a></div>
          </div>
        </div>
      </div>
      <div class="project-block-one">
        <div class="inner-box">
          <figure class="image-box">
            <div class="pattern-layer">
              <div class="pattern-2" style="background-image: url(assets/images/shape/pattern-17.png);"></div>
            </div>
            <img src="assets/images/resource/case-5.jpg" alt=""> </figure>
          <div class="content-box">
            <div class="text"> <span>@ Presentation</span>
              <h4><a href="case_details.php">Helping Bigbasket Scale Up</a></h4>
            </div>
            <div class="view-btn"><a href="assets/images/resource/case-5.jpg" class="lightbox-image" data-fancybox="gallery">+</a></div>
          </div>
        </div>
      </div> -->
    </div>
    <div class="more-text centered">
      <p>Interested to work with us? <a href="case_details.php">Let’s get started</a></p>
    </div>
  </div>
</section>
