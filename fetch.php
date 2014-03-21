<?php
include 'connection.php';

$key = $_POST['key'];
$result = mysql_query("select distinct(groups),day,day_wk,hours from tbl_schedule where groups='" . $key . "' AND STATUS='OFF'");
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