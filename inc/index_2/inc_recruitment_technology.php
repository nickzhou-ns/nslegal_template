<?php
$arr_recruitment_technology = array(
  array(
    'id' => '1',
    'delay' => '00ms',
    'img' => 'assets/images/icons/icon-7.png',
    'url' => 'family_law.php',
    'title' => 'Sourcing the Best',
    'text' => 'All the lorem ipsum generators on the Internet tend.',
),
array(
  'id' => '2',
  'delay' => '300ms',
  'img' => 'assets/images/icons/icon-8.png',
  'url' => 'family_law.php',
  'title' => 'Volume Hiring',
  'text' => 'On the other hand, we denounce with righteous.',
),
array(
  'id' => '3',
  'delay' => '600ms',
  'img' => 'assets/images/icons/icon-9.png',
  'url' => 'family_law.php',
  'title' => 'Partners in Team Building',
  'text' => 'Man therefore always holds in these matters to this.',
),
);
?>
<section  page="inc_recruitment_technology"  class="recruitment-technology">
  <div class="auto-container">
    <div class="row clearfix">
      <div class="col-lg-6 col-md-12 col-sm-12 image-column">
        <figure class="image-box clearfix titlt" data-tilt data-tilt-max="4"><img src="assets/images/resource/recruitment-1.png" alt=""></figure>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 content-column">
        <div id="content_block_4">
          <div class="content-box">
            <div class="sec-title">
              <h2>Consult With Experts Using Technology</h2>
              <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form.</p>
            </div>
            <div class="inner-box">
<?php foreach ($arr_recruitment_technology as $k => $val) { ?>
              <div class="single-item wow fadeInRight animated animated" data-wow-delay="<?php echo $val["delay"] ?>" data-wow-duration="1500ms">
                <div class="inner">
                  <figure class="icon-box"><img src="<?php echo $val["img"] ?>" alt=""></figure>
                  <h4><span>0<?php echo $val["id"] ?></span><a href="<?php echo $val["url"] ?>"><?php echo $val["title"] ?><i class="flaticon-right-arrow"></i></a></h4>
                  <p><?php echo $val["text"] ?></p>
                </div>
              </div>
              <?php } ?>
              <!-- <div class="single-item wow fadeInRight animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="inner">
                  <figure class="icon-box"><img src="assets/images/icons/icon-8.png" alt=""></figure>
                  <h4><span>02</span><a href="family_law.php">Volume Hiring<i class="flaticon-right-arrow"></i></a></h4>
                  <p>On the other hand, we denounce with righteous.</p>
                </div>
              </div>
              <div class="single-item wow fadeInRight animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="inner">
                  <figure class="icon-box"><img src="assets/images/icons/icon-9.png" alt=""></figure>
                  <h4><span>03</span><a href="family_law.php">Partners in Team Building<i class="flaticon-right-arrow"></i></a></h4>
                  <p>Man therefore always holds in these matters to this.</p>
                </div>
              </div> -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
