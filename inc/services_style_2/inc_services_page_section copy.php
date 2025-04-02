	<!-- Services Page Section -->
	<section  page="inc_services_page_section"  class="services-page-section">
		<div class="auto-container">

		<?php
$arr_section_case = array(
  array(
    'id' => '1',
	'style_cls' => '',
    'img' => 'assets/images/resource/service-2.jpg',
    'url' => 'corporate_law.php',
        'text' => 'Temporibus autem quibusdam et aut officiis debitiaut rerum necessitatibus saepe eveniet ut et volutares repudiandae molestiae non earum rerum aic tenetur a sapiente delectus.',
    'title' => 'Corporate Law',#Corporate Law
    'more' => 'Read More',
  ),
  array(
    'id' => '2',
	'style_cls' => 'style-two',
    'img' => 'assets/images/resource/service-3.jpg',
    'url' => 'corporate_law.php',
        'text' => 'Temporibus autem quibusdam et aut officiis debitiaut rerum necessitatibus saepe eveniet ut et volutares repudiandae molestiae non earum rerum aic tenetur a sapiente delectus.',
    'title' => 'Real Estate Law',#Corporate Law
    'more' => 'Read More',
  ),
  array(
    'id' => '3',
	'style_cls' => '',
    'img' => 'assets/images/resource/service-4.jpg',
    'url' => 'corporate_law.php',
        'text' => 'Temporibus autem quibusdam et aut officiis debitiaut rerum necessitatibus saepe eveniet ut et volutares repudiandae molestiae non earum rerum aic tenetur a sapiente delectus.',
    'title' => 'Insurance Law',#Corporate Law
    'more' => 'Read More',
  ),
  array(
    'id' => '4',
	'style_cls' => 'style-two',
    'img' => 'assets/images/resource/service-5.jpg',
    'url' => 'corporate_law.php',
        'text' => 'Temporibus autem quibusdam et aut officiis debitiaut rerum necessitatibus saepe eveniet ut et volutares repudiandae molestiae non earum rerum aic tenetur a sapiente delectus.',
    'title' => 'Family Law',#Corporate Law
    'more' => 'Read More',
  ),
);
?>
		<!-- 可能样式有误，  -->
			<!-- Services Block Three -->
			<?php foreach ($arr_section_case as $k => $val) { ?>
			<div class="services-block-three <?php echo $val["style_cls"] ?>">
				<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="row clearfix">
						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<h2><a href="corporate_law.php"><?php echo $val["title"] ?></a></h2>
								<div class="text"><?php echo $val["text"] ?></div>
								<a href="contact.php" class="theme-btn btn-style-three"><span class="txt"><?php echo $val["more"] ?> <i class="arrow flaticon-right"></i></span></a>
							</div>
						</div>
						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="image">
									<a href="corporate_law.php"><img src="<?php echo $val["img"] ?>" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php } ?>

		
	
		</div>
	</section>
	<!-- End Services Page Section -->