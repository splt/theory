<?php include('_includes/header.php'); ?>
  <?php include('_includes/navigation.php'); ?>
  <!-- 

  Start of Main Content: 24 rows of Multiple Child Divisions 

  -->

    <div id="main" role="main">
      <div class="container container_24">
        <div id="ecommerce" class="content">

    <!-- 

    Start of Banner Cycle Elements: 24 rows of 24:
    This uses jQuery.cycle Plugin with dependencies of jQuery 1.3.2

    -->

      <div id='banner_slider'>
          <div class="grid_24">
<?php
  $height = 400;
  include('_includes/slider.php');
?>

        </div><!-- end .grid_24 -->
    </div><!--/#banner_slider-->

    <div class="clear">&nbsp;</div>     

      <div id='bread_crumbs'>

      <div class="grid_12">
          <ul>
            <li><a href="">Home</a></li>
            <li class="break_backslash">/</li>
            <li><a href="">Street Style</a></li>
          <ul>
      </div>
      <!-- end .grid_12 -->

      <div class="grid_12 text_right">
          <ul id="slider_nav" class="carousel_linked_nav pagination"></ul>
      </div>
      <!-- end .grid_12 -->


    </div><!--/#breadCrumbs-->
    <div class="clear">&nbsp;</div>     
    <hr class="close"/>

    <div id="ecomm" class="grid_24">
<?php include('_includes/filters.php'); ?>
    </div>

   <!-- 

    Start of Product Listing Elements: 24 rows of 5-1-18
    with the 18 as a subset of 6-6-6

    -->

    <div id="product_listings">

      <div id="product_results" class="grid_24">

        <div class="product_result grid_8 alpha">
            <div class="product_image">
              <img src="http://placehold.it/314x570"/>
              <a class="quicklook">QuickLook</a>
            </div><!--/.product_image-->
            <div class="clear">&nbsp;</div>
            <div class="related_desc">
              <h6 class="product_line">Theory Classics</h6>
              <p class="product_name"><i>Danvey</i> Coat in brookline wool blend</p>
              <p class="product_price">$195</p>
            </div><!--end .related_desc -->
        </div><!-- end .grid_6 -->

        <div class="product_result grid_8 beta">
            <div class="product_image">
              <img src="http://placehold.it/314x570"/>
              <a class="quicklook">QuickLook</a>
            </div><!--/.product_image-->
            <div class="clear">&nbsp;</div>
            <div class="related_desc">
              <h6 class="product_line">Theory Classics</h6>
              <p class="product_name"><i>Danvey</i> Coat in brookline wool blend</p>
              <p class="product_price">$195</p>
            </div><!--end .related_desc -->
        </div><!-- end .grid_6 -->

        <div class="product_result grid_8 omega">
            <div class="product_image">
              <img src="http://placehold.it/314x570"/>
              <a class="quicklook">QuickLook</a>
            </div><!--/.product_image-->
            <div class="clear">&nbsp;</div>
            <div class="related_desc">
              <h6 class="product_line">Theory Classics</h6>
              <p class="product_name"><i>Danvey</i> Coat in brookline wool blend</p>
              <p class="product_price">$195</p>
                <ul class="swatches">
                    <li>
                      <a data-swatch="Black" title="Black">
                        <img src="http://s7d5.scene7.com/is/image/Theory/D0826623_001_sw?$swatch$" width="15" height="15"/>
                      </a>
                    </li>
                    <li>
                      <a data-swatch="Houndstooth" title="Houndstooth">
                        <img src="http://s7d5.scene7.com/is/image/Theory/D0709401_A05_sw?$swatch$" width="15" height="15"/>
                      </a>
                    </li>
                </ul>
            </div><!--end .related_desc -->
        </div><!-- end .grid_6 -->

        <div class="clear">&nbsp;</div><!--/ clear every %3 -->

        <div class="product_result grid_8 alpha">
          <?php 
            $image_width = 314;
            include('_includes/product_list.php') ?>
        </div><!-- end .grid_8 -->

        <div class="product_result grid_8 beta">
            <?php include('_includes/product_list.php') ?>
        </div><!-- end .grid_8 -->

        <div class="product_result grid_8 omega">
            <?php include('_includes/product_list.php') ?>
        </div><!-- end .grid_8 -->

        <div class="clear">&nbsp;</div><!--/ clear every %3 -->

        <div class="product_result grid_8 alpha">
            <?php include('_includes/product_list.php') ?>
        </div><!-- end .grid_8 -->

        <div class="product_result grid_8 beta">
            <?php include('_includes/product_list.php') ?>
        </div><!-- end .grid_8 -->

        <div class="product_result grid_8 omega">
            <?php include('_includes/product_list.php') ?>
        </div><!-- end .grid_8 -->

        <div class="clear">&nbsp;</div><!--/ clear every %3 -->

        <!--! end of #product_results -->

    </div> <!--! end of #product_listings -->
    <div class="clear">&nbsp;</div>

    <hr/>

        </div>
      </div> <!--! end of .container -->
    </div> <!--! end of #main -->

<?php include('_includes/footer.php'); ?>