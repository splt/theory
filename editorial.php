<?php include('_includes/header.php'); ?>
  <?php include('_includes/navigation.php'); ?>
  <!-- 

  Start of Main Content: 24 rows of Multiple Child Divisions 

  -->

    <div id="main" role="main">
      <div class="container container_24">
        <div id="editorial" class="content">

    <!-- 

    Start of Editorial Cycle Elements: 24 rows of 24:
    This uses jQuery.cycle Plugin with dependencies of jQuery 1.3.2

    -->

      <div id='editorial_slider'>
          <div class="grid_24">
<?php 
$height = 640;
include('_includes/slider.php'); 
?>
        </div><!-- end .grid_24 -->
    </div><!--/#editorial_cycle-->

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

    <div id="editorial_copy">

        <h3 class="title">Street <span>Style</span></h3>
        <div class="copy">
        <p class="intro">Photography by Lorem ipsum dolor<br/>
Styling by Donec facilisis commodo, libero eget porta<br/>
Words by Lorem ipsum dolor<p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis commodo libero eget porta. Donec porttitor lobortis urna, et tristique nisi vehicula vel. Aliquam et metus commodo, laoreet 
eros a, porttitor nisl. Maecenas fringilla tristique eros, non adipiscing eros. Etiam facilisis, massa vel venenatis feugiat, odio nunc luctus libero, quis mollis risus odio eu felis. Suspendisse iaculis 
orci id eleifend tincidunt odio eu felis.</p>
        </div><!--/.copy-->

    </div><!-- end editorial_copy -->

    <div class="clear">&nbsp;</div>     
    <hr class="close"/>

<?php include('_includes/related_items.php'); ?>

    <div class="clear">&nbsp;</div>

    <hr/>

        </div>
      </div> <!--! end of .container -->
    </div> <!--! end of #main -->

<?php include('_includes/footer.php'); ?>