$(function() {


      //User Agent Sniffing for Font Rendering on Windows. 
      var usAg = navigator.userAgent;
      if(usAg.indexOf("NT 6.1") != -1) {
          $('body').css({'fontWeight':"300"}); //Slightly lighter. 
          $('#footer ul').css({
            'fontFamily':'Times New Roman, Times, serif', 
            'fontSize':'14px', 
            'lineHeight':'1.7em'
          });
          console.log('Windows!');
      }


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
});