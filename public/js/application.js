(function($){
    $(function(){
        var data = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "Verical",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "Days On Mountain",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        };

        var options = {
            ///Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines : true,

            //String - Colour of the grid lines
            scaleGridLineColor : "rgba(0,0,0,.05)",

            //Number - Width of the grid lines
            scaleGridLineWidth : 1,

            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,

            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,

            //Boolean - Whether the line is curved between points
            bezierCurve : false,

            legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li style=\"background-color:<%=datasets[i].strokeColor%>\"><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"

        };

        var ctx = document.getElementById("lineChart").getContext("2d");
        var myLineChart = new Chart(ctx).Line(data, options);

        var legend = document.getElementById("linelegend");
        legend.innerHTML = myLineChart.generateLegend();

        var ctx = document.getElementById("barChart").getContext("2d");
        var myBarChart = new Chart(ctx).Bar(data, options);



        var data = [
            {
                value: 300,
                color:"#F7464A",
                highlight: "#FF5A5E",
                label: "Red"
            },
            {
                value: 50,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Green"
            },
            {
                value: 100,
                color: "#FDB45C",
                highlight: "#FFC870",
                label: "Yellow"
            }
        ]

        var ctx = document.getElementById("doughnutChart").getContext("2d");
        var myDoughnutChart = new Chart(ctx).Doughnut(data);
    })
})(jQuery);
jQuery(function($) {

    $('.timer').each(function(){

	    var countto = $(this).data('countto');

		var numAnim = new CountUp($(this).get(0), 0, countto);
		numAnim.start();


    });
});

var Sidenav = (function($) {
	var sidenav = {
		init : function() {

			$(document).ready(function() {


			});

		}
	}
	return sidenav;
})(jQuery);
var Slider = (function($) {
	var slider = {
		init : function() {

			$(document).ready(function() {

			  $('#home_slider').flexslider({
			    animation: "slide",
			    slideshow: false, // auto play on load
			    slideshowSpeed: 4000,
				animationSpeed: 600,
				pauseOnHover: true,
				controlNav: true, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
				directionNav: true, //Boolean: Create navigation for previous/next navigation? (true/false)
				prevText: "Previous",
				nextText: "Next"
			  });

			});

		}
	}
	return slider;
})(jQuery);

// Credit goes to [Underscore.js](http://underscorejs.org/)

/**
 * Returns a function, that, when invoked, will only be triggered at most
 * once during a given window of time. Normally, the throttled function will
 * run as much as it can, without ever going more than once per wait
 * duration; but if you’d like to disable the execution on the leading edge,
 * pass {leading: false}. To disable execution on the trailing edge, ditto.
 */

// throttle's dependent upon _now
_now = Date.now || function() {
  return new Date().getTime();
};

_throttle = function(func, wait, options) {
  var context, args, result;
  var timeout = null;
  var previous = 0;
  if (!options) options = {};
  var later = function() {
    previous = options.leading === false ? 0 : _now();
    timeout = null;
    result = func.apply(context, args);
    if (!timeout) context = args = null;
  };
  return function() {
    var now = _now();
    if (!previous && options.leading === false) previous = now;
    var remaining = wait - (now - previous);
    context = this;
    args = arguments;
    if (remaining <= 0 || remaining > wait) {
      if (timeout) {
        clearTimeout(timeout);
        timeout = null;
      }
      previous = now;
      result = func.apply(context, args);
      if (!timeout) context = args = null;
    } else if (!timeout && options.trailing !== false) {
      timeout = setTimeout(later, remaining);
    }
    return result;
  };
};

// Mobile device detection
var ismobile = (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));



(function($) {

	/* MODULES SET UP
	-----------------*/

	Sidenav.init();

	if(ismobile == true){
		$('body').addClass('mobile');
	} else {
		// non mobile actions
		// new WOW().init();
	}

	// DOC Ready
	$(function() {

		/* SMOTH SCROLL TO ANCHOR TAGS */
		/*
		$('a[href*=#]:not([href=#])').on('click','', function( e ){
		      e.preventDefault();
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
		        || location.hostname == this.hostname) {

		        var target = $(this.hash);
		        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		           if (target.length) {
		             $('html,body').animate(
		                {scrollTop: target.offset().top},
		                {duration: 600, easing:'easeOutCubic'});
		            return false;
		        }
		    }
		});
		*/


	}); // END Doc Ready

	/* load === all images, scripts, etc. complete before function runs */
	$(window).on('load', function() {
	  // Fade in page content and animation
	  // $("#site-wrapper").animate({"opacity": "1"}, 1000);

	}); // END window .load


	var throttleTimeOut = 50; //milliseconds before triggering function again
	// Window Scroll functions
	$(window).on('scroll', _throttle(function(){
		/* do your normal scroll stuff here, but it'll be
		 * more-reasonably controlled, so as to not peg
		 * the host machine's processor */
	}, throttleTimeOut));

	// Window Resize functions
	$(window).on('resize', _throttle(function(){
		/* do your normal resize stuff here, but it'll be
		 * more-reasonably controlled, so as to not peg
		 * the host machine's processor */
	}, throttleTimeOut));


})(jQuery);
