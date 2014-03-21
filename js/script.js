$(document).ready(function() {
	document.addEventListener("deviceready", onDeviceReady, false);

	function onDeviceReady() {
		var db = window.openDatabase("dbsched", "1.0", "db_sched", 200000);
		db.transaction(populateDB, errorCB, successCB);
	}

	// Populate the database
	//
	function populateDB(tx) {
		tx.executeSql('DROP TABLE IF EXISTS tbl_sched');
		tx.executeSql('CREATE TABLE IF NOT EXISTS tbl_sched (id unique, data)');
		tx.executeSql('INSERT INTO tbl_sched (id, data) VALUES (1, "First row")');
		tx.executeSql('INSERT INTO tbl_sched (id, data) VALUES (2, "Second row")');
	}

	// Transaction error callback
	//
	function errorCB(err) {
		alert("Error processing SQL: " + err);
	}

	// Transaction success callback
	//
	function successCB() {
		alert("success!");
	}


	$('#bulb').fadeOut(4000, function() {
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
	// }

});
