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
<!-- Fluid Section Two -->
    <section page="inc_fluid_section_two" class="fluid-section-two">
		<div class="side-icon"><img src="assets/images/icons/fluid-icon-1.png" alt="" /></div>
    	<div class="outer-container clearfix">
        	
			<!-- Content Column -->
            <div class="content-column">
            	<div class="inner-column">
					<!-- Sec Title -->
					<div class="sec-title light">
						<h2>Why Choose Us</h2>
						<div class="text">Tonam rem aperiam, eaque ipsa quae ab illo inventoe veritatis et quasi architecto beatae vitae dicta sunt explicabo exercitationem ullam corporis.</div>
					</div>
					<!-- Counter Boxed -->
					<div class="counter-boxed">
						<div class="fact-counter style-two">
							<div class="row clearfix">

					
								<!-- Column -->
								<?php foreach ($arr_Counter as $k => $val) { ?>
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
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
								
								<!-- Column -->
								<!-- <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
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
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
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
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
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
					</div>

				</div>
			</div>
			
			<!-- Image Column -->
            <div class="image-column" style="background-image:url(assets/images/resource/image-2.jpg)">
				<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="fa fa-play"><i class="ripple"></i></span></a>
            	<figure class="image-box"><img src="assets/images/resource/image-2.jpg" alt=""></figure>
            </div>
			
		</div>
	</section>
	<!-- End Fluid Section Two -->