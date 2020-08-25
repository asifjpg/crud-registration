<?php

$con = mysqli_connect('localhost','root','');

$db= mysqli_select_db($con,'crudutubes');
if($con)
{
	echo  " connection successful";

}
	else

	{
	
		echo "no successful";
	}

?>