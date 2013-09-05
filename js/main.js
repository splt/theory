$(function() {

        // JQuery Cycle init for Homepage and to Generate Button Elements. 
        if($('#slider')){
          var pagerFactory = function(idx, slide) {return '<li><a href="#">&nbsp;</a></li>';};
          $('#slider').cycle({
              fx:      'fade',
              timeout:  0,
              prev:    '#prev',
              next:    '#next',
              pager:   '#slider_nav',
              pagerAnchorBuilder: pagerFactory
          });
        } 

        // Navigational Search Elements to appear/hide and animate on focus & blur

        var $gs = $("#global_search"),
        $ns = $("#nav_search"),
        $st = $("#search_txt"),
        $is = $(".icon_search"),
        $gst = $("#global_search_txt");

        $ns.click(function(){
            $is.fadeOut(function(){
                $st.fadeOut(function(){$gs.fadeIn();});
              $gst.animate({width:'150px'}, 800, function(){
                $is.fadeIn();
                $gst.focus();
              });
            });
        });

        $gst.blur(function(){
            $is.fadeOut(function(){
              $gst.animate({width:'59px'}, 800, function(){
                $gs.fadeOut(function(){
                  $st.fadeIn(); 
                  $is.fadeIn();
                });
              });
            });
        });

        // Shopping cart toggle and fade away after 4seconds

        $("#shopping_cart").click(function(){
          $('#shopping_bag').slideToggle("slow", function(){
            setTimeout(function(){
              $('#shopping_bag').fadeOut();
            }, 4000);
          });
        });

        // Product Detail Accordions
    
        var icons = {
          header: "ui-icon-circle-arrow-e",
          activeHeader: "ui-icon-circle-arrow-s"
        };

        $(".accordion").accordion({
          active: "#pd h3",
          collapsible: true
        });

        // Size Chart Modal

        $('size-chart').dialog();

        // Product Detail Swatches

        var swatches = $('.swatches ul li').click(function(){

            var thisSwatch = $(this).toggleClass('selected').siblings().removeClass('selected');
            var thisTitle = $(this).children('a').attr('data-swatch');
            var thisValue = $(this).parent().parent().parent().find('p.value');
            thisValue[0].innerHTML = thisTitle;

        });

        if(!swatches){
          var sideSwatches = $('.swatches li').click(function(){
            $(this).toggleClass('selected').siblings().removeClass('selected');
          });
        }
  
        // Navigation Dropdown Objects to display dropdowns and add padding for parent elements. 

        $(".drop").hover(
          function () {
            $(this).find(".dropdown").css("display","block");
            $(this).css("padding-bottom", "20px");
            $(this).css("background", "white");
          },
          function () {
            $(this).find(".dropdown").css("display","none");
            $(this).css("padding-bottom", "0");
          }
        );

        // Quicklook Link

        $(".product_image").hover(
          function(){
            $(this).children('.quicklook').fadeIn();
          },
          function(){
            $(this).children('.quicklook').fadeOut();
          }
        );
});