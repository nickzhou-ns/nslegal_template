<?php
$arr_Counter = array(
  array(
    'id' => '1',
	'class_inner' => 'fadeInLeft',
	'icon' => 'flaticon-briefcase',
	'speed' => '2500',
	'stop' => '250',
	'title' => 'Business Partners',
),
array(
    'id' => '2',
	'class_inner' => 'fadeInUp',
	'icon' => 'flaticon-balance',
	'speed' => '3000',
	'stop' => '180',
	'title' => 'Cases Done',
),
array(
    'id' => '3',
	'class_inner' => 'fadeInUp',
	'icon' => 'flaticon-marketing',
	'speed' => '3000',
	'stop' => '350',
	'title' => 'Happy Clients',
),
array(
    'id' => '4',
	'class_inner' => 'fadeInRight',
	'icon' => 'flaticon-trophy-2',
	'speed' => '3000',
	'stop' => '150',
	'title' => 'Awards Win',
),
);
?>

<!-- Counter Section -->
	<section  page="inc_counter_section"  class="counter-section">
		<div class="image-layer" style="background-image: url(assets/images/background/1.jpg)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2>20 YEars OF experience in Legal cases field</h2>
				<div class="text">Renrehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum <br> aui dolorem eum fugiat quo voluptas nulla pariatur</div>
			</div>
			
			<div class="fact-counter">
				<div class="row clearfix">
				
					<!-- Column -->
					
<?php foreach ($arr_Counter as $k => $val) { ?>
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow <?php echo $val["class_inner"] ?>" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon <?php echo $val["icon"] ?>"></div>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="<?php echo $val["speed"] ?>" data-stop="<?php echo $val["stop"] ?>">0</span><sup>+</sup>
								</div>
								<h6 class="counter-title"><?php echo $val["title"] ?></h6>
							</div>
						</div>
					</div>
					<?php } ?>
					<!-- <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-balance"></div>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="180">0</span><sup>+</sup>
								</div>
								<h6 class="counter-title">Cases Done</h6>
							</div>
						</div>
					</div>
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-marketing"></div>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="350">0</span><sup>+</sup>
								</div>
								<h6 class="counter-title">Happy Clients</h6>
							</div>
						</div>
					</div>
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-trophy-2"></div>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="150">0</span><sup>+</sup>
								</div>
								<h6 class="counter-title">Awards Win</h6>
							</div>
						</div>
					</div> -->
				</div>
			</div>	
			<!--Video Box-->
			<div class="video-boxed">
				<figure class="video-image">
					<img src="assets/images/resource/video-img.jpg" alt="">
				</figure>
				<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
			</div>
			
		</div>
	</section>
	<!-- End Counter Section -->