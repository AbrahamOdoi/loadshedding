<!DOCTYPE html>
<html>
	<head>
		<title>My Page</title>
		<script src="jquery-1.8.2.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css" />
		<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script> -->
		<script src="js/script.js"></script>

		<link rel="stylesheet" href="jquery.mobile-1.2.0.min.css" />
		<script src="jquery.mobile-1.2.0.min.js"></script>
	</head>
	<body>

		<div data-role="page" id="pages">

			<div data-role="header" class="header" data-theme="c">
				<h3>LoadShedding +</h3>
				<div class="grp_menu">
					<div class="groups">
						<?php
						include 'connection.php';

						$execute = mysql_query("select * from tbl_groups");
						if (mysql_num_rows($execute) > 0) {
							while ($row = mysql_fetch_assoc($execute)) {
								echo "<span class='grp' id='" . $row['groups'] . "'>" . $row['groups'] . "</span>";
								// echo "<a href='#groupA'><span class='grp' id='grp" . $row['id'] . "'>" . $row['group'] . "</span></a>";
							}
						} else {
							echo "noo " . mysql_error();
						}
						?>
					</div>
					<div class="day_head">
						<div class="day">
							Search
						</div>
					</div>
					<div class="day_info">
						<!-- <img src="img/bulb3.png" width="10%"/> -->
						<input type="text" id="sear_town" placeholder="Search town"/>
						<input type="button" value='SEARCH' id="btn_sear" />
					</div>
				</div>
				<div class="day_foot">
					<div class="day">
						Two Weeks
					</div>
				</div>
			</div><!-- /header -->

			<div data-role="content">
				<div id='display'>
					<?php
					include 'connection.php';

					$key = $_POST['key'];
					$result = mysql_query("select distinct(groups),day,day_wk,hours from tbl_schedule where groups='GROUP A' AND STATUS='OFF'");
					echo "<table border='0' width='100%' cellpadding='5px'>";
					while ($row = mysql_fetch_assoc($result)) {
						echo "<tr align='center'>
					<td class='day_wk' style='color:#0EBFE9;'><span class='day_wk'>" . $row['day_wk'] . "</span></td>
					<td><span>" . $row['day'] . "</span></td>
					<td><span class='info_hrs'>" . $row['hours'] . "</span></td>
					</tr>
					<tr>
					<td colspan='3'><hr/></td>
					</tr>
					";

					}
					echo "</table>";
					?>
				</div>
			</div><!-- /content -->

		</div><!-- /page -->

	</body>
</html>