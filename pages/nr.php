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
	$ESNRM11201 = null;
	$ESNRM11202 = null;
	$ESNRM11203 = null;
	$ESNRM11204 = null;
	$ESNRM11205 = null;
	$ESNRM11106 = null;
	$ESNRM11207 = null;
	$ESNRM11108 = null;
	$ESNRM11209 = null;

	//1,2 variables
	$ESNRM12201 = null;
	$ESNRM12202 = null;
	$ESNRM12203 = null;
	$ESNRM12204 = null;
	$ESNRM12205 = null;
	$ESNRM12206 = null;
	$ESNRM12107 = null;
	$ESNRM12208 = null;
	$ESNRM12209 = null;

	//2,1 variables
	$ESNRM21201 = null;
	$ESNRM21202 = null;
	$ESNRM21203 = null;
	$ESNRM21204 = null;
	$ESNRM21205 = null;
	$ESNRM21206 = null;
	$ESNRM21207 = null;
	$ESNRM21208 = null;
	$ESNRM21209 = null;

	//2,2 variables
	$ESNRM22101 = null;
	$ESNRM22102 = null;
	$ESNRM22203 = null;
	$ESNRM22104 = null;
	$ESNRM22205 = null;
	$ESNRM22106 = null;
	$ESNRM22207 = null;
	$ESNRM22108 = null;
	$ESNRM22209 = null;
	$ESNRM22210 = null;

	//3,1 variables
	$ESNRM31201 = null;
	$ESNRM31102 = null;
	$ESNRM31203 = null;
	$ESNRM31204 = null;
	$ESNRM31105 = null;
	$ESNRM31106 = null;
	$ESNRM31107 = null;
	$ESNRM31208 = null;
	$ESNRM31209 = null;
	$ESNRM31210 = null;
	$ESNRM31111 = null;
	$ESNRM31112 = null;

	//3,2 variables
	$ESNRM322e1 = null;
	$ESNRM322e2 = null;
	$ESNRM322e3 = null;
	$e321 = "ESNRM322XX";
	$e322 = "ESNRM322XX";
	$e323 = "ESNRM322XX";
	$ESNRM32201 = null;
	$ESNRM32202 = null;
	$ESNRM32203 = null;
	$ESNRM32204 = null;
	$ESNRM32105 = null;
	$ESNRM32206 = null;
	$ESNRM32207 = null;
	$ESNRM32208 = null;
	$ESNRM32209 = null;
	$ESNRM32110 = null;
	$ESNRM32410 = null;

	//4,1 variables
	$ESNRM41201 = null;
	$ESNRM41102 = null;
	$ESNRM41303 = null;
	$ESNRM41204 = null;
	$ESNRM41105 = null;
	$ESNRM41206 = null;
	$ESNRM412e1 = null;
	$ESNRM412e2 = null;
	$ESNRM412e3 = null;
	$e411 = "ESNRM412XX";
	$e412 = "ESNRM412XX";
	$e413 = "ESNRM412XX";

	//4,2 variables
	$ESNRM42801 = null;

	//when the submit
	if(isset($_POST['submit'])){

		// if(!isset($_POST['e321']) || !isset($_POST['e322']) || !isset($_POST['e323'])){
		// 	$errors[] = 'Please select your elective subjects or NOT YET! in 3rd year 2nd semester';
		// }

		// if(!isset($_POST['e411']) || !isset($_POST['e412']) || !isset($_POST['e413'])){
		// 	$errors[] = 'Please select your elective subjects or NOT YET! in 4th year 1st semester';
		// }

		// if(!isset($_POST['degree'])){
		// 	$errors[] = 'Please select whether you are doing a general or special degree';
		// }

		if(empty($errors)){

			//1,1 grades

			$ESNRM11201 = grade($_POST['ESNRM11201'])*2;
			$ESNRM11202 = grade($_POST['ESNRM11202'])*2;
			$ESNRM11203 = grade($_POST['ESNRM11203'])*2;
			$ESNRM11204 = grade($_POST['ESNRM11204'])*2;
			$ESNRM11205 = grade($_POST['ESNRM11205'])*2;
			$ESNRM11106 = grade($_POST['ESNRM11106'])*1;
			$ESNRM11207 = grade($_POST['ESNRM11207'])*2;
			$ESNRM11108 = grade($_POST['ESNRM11108'])*1;
			$ESNRM11209 = grade($_POST['ESNRM11209'])*2;

			//1,2 grades
			$ESNRM12201 = grade($_POST['ESNRM12201'])*2;
			$ESNRM12202 = grade($_POST['ESNRM12202'])*2;
			$ESNRM12203 = grade($_POST['ESNRM12203'])*2;
			$ESNRM12204 = grade($_POST['ESNRM12204'])*2;
			$ESNRM12205 = grade($_POST['ESNRM12205'])*2;
			$ESNRM12206 = grade($_POST['ESNRM12206'])*2;
			$ESNRM12107 = grade($_POST['ESNRM12107'])*1;
			$ESNRM12208 = grade($_POST['ESNRM12208'])*2;
			$ESNRM12209 = grade($_POST['ESNRM12209'])*2;

			//total credits erned in first year
			$c1 = $ESNRM11201+$ESNRM11202+$ESNRM11203+$ESNRM11204+$ESNRM11205+$ESNRM11106+$ESNRM11207+$ESNRM11108+$ESNRM11209+$ESNRM12201+$ESNRM12202+$ESNRM12203+$ESNRM12204+$ESNRM12205+$ESNRM12206+$ESNRM12107+$ESNRM12208+$ESNRM12209;

			//gpa for the first year
			$gpa1 = $c1/33;

			//2,1 grades
			$ESNRM21201 = grade($_POST['ESNRM21201'])*2;
			$ESNRM21202 = grade($_POST['ESNRM21202'])*2;
			$ESNRM21203 = grade($_POST['ESNRM21203'])*2;
			$ESNRM21204 = grade($_POST['ESNRM21204'])*2;
			$ESNRM21205 = grade($_POST['ESNRM21205'])*2;
			$ESNRM21206 = grade($_POST['ESNRM21206'])*2;
			$ESNRM21207 = grade($_POST['ESNRM21207'])*2;
			$ESNRM21208 = grade($_POST['ESNRM21208'])*2;
			$ESNRM21209 = grade($_POST['ESNRM21209'])*2;

			//2,2 grades
			$ESNRM22101 = grade($_POST['ESNRM22101'])*1;
			$ESNRM22102 = grade($_POST['ESNRM22102'])*1;
			$ESNRM22203 = grade($_POST['ESNRM22203'])*2;
			$ESNRM22104 = grade($_POST['ESNRM22104'])*1;
			$ESNRM22205 = grade($_POST['ESNRM22205'])*2;
			$ESNRM22106 = grade($_POST['ESNRM22106'])*1;
			$ESNRM22207 = grade($_POST['ESNRM22207'])*2;
			$ESNRM22108 = grade($_POST['ESNRM22108'])*1;
			$ESNRM22209 = grade($_POST['ESNRM22209'])*2;
			$ESNRM22210 = grade($_POST['ESNRM22210'])*2;

			//total credits erned in second year
			$c2 = $ESNRM21201+$ESNRM21202+$ESNRM21203+$ESNRM21204+$ESNRM21205+$ESNRM21206+$ESNRM21207+$ESNRM21208+$ESNRM21209+$ESNRM22101+$ESNRM22102+$ESNRM22203+$ESNRM22104+$ESNRM22205+$ESNRM22106+$ESNRM22207+$ESNRM22108+$ESNRM22209+$ESNRM22210;

			//gpa for the second year
			$gpa2 = $c2/33;

			//3,1 grades
			$ESNRM31201 = grade($_POST['ESNRM31201'])*2;
			$ESNRM31102 = grade($_POST['ESNRM31102'])*1;
			$ESNRM31203 = grade($_POST['ESNRM31203'])*2;
			$ESNRM31204 = grade($_POST['ESNRM31204'])*2;
			$ESNRM31105 = grade($_POST['ESNRM31105'])*1;
			$ESNRM31106 = grade($_POST['ESNRM31106'])*1;
			$ESNRM31107 = grade($_POST['ESNRM31107'])*1;
			$ESNRM31208 = grade($_POST['ESNRM31208'])*2;
			$ESNRM31209 = grade($_POST['ESNRM31209'])*2;
			$ESNRM31210 = grade($_POST['ESNRM31210'])*2; //general subject
			$ESNRM31111 = grade($_POST['ESNRM31111'])*1;
			$ESNRM31112 = grade($_POST['ESNRM31112'])*1;

			//3,2 grades
			$ESNRM322e1 = grade($_POST['ESNRM322e1'])*2; //general subject
			$ESNRM322e2 = grade($_POST['ESNRM322e2'])*2; //general subject
			$ESNRM322e3 = grade($_POST['ESNRM322e3'])*2; //general subject
			$e321 = $_POST['e321']; //general subject
			$e322 = $_POST['e322']; //general subject
			$e323 = $_POST['e323']; //general subject
			$ESNRM32201 = grade($_POST['ESNRM32201'])*2;
			$ESNRM32202 = grade($_POST['ESNRM32202'])*2;
			$ESNRM32203 = grade($_POST['ESNRM32203'])*2;
			$ESNRM32204 = grade($_POST['ESNRM32204'])*2;
			$ESNRM32105 = grade($_POST['ESNRM32105'])*1;
			$ESNRM32206 = grade($_POST['ESNRM32206'])*2;
			$ESNRM32207 = grade($_POST['ESNRM32207'])*2;
			$ESNRM32208 = grade($_POST['ESNRM32208'])*2;
			$ESNRM32209 = grade($_POST['ESNRM32209'])*2;
			$ESNRM32110 = grade($_POST['ESNRM32110'])*1;
			$ESNRM32410 = grade($_POST['ESNRM32410'])*4; //general subject

			
			if($_POST['degree'] == 'general'){
				//total credits erned in third year
				$c3 = $ESNRM31201+$ESNRM31102+$ESNRM31203+$ESNRM31204+$ESNRM31105+$ESNRM31106+$ESNRM31107+$ESNRM31208+$ESNRM31209+$ESNRM31210+$ESNRM31111+$ESNRM31112+$ESNRM322e1+$ESNRM322e2+$ESNRM322e3+$ESNRM32410;

				//gpa for the third year
				$gpa3 = $c3/28;

			}else if($_POST['degree'] == 'special'){
				//total credits erned in third year
				$c3 = $ESNRM31201+$ESNRM31102+$ESNRM31203+$ESNRM31204+$ESNRM31105+$ESNRM31106+$ESNRM31107+$ESNRM31208+$ESNRM31209+$ESNRM31111+$ESNRM31112+$ESNRM32201+$ESNRM32202+$ESNRM32203+$ESNRM32204+$ESNRM32105+$ESNRM32206+$ESNRM32207+$ESNRM32208+$ESNRM32209+$ESNRM32110;

				//gpa for the third year
				$gpa3 = $c3/34;

			}else{

			}

			//4,1 grades
			$ESNRM41201 = grade($_POST['ESNRM41201'])*2;
			$ESNRM41102 = grade($_POST['ESNRM41102'])*1;
			$ESNRM41303 = grade($_POST['ESNRM41303'])*3;
			$ESNRM41204 = grade($_POST['ESNRM41204'])*2;
			$ESNRM41105 = grade($_POST['ESNRM41105'])*1;
			$ESNRM41206 = grade($_POST['ESNRM41206'])*2;
			$ESNRM412e1 = grade($_POST['ESNRM412e1'])*2;
			$ESNRM412e2 = grade($_POST['ESNRM412e2'])*2;
			$ESNRM412e3 = grade($_POST['ESNRM412e3'])*2;
			$e411 = $_POST['e411'];
			$e412 = $_POST['e412'];
			$e413 = $_POST['e413'];

			//4,2 grades
			$ESNRM42801 = grade($_POST['ESNRM42801'])*8;

			if($_POST['degree'] == 'special'){
				//total credits erned in forth year
				$c4 = $ESNRM41201+$ESNRM41102+$ESNRM41303+$ESNRM41204+$ESNRM41105+$ESNRM41206+$ESNRM412e1+$ESNRM412e2+$ESNRM412e3+$ESNRM42801;

				//gpa for the forth year
				$gpa4 = $c4/25;
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

	<title>NR | Applied Sciences</title>
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
		<form action="nr.php" method="post">
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
											<td>ESNRM11201</td>
											<td class="subject-title">Introduction to Natural Resources</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM11201" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM11201.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM11202</td>
											<td class="subject-title">Biology I: Fundamentals of Cellular and Organismic Biology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM11202" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM11202.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM11203</td>
											<td class="subject-title">Biology II: Fundamentals of Evolution, Systematics and Diversity of Life</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM11203" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM11203.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM11204</td>
											<td class="subject-title">General Chemistry</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM11204" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM11204.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM11205</td>
											<td class="subject-title">Fundamentals of Organic Chemistry</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM11205" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM11205.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM11106</td>
											<td class="subject-title">Elementary Chemistry Laboratory I</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM11106" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM11106.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM11207</td>
											<td class="subject-title">Computer Fundamentals</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM11207" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM11207.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM11108</td>
											<td class="subject-title">Computer Practical</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM11108" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM11108.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM11209</td>
											<td class="subject-title">Mathematics for Biological Sciences</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM11209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM11209.'"'; ?>></td>
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
											<td>ESNRM12201</td>
											<td class="subject-title">Introduction to Environmental Sciences</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM12201" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM12201.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM12202</td>
											<td class="subject-title">Earth Processes</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM12202" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM12202.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM12203</td>
											<td class="subject-title">Introduction to Hydrology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM12203" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM12203.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM12204</td>
											<td class="subject-title">Concepts of Ecology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM12204" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM12204.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM12205</td>
											<td class="subject-title">Fundamentals of Physical Chemistry</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM12205" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM12205.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM12206</td>
											<td class="subject-title">Fundamentals of Analytical Chemistry</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM12206" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM12206.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM12107</td>
											<td class="subject-title">Elementary Chemistry Laboratory II</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM12107" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM12107.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM12208</td>
											<td class="subject-title">Graphics and Web Design</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM12208" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM12208.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM12209</td>
											<td class="subject-title">Fundamentals of Statistics</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM12209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM12209.'"'; ?>></td>
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
											<td>ESNRM21201</td>
											<td class="subject-title">Limnology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM21201" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM21201.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM21202</td>
											<td class="subject-title">Microbiology for Natural Resource Studies</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM21202" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM21202.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM21203</td>
											<td class="subject-title">Biotechnology and Biosafety</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM21203" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM21203.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM21204</td>
											<td class="subject-title">Mineralogy and Petrology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM21204" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM21204.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM21205</td>
											<td class="subject-title">Biodiversity</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM21205" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM21205.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM21206</td>
											<td class="subject-title">Basic Physics for Natural Resource studies</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM21206" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM21206.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM21207</td>
											<td class="subject-title">Introduction to Soil Science</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM21207" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM21207.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM21208</td>
											<td class="subject-title">Management Process</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM21208" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM21208.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM21209</td>
											<td class="subject-title">Advanced Statistics I</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM21209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM21209.'"'; ?>></td>
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
											<td>ESNRM22101</td>
											<td class="subject-title">Management of Information Systems</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM22101" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM22101.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM22102</td>
											<td class="subject-title">Environmental Toxicology</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM22102" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM22102.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM22203</td>
											<td class="subject-title">Remote Sensing and Geographic Information Systems</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM22203" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM22203.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM22104</td>
											<td class="subject-title">Practical in Remote Sensing and Geographic Information Systems</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM22104" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM22104.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM22205</td>
											<td class="subject-title">Introduction to Economics</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM22205" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM22205.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM22106</td>
											<td class="subject-title">Geomorphology and Geology of Sri Lanka</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM22106" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM22106.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM22207</td>
											<td class="subject-title">Soil Degradation and Management</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM22207" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM22207.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM22108</td>
											<td class="subject-title">Earth Science Practical</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM22108" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM22108.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM22209</td>
											<td class="subject-title">Advanced Statistics II</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM22209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM22209.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM22210</td>
											<td class="subject-title">Analytical Techniques for Environmental Sciences and Natural Resources</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM22210" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM22210.'"'; ?>></td>
										</tr>
									</table>
								</div>
							</div>
					</div>
				</div>

				<div class="container-fluid">
					<div class="row padding">
						<div class="col-md-4 col-sm-8 col-xs-10 mx-auto">
							<div class="card">
								<div class="card-body text-center">
									<div class="topic">
										<strong>My</strong>
									</div>
									<h6>Degree is a</h6>
									<div class="container">
										<select class="form-control main-select" name="degree" id="degree" onchange="">
											<option selected disabled hidden>Select whether general or special</option>
											<option value="general">3 years GENERAL degree</option>
											<option value="special">4 years SPECIAL degree</option>
										</select>
									</div>
									<?php
 										// Display errors
 										if(isset($errors) && !empty($errors)){
 											echo '<span class="text-danger">'.$errors[0].'</span>';
 			 							}
   									?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="general special row padding">
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
											<td>ESNRM31201</td>
											<td class="subject-title">Environmental and Natural Resource Economics</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM31201" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM31201.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM31102</td>
											<td class="subject-title">Legal Framework for Environmental Management</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM31102" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM31102.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM31203</td>
											<td class="subject-title">Statistical Application in Natural Resource Studies</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM31203" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM31203.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM31204</td>
											<td class="subject-title">Industrial Chemistry and Technology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM31204" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM31204.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM31105</td>
											<td class="subject-title">Industrial Minerals</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM31105" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM31105.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM31106</td>
											<td class="subject-title">Practical in Hydrology and Soil Science</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM31106" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM31106.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM31107</td>
											<td class="subject-title">Field Techniques in Earth Science</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM31107" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM31107.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM31208</td>
											<td class="subject-title">Waste Management</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM31208" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM31208.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM31209</td>
											<td class="subject-title">Field Techniques in Ecology and Biodiversity</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM31209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM31209.'"'; ?>></td>
										</tr>
										<tr class="general">
											<td>ESNRM31210</td>
											<td class="subject-title">Research Methodology and Scientific Communication</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM31210" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM31210.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM31111</td>
											<td class="subject-title">Basic Methods of Surveying Sciences</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM31111" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM31111.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM31112</td>
											<td class="subject-title">Practical in Surveying</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM31112" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM31112.'"'; ?>></td>
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

										<tr class="general">
        									<td><?php echo $e321; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e321">
        											<option value="ESNRM322XX" selected hidden>Select The Optional Subject</option>
        											<option value="ESNRM32201">Cleaner Production and Green Productivity</option>
        											<option value="ESNRM32202">Energy Resource Management</option>
        											<option value="ESNRM32203">Aquatic Resource Management</option>
        											<option value="ESNRM32204">Coastal and Marine Resource Management</option>
        											<option value="ESNRM32205">Biogeography</option>
        											<option value="ESNRM32206">Tools for Environmental Management</option>
        											<option value="ESNRM32207">Study and Management of Natural Hazards</option>
        											<option value="ESNRM32208">Biodiversity Conservation and Management</option>
        											<option value="ESNRM32209">Human Resource Management</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM322e1" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM322e1.'"'; ?>>
        									</td>
        								</tr>
        								<tr class="general">
        									<td><?php echo $e322; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e322">
        											<option value="ESNRM322XX" selected hidden>Select The Optional Subject</option>
        											<option value="ESNRM32201">Cleaner Production and Green Productivity</option>
        											<option value="ESNRM32202">Energy Resource Management</option>
        											<option value="ESNRM32203">Aquatic Resource Management</option>
        											<option value="ESNRM32204">Coastal and Marine Resource Management</option>
        											<option value="ESNRM32205">Biogeography</option>
        											<option value="ESNRM32206">Tools for Environmental Management</option>
        											<option value="ESNRM32207">Study and Management of Natural Hazards</option>
        											<option value="ESNRM32208">Biodiversity Conservation and Management</option>
        											<option value="ESNRM32209">Human Resource Management</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM322e2" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM322e2.'"'; ?>>
        									</td>
        								</tr>
        								<tr class="general">
        									<td><?php echo $e323; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e323">
        											<option value="ESNRM322XX" selected hidden>Select The Optional Subject</option>
        											<option value="ESNRM32201">Cleaner Production and Green Productivity</option>
        											<option value="ESNRM32202">Energy Resource Management</option>
        											<option value="ESNRM32203">Aquatic Resource Management</option>
        											<option value="ESNRM32204">Coastal and Marine Resource Management</option>
        											<option value="ESNRM32205">Biogeography</option>
        											<option value="ESNRM32206">Tools for Environmental Management</option>
        											<option value="ESNRM32207">Study and Management of Natural Hazards</option>
        											<option value="ESNRM32208">Biodiversity Conservation and Management</option>
        											<option value="ESNRM32209">Human Resource Management</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM322e3" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM322e3.'"'; ?>>
        									</td>
        								</tr>

										<tr class="special">
											<td>ESNRM32201</td>
											<td class="subject-title">Cleaner Production and Green Productivity</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM32201" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM32201.'"'; ?>></td>
										</tr>
										<tr class="special">
											<td>ESNRM32202</td>
											<td class="subject-title">Energy Resource Management</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM32202" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM32202.'"'; ?>></td>
										</tr>
										<tr class="special">
											<td>ESNRM32203</td>
											<td class="subject-title">Aquatic Resource Management</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM32203" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM32203.'"'; ?>></td>
										</tr>
										<tr class="special">
											<td>ESNRM32204</td>
											<td class="subject-title">Coastal and Marine Resource Management</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM32204" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM32204.'"'; ?>></td>
										</tr>
										<tr class="special">
											<td>ESNRM32105</td>
											<td class="subject-title">Beverage Processing Technology</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM32105" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM32105.'"'; ?>></td>
										</tr>
										<tr class="special">
											<td>ESNRM32206</td>
											<td class="subject-title">Tools for Environmental Management</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM32206" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM32206.'"'; ?>></td>
										</tr>
										<tr class="special">
											<td>ESNRM32207</td>
											<td class="subject-title">Study and Management of Natural Hazards</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM32207" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM32207.'"'; ?>></td>
										</tr>
										<tr class="special">
											<td>ESNRM32208</td>
											<td class="subject-title">Biodiversity Conservation and Management</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM32208" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM32208.'"'; ?>></td>
										</tr>
										<tr class="special">
											<td>ESNRM32209</td>
											<td class="subject-title">Human Resource Management</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM32209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM32209.'"'; ?>></td>
										</tr>
										<tr class="special">
											<td>ESNRM32110</td>
											<td class="subject-title">Community Outreach Program /Mini Project</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM32110" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM32110.'"'; ?>></td>
										</tr>
										<tr class="general">
											<td>ESNRM32410</td>
											<td class="subject-title">B.Sc. Thesis in Environmental Sciences and Natural Resource Management</td>
											<td>4</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM32410" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM32410.'"'; ?>></td>
										</tr>
										
									</table>
								</div>
							</div>
					</div>
				</div>

				<div class="special row padding">
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
											<td>ESNRM41201</td>
											<td class="subject-title">Research Methodology and Scientific Communication</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM41201" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM41201.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM41102</td>
											<td class="subject-title">Environmental Quality Management</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM41102" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM41102.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM41303</td>
											<td class="subject-title">Forestry</td>
											<td>3</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM41303" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM41303.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM41204</td>
											<td class="subject-title">Environmental Governance</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM41204" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM41204.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM41105</td>
											<td class="subject-title">Undergraduate Seminar Module in Environmental Sciences and Natural Resource Management</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM41105" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM41105.'"'; ?>></td>
										</tr>
										<tr>
											<td>ESNRM41206</td>
											<td class="subject-title">Environmental Geochemistry</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM41206" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM41206.'"'; ?>></td>
										</tr>

										<tr>
        									<td><?php echo $e411; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e411">
        											<option value="ESNRM412XX" selected hidden>Select The Optional Subject</option>
        											<option value="ESNRM41207">Lichenology</option>
        											<option value="ESNRM41208">Mineral Exploration</option>
        											<option value="ESNRM41209">Gemmology</option>
        											<option value="ESNRM41210">Ground Water Exploration</option>
        											<option value="ESNRM41211">Applied Hydrology</option>
        											<option value="ESNRM41212">Climatology and Meteorology</option>
        											<option value="ESNRM41413">Protected Area Management</option>
        											<option value="ESNRM41214">Eco Tourism</option>
        											<option value="ESNRM41215">Oil Exploration</option>
        											<option value="ESNRM41416">Biogeography and Conservation Planning</option>
        											<option value="ESNRM41217">Forestry for Rural Development</option>
        											<option value="ESNRM41218">Environment and Society</option>
        											<option value="ESNRM412XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM412e1" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM412e1.'"'; ?>>
        									</td>
        								</tr>
        								<tr>
        									<td><?php echo $e412; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e412">
        											<option value="ESNRM412XX" selected hidden>Select The Optional Subject</option>
        											<option value="ESNRM41207">Lichenology</option>
        											<option value="ESNRM41208">Mineral Exploration</option>
        											<option value="ESNRM41209">Gemmology</option>
        											<option value="ESNRM41210">Ground Water Exploration</option>
        											<option value="ESNRM41211">Applied Hydrology</option>
        											<option value="ESNRM41212">Climatology and Meteorology</option>
        											<option value="ESNRM41213">Protected Area Management</option>
        											<option value="ESNRM41214">Eco Tourism</option>
        											<option value="ESNRM41215">Oil Exploration</option>
        											<option value="ESNRM41216">Biogeography and Conservation Planning</option>
        											<option value="ESNRM41217">Forestry for Rural Development</option>
        											<option value="ESNRM41218">Environment and Society</option>
        											<option value="ESNRM412XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM412e2" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM412e2.'"'; ?>>
        									</td>
        								</tr>
        								<tr>
        									<td><?php echo $e413; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e413">
        											<option value="ESNRM412XX" selected hidden>Select The Optional Subject</option>
        											<option value="ESNRM41207">Lichenology</option>
        											<option value="ESNRM41208">Mineral Exploration</option>
        											<option value="ESNRM41209">Gemmology</option>
        											<option value="ESNRM41210">Ground Water Exploration</option>
        											<option value="ESNRM41211">Applied Hydrology</option>
        											<option value="ESNRM41212">Climatology and Meteorology</option>
        											<option value="ESNRM41213">Protected Area Management</option>
        											<option value="ESNRM41214">Eco Tourism</option>
        											<option value="ESNRM41215">Oil Exploration</option>
        											<option value="ESNRM41216">Biogeography and Conservation Planning</option>
        											<option value="ESNRM41217">Forestry for Rural Development</option>
        											<option value="ESNRM41218">Environment and Society</option>
        											<option value="ESNRM412XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM412e3" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM412e3.'"'; ?>>
        									</td>
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
											<td>ESNRM42801</td>
											<td class="subject-title">B.Sc. Thesis in Environmental Sciences and Natural Resource Management and Presentation</td>
											<td>8</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="ESNRM42801" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$ESNRM42801.'"'; ?>></td>
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
	<script type="text/javascript">

		$(document).ready(function(){

			$('.general').hide();
			$('.special').hide();

			$('#degree').change(function(){

				var val = $('#degree').val();

				if(val === 'general'){
					
					$('.special').hide();
					$('.general').show();
				}else if(val === 'special'){
					$('.general').hide();
					$('.special').show();
				}else {
					$('.general').hide();
					$('.special').hide();
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