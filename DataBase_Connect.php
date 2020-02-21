<?php
				$conn = mysqli_connect("localhost", "root", "");  
				if(! $conn )  
				{  
					die('Could not connect: ' . mysqli_error());  
				}  
				// echo 'Connected successfully';
				$dbname = mysql_select_db("student",$conn) or die("Couldn't select database");
				?>