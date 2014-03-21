<?php
include 'connection.php';

$key = $_POST['key'];
$execute = mysql_query("select Distinct(groups) from tbl_schedule where town like '%" . $key . "%'");
if (mysql_num_rows($execute) > 0) {
	while ($row = mysql_fetch_assoc($execute)) {
		$group = $row['groups'];
		$result = mysql_query("select distinct(groups),day,day_wk,hours from tbl_schedule where groups='" . $group . "' AND STATUS='OFF'");
		echo "<table border='0' width='100%' cellpadding='0px' class='table'>";
		while ($row = mysql_fetch_assoc($result)) {
			echo "<tr align='center'>
					<td class='day_wk' style='color:#0EBFE9;'><span class='day_wk'>" . $row['day_wk'] . "</span></td>
					<td><span>" . $row['day'] . "</span></td>
					<td width='30%'><span class='info_hrs'>" . $row['hours'] . "</span></td>
					<td width='10%'><span class='sear_group'>" . $row['groups'] . "</span></td>
					</tr>
					<tr>
					<td colspan='4'><hr/></td>
					</tr>
					";

		}
		echo "</table>";
	}

} else {
	echo "town not found" . mysql_error();
}
?>