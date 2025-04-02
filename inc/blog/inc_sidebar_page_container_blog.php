	<!-- Sidebar Page Container -->
    <div page= "inc_sidebar_page_container" class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-classic">
					<?php
$arr_news_paper = array(
  array(
    'id' => '1',
	'img' => 'assets/images/resource/news-1.jpg',
	'category' => 'Law', 
	'icon_timetable' => 'flaticon-timetable',
	'icon_email' => 'flaticon-email',
	'icon_user' => 'flaticon-user-2',
	'date' => 'August 25, 2021',
	'Comments' => 'Comments 03',
	'user' => 'Admin',
	'title' => 'Creative Para Jóvenes: Designer’s UI/UX Complete Checklist.',
	'text' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. ",
	'more' => 'Learn More',
	'url' => 'blog_detail.php',

),
array(
    'id' => '2',
	'img' => 'assets/images/resource/news-2.jpg',
	'category' => 'LBusinessaw', 
	'icon_timetable' => 'flaticon-timetable',
	'icon_email' => 'flaticon-email',
	'icon_user' => 'flaticon-user-2',
	'date' => 'August 25, 2021',
	'Comments' => 'Comments 03',
	'user' => 'Admin',
	'title' => 'Definitive Guide to Make a Daily More Productive Working Flow.',
	'text' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. ",
	'more' => 'Learn More',
	'url' => 'blog_detail.php',

),
array(
    'id' => '3',
	'img' => 'assets/images/resource/news-3.jpg',
	'category' => 'Law', 
	'icon_timetable' => 'flaticon-timetable',
	'icon_email' => 'flaticon-email',
	'icon_user' => 'flaticon-user-2',
	'date' => 'August 25, 2021',
	'Comments' => 'Comments 03',
	'user' => 'Admin',
	'title' => 'The Start-Up Ultimate Guide to Make Your WordPress Journal.',
	'text' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. ",
	'more' => 'Learn More',
	'url' => 'blog_detail.php',

),
array(
    'id' => '4',
	'img' => 'assets/images/resource/news-4.jpg',
	'category' => 'Business', 
	'icon_timetable' => 'flaticon-timetable',
	'icon_email' => 'flaticon-email',
	'icon_user' => 'flaticon-user-2',
	'date' => 'August 25, 2021',
	'Comments' => 'Comments 03',
	'user' => 'Admin',
	'title' => 'Basic Rules of Running Web Morancy Business',
	'text' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. ",
	'more' => 'Learn More',
	'url' => 'blog_detail.php',

),
);
?>
						<!-- News Block -->
						<?php foreach ($arr_news_paper as $k => $val) { ?>
						<div class="news-block">
							<div class="inner-box">
								<div class="image">
									<a href="<?php echo $val["url"] ?>"><img src="<?php echo $val["img"] ?>" alt="" /></a>
									<div class="category"><?php echo $val["category"] ?></div>
									<ul class="post-meta">
										<li><a href="<?php echo $val["url"] ?>"><span class="icon <?php echo $val["icon_timetable"] ?>"></span><?php echo $val["date"] ?></a></li>
										<li><a href="<?php echo $val["url"] ?>"><span class="icon <?php echo $val["icon_email"] ?>"></span><?php echo $val["Comments"] ?></a></li>
										<li><a href="<?php echo $val["url"] ?>"><span class="icon <?php echo $val["icon_user"] ?>"></span><?php echo $val["user"] ?></a></li>
									</ul>
								</div>
								<div class="lower-content">
									<h3><a href="<?php echo $val["url"] ?>"><?php echo $val["title"] ?></a></h3>
									<div class="text"><?php echo $val["text"] ?></div>
									<div class="btn-box">
										<a href="<?php echo $val["url"] ?>" class="theme-btn btn-style-two"><span class="txt"><?php echo $val["more"] ?></span></a>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
						
<!-- 				
						<div class="news-block">
							<div class="inner-box">
								<div class="image">
									<a href="blog-detail.html"><img src="assets/images/resource/news-2.jpg" alt="" /></a>
									<div class="category">Business</div>
									<ul class="post-meta">
										<li><a href="blog-detail.html"><span class="icon flaticon-timetable"></span>August 25, 2021</a></li>
										<li><a href="blog-detail.html"><span class="icon flaticon-email"></span>Comments 03</a></li>
										<li><a href="blog-detail.html"><span class="icon flaticon-user-2"></span>Admin</a></li>
									</ul>
								</div>
								<div class="lower-content">
									<h3><a href="blog-detail.html">Definitive Guide to Make a Daily More Productive Working Flow.</a></h3>
									<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </div>
									<div class="btn-box">
										<a href="blog-detail.html" class="theme-btn btn-style-two"><span class="txt">Learn More</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="news-block">
							<div class="inner-box">
								<div class="image">
									<a href="blog-detail.html"><img src="assets/images/resource/news-3.jpg" alt="" /></a>
									<div class="category">Law</div>
									<ul class="post-meta">
										<li><a href="blog-detail.html"><span class="icon flaticon-timetable"></span>August 25, 2021</a></li>
										<li><a href="blog-detail.html"><span class="icon flaticon-email"></span>Comments 03</a></li>
										<li><a href="blog-detail.html"><span class="icon flaticon-user-2"></span>Admin</a></li>
									</ul>
								</div>
								<div class="lower-content">
									<h3><a href="blog-detail.html">The Start-Up Ultimate Guide to Make Your WordPress Journal.</a></h3>
									<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </div>
									<div class="btn-box">
										<a href="blog-detail.html" class="theme-btn btn-style-two"><span class="txt">Learn More</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="news-block">
							<div class="inner-box">
								<div class="image">
									<a href="blog-detail.html"><img src="assets/images/resource/news-4.jpg" alt="" /></a>
									<div class="category">Business</div>
									<ul class="post-meta">
										<li><a href="blog-detail.html"><span class="icon flaticon-timetable"></span>August 25, 2021</a></li>
										<li><a href="blog-detail.html"><span class="icon flaticon-email"></span>Comments 03</a></li>
										<li><a href="blog-detail.html"><span class="icon flaticon-user-2"></span>Admin</a></li>
									</ul>
								</div>
								<div class="lower-content">
									<h3><a href="blog-detail.html">Basic Rules of Running Web Morancy Business</a></h3>
									<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </div>
									<div class="btn-box">
										<a href="blog-detail.html" class="theme-btn btn-style-two"><span class="txt">Learn More</span></a>
									</div>
								</div>
							</div>
						</div> -->
						
					</div>
					
					<!--Post Share Options-->
					<div class="styled-pagination text-center">
						<ul class="clearfix">
							<li class="prev"><a href="#"><span class="flaticon-back"></span> </a></li>
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="next"><a href="#"><span class="flaticon-next-1"></span> </a></li>
						</ul>
					</div>
					
				</div>
				
				<!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">
						<div class="sidebar-inner">
						
							<!-- Search -->
							<div class="sidebar-widget search-box">
								<form method="post" action="contact.html">
									<div class="form-group">
										<input type="search" name="search-field" value="" placeholder="Search ....." required>
										<button type="submit"><span class="icon fa fa-search"></span></button>
									</div>
								</form>
							</div>
							
							<?php
$arr_Blog_Category_Widget = array(
  array(
    'id' => '1',
	'url' =>'#',
	'text' => 'Consulting <span>(25)</span>',
),
array(
    'id' => '2',
	'url' =>'#',
	'text' => 'Life Style<span>(80)</span>',
),
array(
    'id' => '3',
	'url' =>'#',
	'text' => 'Technology<span>(95)</span>',
),
);
?>
							<!--Blog Category Widget-->
							<div class="sidebar-widget sidebar-blog-category">
								<div class="widget-content">
									<div class="sidebar-title">
										<h5>Categories</h5>
									</div>
									<ul class="cat-list-two">
									<?php foreach ($arr_Blog_Category_Widget as $k => $val) { ?>
										<li><a href="#"><?php echo $val["text"] ?></a></li>
										<?php } ?>
										<!-- <li><a href="#">Life Style<span>(80)</span></a></li>
										<li><a href="#">Technology<span>(95)</span></a></li> -->
									</ul>
								</div>
							</div>
							
							<!-- Popular Post Widget -->
							<div class="sidebar-widget popular-posts">
								<div class="widget-content">
									<div class="sidebar-title">
										<h5>latest posts</h5>
									</div>
									<?php
$arr_Popular_Post_Widget = array(
  array(
    'id' => '1',
		'img' => 'assets/images/resource/post-thumb-1.jpg',
	'title' => 'Quis autem velo eum iure suam nihil',
	'date' => 'August 25, 2021',
	'url' => 'blog_detail.php',

),
array(
    'id' => '2',
	'img' => 'assets/images/resource/post-thumb-2.jpg',
	'title' => 'Quis autem velo eum iure suam nihil',
	'date' => 'August 25, 2021',
	'url' => 'Life Style<span>(80)</span>',
),
array(
    'id' => '3',
	'img' => 'assets/images/resource/post-thumb-3.jpg',
	'title' => 'Quis autem velo eum iure suam nihil',
	'date' => 'August 25, 2021',
	'url' => 'Technology<span>(95)</span>',
),
);
?>	<?php foreach ($arr_Popular_Post_Widget as $k => $val) { ?>
									<article class="post">
										<figure class="post-thumb"><img src="<?php echo $val["img"] ?>" alt=""><a href="<?php echo $val["url"] ?>" class="overlay-box"></a></figure>
										<div class="text"><a href="<?php echo $val["url"] ?>"><?php echo $val["title"] ?></a></div>
										<div class="post-info"><?php echo $val["date"] ?></div>
									</article>
									<?php } ?>
									<!-- <article class="post">
										<figure class="post-thumb"><img src="assets/images/resource/post-thumb-2.jpg" alt=""><a href="blog-detail.html" class="overlay-box"></a></figure>
										<div class="text"><a href="blog-detail.html">Quis autem velo eum iure suam nihil</a></div>
										<div class="post-info">August 25, 2021</div>
									</article>
									
									<article class="post">
										<figure class="post-thumb"><img src="assets/images/resource/post-thumb-3.jpg" alt=""><a href="blog-detail.html" class="overlay-box"></a></figure>
										<div class="text"><a href="blog-detail.html">Quis autem velo eum iure suam nihil</a></div>
										<div class="post-info">August 25, 2021</div>
									</article> -->
								</div>
							</div>

							
<?php
$arr_Tags_Widget = array(
  array(
    'id' => '1',
	'tags' => 'Cloud',
	'url' => '#',
),
array(
    'id' => '2',
	'tags' => 'Life style',
	'url' => '#',
),
array(
    'id' => '3',
	'tags' => 'Hosting',
	'url' => '#',
),
array(
    'id' => '4',
	'tags' => 'Business',
	'url' => '#',
),
);
?>							
							<!-- Tags Widget -->
							<div class="sidebar-widget popular-tags">
								<div class="widget-content">
									<div class="sidebar-title">
										<h5>Tags</h5>
									</div>
									<?php foreach ($arr_Tags_Widget as $k => $val) { ?>
									<a href="#"><?php echo $val["tags"] ?></a>
									<?php } ?>
									<!-- <a href="#">Life style</a>
									<a href="#">Hosting</a>
									<a href="#">Business</a> -->
								</div>
							</div>
							
						</div>
					</aside>
				</div>
				
			</div>
		</div>
	</div>