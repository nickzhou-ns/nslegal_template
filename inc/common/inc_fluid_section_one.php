          <?php
          $arr_fluid_section = array(
            array(
              'id' => '1',
              'cls_act' => 'active-block',
              'cls_btn_act' => 'active',
              'cls_content_current' => 'current',
              'title' => 'Quis autem vel eum iure reprederit?',
              'text' => 'Dolor sit amet, consectetur, adipisci velit, sed quia non numuameius modi tempora incidunt ut labore et dolore magnam aliuam quaerat voluptatem.',

            ),
            array(
              'id' => '2',
              'cls_act' => '',
              'cls_btn_act' => '',
              'cls_content_current' => '',
              'title' => 'fugiat quo voluptas nulla pariatu?',
              'text' => 'Dolor sit amet, consectetur, adipisci velit, sed quia non numuameius modi tempora incidunt ut labore et dolore magnam aliuam quaerat voluptatem.',

            ),
            array(
              'id' => '3',
              'cls_act' => '',
              'cls_btn_act' => '',
              'cls_content_current' => '',
              'title' => 'minima veniam, quis nostrum exerci?',
              'text' => 'Dolor sit amet, consectetur, adipisci velit, sed quia non numuameius modi tempora incidunt ut labore et dolore magnam aliuam quaerat voluptatem.',

            ),

          );
          ?>
<!-- Fluid Section One -->
<section page="inc_fluid_section_one" class="fluid-section-one">
  <div class="side-icon"><img src="assets/images/icons/fluid-icon.png" alt="" /></div>
  <div class="outer-container clearfix"> 
    <!-- Image Column -->
    <div class="image-column clearfix" style="background-image:url(assets/images/resource/image-1.jpg)">
      <div class="inner-column">
        <div class="sec-title light">
          <h2>Frequently asked <br>
            questions</h2>
          <div class="text">Tonam rem aperiam, eaque ipsa quae ab illo inventoe veritatis et quasi architecto beatae vitae dicta sunt explicabo exercitationem ullam corporis.</div>
        </div>
        
        <!-- Accordian Box -->
        <ul class="accordion-box">
          <?php foreach ($arr_fluid_section as $k => $val) { ?>          
          <!-- Block -->
          <li class="accordion block <?php echo $val["cls_act"] ?>">
            <div class="acc-btn <?php echo $val["cls_btn_act"] ?>">
              <div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
              <?php echo $val["title"] ?></div>
            <div class="acc-content <?php echo $val["cls_content_current"] ?>">
              <div class="content">
                <div class="accordian-text"><?php echo $val["text"] ?></div>
              </div>
            </div>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
    
    <!-- Content Column -->
    <div class="content-column">
      <div class="inner-column">
        <div class="sec-title">
          <h2>GEt A Free <br>
            Consultation</h2>
        </div>
        
        <!-- Default Form -->
        <div class="default-form">
          <form method="post" action="contact.html">
            <div class="row clearfix">
              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <input type="text" name="username" placeholder="Name" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <input type="text" name="phone" placeholder="Phone" required>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <select class="custom-select-box">
                  <option>Practice Area</option>
                  <option>Area 01</option>
                  <option>Area 02</option>
                  <option>Area 03</option>
                  <option>Area 04</option>
                </select>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <textarea name="message" placeholder="Message"></textarea>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Submit Now <i class="arrow flaticon-right"></i></span></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Default Form --> 
        
      </div>
    </div>
  </div>
</section>
<!-- Fluid Section One -->