$(document).ready(function() {
	$('#bulb').fadeOut(4000, function() {
		$('#page').css('background', 'black');
		$('#candle').fadeIn(4000, function() {
			// window.location = 'mainpage.php';
			window.location = 'http://216.224.161.207/loadshedding/mainpage.php';
		});
	});

	// $("#pages").on("swipe", function() {
		// alert("Swipe detected!");
	// });

	$(".grp").click(function() {
		var id = $(this).attr('id');
		$(id).css({
			"border-bottom-color" : "#0EBFE9",
			"border-bottom-width" : "5px",
			"border-bottom-style" : "solid"
		});
		$.post('fetch.php', {
			key : id
		}, function(data) {
			$("#display").html(data);
		});

	});

	$("#icon_sea").click(function() {
		$(".day_info").slideDown();
	});

	$("#btn_sear").click(function() {
		var key = $("#sear_town").val();
		$.post('search.php', {
			key : key
		}, function(data) {
			$("#display").html(data);
		});
	});
});
