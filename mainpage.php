<!DOCTYPE html>
<html>
	<head>
		<title>My Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
		<script src="js/script.js"></script>
	</head>
	<body>

		<div data-role="page" id="pages">

			<div data-role="header" class="header" data-theme="c">
				<h3>LoadShedding +</h3>
				<div class="grp_menu">
					<div class="groups">
						<span class="grp" id="grp1">Group 1</span>
						<span class="grp" id="grp2">Group 2</span>
						<span class="grp" id="grp3">Group 3</span>
						<span class="grp" id="grp4">Group 4</span>
						<span class="grp" id="grp5">Group 5</span>
						<span class="grp" id="grp6">Group 6</span>
					</div>
					<div class="day_head">
						<div class="day"><?php echo date('l'); ?></div>
					</div>
					<div class="day_info">
						<img src="img/bulb3.png" width="10%"/>
					</div>
				</div>
					<div class="day_foot">
						<div class="day">This Week</div>
					</div>
			</div><!-- /header -->

			<div data-role="content">
				<p>
					Hello world
				</p>
			</div><!-- /content -->

		</div><!-- /page -->

	</body>
</html>