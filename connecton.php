<?php
$dbhost = "localhost";
//defulit user is a root
$dbuser = "root";
//password is empty cuz it is aloclahost
$dbpass = "";
$dbname = "login_sample_db";
//which data base we want to access
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
// if the above dosent workout
	die("failed to connect");
}
