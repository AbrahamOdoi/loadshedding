document.addEventListener("deviceready", onDeviceReady, false);

function onDeviceReady() {
	$('#bulb').fadeOut(3000, function() {
		$('#page').css('background', 'black');
		$('#candle').fadeIn(4000, function() {
			window.location = 'mainpage.php';
		});
	});

	$("#pages").on("swipe", function() {
		alert("Swipe detected!");
	});

	$("#grp1").click(function() {
		$(".grp").css({
			"border" : "none"
		});
		$(this).css({
			"border-bottom-color" : "#0EBFE9",
			"border-bottom-width" : "5px",
			"border-bottom-style" : "solid"
		});
	});
	$("#grp2").click(function() {
		$(".grp").css({
			"border" : "none"
		});
		$(this).css({
			"border-bottom-color" : "#0EBFE9",
			"border-bottom-width" : "5px",
			"border-bottom-style" : "solid"
		});
	});
	$("#grp3").click(function() {
		$(".grp").css({
			"border" : "none"
		});
		$(this).css({
			"border-bottom-color" : "#0EBFE9",
			"border-bottom-width" : "5px",
			"border-bottom-style" : "solid"
		});
	});
	$("#grp4").click(function() {
		$(".grp").css({
			"border" : "none"
		});
		$(this).css({
			"border-bottom-color" : "#0EBFE9",
			"border-bottom-width" : "5px",
			"border-bottom-style" : "solid"
		});
	});
	$("#grp5").click(function() {
		$(".grp").css({
			"border" : "none"
		});
		$(this).css({
			"border-bottom-color" : "#0EBFE9",
			"border-bottom-width" : "5px",
			"border-bottom-style" : "solid"
		});
	});
	$("#grp6").click(function() {
		$(".grp").css({
			"border" : "none"
		});
		$(this).css({
			"border-bottom-color" : "#0EBFE9",
			"border-bottom-width" : "5px",
			"border-bottom-style" : "solid"
		});
	});
}