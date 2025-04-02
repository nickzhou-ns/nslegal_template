<?php
$arr_chooseus = array(
  array(
    'id' => '1', 
    'delay' => '00ms',
    'icon' => 'flaticon-file',
    'title' => 'Corporate Law',
    'text' => 'Indignations & dislike men beguiled demoralized.',
    'more' => 'More Details',
    'url' => 'family_law.php',
),
array(
  'id' => '2', 
  'delay' => '200ms',
  'icon' => 'flaticon-file-1',
  'title' => 'REAL ESTATE LAW',
  'text' => 'Business it will frequently pleasures repudiated.',
  'more' => 'More Details',
  'url' => 'family_law.php',
),
array(
  'id' => '3', 
  'delay' => '400ms',
  'icon' => 'flaticon-umbrella-1',
  'title' => 'INSURANCE LAW',
  'text' => 'Indignations & dislike men beguiled demoralized.',
  'more' => 'More Details',
  'url' => 'family_law.php',
),
array(
  'id' => '4', 
  'delay' => '600ms',
  'icon' => 'flaticon-group',
  'title' => 'FAMILY LAW',
  'text' => 'Business it will frequently pleasures repudiated.',
  'more' => 'More Details',
  'url' => 'family_law.php',
),
);
?>
<section  page="inc_chooseus_section"  class="chooseus-section alternet-2">
  <div class="auto-container">
    <div class="sec-title centered">
      <h2>Reason for Choosing Us</h2>
      <div class="text">
        <p>Obligations of business it will frequently occur that pleasures have to be repudiated & annoyances accepted.</p>
      </div>
    </div>
    <div class="row clearfix">
<?php foreach ($arr_chooseus as $k => $val) { ?>
      <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
        <div class="chooseus-block-one wow fadeInUp animated animated" data-wow-delay="<?php echo $val["delay"] ?>" data-wow-duration="1500ms">
          <div class="inner-box">
            <div class="icon-box">
              <div class="icon <?php echo $val["icon"] ?>"></div>
            </div>
            <h4><?php echo $val["title"] ?></h4>
            <p><?php echo $val["text"] ?></p>
            <a href="<?php echo $val["url"] ?>"><i class="flaticon-right-arrow"></i><?php echo $val["more"] ?></a> </div>
        </div>
      </div>
      <?php } ?>
      <!-- <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
        <div class="chooseus-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
          <div class="inner-box">
            <div class="icon-box">
              <div class="icon flaticon-file-1"></div>
            </div>
            <h4>Real Estate Law</h4>
            <p>Business it will frequently pleasures repudiated.</p>
            <a href="family_law.php"><i class="flaticon-right-arrow"></i>More Details</a> </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
        <div class="chooseus-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
          <div class="inner-box">
            <div class="icon-box">
              <div class="icon flaticon-umbrella-1"></div>
            </div>
            <h4>Insurance Law</h4>
            <p>Indignations & dislike men beguiled demoralized.</p>
            <a href="family_law.php"><i class="flaticon-right-arrow"></i>More Details</a> </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
        <div class="chooseus-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
          <div class="inner-box">
            <div class="icon-box">
              <div class="icon flaticon-group"></div>
            </div>
            <h4>Family Law</h4>
            <p>Business it will frequently pleasures repudiated.</p>
            <a href="family_law.php"><i class="flaticon-right-arrow"></i>More Details</a> </div>
        </div>
      </div> -->
    </div>
  </div>
</section>
