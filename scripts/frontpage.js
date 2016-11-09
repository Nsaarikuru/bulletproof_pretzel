$(document).ready(function() {

/** Triggering the sidebar pretzel menu when clicking on the title. **/
$(".trigger_pretzel").click(function() {

$(".pretzel_list > li > a").toggle();


})

//*** Triggering the sidebar about menu when clicking on the title
$(".trigger_about" || ".about").click(function() {

	$(".about_list > li > a").toggle();
})

$(".history").click(function() {

$(".listarea > p").text("BULLETPROOF PRETZEL CO. is a premier baker of homemade pretzels since 1918. Our secret family recipe has been handed over four generations. Literally. Like on an index card")

})

var start_time = new Date();
var end_time = new Date();
var elapsed_ms = end_time - start_time;
var seconds = Math.round(elapsed_ms / 1000);

function changeSpecial (){
	start_time;
	end_time;
	console.log(start_time, end_time);
	if (seconds >= 10 ) {
	$("#special").css("background", "red");
};
};

});
