jQuery(function(n){n(".timer").each(function(){var e=n(this).data("countto"),i=new CountUp(n(this).get(0),0,e);i.start()})});var Sidenav=function(n){var e={init:function(){n(document).ready(function(){})}};return e}(jQuery),Slider=function(n){var e={init:function(){n(document).ready(function(){n("#home_slider").flexslider({animation:"slide",slideshow:!1,slideshowSpeed:4e3,animationSpeed:600,pauseOnHover:!0,controlNav:!0,directionNav:!0,prevText:"Previous",nextText:"Next"})})}};return e}(jQuery);_now=Date.now||function(){return(new Date).getTime()},_throttle=function(n,e,i){var t,o,r,a=null,u=0;i||(i={});var l=function(){u=i.leading===!1?0:_now(),a=null,r=n.apply(t,o),a||(t=o=null)};return function(){var d=_now();u||i.leading!==!1||(u=d);var c=e-(d-u);return t=this,o=arguments,0>=c||c>e?(a&&(clearTimeout(a),a=null),u=d,r=n.apply(t,o),a||(t=o=null)):a||i.trailing===!1||(a=setTimeout(l,c)),r}};var ismobile=/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);!function(n){Sidenav.init(),1==ismobile&&n("body").addClass("mobile"),n(function(){}),n(window).on("load",function(){});var e=50;n(window).on("scroll",_throttle(function(){},e)),n(window).on("resize",_throttle(function(){},e))}(jQuery);