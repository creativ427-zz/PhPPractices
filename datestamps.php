<?php

//displaying date
echo date('d/m/Y');
echo'<br>';

//displaying time
echo date('h:i:sa');
echo'<br>';

//creating timestamps
$timestamp = mktime(12,45,58,9,3,2017);
echo date('d/m/Y h:i:sa', $timestamp);

//set time zone
//date_default_timezone_set('Africa/Kenya');

//to stringtime
echo'<br>';
$timestamp1 = strtotime('8:00pm December 25 2018');
$timestamp2 = strtotime('tomorrow');
$timestamp3 = strtotime('next day');
$timestamp4 = strtotime('+2days');
echo date('d/m/Y h:i:sa',$timestamp1);echo'<br>';
echo date('d/m/Y h:i:sa',$timestamp2);echo'<br>';
echo date('d/m/Y h:i:sa',$timestamp3);echo'<br>';
echo date('d/m/Y h:i:sa',$timestamp4);echo'<br>';
?>
