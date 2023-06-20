<?php

$ins = false ;
if($_post['uid'])
{
	if($_post['email'])
	{
		if($_post['pno1'])
		{
			if($_post['pass'] == $_post['pass1'])
			{
				if($_post['dob'])
				{
					$server="localhost";
					$user="root";
					$password="";
					$con = mysqli_connect($server,$user,$password) ;
					if(!con)
					{
						die("connnection to DBMS failed due to".mysqli_connect_error()) ;
					}
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
				}
				else
				{
					echo "please enter your Date of birth before proceed" ;
				}
			}
			else
			{
				echo "please enter same password and confirm password before proceed" ;
			}
		}
		else
		{
			echo "please enter your phone number before proceed" ;
		}
	}
	else
	{
		echo "please enter your email before proceed" ;
	}
}
else
{
	echo "please enter your name before proceed" ;
}








?>