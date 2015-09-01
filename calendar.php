<style type="text/css">
	table {
		border-collapse: collapse; border: 1px solid black;
	}
	td {
		border: 1px solid black;
	}
</style>

<?php

function getCal($month, $year){
	$row = 1;
	for($i = 1; $i <= date("t", mktime(0, 0, 0, $month, 1, $year)); $i++){
		$dow = date("w", mktime(0, 0, 0, $month, $i, $year));
		if ($dow == 1) $row++;
		$cal[$row][$dow == 0 ? 7 : $dow] =  date("d", mktime(0, 0, 0, $month, $i, $year));
	}
	return $cal;
}

$cal = getCal(date("n"), date("Y"));


echo '<table>';
foreach ($cal as $value) {
	echo "<tr>";
	for ($i = 1; $i < 8; $i++)
		echo "<td>" . $value[$i];
}
echo "</table>";

$cal = getCal(date("n")+1, date("Y"));


echo '<table>';
foreach ($cal as $value) {
	echo "<tr>";
	for ($i = 1; $i < 8; $i++)
		echo "<td>" . $value[$i];
}
echo "</table>";

?>