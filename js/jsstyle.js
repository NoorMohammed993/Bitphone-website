
$(document).ready(function( $ ) {
	
	for (var i=1;i<=3;i++){
	$(".span"+i).on("click touchstart",function () {
	var value=$(this).attr("class");
	$("."+ value +"_content").show()
	.siblings("div.show1").hide();
	$(this).css({
			"border-bottom":"#ec364c 2px solid",
			"color":"#ec364c" })
			.siblings().css({ 
			"border-bottom":"none",
			"color":"#333"  });	
	});
	}
	 for (var i=4;i<=6;i++){
	$(".span"+i).on("click touchstart",function () {
	var value=$(this).attr("class");
	$("."+ value +"_content").show()
	.siblings("div.show1").hide();
	$(this).css({
			"border-bottom":"#ec364c 2px solid",
			"color":"#ec364c" })
			.siblings().css({
			"border-bottom":"none",
			"color":"#333"  });	
	}  );
	}
	 
	
	
	
	
	 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

$(".showmore").click(function(){
	
	var text=$(".showmore").text();
	$(".showmore").text(text =="Read less" ? "Read More" : "Read less");
	
	$(".hide2").toggle();	
});

$(".showmore2").click(function(){
	
	var text=$(".showmore2").text();
	$(".showmore2").text(text =="Read less" ? "Read More" : "Read less");
	
	$(".hide3").toggle();
		
});

$(".showmore22").click(function(){
	
	var text=$(".showmore22").text();
	$(".showmore22").text(text =="Read less" ? "Read More" : "Read less");
	
	$(".hide33").toggle();
		
});










$(".showmore3").click(function(){
	
	var text=$(".showmore3").text();
	$(".showmore3").text(text =="Read less" ? "Read More" : "Read less");
	
	$(".hide4").toggle();
		
});
$(".showmore4").click(function(){
	
	var text=$(".showmore4").text();
	$(".showmore4").text(text =="Read less" ? "Read More" : "Read less");
	
	$(".hide5").toggle();
		
});

$(".showmore44").click(function(){
	
	var text=$(".showmore44").text();
	$(".showmore44").text(text =="Read less" ? "Read More" : "Read less");
	
	$(".hide55").toggle();
		
});










$(".showmore5").click(function(){
	
	var text=$(".showmore5").text();
	$(".showmore5").text(text =="Read less" ? "Read More" : "Read less");
	
	$(".hide6").toggle();
		
});

$(".showmore6").click(function(){
	
	var text=$(".showmore6").text();
	$(".showmore6").text(text =="Read less" ? "Read More" : "Read less");
	
	$(".hide7").toggle();
		
});



$(".showmore7").click(function(){
	
	var text=$(".showmore7").text();
	$(".showmore7").text(text =="Read less" ? "Read More" : "Read less");
	
	$(".hide8").toggle();
		
});

$(".showmore77").click(function(){
	
	var text=$(".showmore77").text();
	$(".showmore77").text(text =="Read less" ? "Read More" : "Read less");
	
	$(".hide88").toggle();
		
});









$(".showmore8").click(function(){
	
	var text=$(".showmore8").text();
	$(".showmore8").text(text =="Read less" ? "Read More" : "Read less");
	
	$(".hide9").toggle();
		
});


$(".showmore9").click(function(){
	
	var text=$(".showmore9").text();
	$(".showmore9").text(text =="Read less" ? "Read More" : "Read less");
	
	$(".hide10").toggle();
		
});

$(".showmore99").click(function(){
	
	var text=$(".showmore99").text();
	$(".showmore99").text(text =="Read less" ? "Read More" : "Read less");
	
	$(".hide100").toggle();
		
});







$(".showmore10").click(function(){
	
	var text=$(".showmore10").text();
	$(".showmore10").text(text =="Read less" ? "Read More" : "Read less");
	
	$(".hide11").toggle();
		
});


























	
    //Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	
	//Variables on page load 
	var $myCarousel = $('#carousel-example-generic'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
		
	//Initialize carousel 
	$myCarousel.carousel();
	
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);
	
	//Pause carousel  
	$myCarousel.carousel('pause');
	
	
	//Other slides to be animated on carousel slide event 
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});  
    $("#carousel-example-generic").carousel({
        interval:3000,
        pause: "false"
    });
	
});
(jQuery);
