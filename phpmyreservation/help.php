<?php

include_once('main.php');

if(check_login() != true) { exit; }

?>

<div class="box_div" id="help_div">
<div class="box_top_div"><a href="#">Start</a> &gt; Hilfe</div>
<div class="box_body_div">

<h3>Reservieren</h3>

<ul>
<li><b>Wieso gibt es 2 Slots Pro Tag</b><br>Es werden vom IST-Bochum 2 IPAD-Koffer verliehen. Jeder Beinhaltet 12 Ipads.</li>
<li><b>Reservierung entfernen?</b><br>Auf die Reservierung klicken um Sie zu entfernen.</li>
</ul>

<h3>Anderes</h3>

<ul>
<li><b>Wie ändere Ich meinen Namen, Email oder Passwort?</b><br>Das ist im <a href="#cp">Control Panel</a> möglich.</li>
</ul>

<?php

if($_SESSION['user_is_admin'] == '1')
{

?>

<h3>Admin help</h3>

<ul>
<li><b>Are there any reservation restrictions for admins?</b><br>No, you can make and remove reservations back and forward in time as you wish, and you can delete other users' reservations. It will require a confirmation.</li>
<li><b>How do I manage users and reservations?</b><br>You can do that in the <a href="#cp">control panel</a>. You can reset a user's passwords (if the user has forgot it), change a user's permissions (admin or not), delete a user's reservations and delete a user. Just pick a user and choose what to do. All the red buttons will require a confirmation.</li>
<li><b>Can I delete all users and reservations?</b><br>You can do that in the <a href="#cp">control panel</a>. Your user and reservations will not be deleted unless you choose to delete everything.</li>
<li><b>How do I change the other options, like possible reservation times, secret code etc?</b><br>The webmaster must do that in the configuration file (config.php).</li>
<li><b>Will changing the price affect previous reservations?</b><br>No. A new price will only apply for reservations made after the price change.</li>
</ul>

<?php

}

?>

</div></div>
