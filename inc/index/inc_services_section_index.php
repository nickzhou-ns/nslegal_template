<?php
$arr_Services = array(
  array(
    'id' => '1',
	   'class' => 'fadeInLeft',
	   'url' => 'corporate_law.php',
	  	'icon' => 'flaticon-file',
	   'title_h4' => 'Corporate Law',
	   'text' => 'Quis autem velo eum iure reprehenderit rui inea votasuam nihil molestiae conseuatur vel illum eius modi temora incidunt ut labore.',
	    'delay' => '0ms',
),
	  array(
    'id' => '2',
	   'class' => 'fadeInRight',
	   'url' => 'corporate_law.php',
		  	'icon' => 'flaticon-file-1',
	   'title_h4' => 'REAL ESTATE LAW',
	   'text' => 'Quis autem velo eum iure reprehenderit rui inea votasuam nihil molestiae conseuatur vel illum eius modi temora incidunt ut labore.',
	    'delay' => '0ms',
),
	  array(
    'id' => '3',
	   'class' => 'fadeInLeft',
	   'url' => 'corporate_law.php',
		  	'icon' => 'flaticon-umbrella-1',
	   'title_h4' => 'INSURANCE LAW',
	   'text' => 'Quis autem velo eum iure reprehenderit rui inea votasuam nihil molestiae conseuatur vel illum eius modi temora incidunt ut labore.',
	    'delay' => '150ms',
),
	  array(
    'id' => '4',
	   'class' => 'fadeInRight',
	   'url' => 'corporate_law.php',
		  	'icon' => 'flaticon-group',
	   'title_h4' => 'FAMILY LAW',
	   'text' => 'Quis autem velo eum iure reprehenderit rui inea votasuam nihil molestiae conseuatur vel illum eius modi temora incidunt ut labore.',
	    'delay' => '150ms',
)
	
);
?><!-- Services Section -->
	<section  page="inc_services_section_index"  class="services-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Services Block -->
					<?php foreach ($arr_Services as $k => $val) { ?>



					<div class="services-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box wow <?php echo $val["class"] ?>" data-wow-delay="<?php echo $val["delay"] ?>" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon <?php echo $val["icon"] ?>"></div>
								<h4><a href="<?php echo $val["url"] ?>"><?php echo $val["title_h4"] ?></a></h4>
								<div class="text"><?php echo $val["text"] ?></div>
							</div>
							<a href="<?php echo $val["url"] ?>" class="arrow flaticon-right"></a>
						</div>
					</div>
					<?php } ?>
					<!-- Services Block -->
				<!--	<div class="services-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-file-1"></div>
								<h4><a href="corporate_law.php">Real Estate Law</a></h4>
								<div class="text">Quis autem velo eum iure reprehenderit rui inea votasuam nihil molestiae conseuatur vel illum eius modi temora incidunt ut labore.</div>
							</div>
							<a href="corporate_law.php" class="arrow flaticon-right"></a>
						</div>
					</div>-->
					
					<!-- Services Block -->
				<!--	<div class="services-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-umbrella-1"></div>
								<h4><a href="corporate_law.php">Insurance Law</a></h4>
								<div class="text">Quis autem velo eum iure reprehenderit rui inea votasuam nihil molestiae conseuatur vel illum eius modi temora incidunt ut labore.</div>
							</div>
							<a href="corporate_law.php" class="arrow flaticon-right"></a>
						</div>
					</div>-->
					
					<!-- Services Block -->
				<!--	<div class="services-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-group"></div>
								<h4><a href="corporate_law.php">Family Law</a></h4>
								<div class="text">Quis autem velo eum iure reprehenderit rui inea votasuam nihil molestiae conseuatur vel illum eius modi temora incidunt ut labore.</div>
							</div>
							<a href="corporate_law.php" class="arrow flaticon-right"></a>
						</div>
					</div>-->
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section -->