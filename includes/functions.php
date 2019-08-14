<?php 

	//convert grade to points
	function grade($grade){
		$points;
		if($grade === "A+" || $grade === "A" || $grade === "a" || $grade === "a+"){
			$points = 4.00;
		}else if($grade === "A-" || $grade === "a-"){
			$points = 3.70;
		}else if($grade === "B+" || $grade === "b+"){
			$points = 3.30;
		}else if($grade === "B" || $grade === "b"){
			$points = 3.00;
		}else if($grade === "B-" || $grade === "b-"){
			$points = 2.70;
		}else if($grade === "C+" || $grade === "c+"){
			$points = 2.30;
		}else if($grade === "C" || $grade === "c"){
			$points = 2.00;
		}else if($grade === "C-" || $grade === "c-"){
			$points = 1.70;
		}else if($grade === "D+" || $grade === "d+"){
			$points = 1.30;
		}else if($grade === "D" || $grade === "d"){
			$points = 1.00;
		}else if($grade === "E" || $grade === "e" || $grade === "D-" || $grade === "d-" || $grade === "E+" || $grade === "E-" || $grade === "e+" || $grade === "e-"){
			$points = 0.00;
		}else{
			$points = 0.00;
		}

		return $points;
	}

	// to verify queries
	function verify_query($result_set){

		global $connection;

		if(!$result_set){
			die("Database query failed!".mysqli_error($connection));
		}
	}

?>