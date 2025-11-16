<?php
	include 'connect.php';
	$sql = "Update customer 
			set cid =2
			where cid = 1
			";
		if ($conn-> query($sql)) {
				// code...
				echo "Data Updated Successfully";
			}	
		else{
			echo "Invalid Entries";
		}	

?>