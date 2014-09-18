(function($){

function centerImgs() {
	var wW = $( window ).outerWidth();
	var wH = $( window ).outerHeight();

	$( ".print-content" ).css({ "width": wW + "px", "height": wH + "px" });

	$( ".print-img" ).each(function(){
		var iH = ( $(this).height() );
		var yPos = ( wH - iH ) / 2;
		
		console.log( "wW: " + wW );
		console.log( "wH: " + wH );
		console.log( "iH: " + iH );
		console.log( "yPos: " + yPos );
		$(this).css( "margin-top", yPos + "px" );
	});
}

$(window).load(function() {
	//centerImgs();	
})

})(jQuery);