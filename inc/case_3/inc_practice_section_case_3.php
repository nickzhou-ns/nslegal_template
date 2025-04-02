<?php
$arr_section_case = array(
  array(
    'id' => '1',
    'img' => 'assets/images/resource/case-2.jpg',
    'url' => 'case-details.php',
    'icon' => 'flaticon-notebook',
    'title_sm' => 'Law Firm',
    'title_h4' => 'Business Litigation',
    'text' => 'Equal blame belongs too those who fail in their through weakness.',
    'delay' => '0ms',
    'more' => 'Read More',
  ),
  array(
    'id' => '2',
    'img' => 'assets/images/resource/case-3.jpg',
    'url' => 'case-details.php',
    'icon' => 'flaticon-file',
    'title_sm' => 'Law Firm',
    'title_h4' => 'Employment La',
    'text' => 'Equal blame belongs too those who fail in their through weakness.',
    'delay' => '300ms',
    'more' => 'Read More',
  ),
  array(
    'id' => '3',
    'img' => 'assets/images/resource/case-4.jpg',
    'url' => 'case-details.php',
    'icon' => 'flaticon-umbrella-1',
    'title_sm' => 'Law Firm',
    'title_h4' => 'Family Law',
    'text' => 'Equal blame belongs too those who fail in their through weakness.',
    'delay' => '600ms',
    'more' => 'Read More',
  ),
  array(
    'id' => '4',
    'img' => 'assets/images/resource/case-2.jpg',
    'url' => 'case-details.php',
    'icon' => 'flaticon-notebook',
    'title_sm' => 'Law Firm',
    'title_h4' => 'Insurance Defence',
    'text' => 'Equal blame belongs too those who fail in their through weakness.',
    'delay' => '0ms',
    'more' => 'Read More',
  ),
  array(
    'id' => '5',
    'img' => 'assets/images/resource/case-3.jpg',
    'url' => 'case-details.php',
    'icon' => 'flaticon-file',
    'title_sm' => 'Law Firm',
    'title_h4' => 'Business Litigation',
    'text' => 'Equal blame belongs too those who fail in their through weakness.',
    'delay' => '300ms',
    'more' => 'Read More',
  ),
  array(
    'id' => '6',
    'img' => 'assets/images/resource/case-4.jpg',
    'url' => 'case-details.php',
    'icon' => 'flaticon-umbrella-1',
    'title_sm' => 'Law Firm',
    'title_h4' => 'Business Litigation',
    'text' => 'Equal blame belongs too those who fail in their through weakness.',
    'delay' => '600ms',
    'more' => 'Read More',
  ),
);
?>
<section  page="inc_practice_section_case_3"  class="case-style-three bg-color-1">
  <div class="auto-container">
    <div class="row clearfix">
      <?php foreach ($arr_section_case as $k => $val) { ?>
      <div class="col-lg-4 col-md-6 col-sm-12 case-block">
        <div class="case-block-two wow fadeInUp" data-wow-delay="<?php echo $val["delay"] ?>" data-wow-duration="1500ms">
          <div class="inner-box">
            <figure class="image-box"> <img src="<?php echo $val["img"] ?>" alt="">
              <div class="link"><a href="<?php echo $val["url"] ?>"><i class="overlay-layer"></i></a></div>
              <div class="overlay-layer"></div>
            </figure>
            <div class="lower-content">
              <div class="box">
                <div class="icon-box"><i class="<?php echo $val["icon"] ?>"></i></div>
                <p><?php echo $val["title_sm"] ?></p>
                <h4><a href="<?php echo $val["url"] ?>"><?php echo $val["title_h4"] ?></a></h4>
              </div>
              <div class="text">
                <p><?php echo $val["text"] ?></p>
              </div>
              <div class="link"><a href="<?php echo $val["url"] ?>"><i class="flaticon-right"></i><?php echo $val["more"] ?></a></div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
