<?php

include_once('main.php');

if(check_login() != true) { exit; }

if(isset($_GET['make_reservation']))
{
	$week = mysql_real_escape_string($_POST['week']);
	$day = mysql_real_escape_string($_POST['day']);
	$time = mysql_real_escape_string($_POST['time']);
	$slot = mysql_real_escape_string($_POST['slot']);
	echo make_reservation($week, $day, $time, $slot);
}
elseif(isset($_GET['delete_reservation']))
{
	$id = mysql_real_escape_string($_POST['id']);
	echo delete_reservation($id);
}
elseif(isset($_GET['read_reservation']))
{
	$week = mysql_real_escape_string($_POST['week']);
	$day = mysql_real_escape_string($_POST['day']);
	$time = mysql_real_escape_string($_POST['time']);
	$slot = mysql_real_escape_string($_POST['slot']);
	echo json_encode(read_reservation_array($week, $day, $time, $slot));
}
elseif(isset($_GET['read_reservation_details']))
{
	$week = mysql_real_escape_string($_POST['week']);
	$day = mysql_real_escape_string($_POST['day']);
	$time = mysql_real_escape_string($_POST['time']);
	$slot = mysql_real_escape_string($_POST['slot']);
	echo read_reservation_details($week, $day, $time, $slot);
}
elseif(isset($_GET['week']))
{
	$week = $_GET['week'];

	echo '<table id="reservation_table"><colgroup span="1" id="reservation_time_colgroup"></colgroup><colgroup span="7" id="reservation_day_colgroup"></colgroup>';

	$days_row = '<tr><td>Schulstunde</td><th class="reservation_day_th">Montag</th><th class="reservation_day_th">Dienstag</th><th class="reservation_day_th">Mittwoch</th><th class="reservation_day_th">Donnerstag</th><th class="reservation_day_th">Freitag</th></tr>';

	if($week == global_week_number)
	{
		echo highlight_day($days_row);
	}
	else
	{
		echo $days_row;
	}

	foreach($global_times as $time)
	{
		echo '<tr><th class="reservation_time_th">' . $time . '</th>';

		$i = 0;

		while($i < 5)
		{
			$i++;
			echo '<td><div class="reservation_time_div">';
			for ($slot=0; $slot < global_slot_count; $slot++) {
				$reservation = read_reservation_array($week, $i, $time, $slot);
				if($reservation)
					echo '<div class="reservation_time_cell_div" data-resid="' . $reservation[0] . '" id="div:' . $week . ':' . $i . ':' . $time . ':' . $slot . ':' . $reservation[0] . '" onclick="void(0)">' . $reservation[1] . '</div>';
				else
					echo '<div data-resid="-1" class="reservation_time_cell_div" id="div:' . $week . ':' . $i . ':' . $time . ':' . $slot . '" onclick="void(0)"></div>';
			}
			echo '</div></td>';
		}

		echo '</tr>';
	}

	echo '</table>';
}
else
{
	echo '</div><div class="box_div" id="reservation_div"><div class="box_top_div" id="reservation_top_div"><div id="reservation_top_left_div"><a href="." id="previous_week_a">&lt; Vorherige week</a></div><div id="reservation_top_center_div">Reservierungen für Woche <span id="week_number_span">' . global_week_number . '</span></div><div id="reservation_top_right_div"><a href="." id="next_week_a">Nächste Woche &gt;</a></div></div><div class="box_body_div"><div id="reservation_table_div"></div></div></div><div id="reservation_details_div">';
}

?>
