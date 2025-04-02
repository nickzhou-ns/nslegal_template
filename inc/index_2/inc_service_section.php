<section  page="inc_service_section"  class="service-section alternet-2 bg-color-light">
  <div class="auto-container">
    <div class="sec-title centered">
      <h2>Inspiring Staffing Solutions</h2>
      <div class="text">Long established fact that a reader will be distracted by the <br />
        readable content of a page.</div>
    </div>

    <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
    <?php
$arr_service_section = array(
  array(
    'id' => '1',
    'img' => 'assets/images/resource/service-2.jpg',
    'icon' => 'flaticon-file', #flaticon-file
    'title' => 'Temporary', #Temporary
    'text' => 'Explain to you how this idea denouncing pleasure & praising pain was born.',
    'more' => 'More Details', 
    'url' => 'case_details.php',
),
array(
  'id' => '2',
  'img' => 'assets/images/resource/service-3.jpg',
  'icon' => 'flaticon-file-1', #flaticon-file
  'title' => 'Direct Hire', #Temporary
  'text' => 'Explain to you how this idea denouncing pleasure & praising pain was born.',
  'more' => 'More Details', 
  'url' => 'case_details.php',
),
array(
  'id' => '3',
  'img' => 'assets/images/resource/service-4.jpg',
  'icon' => 'flaticon-umbrella-1', #flaticon-file
  'title' => 'Contract', #Temporary
  'text' => 'Explain to you how this idea denouncing pleasure & praising pain was born.',
  'more' => 'More Details', 
  'url' => 'case_details.php',
),
array(
  'id' => '4',
  'img' => 'assets/images/resource/service-2.jpg',
  'icon' => 'flaticon-group', #flaticon-file
  'title' => 'Temporary', #Temporary
  'text' => 'Explain to you how this idea denouncing pleasure & praising pain was born.',
  'more' => 'More Details', 
  'url' => 'case_details.php',
),
array(
  'id' => '5',
  'img' => 'assets/images/resource/service-2.jpg',
  'icon' => 'flaticon-group', #flaticon-file
  'title' => 'Temporary', #Temporary
  'text' => 'Explain to you how this idea denouncing pleasure & praising pain was born.',
  'more' => 'More Details', 
  'url' => 'case_details.php',
),array(
  'id' => '6',
  'img' => 'assets/images/resource/service-2.jpg',
  'icon' => 'flaticon-group', #flaticon-file
  'title' => 'Temporary', #Temporary
  'text' => 'Explain to you how this idea denouncing pleasure & praising pain was born.',
  'more' => 'More Details', 
  'url' => 'case_details.php',
),array(
  'id' => '7',
  'img' => 'assets/images/resource/service-2.jpg',
  'icon' => 'flaticon-group', #flaticon-file
  'title' => 'Temporary', #Temporary
  'text' => 'Explain to you how this idea denouncing pleasure & praising pain was born.',
  'more' => 'More Details', 
  'url' => 'case_details.php',
),

);
?>
<?php foreach ($arr_service_section as $k => $val) { ?>
      <div class="service-block-one">
        <div class="inner-box">
          <figure class="image-box"><img src="<?php echo $val["img"] ?>" alt=""></figure>
          <div class="lower-content">
            <div class="content-box">
              <div class="inner">
                <div class="icon-box">
                  <div class="icon <?php echo $val["icon"] ?>"></div>
                </div>
                <h4><?php echo $val["title"] ?></h4>
              </div>
              <div class="link"><a href="<?php echo $val["url"] ?>"><?php echo $val["more"] ?></a></div>
            </div>
            <div class="overlay-content">
              <p><?php echo $val["text"] ?></p>
              <a href="<?php echo $val["url"] ?>"><i class="flaticon-right-arrow"></i><?php echo $val["more"] ?></a> </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <!-- <div class="service-block-one">
        <div class="inner-box">
          <figure class="image-box"><img src="assets/images/resource/service-3.jpg" alt=""></figure>
          <div class="lower-content">
            <div class="content-box">
              <div class="inner">
                <div class="icon-box">
                  <div class="icon flaticon-file-1"></div>
                </div>
                <h4>Direct Hire</h4>
              </div>
              <div class="link"><a href="case-details.php">More Details</a></div>
            </div>
            <div class="overlay-content">
              <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
              <a href="case-details.php"><i class="flaticon-right-arrow"></i>More details</a> </div>
          </div>
        </div>
      </div>
      <div class="service-block-one">
        <div class="inner-box">
          <figure class="image-box"><img src="assets/images/resource/service-4.jpg" alt=""></figure>
          <div class="lower-content">
            <div class="content-box">
              <div class="inner">
                <div class="icon-box">
                  <div class="icon flaticon-umbrella-1"></div>
                </div>
                <h4>Contract</h4>
              </div>
              <div class="link"><a href="case-details.php">More Details</a></div>
            </div>
            <div class="overlay-content">
              <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
              <a href="case-details.php"><i class="flaticon-right-arrow"></i>More details</a> </div>
          </div>
        </div>
      </div>
      <div class="service-block-one">
        <div class="inner-box">
          <figure class="image-box"><img src="assets/images/resource/service-2.jpg" alt=""></figure>
          <div class="lower-content">
            <div class="content-box">
              <div class="inner">
                <div class="icon-box">
                  <div class="icon flaticon-group"></div>
                </div>
                <h4>Temporary</h4>
              </div>
              <div class="link"><a href="case-details.php">More Details</a></div>
            </div>
            <div class="overlay-content">
              <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
              <a href="case-details.php"><i class="flaticon-right-arrow"></i>More details</a> </div>
          </div>
        </div>
      </div>
      <div class="service-block-one">
        <div class="inner-box">
          <figure class="image-box"><img src="assets/images/resource/service-3.jpg" alt=""></figure>
          <div class="lower-content">
            <div class="content-box">
              <div class="inner">
                <div class="icon-box">
                  <div class="icon flaticon-file"></div>
                </div>
                <h4>Direct Hire</h4>
              </div>
              <div class="link"><a href="case-details.php">More Details</a></div>
            </div>
            <div class="overlay-content">
              <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
              <a href="case-details.php"><i class="flaticon-right-arrow"></i>More details</a> </div>
          </div>
        </div>
      </div>
      <div class="service-block-one">
        <div class="inner-box">
          <figure class="image-box"><img src="assets/images/resource/service-4.jpg" alt=""></figure>
          <div class="lower-content">
            <div class="content-box">
              <div class="inner">
                <div class="icon-box">
                  <div class="icon flaticon-file-1"></div>
                </div>
                <h4>Contract</h4>
              </div>
              <div class="link"><a href="case-details.php">More Details</a></div>
            </div>
            <div class="overlay-content">
              <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
              <a href="case-details.php"><i class="flaticon-right-arrow"></i>More details</a> </div>
          </div>
        </div>
      </div>
      <div class="service-block-one">
        <div class="inner-box">
          <figure class="image-box"><img src="assets/images/resource/service-2.jpg" alt=""></figure>
          <div class="lower-content">
            <div class="content-box">
              <div class="inner">
                <div class="icon-box">
                  <div class="icon flaticon-umbrella-1"></div>
                </div>
                <h4>Temporary</h4>
              </div>
              <div class="link"><a href="case-details.php">More Details</a></div>
            </div>
            <div class="overlay-content">
              <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
              <a href="case-details.php"><i class="flaticon-right-arrow"></i>More details</a> </div>
          </div>
        </div>
      </div>
      <div class="service-block-one">
        <div class="inner-box">
          <figure class="image-box"><img src="assets/images/resource/service-3.jpg" alt=""></figure>
          <div class="lower-content">
            <div class="content-box">
              <div class="inner">
                <div class="icon-box">
                  <div class="icon flaticon-group"></div>
                </div>
                <h4>Direct Hire</h4>
              </div>
              <div class="link"><a href="case-details.php">More Details</a></div>
            </div>
            <div class="overlay-content">
              <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
              <a href="case-details.php"><i class="flaticon-right-arrow"></i>More details</a> </div>
          </div>
        </div>
      </div>
      <div class="service-block-one">
        <div class="inner-box">
          <figure class="image-box"><img src="assets/images/resource/service-4.jpg" alt=""></figure>
          <div class="lower-content">
            <div class="content-box">
              <div class="inner">
                <div class="icon-box">
                  <div class="icon flaticon-file"></div>
                </div>
                <h4>Contract</h4>
              </div>
              <div class="link"><a href="case-details.php">More Details</a></div>
            </div>
            <div class="overlay-content">
              <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
              <a href="case-details.php"><i class="flaticon-right-arrow"></i>More details</a> </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>
