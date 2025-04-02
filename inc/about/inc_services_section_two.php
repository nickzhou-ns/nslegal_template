<?php
$arr_services_section_two = array(
  array(
    'id' => '1',
    'inner_box' => 'fadeInLeft',
    'icon' => 'flaticon-auction',
    'title' => 'Legal Services',
    'content' => 'Quis autem velo eum iure rerehen derit rui inea votasuam nihil molestia conseuatur vel illum',
  ),
  array(
    'id' => '2',
    'inner_box' => 'fadeInUp',
    'icon' => 'flaticon-law',
    'title' => 'Great Results',
    'content' => 'Quis autem velo eum iure rerehen derit rui inea votasuam nihil molestia conseuatur vel illum',
  ),
  array(
    'id' => '3',
    'inner_box' => 'fadeInRight',
    'icon' => 'flaticon-marketing',
    'title' => 'Passionate People',
    'content' => 'Quis autem velo eum iure rerehen derit rui inea votasuam nihil molestia conseuatur vel illum',
  ),
);
?>
	<!-- Services Section Two -->
	<section page="inc_services_section_two" class="services-section-two style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>What Make Us Unique</h2>
			</div>
			<div class="row clearfix">
				
				<!-- Services Block Two -->
				<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow <?php echo $val["inner_box"] ?>" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon <?php echo $val["icon"] ?>"></div>
						<h5><a href="corporate_law.php"><?php echo $val["title"] ?></a></h5>
						<div class="text"><?php echo $val["content"] ?></div>
						<a class="arrow flaticon-right-arrow-3" href="corporate_law.php"></a>
					</div>
				</div>
<!-- 
				<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon flaticon-law"></div>
						<h5><a href="corporate_law.php">Great Results</a></h5>
						<div class="text">Quis autem velo eum iure rerehen derit rui inea votasuam nihil molestia conseuatur vel illum</div>
						<a class="arrow flaticon-right-arrow-3" href="corporate_law.php"></a>
					</div>
				</div>

				<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon flaticon-marketing"></div>
						<h5><a href="corporate_law.php">Passionate People</a></h5>
						<div class="text">Quis autem velo eum iure rerehen derit rui inea votasuam nihil molestia conseuatur vel illum</div>
						<a class="arrow flaticon-right-arrow-3" href="corporate_law.php"></a>
					</div>
				</div>
				 -->
			</div>
		</div>
	</section>
	<!-- End Services Section Two -->