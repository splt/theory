<?php include('_includes/header.php'); ?>
  <?php include('_includes/navigation.php'); ?>
 <!-- 

  Start of Main Content: 24 rows of Multiple Child Divisions 

  -->

    <div id="main" role="main">
      <div class="container container_24">
        <div class="content">

    <!-- 

    Start of Primary Cycle Elements: 24 rows of 24:
    This uses jQuery.cycle Plugin with dependencies of jQuery 1.3.2

    -->

      <div id='primary_cycle'>
          <div class="grid_24">
  <?php 
    $height = 500;
    include('_includes/slider.php'); 
?>
          <ul id="slider_nav" class="carousel_linked_nav pagination"></ul>

        </div><!-- end .grid_24 -->
    </div><!--/#primary_cycle-->
    <div class="clear">&nbsp;</div>     

    <hr/>

    <!-- 

    Start of Feature Elements: 24 rows of 12-12 

    -->

    <div id="features">
        <div class="grid_12 alpha">
            <img src="http://placehold.it/475x310"/>
            <!-- <img src="img/home/feature-1.jpg"/> -->
        </div><!-- end .grid_12 -->
        <div class="grid_12 omega">
            <img src="http://placehold.it/475x310"/>
            <!-- <img src="img/home/feature-2.jpg"/> -->
        </div><!-- end .grid_12 -->
    </div> <!--! end of #features -->
    <div class="clear">&nbsp;</div>

    <hr/>

    <!-- 

      Start of SubFeature Elements: 24 rows of 8-8-8
      Alpha and Omega defined as first and last. Beta elements in between 

    -->

    <div id="sub_features">
        <div class="grid_8 alpha">
            <img src="http://placehold.it/314x310"/>
            <!-- <img src="img/home/sub-1.jpg"/> -->
        </div> <!-- end .grid_8 -->
        <div class="grid_8 beta">
            <img src="http://placehold.it/314x310"/>
            <!-- <img src="img/home/sub-2.jpg"/> -->
        </div> <!-- end .grid_8 -->
        <div class="grid_8 omega">
            <img src="http://placehold.it/314x310"/>
            <!-- <img src="img/home/sub-3.jpg"/> -->
        </div> <!-- end .grid_8 -->
        <div class="clear">&nbsp;</div>
    </div> <!--! end of #sub_features -->

    <hr/>

        </div>
      </div> <!--! end of .container -->
    </div> <!--! end of #main -->

<?php include('_includes/footer.php'); ?>