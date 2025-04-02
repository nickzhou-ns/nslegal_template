<?php
$arr_Counter = array(
  array(
    'id' => '1',
	'class_inner' => 'fadeInLeft',
	'icon' => 'flaticon-briefcase',
	'speed' => '2500',
	'stop' => '245',
	'text' =>"Indignation & dislike mens who <br> beguiled demoralized.",
    'title' => 'Business Partners',
),
array(
    'id' => '2',
	'class_inner' => 'fadeInUp',
	'icon' => 'flaticon-balance',
	'speed' => '3000',
	'stop' => '1879',
	'text' =>"Desire that they cannot foresee <br> the pain and trouble.",
    'title' => 'Cases Done',
),

array(
    'id' => '3',
	'class_inner' => 'fadeInRight',
	'icon' => 'flaticon-trophy-2',
	'speed' => '3000',
	'stop' => '350',
	'text' =>"These cases are perfect simple <br> & easy to distinguish.",
    'title' => 'Awards Win',
),
);
?>
    <!-- Facts Section three -->
    <section  page="inc_facts_section"  class="facts-section-three" style="background-image: url(assets/images/background/1.jpg);"> 
        <div class="auto-container">
            <div class="fact-counter-style-three">
                <div class="row">
                    <!--Column-->
                    <?php foreach ($arr_Counter as $k => $val) { ?>
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow <?php echo $val["class_inner"] ?>" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon"><span class="<?php echo $val["icon"] ?>"></span></div>
                                <div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="<?php echo $val["speed"] ?>" data-stop="<?php echo $val["stop"] ?>">0</span><sup>+</sup>
                                    </div>
                                    <h4><?php echo $val["title"] ?></h4>
                                    <div class="text"><?php echo $val["text"] ?></div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                   
                </div>
            </div>
        </div>
    </section>