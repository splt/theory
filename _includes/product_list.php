<?php

if($image_width){$image_width = $image_width;}else{$image_width = 200;}
if($image_height){
	$image_height = $image_height;
}else{
	$image_height = round($image_width * 1.8205);
}

?>

      <div class="product_image">
        <img src="http://placehold.it/<?= $image_width ?>x<?= $image_height ?>"/>
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