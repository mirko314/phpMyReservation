<?php include_once('main.php'); ?>

<div id="header_inner_div"><div id="header_inner_left_div">

<a href="#about">Über</a>

<?php

if(isset($_SESSION['logged_in']))
{
	echo ' | <a href="#help">Hilfe</a>';
}

?>

</div><div id="header_inner_center_div">

<?php

if(isset($_SESSION['logged_in']))
{
	echo '<b>Woche ' . global_week_number . ' - ' . strftime("%A, %e %B, %G") . '</b>';
}

?>

</div><div id="header_inner_right_div">

<?php

if(isset($_SESSION['logged_in']))
{
	echo '<a href="#cp">Control panel</a> | <a href="#logout">Log out</a>';
}
else
{
	echo 'Nicht eingeloggt.';
}

?>

</div></div>
