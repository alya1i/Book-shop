<?php
//check if user login
function check_login($con)
{
//will check from id of user  if exit
	if(isset($_SESSION['user_id']))
	{
//if exit
		$id = $_SESSION['user_id'];
    //read from database
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
    //check if result is possive
		if($result && mysqli_num_rows($result) > 0)
		{
//to associative array
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login if none of above work
	header("Location: login.php");
	die;

}
//to be sure of length of user id
function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) {
		# code...

		$text .= rand(0,9);
	}

	return $text;
}
