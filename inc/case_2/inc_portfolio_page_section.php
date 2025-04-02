<?php
$arr_section_case = array(
  array(
    'id' => '1',
    'img_bg' => 'assets/images/shape/pattern-17.png',
    'img' => 'assets/images/resource/case-2.jpg',
    'url' => 'case_details.php',
    'icon' => 'flaticon-notebook',
        'text' => '@ Presentation',
    'title' => 'Helping Bigbasket Scale Up',
    'delay' => '0ms',
    'more' => 'Read More',
  ),
  array(
    'id' => '2',
    'img_bg' => 'assets/images/shape/pattern-17.png',
    'img' => 'assets/images/resource/case-3.jpg',
    'url' => 'case_details.php',
    'icon' => 'flaticon-file',
        'text' => '@ Presentation',
    'title' => 'Helping Bigbasket Scale Up',
    'delay' => '300ms',
    'more' => 'Read More',
  ),
  array(
    'id' => '3',
    'img_bg' => 'assets/images/shape/pattern-17.png',
    'img' => 'assets/images/resource/case-4.jpg',
    'url' => 'case_details.php',
    'icon' => 'flaticon-umbrella-1',
        'text' => '@ Presentation',
    'title' => 'Helping Bigbasket Scale Up',
    'delay' => '600ms',
    'more' => 'Read More',
  ),
  array(
    'id' => '4',
    'img_bg' => 'assets/images/shape/pattern-17.png',
    'img' => 'assets/images/resource/case-2.jpg',
    'url' => 'case_details.php',
    'icon' => 'flaticon-notebook',
        'text' => '@ Presentation',
    'title' => 'Helping Bigbasket Scale Up',
    'delay' => '0ms',
    'more' => 'Read More',
  ),
  array(
    'id' => '5',
    'img_bg' => 'assets/images/shape/pattern-17.png',
    'img' => 'assets/images/resource/case-5.jpg',
    'url' => 'case_details.php',
    'icon' => 'flaticon-file',
        'text' => '@ Presentation',
    'title' => 'Helping Bigbasket Scale Up',
    'delay' => '300ms',
    'more' => 'Read More',
  ),
  array(
    'id' => '6',
    'img_bg' => 'assets/images/shape/pattern-17.png',
    'img' => 'assets/images/resource/case-4.jpg',
    'url' => 'case_details.php',
    'icon' => 'flaticon-umbrella-1',
        'text' => '@ Presentation',
    'title' => 'Helping Bigbasket Scale Up',
    'delay' => '600ms',
    'more' => 'Read More',
  ),
  array(
    'id' => '7',
    'img_bg' => 'assets/images/shape/pattern-17.png',
    'img' => 'assets/images/resource/case-6.jpg',
    'url' => 'case_details.php',
    'icon' => 'flaticon-notebook',
        'text' => '@ Presentation',
    'title' => 'Helping Bigbasket Scale Up',
    'delay' => '0ms',
    'more' => 'Read More',
  ),
  array(
    'id' => '8',
    'img_bg' => 'assets/images/shape/pattern-17.png',
    'img' => 'assets/images/resource/case-3.jpg',
    'url' => 'case_details.php',
    'icon' => 'flaticon-file',
        'text' => '@ Presentation',
    'title' => 'Helping Bigbasket Scale Up',
    'delay' => '300ms',
    'more' => 'Read More',
  ),
  array(
    'id' => '9',
    'img_bg' => 'assets/images/shape/pattern-17.png',
    'img' => 'assets/images/resource/case-7.jpg',
    'url' => 'case_details.php',
    'icon' => 'flaticon-umbrella-1',
        'text' => '@ Presentation',
    'title' => 'Helping Bigbasket Scale Up',
    'delay' => '600ms',
    'more' => 'Read More',
  ),
);
?>
<section   page="inc_portfolio_page_section"    class="protfolio-page project-style-two">
  <div class="auto-container">
    <div class="row clearfix">
    <?php foreach ($arr_section_case as $k => $val) { ?>
      <div class="project-block-one col-lg-4 col-md-6 col-sm-12">
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

      <!-- <div class="project-block-one col-lg-4 col-md-6 col-sm-12">
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
      <div class="project-block-one col-lg-4 col-md-6 col-sm-12">
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
      <div class="project-block-one col-lg-4 col-md-6 col-sm-12">
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
      </div>
      <div class="project-block-one col-lg-4 col-md-6 col-sm-12">
        <div class="inner-box">
          <figure class="image-box">
            <div class="pattern-layer">
              <div class="pattern-2" style="background-image: url(assets/images/shape/pattern-17.png);"></div>
            </div>
            <img src="assets/images/resource/case-6.jpg" alt=""> </figure>
          <div class="content-box">
            <div class="text"> <span>@ Presentation</span>
              <h4><a href="case_details.php">Helping Bigbasket Scale Up</a></h4>
            </div>
            <div class="view-btn"><a href="assets/images/resource/case-6.jpg" class="lightbox-image" data-fancybox="gallery">+</a></div>
          </div>
        </div>
      </div>
      <div class="project-block-one col-lg-4 col-md-6 col-sm-12">
        <div class="inner-box">
          <figure class="image-box">
            <div class="pattern-layer">
              <div class="pattern-2" style="background-image: url(assets/images/shape/pattern-17.png);"></div>
            </div>
            <img src="assets/images/resource/case-7.jpg" alt=""> </figure>
          <div class="content-box">
            <div class="text"> <span>@ Presentation</span>
              <h4><a href="case_details.php">Helping Bigbasket Scale Up</a></h4>
            </div>
            <div class="view-btn"><a href="assets/images/resource/case-7.jpg" class="lightbox-image" data-fancybox="gallery">+</a></div>
          </div>
        </div>
      </div>
      <div class="project-block-one col-lg-4 col-md-6 col-sm-12">
        <div class="inner-box">
          <figure class="image-box">
            <div class="pattern-layer">
              <div class="pattern-2" style="background-image: url(assets/images/shape/pattern-17.png);"></div>
            </div>
            <img src="assets/images/resource/case-2.jpg" alt=""> </figure>
          <div class="content-box">
            <div class="text"> <span>@ Presentation</span>
              <h4><a href="case_details.php">Helping Bigbasket Scale Up</a></h4>
            </div>
            <div class="view-btn"><a href="assets/images/resource/case-2.jpg" class="lightbox-image" data-fancybox="gallery">+</a></div>
          </div>
        </div>
      </div>
      <div class="project-block-one col-lg-4 col-md-6 col-sm-12">
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
      <div class="project-block-one col-lg-4 col-md-6 col-sm-12">
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
       -->
    </div>
  </div>
</section>
