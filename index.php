<?php include('_includes/header.php'); ?>

 <!-- 

  Start of Main Content: 24 rows of Multiple Child Divisions 

  -->

    <div id="main" role="main">
      <div class="container container_24">
        <div class="content">

            <hr/>

<style>
    table#context{width: 500px; margin: 20px auto;}
    th{background: #DDD;}
    th, td{padding: 5px; text-align: center;}
    tr.even{background: #EEE;}
</style>
 
<table id="context">

    <tr><th>#</th><th>Page</th></tr>
    <?php

    $arr = array(
        'Homepage'=>'homepage.php', 
        'List Page'=>'list.php', 
        'Product Detail'=>'pdp.php', 
        'Filter - 4' => 'filter-4.php', 
        'Filter - 3' => 'filter-3.php', 
        'Editorial' => 'editorial.php',
        'EComm Banner' => 'banner_ecomm.php',
        'Email Template' => 'email-1.html',
    );

    $files = array(
        'homepage.php', 
        'list.php', 
        'pdp.php', 
        'filter-4.php', 
        'filter-3.php', 
        'editorial.php',
        'banner_ecomm.php',
        'email-1.html',
    );
    $pages = array(
        'Homepage', 
        'List Page', 
        'Product Detail', 
        'Filter - 4', 
        'Filter - 3', 
        'Editorial',
        'EComm Banner',
        'Email Template',
    );

    // echo('<pre>');
    // print_r($files);
    // echo('</pre>');

     // foreach ($arr as $f => $file) {
     //    echo('<tr><td>');
     //    echo('<td></td>');
     //    echo('<a href="'.$arr[$f].'">'.$f.'</a>');
     //    echo('</td></tr>');
     // }

     $l = count($files);
     for($i = 0; $i < $l; $i++){
        echo('<tr class="'.($i%2 ? 'even' : 'odd').'""><td>');
        echo($i+1);
        echo('</td><td>');
        echo('<a href="');
        echo $files[$i];
        echo('">');
        echo $pages[$i];
        echo('</a>');
        echo('</td></tr>');
     }

    ?>

</table>

           <hr/>

        </div>
      </div> <!--! end of .container -->
    </div> <!--! end of #main -->

<?php include('_includes/footer.php'); ?>