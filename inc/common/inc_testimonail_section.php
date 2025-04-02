<?php
$arr_testimonial = array(
  array(
    'id' => '1',
	  'images' => 'assets/images/resource/author-1.png',
	   'text' => 'I highly recommend NS Legal , very professional and reliable team. Thank you Candice for patiently helping me explore all my options.',
	  'name' => 'Kevin Peterson',
),
	  array(
    'id' => '2',
	  'images' => 'assets/images/resource/author-1.png',
	   'text' => 'Candice律师很专业的，不仅可以解决客户的房产过户问题，家庭法方面也很在行，给到了我客户不错的意见。最为合作伙伴非常推荐。',
	  'name' => 'Kevin Peterson',
),
	  array(
    'id' => '3',
	  'images' => 'assets/images/resource/author-1.png',
	   'text' => 'I highly recommend NS Legal , very professional and reliable team. Thank you Candice for patiently helping me explore all my options.',
	  'name' => 'Kevin Peterson',
),
	  array(
    'id' => '4',
	  'images' => 'assets/images/resource/author-1.png',
	   'text' => 'Professional, straight to the point and understanding to our clients needs. Highly recommendable team!',
	  'name' => 'Kevin Peterson',
),
);
?>

<!-- Testimonail Section -->
	<section page="inc_testimonail_section" class="testimonial-section" style="background-image: url(assets/images/background/pattern-3.png)">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>What Our CLients Said</h2>
			</div>
			<div class="inner-container">
				<div class="single-item-carousel owl-carousel owl-theme">
					
					<!-- Testimonial Block -->
					<?php foreach ($arr_testimonial as $k => $val) { ?>
					<div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="assets/images/resource/author-1.png" alt="" />
							</div>
							<span class="quote-icon flaticon-quote-1"></span>
							<div class="text"><?php echo $val["text"] ?></div>
							<div class="name"><?php echo $val["name"] ?></div>
						</div>
					</div>
					<?php } ?>

					<!-- <div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="assets/images/resource/author-1.png" alt="" />
							</div>
							<span class="quote-icon flaticon-quote-1"></span>
							<div class="text">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil rentoa molestiae conseruatur vela illum qui dolorem eum fugiat ruo voluetas nulla ariatur minima veniam.</div>
							<div class="name">Kevin Peterson</div>
						</div>
					</div>
					<div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="assets/images/resource/author-1.png" alt="" />
							</div>
							<span class="quote-icon flaticon-quote-1"></span>
							<div class="text">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil rentoa molestiae conseruatur vela illum qui dolorem eum fugiat ruo voluetas nulla ariatur minima veniam.</div>
							<div class="name">Kevin Peterson</div>
						</div>
					</div> -->
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonail Section -->