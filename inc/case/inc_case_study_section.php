<!-- Case Study Section -->
<section page="inc_case_study_section" class="case-study-section">
	<div class="auto-container">
		<div class="inner-container">
			<div class="row clearfix">
				<?php
				$arr_section_case = array(
					array(
						'id' => '1',
						'img' => 'assets/images/resource/case-2.jpg',
						'url' => 'case_details.php',
						'icon' => 'flaticon-notebook',
						'title_sm' => 'REAL ESTATE',
						'title_h4' => 'OFFICIIS DEBITIS AUT RERUM NECESSITATIBUS.',
						'text' => 'Equal blame belongs too those who fail in their through weakness.',
						'delay' => '0ms',
						'more' => 'Read More',
					),
					array(
						'id' => '2',
						'img' => 'assets/images/resource/case-7.jpg',
						'url' => 'case_details.php',
						'icon' => 'flaticon-file',
						'title_sm' => 'TAX ISSUE',
						'title_h4' => 'NOSTRUM EXERCITATIONEM ULLAM CORPORIS.',
						'text' => 'Equal blame belongs too those who fail in their through weakness.',
						'delay' => '300ms',
						'more' => 'Read More',
					),
					array(
						'id' => '3',
						'img' => 'assets/images/resource/case-4.jpg',
						'url' => 'case_details.php',
						'icon' => 'flaticon-umbrella-1',
						'title_sm' => 'INJURY',
						'title_h4' => 'OFFICIIS DEBITIS AUT RERUM NECESSITATIBUS.',
						'text' => 'Equal blame belongs too those who fail in their through weakness.',
						'delay' => '600ms',
						'more' => 'Read More',
					),
					array(
						'id' => '4',
						'img' => 'assets/images/resource/case-6.jpg',
						'url' => 'case_details.php',
						'icon' => 'flaticon-notebook',
						'title_sm' => 'ACCIDENT',
						'title_h4' => 'PRAESENTIUM VOLUPTATUM DELENITI ATQUE.',
						'text' => 'Equal blame belongs too those who fail in their through weakness.',
						'delay' => '0ms',
						'more' => 'Read More',
					),
					array(
						'id' => '5',
						'img' => 'assets/images/resource/case-5.jpg',
						'url' => 'case_details.php',
						'icon' => 'flaticon-file',
						'title_sm' => 'INSURANCE',
						'title_h4' => 'OFFICIIS DEBITIS AUT RERUM NECESSITATIBUS.',
						'text' => 'Equal blame belongs too those who fail in their through weakness.',
						'delay' => '300ms',
						'more' => 'Read More',
					),
					array(
						'id' => '6',
						'img' => 'assets/images/resource/case-4.jpg',
						'url' => 'case_details.php',
						'icon' => 'flaticon-umbrella-1',
						'title_sm' => 'CRIMINAL',
						'title_h4' => 'PRAESENTIUM VOLUPTATUM DELENITI ATQUE.',
						'text' => 'Equal blame belongs too those who fail in their through weakness.',
						'delay' => '600ms',
						'more' => 'Read More',
					),
				);
				?>
				<!-- Case Block -->
				<?php foreach ($arr_section_case as $k => $val) { ?>
					<div class="case-block col-lg-6 col-md-6 col-sm-12">
						<div class="inner-box">



							<div class="image">
								<div class="tag">
									<?php echo $val["title_sm"] ?>
								</div>
								<a href="<?php echo $val["url"] ?>"><img src=" <?php echo $val["img"] ?>" alt="" /></a>
							</div>
							<div class="lower-content">
								<h3><a href="<?php echo $val["url"] ?>">
										<?php echo $val["title_h4"] ?>
									</a></h3>
								<a href="<?php echo $val["url"] ?>" class="theme-btn btn-style-three"><span class="txt">
										<?php echo $val["more"] ?><i class="arrow flaticon-right"></i>
									</span></a>
							</div>
						</div>
					</div>
				<?php } ?>

			</div>
		</div>
	</div>
</section>
<!-- End Case Study Section -->