


<!-- Practice Section -->
	<section  page= "inc_practice_section" class="practice-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Our LEGAL PRACTICE Areas</h2>
			</div>
			<div class="inner-container">
				<div class="clearfix">

				<?php
$arr_Practice = array(
  array(
    'id' => '1',
	'icon' => 'flaticon-car-1',
	'url' => 'corporate_law.php1',
	'title' => 'Car Accident',
	'text' => 'Quis autem velo eum iure suam nihil molestiae',
),
array(
    'id' => '2',
	'icon' => 'flaticon-briefcase',
	'url' => 'corporate_law.php1',
	'title' => 'BUSINESS LAW',
	'text' => 'Quis autem velo eum iure suam nihil molestiae',
),

array(
    'id' => '3',
	'icon' => 'flaticon-handcuffs-1',
	'url' => 'corporate_law.php1',
	'title' => 'CRIMINAL LAW',
	'text' => 'Quis autem velo eum iure suam nihil molestiae',
),
array(
    'id' => '4',
	'icon' => 'flaticon-save-money',
	'url' => 'corporate_law.php1',
	'title' => 'Child Support',
	'text' => 'Quis autem velo eum iure suam nihil molestiae',
),
array(
    'id' => '5',
	'icon' => 'flaticon-injury',
	'url' => 'Personal Injury',
	'title' => 'Car Accident',
	'text' => 'Quis autem velo eum iure suam nihil molestiae',
),
array(
    'id' => '6',
	'icon' => 'flaticon-law',
	'url' => 'corporate_law.php1',
	'title' => 'Education LAw',
	'text' => 'Quis autem velo eum iure suam nihil molestiae',
),
array(
    'id' => '7',
	'icon' => 'flaticon-balance',
	'url' => 'corporate_law.php1',
	'title' => 'Divorce Law',
	'text' => 'Quis autem velo eum iure suam nihil molestiae',
),
array(
    'id' => '8',
	'icon' => 'flaticon-notebook',
	'url' => 'corporate_law.php1',
	'title' => 'TAX LAW',
	'text' => 'Quis autem velo eum iure suam nihil molestiae',
),
);
?>	
					<!-- Practice Block -->
					<?php foreach ($arr_Practice as $k => $val) { ?>
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon <?php echo $val["icon"] ?>"></div>
							<h5><a href="<?php echo $val["url"] ?>"><?php echo $val["title"] ?></a></h5>
							<div class="text"><?php echo $val["text"] ?></div>
							<a class="arrow flaticon-right-arrow-3" href="<?php echo $val["url"] ?>"></a>
						</div>
					</div>
					<?php } ?>

					<!-- <div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-handcuffs-1"></div>
							<h5><a href="corporate_law.php">Criminal Law</a></h5>
							<div class="text">Quis autem velo eum iure suam nihil molestiae</div>
							<a class="arrow flaticon-right-arrow-3" href="corporate_law.php"></a>
						</div>
					</div>
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-save-money"></div>
							<h5><a href="corporate_law.php">Child Support</a></h5>
							<div class="text">Quis autem velo eum iure suam nihil molestiae</div>
							<a class="arrow flaticon-right-arrow-3" href="corporate_law.php"></a>
						</div>
					</div>
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-injury"></div>
							<h5><a href="corporate_law.php">Personal Injury</a></h5>
							<div class="text">Quis autem velo eum iure suam nihil molestiae</div>
							<a class="arrow flaticon-right-arrow-3" href="corporate_law.php"></a>
						</div>
					</div>
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-law"></div>
							<h5><a href="corporate_law.php">Education LAw</a></h5>
							<div class="text">Quis autem velo eum iure suam nihil molestiae</div>
							<a class="arrow flaticon-right-arrow-3" href="corporate_law.php"></a>
						</div>
					</div>
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-balance"></div>
							<h5><a href="corporate_law.php">Divorce Law</a></h5>
							<div class="text">Quis autem velo eum iure suam nihil molestiae</div>
							<a class="arrow flaticon-right-arrow-3" href="corporate_law.php"></a>
						</div>
					</div>
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-notebook"></div>
							<h5><a href="corporate_law.php">TAX LAW</a></h5>
							<div class="text">Quis autem velo eum iure suam nihil molestiae</div>
							<a class="arrow flaticon-right-arrow-3" href="corporate_law.php"></a>
						</div>
					</div> -->
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Practice Section -->