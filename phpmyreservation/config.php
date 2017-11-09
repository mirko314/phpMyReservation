<?php

### IF YOU ARE GOING TO USE THE CHARACTER ' IN ANY OF THE OPTIONS, ESCAPE IT LIKE THIS: \' ###

// MySQL details
define('global_mysql_server', 'localhost:/tmp/mysql.sock');
define('global_mysql_user', 'admin');
define('global_mysql_password', '');
define('global_mysql_database', 'booking');

// Salt for password encryption. Changing it is recommended. Use 9 random characters
// This MUST be 9 characters, and must NOT be changed after users have been created
define('global_salt', 'asd2fedvd');

// Days to remember login (if the user chooses to remember it)
define('global_remember_login_days', '180');

// Title. Used in page title and header
define('global_title', 'IPAD Reservierung');

// Organization. Used in page title and header, and as sender name in reservation reminder emails
define('global_organization', 'IST Bochum');

// Secret code. Can be used to only allow certain people to create a user
// Set to '0' to disable
define('global_secret_code', '1234');

// Email address to webmaster. Shown to users that want to know the secret code
// To avoid spamming, JavaScript & Base64 is used to show email addresses when not logged in
define('global_webmaster_email', 'your@email.address');

// Set to '1' to enable reservation reminders. Adds an option in the control panel
// Check out the wiki for instructions on how to make it work
define('global_reservation_reminders', '0');

// Reservation reminders are sent from this email
// Should be an email address that you own, and that is handled by your web host provider
define('global_reservation_reminders_email', 'some@email.address');

// Code to run the reservation reminders script over HTTP
// If reservation reminders are enabled, this MUST be changed. Check out the wiki for more information
define('global_reservation_reminders_code', '1234');

// Full URL to web site. Used in reservation reminder emails
define('global_url', 'http://your.server/phpmyreservation/');

// Currency (short format). Price per reservation can be changed in the control panel
// Currency should not be changed after reservations have been made (of obvious reasons)
define('global_currency', '€');

// How many weeks forward in time to allow reservations
define('global_weeks_forward', '2');

// Possible reservation times. Use the same syntax as below (TimeFrom-TimeTo)
$global_times = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10');

// Slot count
define('global_slot_count', '2');

// Slot count
define('global_usage_reminder', '0');
?>
