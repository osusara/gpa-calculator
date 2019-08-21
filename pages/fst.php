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
	$FST11201 = null;
	$FST11202 = null;
	$FST11103 = null;
	$FST11204 = null;
	$FST11205 = null;
	$FST11106 = null;
	$FST11207 = null;
	$FST11108 = null;
	$FST11209 = null;
	$FST11210 = null;

	//1,2 variables
	$FST12201 = null;
	$FST12202 = null;
	$FST12203 = null;
	$FST12204 = null;
	$FST12105 = null;
	$FST12206 = null;
	$FST12107 = null;
	$FST12208 = null;
	$FST12209 = null;

	//2,1 variables
	$FST21201 = null;
	$FST21202 = null;
	$FST21103 = null;
	$FST21204 = null;
	$FST21105 = null;
	$FST21206 = null;
	$FST21107 = null;
	$FST21208 = null;
	$FST21209 = null;
	$FST21210 = null;

	//2,2 variables
	$FST22201 = null;
	$FST22102 = null;
	$FST22203 = null;
	$FST22104 = null;
	$FST22205 = null;
	$FST22206 = null;
	$FST22107 = null;
	$FST22108 = null;
	$FST22209 = null;

	//3,1 variables
	$FST31201 = null;
	$FST31102 = null;
	$FST31203 = null;
	$FST31204 = null;
	$FST31205 = null;
	$FST31106 = null;
	$FST31107 = null;
	$FST31208 = null;
	$FST31209 = null;
	$FST31210 = null;

	//3,2 variables
	$FST32201 = null;
	$FST32202 = null;
	$FST32103 = null;
	$FST32204 = null;
	$FST32105 = null;
	$FST32106 = null;
	$FST32107 = null;
	$FST32108 = null;
	$FST32209 = null;
	$FST32210 = null;
	$FST32111 = null;

	//4,1 variables
	$FST41201 = null;
	$FST41102 = null;
	$FST41103 = null;
	$FST41104 = null;
	$FST41105 = null;
	$FST41106 = null;
	$FST41107 = null;
	$FST41208 = null;
	$FST41109 = null;
	$FST41210 = null;
	$FST41111 = null;
	$FST411e1 = null;
	$FST412e2 = null;
	$e411 = "FST411XX";
	$e412 = "FST412XX";

	//4,2 variables
	$FST42801 = null;

	//when the submit
	if(isset($_POST['submit'])){

		if(!isset($_POST['e411']) || !isset($_POST['e412'])){
			$errors[] = 'Please select your elective subjects or NOT YET! in 4th year 1st semester';
		}

		if(empty($errors)){

			//1,1 grades
			$FST11201 = grade($_POST['FST11201'])*2;
			$FST11202 = grade($_POST['FST11202'])*2;
			$FST11103 = grade($_POST['FST11103'])*1;
			$FST11204 = grade($_POST['FST11204'])*2;
			$FST11205 = grade($_POST['FST11205'])*2;
			$FST11106 = grade($_POST['FST11106'])*1;
			$FST11207 = grade($_POST['FST11207'])*2;
			$FST11108 = grade($_POST['FST11108'])*1;
			$FST11209 = grade($_POST['FST11209'])*2;
			$FST11210 = grade($_POST['FST11210'])*2;

			//1,2 grades
			$FST12201 = grade($_POST['FST12201'])*2;
			$FST12202 = grade($_POST['FST12202'])*2;
			$FST12203 = grade($_POST['FST12203'])*2;
			$FST12204 = grade($_POST['FST12204'])*2;
			$FST12105 = grade($_POST['FST12105'])*1;
			$FST12206 = grade($_POST['FST12206'])*2;
			$FST12107 = grade($_POST['FST12107'])*1;
			$FST12208 = grade($_POST['FST12208'])*2;
			$FST12209 = grade($_POST['FST12209'])*2;

			//total credits erned in first year
			$c1 = $FST11201+$FST11202+$FST11103+$FST11204+$FST11205+$FST11106+$FST11207+$FST11108+$FST11209+$FST11210+$FST12201+$FST12202+$FST12203+$FST12204+$FST12105+$FST12206+$FST12107+$FST12208+$FST12209;

			//gpa for the first year
			$gpa1 = $c1/33;

			//2,1 grades
			$FST21201 = grade($_POST['FST21201'])*2;
			$FST21202 = grade($_POST['FST21202'])*2;
			$FST21103 = grade($_POST['FST21103'])*1;
			$FST21204 = grade($_POST['FST21204'])*2;
			$FST21105 = grade($_POST['FST21105'])*1;
			$FST21206 = grade($_POST['FST21206'])*2;
			$FST21107 = grade($_POST['FST21107'])*1;
			$FST21208 = grade($_POST['FST21208'])*2;
			$FST21209 = grade($_POST['FST21209'])*2;
			$FST21210 = grade($_POST['FST21210'])*2;

			//2,2 grades
			$FST22201 = grade($_POST['FST22201'])*2;
			$FST22102 = grade($_POST['FST22102'])*1;
			$FST22203 = grade($_POST['FST22203'])*2;
			$FST22104 = grade($_POST['FST22104'])*1;
			$FST22205 = grade($_POST['FST22205'])*2;
			$FST22206 = grade($_POST['FST22206'])*2;
			$FST22107 = grade($_POST['FST22107'])*1;
			$FST22108 = grade($_POST['FST22108'])*1;
			$FST22209 = grade($_POST['FST22209'])*2;

			//total credits erned in second year
			$c2 = $FST21201+$FST21202+$FST21103+$FST21204+$FST21105+$FST21206+$FST21107+$FST21208+$FST21209+$FST21210+$FST22201+$FST22102+$FST22203+$FST22104+$FST22205+$FST22206+$FST22107+$FST22108+$FST22209;

			//gpa for the second year
			$gpa2 = $c2/31;

			//3,1 grades
			$FST31201 = grade($_POST['FST31201'])*2;
			$FST31102 = grade($_POST['FST31102'])*1;
			$FST31203 = grade($_POST['FST31203'])*2;
			$FST31204 = grade($_POST['FST31204'])*2;
			$FST31205 = grade($_POST['FST31205'])*2;
			$FST31106 = grade($_POST['FST31106'])*1;
			$FST31107 = grade($_POST['FST31107'])*1;
			$FST31208 = grade($_POST['FST31208'])*2;
			$FST31209 = grade($_POST['FST31209'])*2;
			$FST31210 = grade($_POST['FST31210'])*2;

			//3,2 grades
			$FST32201 = grade($_POST['FST32201'])*2;
			$FST32202 = grade($_POST['FST32202'])*2;
			$FST32103 = grade($_POST['FST32103'])*1;
			$FST32204 = grade($_POST['FST32204'])*2;
			$FST32105 = grade($_POST['FST32105'])*1;
			$FST32106 = grade($_POST['FST32106'])*1;
			$FST32107 = grade($_POST['FST32107'])*1;
			$FST32108 = grade($_POST['FST32108'])*1;
			$FST32209 = grade($_POST['FST32209'])*2;
			$FST32210 = grade($_POST['FST32210'])*2;
			$FST32111 = grade($_POST['FST32111'])*1;

			//total credits erned in third year
			$c3 = $FST31201+$FST31102+$FST31203+$FST31204+$FST31205+$FST31106+$FST31107+$FST31208+$FST31209+$FST31210+$FST32201+$FST32202+$FST32103+$FST32204+$FST32105+$FST32106+$FST32107+$FST32108+$FST32209+$FST32210+$FST32111;

			//gpa for the third year
			$gpa3 = $c3/33;

			//4,1 grades
			$FST41201 = grade($_POST['FST41201'])*2;
			$FST41102 = grade($_POST['FST41102'])*1;
			$FST41103 = grade($_POST['FST41103'])*1;
			$FST41104 = grade($_POST['FST41104'])*1;
			$FST41105 = grade($_POST['FST41105'])*1;
			$FST41106 = grade($_POST['FST41106'])*1;
			$FST41107 = grade($_POST['FST41107'])*1;
			$FST41208 = grade($_POST['FST41208'])*2;
			$FST41109 = grade($_POST['FST41109'])*1;
			$FST41210 = grade($_POST['FST41210'])*2;
			$FST41111 = grade($_POST['FST41111'])*1;
			$FST411e1 = grade($_POST['FST411e1'])*1;
			$FST412e2 = grade($_POST['FST412e2'])*2;

			$e411 = $_POST['e411'];
			$e412 = $_POST['e412'];

			//4,2 grades
			$FST42801 = grade($_POST['FST42801'])*8;

			//total credits erned in forth year
			$c4 = $FST41201+$FST41102+$FST41103+$FST41104+$FST41105+$FST41106+$FST41107+$FST41208+$FST41109+$FST41210+$FST41111+$FST411e1+$FST412e2+$FST42801;

			//gpa for the forth year
			$gpa4 = $c4/25;


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

	<title>FST | Applied Sciences</title>
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
		<form action="fst.php" method="post">
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
											<td>FST11201</td>
											<td class="subject-title">Introduction to Food Science and Technology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST11201" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST11201.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST11202</td>
											<td class="subject-title">Food Biology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST11202" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST11202.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST11103</td>
											<td class="subject-title">Food Biology Practical</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST11103" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST11103.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST11204</td>
											<td class="subject-title">General Chemistry</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST11204" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST11204.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST11205</td>
											<td class="subject-title">Fundamentals of Organic Chemistry</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST11205" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST11205.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST11106</td>
											<td class="subject-title">Elementary Chemistry Laboratory I</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST11106" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST11106.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST11207</td>
											<td class="subject-title">Computer Fundamentals</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST11207" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST11207.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST11108</td>
											<td class="subject-title">Computer Practical</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST11108" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST11108.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST11209</td>
											<td class="subject-title">Mathematics for Food Science and Technology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST11209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST11209.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST11210</td>
											<td class="subject-title">Production of Agricultural Raw Materials for better Food Quality</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST11210" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST11210.'"'; ?>></td>
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
											<td>FST12201</td>
											<td class="subject-title">Fundamentals of Microbiology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST12201" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST12201.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST12202</td>
											<td class="subject-title">Biochemistry I</td>
											<td>3</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST12202" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST12202.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST12203</td>
											<td class="subject-title">Postharvest Technology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST12203" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST12203.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST12204</td>
											<td class="subject-title">Postharvest Pest and Disease Control</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST12204" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST12204.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST12105</td>
											<td class="subject-title">Postharvest Handling of Food Sources Practical</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST12105" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST12105.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST12206</td>
											<td class="subject-title">Fundamentals of Analytical Chemistry</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST12206" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST12206.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST12107</td>
											<td class="subject-title">Elementary Chemistry Laboratory II</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST12107" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST12107.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST12208</td>
											<td class="subject-title">Graphics and Web Design</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST12208" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST12208.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST12209</td>
											<td class="subject-title">Fundamentals of Statistics</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST12209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST12209.'"'; ?>></td>
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
											<td>FST21201</td>
											<td class="subject-title">Biochemistry II</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST21201" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST21201.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST21202</td>
											<td class="subject-title">Food Chemistry</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST21202" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST21202.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST21103</td>
											<td class="subject-title">Biochemistry and Food Chemistry Practical</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST21103" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST21103.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST21204</td>
											<td class="subject-title">Principles of Human Nutrition</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST21204" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST21204.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST21105</td>
											<td class="subject-title">Food Process Engineering I</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST21105" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST21105.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST21206</td>
											<td class="subject-title">Food Preservation</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST21206" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST21206.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST21107</td>
											<td class="subject-title">Food Preservation Practical</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST21107" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST21107.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST21208</td>
											<td class="subject-title">Management Process</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST21208" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST21208.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST21209</td>
											<td class="subject-title">Advanced Statistics I</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST21209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST21209.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST21210</td>
											<td class="subject-title">Food Microbiology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST21210" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST21210.'"'; ?>></td>
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
											<td>FST22201</td>
											<td class="subject-title">Biotechnology for Food Science</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST22201" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST22201.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST22102</td>
											<td class="subject-title">Microbiology and Biotechnology Practical</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST22102" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST22102.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST22203</td>
											<td class="subject-title">Food Process Engineering II</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST22203" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST22203.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST22104</td>
											<td class="subject-title">Food Process Engineering Practical</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST22104" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST22104.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST22205</td>
											<td class="subject-title">Food Quality Management</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST22205" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST22205.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST22206</td>
											<td class="subject-title">Livestock Production and Aquaculture</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST22206" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST22206.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST22107</td>
											<td class="subject-title">Livestock Production and Aquaculture Practical</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST22107" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST22107.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST22108</td>
											<td class="subject-title">Food Marketing</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST22108" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST22108.'"'; ?>></td>
										</tr><tr>
											<td>FST22209</td>
											<td class="subject-title">Advanced Statistics II</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST22209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST22209.'"'; ?>></td>
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
											<td>FST31201</td>
											<td class="subject-title">Food Analysis</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST31201" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST31201.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST31102</td>
											<td class="subject-title">Food Analysis Practical</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST31102" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST31102.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST31203</td>
											<td class="subject-title">Dairy Science</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST31203" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST31203.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST31204</td>
											<td class="subject-title">Food Packaging</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST31204" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST31204.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST31205</td>
											<td class="subject-title">Applied Human Nutrition</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST31205" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST31205.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST31106</td>
											<td class="subject-title">Human Nutrition Practical</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST31106" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST31106.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST31107</td>
											<td class="subject-title">Food Regulations</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST31107" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST31107.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST31208</td>
											<td class="subject-title">Food Safety and Risk Analysis</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST31208" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST31208.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST31209</td>
											<td class="subject-title">Food Industries and Environmental Management</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST31209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST31209.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST31210</td>
											<td class="subject-title">Research Methodology and Scientific Communication</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST31210" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST31210.'"'; ?>></td>
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
											<td>FST32201</td>
											<td class="subject-title">Aquatic Food Processing Technology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST32201" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST32201.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST32202</td>
											<td class="subject-title">Dairy Processing Technology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST32202" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST32202.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST32103</td>
											<td class="subject-title">Dairy Science and Dairy Processing Technology Practical</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST32103" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST32103.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST32204</td>
											<td class="subject-title">Sugar and Confectionery Processing Technology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST32204" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST32204.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST32105</td>
											<td class="subject-title">Beverage Processing Technology</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST32105" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST32105.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST32106</td>
											<td class="subject-title">Sensory Evaluation of Foods</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST32106" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST32106.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST32107</td>
											<td class="subject-title">Sensory Evaluation of Foods Practical</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST32107" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST32107.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST32108</td>
											<td class="subject-title">Process Control and Automation in Food Industry</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST32108" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST32108.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST32209</td>
											<td class="subject-title">Human Resource Management</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST32209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST32209.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST32210</td>
											<td class="subject-title">Cleaner Production and Green Productivity</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST32210" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST32210.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST32111</td>
											<td class="subject-title">Food Science and Technology Seminars</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST32111" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST32111.'"'; ?>></td>
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
											<td>FST41201</td>
											<td class="subject-title">Integrated Project in Food Science and Technology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST41201" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST41201.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST41102</td>
											<td class="subject-title">Root Crops Processing Technology</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST41102" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST41102.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST41103</td>
											<td class="subject-title">Spice Processing Technology</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST41103" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST41103.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST41104</td>
											<td class="subject-title">Grain Processing Technology</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST41104" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST41104.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST41105</td>
											<td class="subject-title">Fruit and Vegetable Processing Technology</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST41105" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST41105.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST41106</td>
											<td class="subject-title">Edible Oil Processing Technology</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST41106" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST41106.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST41107</td>
											<td class="subject-title">Food Processing Technology Practical (Cereals/Grains, Spices, Root Crops, Tubers and Confectionery)</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST41107" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST41107.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST41208</td>
											<td class="subject-title">Meat and Egg Processing Technology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST41208" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST41208.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST41109</td>
											<td class="subject-title">Meat, Egg and Aquatic Food Processing Technology Practical</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST41109" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST41109.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST41210</td>
											<td class="subject-title">Advanced Food Quality Management</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST41210" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST41210.'"'; ?>></td>
										</tr>
										<tr>
											<td>FST41111</td>
											<td class="subject-title">Functional Foods and Nutraceuticals</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST41111" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST41111.'"'; ?>></td>
										</tr>

										<tr>
        									<td><?php echo $e411; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e411">
        											<option value="FST411XX" selected hidden>Select The Optional Subject</option>
        											<option value="FST41113">Technology and Innovation Management</option>
        											<option value="FST41114">Principles of Industrial Economics</option>
        											<option value="FST411XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>1</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST411e1" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST411e1.'"'; ?>>
        									</td>
        								</tr>
        								<tr>
        									<td><?php echo $e412; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e412">
        											<option value="FST412XX" selected hidden>Select The Elective Subject</option>
        											<option value="FST41212">Entrepreneurship in Food Technology</option>
        											<option value="FST41215">Instrumental Techniques in Food Science</option>
        											<option value="FST41216">Nanotechnology in Food and Environmental Sciences</option>
        											<option value="FST412XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST412e2" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST412e2.'"'; ?>></td>
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
											<td>FST42801</td>
											<td class="subject-title">Research Project in Food Science and Technology</td>
											<td>8</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="FST42801" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$FST42801.'"'; ?>></td>
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

	<script type="text/javascript" src="../js/functions.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>