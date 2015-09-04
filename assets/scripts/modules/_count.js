jQuery(function($) {

    $('.timer').each(function(){

	    var countto = $(this).data('countto');

		var numAnim = new CountUp($(this).get(0), 0, countto);
		numAnim.start();


    });
});
