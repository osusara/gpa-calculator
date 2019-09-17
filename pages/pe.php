<?php session_start() ?>
<?php require_once("../includes/functions.php"); ?>
<?php

	$errors = array();
	$count = 1; 

	$c1 = 0;
	$c2 = 0;
	$c3 = 0;
	$c4 = 0;

	$gpa1 = 0;
	$gpa2 = 0;
	$gpa3 = 0;
	$gpa4 = 0;

	//1,1 variables
	$PED11101 = null;
	$PED11102 = null;
	$PED11103 = null;
	$PED11104 = null;
	$PED11105 = null;
    $PED11106 = null;
    $PED11107 = null;
	$PED11308 = null;
    $PED11209 = null;
    $PED11210 = null;

	//1,2 variables
	$PED12001 = null;
	$PED12102 = null;
	$PED12103 = null;
	$PED12104 = null;
	$PED12105 = null;
    $PED12206 = null;
    $PED12207 = null;
	$PED12308 = null;
    $PED12209 = null;
    $PED12110 = null;
    $PED12211 = null;

	//2,1 variables
	$PED21001 = null;
	$PED21102 = null;
	$PED21103 = null;
	$PED21104 = null;
	$PED21105 = null;
	$PED21206 = null;
	$PED21207 = null;
	$PED21208 = null;
	$PED21209 = null;
	$PED21210 = null;
    $PED21211 = null;
    $PED211e1 = null;
    $e211 = "PED211XX";

	//2,2 variables
	$PED22001 = null;
	$PED22102 = null;
	$PED22103 = null;
	$PED22104 = null;
	$PED22105 = null;
	$PED22106 = null;
	$PED22207 = null;
	$PED22208 = null;
	$PED22209 = null;
	$PED22110 = null;
    $PED22311 = null;
    $PED22212 = null;
    $PED221e1 = null;
    $e221 = "PED221XX";

	//3,1 variables
	$PED31001 = null;
	$PED31102 = null;
	$PED31103 = null;
	$PED31104 = null;
	$PED31105 = null;
	$PED31206 = null;
	$PED31207 = null;
	$PED31208 = null;
	$PED31209 = null;
	$PED31210 = null;
	$PED31211 = null;

	//3,2 variables
	$PED32001 = null;
	$PED32202 = null;
	$PED32203 = null;
	$PED32204 = null;
	$PED32205 = null;
	$PED32106 = null;
	$PED32207 = null;
    $PED32208 = null;
    $PED32xe1 = null;
    $PED321e2 = null;
    $e321 = "PED32XXX";
    $e322 = "PED321XX";

	//4,1 variables
	$PED41201 = null;
	$PED41202 = null;
	$PED41203 = null;
	$PED41204 = null;
	$PED41105 = null;
	$PED41206 = null;
	$PED41207 = null;
    $PED41108 = null;
    $PED41xe1 = null;
    $PED411e2 = null;
	$e411 = "PED41XXX";
    $e412 = "PED411XX";

	//4,2 variables
	$PED42801 = null;

	//when the submit
	if(isset($_POST['submit'])){

		// if(!isset($_POST['e211']) || !isset($_POST['e221'])){
		// 	$errors[] = 'Please select your elective subjects or NOT YET! in 2nd year';
		// }

		// if(!isset($_POST['e321']) || !isset($_POST['e322']) || !isset($_POST['e323'])){
		// 	$errors[] = 'Please select your elective subjects or NOT YET! in 3rd year 2nd semester';
		// }

		// if(!isset($_POST['e411']) || !isset($_POST['e412']) || !isset($_POST['e413'])){
		// 	$errors[] = 'Please select your elective subjects or NOT YET! in 4th year 1st semester';
		// }

		if(empty($errors)){

			//1,1 grades
			$PED11101 = grade($_POST['PED11101'])*1;
			$PED11102 = grade($_POST['PED11102'])*1;
			$PED11103 = grade($_POST['PED11103'])*1;
			$PED11104 = grade($_POST['PED11104'])*1;
			$PED11105 = grade($_POST['PED11105'])*1;
            $PED11106 = grade($_POST['PED11106'])*1;
            $PED11107 = grade($_POST['PED11107'])*1;
            $PED11308 = grade($_POST['PED11308'])*3;
            $PED11209 = grade($_POST['PED11209'])*2;
            $PED11210 = grade($_POST['PED11210'])*2;

			//1,2 grades
			$PED12001 = grade($_POST['PED12001'])*0;
			$PED12102 = grade($_POST['PED12102'])*1;
			$PED12103 = grade($_POST['PED12103'])*1;
			$PED12104 = grade($_POST['PED12104'])*1;
			$PED12105 = grade($_POST['PED12105'])*1;
            $PED12206 = grade($_POST['PED12206'])*2;
            $PED12207 = grade($_POST['PED12207'])*2;
            $PED12308 = grade($_POST['PED12308'])*3;
            $PED12209 = grade($_POST['PED12209'])*2;
            $PED12110 = grade($_POST['PED12110'])*1;
            $PED12211 = grade($_POST['PED12211'])*2;

			//total credits erned in first year
			$c1 = $PED11101+$PED11102+$PED11103+$PED11104+$PED11105+$PED11106+$PED11107+$PED11308+$PED11209+$PED11210+$PED12001+$PED12102+$PED12103+$PED12104+$PED12105+$PED12206+$PED12207+$PED12308+$PED12209+$PED12110+$PED12211;

			//gpa for the first year
			$gpa1 = $c1/30;

			//2,1 grades
			$PED21001 = grade($_POST['PED21001'])*0;
			$PED21102 = grade($_POST['PED21102'])*1;
			$PED21103 = grade($_POST['PED21103'])*1;
			$PED21104 = grade($_POST['PED21104'])*1;
			$PED21105 = grade($_POST['PED21105'])*1;
			$PED21206 = grade($_POST['PED21206'])*2;
            $PED21207 = grade($_POST['PED21207'])*2;
            $PED21208 = grade($_POST['PED21208'])*2;
			$PED21209 = grade($_POST['PED21209'])*2;
			$PED21210 = grade($_POST['PED21210'])*2;
			$PED21211 = grade($_POST['PED21211'])*2;
            $PED211e1 = grade($_POST['PED211e1'])*1;
            
            $e211 = $_POST['e211'];

			//2,2 grades
			$PED22001 = grade($_POST['PED22001'])*0;
	        $PED22102 = grade($_POST['PED22102'])*1;
        	$PED22103 = grade($_POST['PED22103'])*1;
	        $PED22104 = grade($_POST['PED22104'])*1;
	        $PED22105 = grade($_POST['PED22105'])*1;
    	    $PED22106 = grade($_POST['PED22106'])*1;
	        $PED22207 = grade($_POST['PED22207'])*2;
	        $PED22208 = grade($_POST['PED22208'])*2;
    	    $PED22209 = grade($_POST['PED22209'])*2;
	        $PED22110 = grade($_POST['PED22110'])*1;
            $PED22311 = grade($_POST['PED22311'])*3;
            $PED22212 = grade($_POST['PED22212'])*2;
            $PED221e1 = grade($_POST['PED221e1'])*1;

            $e221 = $_POST['e221'];

			//total credits erned in second year
			$c2 = $PED21001+$PED21102+$PED21103+$PED21104+$PED21105+$PED21206+$PED21207+$PED21208+$PED21209+$PED21210+$PED21211+$PED211e1+$PED22001+$PED22102+$PED22103+$PED22104+$PED22105+$PED22106+$PED22207+$PED22208+$PED22209+$PED22110+$PED22311+$PED22212+$PED221e1;

			//gpa for the second year
			$gpa2 = $c2/35;

			//3,1 grades
			$PED31001 = grade($_POST['PED31001'])*0;
	        $PED31102 = grade($_POST['PED31102'])*1;
	        $PED31103 = grade($_POST['PED31103'])*1;
	        $PED31104 = grade($_POST['PED31104'])*1;
	        $PED31105 = grade($_POST['PED31105'])*1;
	        $PED31206 = grade($_POST['PED31206'])*2;
	        $PED31207 = grade($_POST['PED31207'])*2;
	        $PED31208 = grade($_POST['PED31208'])*2;
	        $PED31209 = grade($_POST['PED31209'])*2;
	        $PED31210 = grade($_POST['PED31210'])*2;
	        $PED31211 = grade($_POST['PED31211'])*2;

			//3,2 grades
            $PED32001 = grade($_POST['PED32001'])*0;
        	$PED32202 = grade($_POST['PED32202'])*2;
        	$PED32203 = grade($_POST['PED32203'])*2;
        	$PED32204 = grade($_POST['PED32204'])*2;
        	$PED32205 = grade($_POST['PED32205'])*2;
        	$PED32106 = grade($_POST['PED32106'])*1;
        	$PED32207 = grade($_POST['PED32207'])*2;
            $PED32208 = grade($_POST['PED32208'])*2;
            $PED32xe1 = grade($_POST['PED32xe1'])*1;
            $PED321e2 = grade($_POST['PED321e2'])*1;

            $e321 = $_POST['e321'];
            $e322 = $_POST['e322'];

			if($_POST['e321'] == 'PED32210' || $_POST['e321'] == 'PED32211'){
				//total credits erned in third year
				$c3 = $PED31001+$PED31102+$PED31103+$PED31104+$PED31105+$PED31206+$PED31207+$PED31208+$PED31209+$PED31210+$PED31211+$PED32001+$PED32202+$PED32203+$PED32204+$PED32205+$PED32106+$PED32207+$PED32208+($PED32xe1*2);

				//gpa for the third year
				$gpa3 = $c3/31;

			}else if($_POST['e321'] == 'PED32109' || $_POST['e321'] == 'PED32112' || $_POST['e321'] == 'PED32113'){
				//total credits erned in third year
				$c3 = $PED31001+$PED31102+$PED31103+$PED31104+$PED31105+$PED31206+$PED31207+$PED31208+$PED31209+$PED31210+$PED31211+$PED32001+$PED32202+$PED32203+$PED32204+$PED32205+$PED32106+$PED32207+$PED32208+$PED32xe1+$PED321e2;

				//gpa for the third year
				$gpa3 = $c3/31;

			}else{

			}

			//4,1 grades
			$PED41201 = grade($_POST['PED41201'])*2;
        	$PED41202 = grade($_POST['PED41202'])*2;
        	$PED41203 = grade($_POST['PED41203'])*2;
        	$PED41204 = grade($_POST['PED41204'])*2;
        	$PED41105 = grade($_POST['PED41105'])*1;
        	$PED41206 = grade($_POST['PED41206'])*2;
	        $PED41207 = grade($_POST['PED41207'])*2;
            $PED41108 = grade($_POST['PED41108'])*1;
            $PED41xe1 = grade($_POST['PED41xe1'])*1;
            $PED411e2 = grade($_POST['PED411e2'])*1;

			$e411 = $_POST['e411'];
			$e412 = $_POST['e412'];

			//4,2 grades
			$PED42801 = grade($_POST['PED42801'])*8;

			if($_POST['e411'] == 'PED41210'){
				//total credits erned in third year
				$c4 = $PED41201+$PED41202+$PED41203+$PED41204+$PED41105+$PED41206+$PED41207+$PED41108+($PED41xe1*2)+$PED42801;

				//gpa for the third year
				$gpa4 = $c4/22;

			}else if($_POST['e411'] == 'PED41109' || $_POST['e411'] == 'PED4111' || $_POST['e411'] == 'PED41112' || $_POST['e411'] == 'PED41113' || $_POST['e411'] == 'PED41114' || $_POST['e411'] == 'PED41115'){
				//total credits erned in third year
				$c4 = $PED41201+$PED41202+$PED41203+$PED41204+$PED41105+$PED41206+$PED41207+$PED41108+$PED41xe1+$PED411e2+$PED42801;

				//gpa for the third year
				$gpa4 = $c4/22;

			}else{

			}


			$_SESSION['c1'] = $c1;
			$_SESSION['c2'] = $c2;
			$_SESSION['c3'] = $c3;
			$_SESSION['c4'] = $c4;
			$_SESSION['gpa1'] = $gpa1;
			$_SESSION['gpa2'] = $gpa2;
			$_SESSION['gpa3'] = $gpa3;
			$_SESSION['gpa4'] = $gpa4;

			//redirect to gpa view
			header('Location: gpa.php');
		}

		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="../fav.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/responsive.css">

	<title>CIS | Applied Sciences</title>
</head>
<body>
	<div class="topic text-center">
		<strong>Fill Your Grades</strong>
	</div>

	<div class="container-fluid">
 		<?php
 			// Display errors
 			if(isset($errors) && !empty($errors)){
 				echo '<div class="alert alert-danger" role="alert">';
 				echo '<p class="error">'.$errors[0].'</p>';
 				echo '</div>';
 			 }
   		?>
    </div>

	<div class="container-fluid">
		<form action="pe.php" method="post">
			<div class="container-fluid form-group">
				<div class="row padding">

					<div class="col-md-6 col-sm-12 mx-auto margin">
							<div class="card ">
								<div class="card-body">
									<h5 class="p-2 mb-2 bg-dark text-white card-title text-center">1<sup>st</sup> Year 1<sup>st</sup> Semester</h5>
		
									<table class="table">
										<tr>
											<th>Code</th>
											<th>Title</th>
											<th>Credits</th>
											<th>Grade</th>
										</tr>
										<tr>
											<td>PED11101</td>
											<td class="subject-title">Foundation of Physical Education</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED11101" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED11101.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED11102</td>
											<td class="subject-title">General Fitness</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED11102" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED11102.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED11103</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Athletics (Track Events)</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED11103" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED11103.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED11104</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Gymnastics</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED11104" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED11104.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED11105</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Swimming & Life Saving</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED11105" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED11105.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED11106</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Basketball</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED11106" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED11106.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED11107</td>
											<td class="subject-title">Fundamental Motor Skills and Practices of Games</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED11107" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED11107.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED11308</td>
											<td class="subject-title">Systemic Anatomy & Basic Physiology</td>
											<td>3</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED11308" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED11308.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED11209</td>
											<td class="subject-title">Fundamentals of Physics</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED11209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED11209.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED11210</td>
											<td class="subject-title">Introduction to Information Technology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED11210" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED11210.'"'; ?>></td>
										</tr>
									</table>
								</div>
							</div>
					</div>

					<div class="col-md-6 col-sm-12 mx-auto margin">
							<div class="card">
								<div class="card-body">
									<h5 class="p-2 mb-2 bg-dark text-white card-title text-center">1<sup>st</sup> Year 2<sup>nd</sup> Semester</h5>
		
									<table class="table">
										<tr>
											<th>Code</th>
											<th>Title</th>
											<th>Credits</th>
											<th>Grade</th>
										</tr>
										<tr>
											<td>PED12001</td>
											<td class="subject-title">General Fitness</td>
											<td>0</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED12001" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED12001.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED12102</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Athletics (Field Events -Jumps)</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED12102" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED12102.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED12103</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Badminton</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED12103" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED12103.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED12104</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Netball</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED12104" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED12104.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED12105</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Volleyball</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED12105" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED12105.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED12206</td>
											<td class="subject-title">Basics of Education Psychology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED12206" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED12206.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED12207</td>
											<td class="subject-title">Mathematics</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED12207" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED12207.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED12308</td>
											<td class="subject-title">Introduction to General Chemistry</td>
											<td>3</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED12308" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED12308.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED12209</td>
											<td class="subject-title">History of Physical Education</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED12209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED12209.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED12110</td>
											<td class="subject-title">Aerobics and Rhythmic Activities</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED12110" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED12110.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED12211</td>
											<td class="subject-title">Applications of Information Technology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED12211" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED12211.'"'; ?>></td>
										</tr>
									</table>
								</div>
							</div>
					</div>

				</div>

				<div class="row padding">
					<div class="col-md-6 col-sm-12 mx-auto margin">
							<div class="card ">
								<div class="card-body">
									<h5 class="p-2 mb-2 bg-dark text-white card-title text-center">2<sup>nd</sup> Year 1<sup>st</sup> Semester</h5>
		
									<table class="table">
										<tr>
											<th>Code</th>
											<th>Title</th>
											<th>Credits</th>
											<th>Grade</th>
										</tr>
										<tr>
											<td>PED21001</td>
											<td class="subject-title">General Fitness</td>
											<td>0</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED21001" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED21001.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED21102</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Athletics (Field Events -Throws)</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED21102" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED21102.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED21103</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Elle</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED21103" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED21103.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED21104</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Karate</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED21104" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED21104.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED21105</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Tennis</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED21105" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED21105.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED21206</td>
											<td class="subject-title">Practicum – Level I</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED21206" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED21206.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED21207</td>
											<td class="subject-title">Basic Statistics and Introduction to Statistical Software</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED21207" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED21207.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED21208</td>
											<td class="subject-title">Sport Biomechanics</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED21208" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED21208.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED21209</td>
											<td class="subject-title">Exercise Physiology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED21209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED21209.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED21210</td>
											<td class="subject-title">Education Psychology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED21210" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED21210.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED21211</td>
											<td class="subject-title">Safety and Injury Prevention</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED21211" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED21211.'"'; ?>></td>
										</tr>
                                        <tr>
        									<td><?php echo $e211; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e211">
        											<option value="PED211XX" selected hidden>Select The Elective Subject</option>
        											<option value="PED21112">German Language – Part 1</option>
        											<option value="PED21113">Spanish Language – Part 1</option>
        											<option value="PED21114">Chinese Language – Part 1</option>
        											<option value="PED211XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>1</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED211e1" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED211e1.'"'; ?>></td>
        								</tr>
									</table>
								</div>
							</div>
					</div>

					<div class="col-md-6 col-sm-12 mx-auto margin">
							<div class="card">
								<div class="card-body">
									<h5 class="p-2 mb-2 bg-dark text-white card-title text-center">2<sup>nd</sup> Year 2<sup>nd</sup> Semester</h5>
		
									<table class="table">
										<tr>
											<th>Code</th>
											<th>Title</th>
											<th>Credits</th>
											<th>Grade</th>
										</tr>
										<tr>
											<td>PED22001</td>
											<td class="subject-title">General Fitness</td>
											<td>0</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED22001" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED22001.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED22102</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Cricket</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED22102" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED22102.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED22103</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Rugby</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED22103" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED22103.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED22104</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Judo</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED22104" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED22104.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED22105</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Table Tennis</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED22105" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED22105.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED22106</td>
											<td class="subject-title">Comparative Physical Education</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED22106" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED22106.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED22207</td>
											<td class="subject-title">Practicum – Level II</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED22207" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED22207.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED22208</td>
											<td class="subject-title">Physical Education in Pre-school & Primary Schools</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED22208" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED22208.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED22209</td>
											<td class="subject-title">Sport Nutrition</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED22209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED22209.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED22110</td>
											<td class="subject-title">Dance</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED22110" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED22110.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED22311</td>
											<td class="subject-title">Theory and Methodology of Sports Training</td>
											<td>3</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED22311" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED22311.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED22212</td>
											<td class="subject-title">Statistics for Data Analysis</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED22212" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED22212.'"'; ?>></td>
										</tr>
                                        <tr>
        									<td><?php echo $e221; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e221">
        											<option value="PED221XX" selected hidden>Select The Elective Subject</option>
        											<option value="PED22113">German Language – Part 2</option>
        											<option value="PED22114">Spanish Language – Part 2</option>
        											<option value="PED22115">Chinese Language – Part 2</option>
        											<option value="PED221XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>1</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED221e1" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED221e1.'"'; ?>></td>
        								</tr>
									</table>
								</div>
							</div>
					</div>
				</div>

				<div class="row padding">
					<div class="col-md-6 col-sm-12 mx-auto margin">
							<div class="card">
								<div class="card-body">
									<h5 class="p-2 mb-2 bg-dark text-white card-title text-center">3<sup>rd</sup> Year 1<sup>st</sup> Semester</h5>
		
									<table class="table">
										<tr>
											<th>Code</th>
											<th>Title</th>
											<th>Credits</th>
											<th>Grade</th>
										</tr>
										<tr>
											<td>PED31001</td>
											<td class="subject-title">General Fitness</td>
											<td>0</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED31001" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED31001.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED31102</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Hockey</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED31102" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED31102.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED31103</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Baseball</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED31103" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED31103.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED31104</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Soccer</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED31104" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED31104.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED31105</td>
											<td class="subject-title">Movement Concept, Skill Analysis, Performance and Practices in Weight Lifting</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED31105" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED31105.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED31206</td>
											<td class="subject-title">Physical Education in Secondary & Tertiary Institutions</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED31206" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED31206.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED31207</td>
											<td class="subject-title">Practicum – Level III</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED31207" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED31207.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED31208</td>
											<td class="subject-title">Advanced Theory and Methodology of Sports Training</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED31208" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED31208.'"'; ?>></td>
										</tr><tr>
											<td>PED31209</td>
											<td class="subject-title"> Sport Psychology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED31209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED31209.'"'; ?>></td>
										</tr><tr>
											<td>PED31210</td>
											<td class="subject-title">Curriculum Perspective and Issues in Physical Education</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED31210" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED31210.'"'; ?>></td>
										</tr><tr>
											<td>PED31211</td>
											<td class="subject-title">Test, Measurement & Evaluation of Physical Activity</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED31211" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED31211.'"'; ?>></td>
										</tr>

									</table>
								</div>
							</div>
					</div>

					<div class="col-md-6 col-sm-12 mx-auto margin">
							<div class="card">
								<div class="card-body">
									<h5 class="p-2 mb-2 bg-dark text-white card-title text-center">3<sup>rd</sup> Year 2<sup>nd</sup> Semester</h5>
		
									<table class="table">
										<tr>
											<th>Code</th>
											<th>Title</th>
											<th>Credits</th>
											<th>Grade</th>
										</tr>
										<tr>
											<td>PED32001</td>
											<td class="subject-title">General Fitness</td>
											<td>0</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED32001" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED32001.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED32202</td>
											<td class="subject-title">Specialization of a Selected Sport – Part 1</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED32202" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED32202.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED32203</td>
											<td class="subject-title">Practicum – Level IV</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED32203" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED32203.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED32204</td>
											<td class="subject-title">Sociology of Physical Education</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED32204" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED32204.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED32205</td>
											<td class="subject-title">Sport and Education Law</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED32205" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED32205.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED32106</td>
											<td class="subject-title">Sport Facility Design</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED32106" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED32106.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED32207</td>
											<td class="subject-title">Management Process in Physical Education</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED32207" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED32207.'"'; ?>></td>
										</tr>
                                        <tr>
											<td>PED32208</td>
											<td class="subject-title">Research Methodology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED32208" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED32208.'"'; ?>></td>
										</tr>
                                        <tr>
        									<td><?php echo $e321; ?></td>
        									<td class="subject-title">
        										<select id='e32' class="form-control form-control-sm" name="e321">
        											<option value="PED32XXX" selected hidden>Select The Elective Subject</option>
        											<option value="PED32109">Sport Education Model & Game Sense Appro</option>
        											<option value="PED32210">Human Resource Management</option>
        											<option value="PED32211">Strength and Conditioning</option>
                                                    <option value="PED32112">Success in Sports</option>
                                                    <option value="PED32113">Guidance and Counseling</option>
        											<option value="PED32XXX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td id="c32"></td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED32xe1" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED32xe1.'"'; ?>></td>
        								</tr>
                                        <tr id="r32">
        									<td><?php echo $e322; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e322">
        											<option value="PED321XX" selected hidden>Select The Elective Subject</option>
        											<option value="PED32109">Sport Education Model & Game Sense Approach</option>
                                                    <option value="PED32112">Success in Sports</option>
                                                    <option value="PED32113">Guidance and Counseling</option>
        											<option value="PED321XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>1</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED321e2" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED321e2.'"'; ?>></td>
        								</tr>

									</table>
								</div>
							</div>
					</div>
				</div>

				<div class="row padding">
					<div class="col-md-6 col-sm-12 mx-auto margin">
							<div class="card ">
								<div class="card-body">
									<h5 class="p-2 mb-2 bg-dark text-white card-title text-center">4<sup>th</sup> Year 1<sup>st</sup> Semester</h5>
		
									<table class="table">
										<tr>
											<th>Code</th>
											<th>Title</th>
											<th>Credits</th>
											<th>Grade</th>
										</tr>
										<tr>
											<td>PED41201</td>
											<td class="subject-title">Specialization of a Selected Sport – Part 2</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED41201" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED41201.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED41202</td>
											<td class="subject-title">Health & Health Behavior</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED41202" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED41202.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED41203</td>
											<td class="subject-title">Outdoor Recreations and Leadership</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED41203" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED41203.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED41204</td>
											<td class="subject-title">Adaptive Physical Education</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED41204" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED41204.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED41105</td>
											<td class="subject-title">Science of Yoga and Relaxation</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED41105" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED41105.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED41206</td>
											<td class="subject-title">Community Service Project</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED41206" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED41206.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED41207</td>
											<td class="subject-title">Sport Therapy</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED41207" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED41207.'"'; ?>></td>
										</tr>
										<tr>
											<td>PED41108</td>
											<td class="subject-title">Professional Development</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED41108" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED41108.'"'; ?>></td>
										</tr>

										<tr>
        									<td><?php echo $e411; ?></td>
        									<td class="subject-title">
        										<select id='e41' class="form-control form-control-sm" name="e411">
        											<option value="PED41XXX" selected hidden>Select The Elective Subject</option>
        											<option value="PED41109">Reflective Practice in Physical Education</option>
        											<option value="PED41210">Long Term Athlete Development (LTAD)</option>
        											<option value="PED41111">Olympism</option>
                                                    <option value="PED41112">International Politics & Sports</option>
                                                    <option value="PED41113">Traditional Sports in Sri Lanka</option>
                                                    <option value="PED41114">Drugs and Sports</option>
                                                    <option value="PED41115">Drugs and Sports</option>
        											<option value="PED41XXX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td id="c41"></td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED41xe1" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED41xe1.'"'; ?>></td>
        								</tr>
                                        <tr id="r41">
        									<td><?php echo $e412; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e412">
        											<option value="PED411XX" selected hidden>Select The Elective Subject</option>
                                                    <option value="PED41109">Reflective Practice in Physical Education</option>
        											<option value="PED41111">Olympism</option>
                                                    <option value="PED41112">International Politics & Sports</option>
                                                    <option value="PED41113">Traditional Sports in Sri Lanka</option>
                                                    <option value="PED41114">Drugs and Sports</option>
                                                    <option value="PED41115">Drugs and Sports</option>
        											<option value="PED411XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>1</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED411e2" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED411e2.'"'; ?>></td>
        								</tr>

									</table>
								</div>
							</div>
					</div>

					<div class="col-md-6 col-sm-12 mx-auto margin">
							<div class="card">
								<div class="card-body">
									<h5 class="p-2 mb-2 bg-dark text-white card-title text-center">4<sup>th</sup> Year 2<sup>nd</sup> Semester</h5>
		
									<table class="table">
										<tr>
											<th>Code</th>
											<th>Title</th>
											<th>Credits</th>
											<th>Grade</th>
										</tr>
										<tr>
											<td>PED42801</td>
											<td class="subject-title">B.Sc. Research Project in Physical Education</td>
											<td>8</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="PED42801" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$PED42801.'"'; ?>></td>
										</tr>
										
									</table>
								</div>
							</div>
					</div>
				</div>

			</div>

			<div class="container padding text-center">
				<input id="0" class="btn btn-lg" type="submit" name="submit" value="Go">
				<a class="btn btn-back btn-lg" href="app.php">Back</a>
			</div>
		</form>
	</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){

            $('#e32').change(function(){
                var subject = $('#e32').val();

                if(subject === "PED32210" || subject === "PED32211"){
                    $("#c32").html("2");
                    $("#r32").hide();
                }else if(subject === "PED32109" || subject === "PED32112" || subject === "PED32113"){
                    $("#c32").html("1");
                    $("#r32").show();
                }else{
                    $("#c32").html("1");
                    $("#r32").show();
                }
            });

            $('#e41').change(function(){
                var subject = $('#e41').val();

                if(subject === "PED41210"){
                    $("#c41").html("2");
                    $("#r41").hide();
                }else if(subject === "PED41109" || subject === "PED41111" || subject === "PED41112" || subject === "PED41113" || subject === "PED41114" || subject === "PED41115"){
                    $("#c41").html("1");
                    $("#r41").show();
                }else{
                    $("#c41").html("1");
                    $("#r41").show();
                }
            });
            
        });
    
    </script>
	<script type="text/javascript" src="../js/functions.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>