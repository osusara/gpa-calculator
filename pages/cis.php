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
	$IS11201 = null;
	$IS11302 = null;
	$IS11203 = null;
	$IS11204 = null;
	$IS11205 = null;
	$IS11206 = null;

	//1,2 variables
	$IS12307 = null;
	$IS12308 = null;
	$IS12209 = null;
	$IS12210 = null;
	$IS12311 = null;
	$IS12212 = null;

	//2,1 variables
	$IS21213 = null;
	$IS21214 = null;
	$IS21215 = null;
	$IS21216 = null;
	$IS21217 = null;
	$IS21218 = null;
	$IS21219 = null;

	//2,2 variables
	$IS22220 = null;
	$IS22221 = null;
	$IS22222 = null;
	$IS22223 = null;
	$IS22224 = null;
	$IS22225 = null;
	$IS22226 = null;

	//3,1 variables
	$IS31227 = null;
	$IS31228 = null;
	$IS31129 = null;
	$IS31230 = null;
	$IS31231 = null;
	$IS31232 = null;
	$IS31233 = null;
	$IS312e1 = null;
	$IS312e2 = null;
	$IS312e3 = null;
	$IS312e4 = null;
	$IS312e5 = null;
	$e311 = "IS312XX";
	$e312 = "IS312XX";
	$e313 = "IS312XX";
	$e314 = "IS312XX";
	$e315 = "IS312XX";

	//3,2 variables
	$IS32842 = null;

	//4,1 variables
	$IS41243 = null;
	$IS41244 = null;
	$IS41245 = null;
	$IS41246 = null;
	$IS41247 = null;
	$IS412e1 = null;
	$IS412e2 = null;
	$IS412e3 = null;
	$e411 = "IS412XX";
	$e412 = "IS412XX";
	$e413 = "IS412XX";

	//4,2 variables
	$IS42853 = null;
	$IS42254 = null;
	$IS42255 = null;
	$IS42256 = null;
	$IS42257 = null;
	$IS422e1 = null;
	$IS422e2 = null;
	$IS422e3 = null;
	$e421 = "IS422XX";
	$e422 = "IS422XX";
	$e423 = "IS422XX";

	//when the submit
	if(isset($_POST['submit'])){

		if(!isset($_POST['e311']) || !isset($_POST['e312']) || !isset($_POST['e313']) || !isset($_POST['e314']) || !isset($_POST['e315'])){
			$errors[] = 'Please select your elective subjects or NOT YET! in 3rd year';
		}

		if(!isset($_POST['e411']) || !isset($_POST['e412']) || !isset($_POST['e413'])){
			$errors[] = 'Please select your elective subjects or NOT YET! in 4th year 1st semester';
		}

		if(!isset($_POST['e421']) || !isset($_POST['e422']) || !isset($_POST['e423'])){
			$errors[] = 'Please select your elective subjects or NOT YET! in 4th year 1st semester';
		}

		if(empty($errors)){

			//1,1 grades
			$IS11201 = grade($_POST['IS11201'])*2;
			$IS11302 = grade($_POST['IS11302'])*3;
			$IS11203 = grade($_POST['IS11203'])*2;
			$IS11204 = grade($_POST['IS11204'])*2;
			$IS11205 = grade($_POST['IS11205'])*2;
			$IS11206 = grade($_POST['IS11206'])*2;

			//1,2 grades
			$IS12307 = grade($_POST['IS12307'])*3;
			$IS12308 = grade($_POST['IS12308'])*3;
			$IS12209 = grade($_POST['IS12209'])*2;
			$IS12210 = grade($_POST['IS12210'])*2;
			$IS12311 = grade($_POST['IS12311'])*3;
			$IS12212 = grade($_POST['IS12212'])*2;

			//total credits erned in first year
			$c1 = $IS11201+$IS11302+$IS11203+$IS11204+$IS11205+$IS11206+$IS12307+$IS12308+$IS12209+$IS12210+$IS12311+$IS12212;

			//gpa for the first year
			$gpa1 = $c1/28;

			//2,1 grades
			$IS21213 = grade($_POST['IS21213'])*2;
			$IS21214 = grade($_POST['IS21214'])*2;
			$IS21215 = grade($_POST['IS21215'])*2;
			$IS21216 = grade($_POST['IS21216'])*2;
			$IS21217 = grade($_POST['IS21217'])*2;
			$IS21218 = grade($_POST['IS21218'])*2;
			$IS21219 = grade($_POST['IS21219'])*2;

			//2,2 grades
			$IS22220 = grade($_POST['IS22220'])*2;
			$IS22221 = grade($_POST['IS22221'])*2;
			$IS22222 = grade($_POST['IS22222'])*2;
			$IS22223 = grade($_POST['IS22223'])*2;
			$IS22224 = grade($_POST['IS22224'])*2;
			$IS22225 = grade($_POST['IS22225'])*2;
			$IS22226 = grade($_POST['IS22226'])*2;

			//total credits erned in first year
			$c2 = $IS21213+$IS21214+$IS21215+$IS21216+$IS21217+$IS21218+$IS21219+$IS22220+$IS22221+$IS22222+$IS22223+$IS22224+$IS22225+$IS22226;

			//gpa for the second year
			$gpa2 = $c2/28;

			//3,1 grades
			$IS31227 = grade($_POST['IS31227'])*2;
			$IS31228 = grade($_POST['IS31228'])*2;
			$IS31129 = grade($_POST['IS31129'])*1;
			$IS31230 = grade($_POST['IS31230'])*2;
			$IS31231 = grade($_POST['IS31231'])*2;
			$IS31232 = grade($_POST['IS31232'])*2;
			$IS31233 = grade($_POST['IS31233'])*2;
			$IS312e1 = grade($_POST['IS312e1'])*2;
			$IS312e2 = grade($_POST['IS312e2'])*2;
			$IS312e3 = grade($_POST['IS312e3'])*2;
			$IS312e4 = grade($_POST['IS312e4'])*2;
			$IS312e5 = grade($_POST['IS312e5'])*2;

			$e311 = $_POST['e311'];
			$e312 = $_POST['e312'];
			$e313 = $_POST['e313'];
			$e314 = $_POST['e314'];
			$e315 = $_POST['e315'];

			//3,2 grades
			$IS32842 = grade($_POST['IS32842'])*8;

			//total credits erned in first year
			$c3 = $IS31227+$IS31228+$IS31129+$IS31230+$IS31231+$IS31232+$IS31233+$IS312e1+$IS312e2+$IS312e3+$IS312e4+$IS312e5+$IS32842;

			//gpa for the third year
			$gpa3 = $c3/31;

			//4,1 grades
			$IS41243 = grade($_POST['IS41243'])*2;
			$IS41244 = grade($_POST['IS41244'])*2;
			$IS41245 = grade($_POST['IS41245'])*2;
			$IS41246 = grade($_POST['IS41246'])*2;
			$IS41247 = grade($_POST['IS41247'])*2;
			$IS412e1 = grade($_POST['IS412e1'])*2;
			$IS412e2 = grade($_POST['IS412e2'])*2;
			$IS412e3 = grade($_POST['IS412e3'])*2;

			$e411 = $_POST['e411'];
			$e412 = $_POST['e412'];
			$e413 = $_POST['e413'];

			//4,2 grades
			$IS42853 = grade($_POST['IS42853'])*8;
			$IS42254 = grade($_POST['IS42254'])*2;
			$IS42255 = grade($_POST['IS42255'])*2;
			$IS42256 = grade($_POST['IS42256'])*2;
			$IS42257 = grade($_POST['IS42257'])*2;
			$IS422e1 = grade($_POST['IS422e1'])*2;
			$IS422e2 = grade($_POST['IS422e2'])*2;
			$IS422e3 = grade($_POST['IS422e3'])*2;

			$e421 = $_POST['e421'];
			$e422 = $_POST['e422'];
			$e423 = $_POST['e423'];

			//total credits erned in first year
			$c4 = $IS41243+$IS41244+$IS41245+$IS41246+$IS41247+$IS412e1+$IS412e2+$IS412e3+$IS42853+$IS42254+$IS42255+$IS42256+$IS42257+$IS422e1+$IS422e2+$IS422e3;

			//gpa for the forth year
			$gpa4 = $c4/38;


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
		<form action="cis.php" method="post">
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
											<td>IS11201</td>
											<td class="subject-title">Fundamentals of Information Systems</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS11201" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS11201.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS11302</td>
											<td class="subject-title">Structured Programming Techniques</td>
											<td>3</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS11302" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS11302.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS11203</td>
											<td class="subject-title">Information Systems Theory and Practice</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS11203" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS11203.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS11204</td>
											<td class="subject-title">Information Systems Infrastructures</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS11204" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS11204.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS11205</td>
											<td class="subject-title">Fundamentals of Mathematics</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS11205" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS11205.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS11206</td>
											<td class="subject-title">Statics and Probabilty Theory</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS11206" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS11206.'"'; ?>></td>
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
											<td>IS12307</td>
											<td class="subject-title">Object Oriented Programming</td>
											<td>3</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS12307" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS12307.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS12308</td>
											<td class="subject-title">Database Systems</td>
											<td>3</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS12308" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS12308.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS12209</td>
											<td class="subject-title">Emerging Technologies for Information Systems</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS12209" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS12209.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS12210</td>
											<td class="subject-title">Advanced Mathematics</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS12210" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS12210.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS12311</td>
											<td class="subject-title">Analysis of Algorithms</td>
											<td>3</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS12311" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS12311.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS12212</td>
											<td class="subject-title">Human Computer Interaction</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS12212" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS12212.'"'; ?>></td>
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
											<td>IS21213</td>
											<td class="subject-title">Personal Productivity with IS technology</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS21213" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS21213.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS21214</td>
											<td class="subject-title">Software Project Management</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS21214" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS21214.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS21215</td>
											<td class="subject-title">Object Oriented Analysis and Design</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS21215" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS21215.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS21216</td>
											<td class="subject-title">Platform Technologies</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS21216" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS21216.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS21217</td>
											<td class="subject-title">System Analysis and Design</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS21217" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS21217.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS21218</td>
											<td class="subject-title">Information Assurance and Security</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS21218" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS21218.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS21219</td>
											<td class="subject-title">Social and Professional Issues</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS21219" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS21219.'"'; ?>></td>
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
											<td>IS22220</td>
											<td class="subject-title">System Administration and Maintenance</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS22220" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS22220.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS22221</td>
											<td class="subject-title">Operating System Concepts</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS22221" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS22221.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS22222</td>
											<td class="subject-title">System Integration and Architecture</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS22222" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS22222.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS22223</td>
											<td class="subject-title">IS Risk Management</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS22223" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS22223.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS22224</td>
											<td class="subject-title">IT Governance</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS22224" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS22224.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS22225</td>
											<td class="subject-title">Business Intelligence</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS22225" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS22225.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS22226</td>
											<td class="subject-title">Web Technologies</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS22226" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS22226.'"'; ?>></td>
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
											<td>IS31227</td>
											<td class="subject-title">Rapid Application Development</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS31227" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS31227.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS31228</td>
											<td class="subject-title">Electronic Business Strategy, Architecture and Design</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS31228" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS31228.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS31129</td>
											<td class="subject-title">Enterprise Architecture</td>
											<td>1</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS31129" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS31129.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS31230</td>
											<td class="subject-title">Mini Project</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS31230" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS31230.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS31231</td>
											<td class="subject-title">Management Information Systems</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS31231" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS31231.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS31232</td>
											<td class="subject-title">IT Auditing</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS31232" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS31232.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS31233</td>
											<td class="subject-title">Entrepreneurship and Innovation</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS31233" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS31233.'"'; ?>></td>
										</tr>

										<tr>
        									<td><?php echo $e311; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e311">
        											<option value="IS312XX" selected hidden>Select The Elective Subject</option>
        											<option value="IS31234">Software Engineering</option>
        											<option value="IS31235">Data Communication and Networks</option>
        											<option value="IS31236">Geographical Information Systems</option>
        											<option value="IS31237">Advanced Database Systems</option>
        											<option value="IS31238">Organizational Behavior and Management</option>
        											<option value="IS31239">Agile Software Development</option>
        											<option value="IS31240">Software Quality Assurance</option>
        											<option value="IS31241">Design Patterns and Applications</option>
        											<option value="IS312XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS312e1" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS312e1.'"'; ?>></td>
        								</tr>
        								<tr>
        									<td><?php echo $e312; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e312">
        											<option value="IS312XX" selected hidden>Select The Elective Subject</option>
        											<option value="IS31234">Software Engineering</option>
        											<option value="IS31235">Data Communication and Networks</option>
        											<option value="IS31236">Geographical Information Systems</option>
        											<option value="IS31237">Advanced Database Systems</option>
        											<option value="IS31238">Organizational Behavior and Management</option>
        											<option value="IS31239">Agile Software Development</option>
        											<option value="IS31240">Software Quality Assurance</option>
        											<option value="IS31241">Design Patterns and Applications</option>
        											<option value="IS312XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS312e2" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS312e2.'"'; ?>></td>
        								</tr>
        								<tr>
        									<td><?php echo $e313; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e313">
        											<option value="IS312XX" selected hidden>Select The Elective Subject</option>
        											<option value="IS31234">Software Engineering</option>
        											<option value="IS31235">Data Communication and Networks</option>
        											<option value="IS31236">Geographical Information Systems</option>
        											<option value="IS31237">Advanced Database Systems</option>
        											<option value="IS31238">Organizational Behavior and Management</option>
        											<option value="IS31239">Agile Software Development</option>
        											<option value="IS31240">Software Quality Assurance</option>
        											<option value="IS31241">Design Patterns and Applications</option>
        											<option value="IS312XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS312e3" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS312e3.'"'; ?>></td>
        								</tr>
        								<tr>
        									<td><?php echo $e314; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e314">
        											<option value="IS312XX" selected hidden>Select The Elective Subject</option>
        											<option value="IS31234">Software Engineering</option>
        											<option value="IS31235">Data Communication and Networks</option>
        											<option value="IS31236">Geographical Information Systems</option>
        											<option value="IS31237">Advanced Database Systems</option>
        											<option value="IS31238">Organizational Behavior and Management</option>
        											<option value="IS31239">Agile Software Development</option>
        											<option value="IS31240">Software Quality Assurance</option>
        											<option value="IS31241">Design Patterns and Applications</option>
        											<option value="IS312XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS312e4" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS312e4.'"'; ?>></td>
        								</tr>
        								<tr>
        									<td><?php echo $e315; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e315">
        											<option value="IS312XX" selected hidden>Select The Elective Subject</option>
        											<option value="IS31234">Software Engineering</option>
        											<option value="IS31235">Data Communication and Networks</option>
        											<option value="IS31236">Geographical Information Systems</option>
        											<option value="IS31237">Advanced Database Systems</option>
        											<option value="IS31238">Organizational Behavior and Management</option>
        											<option value="IS31239">Agile Software Development</option>
        											<option value="IS31240">Software Quality Assurance</option>
        											<option value="IS31241">Design Patterns and Applications</option>
        											<option value="IS312XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS312e5" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS312e5.'"'; ?>></td>
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
											<td>IS32842</td>
											<td class="subject-title">Industrial Training</td>
											<td>8</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS32842" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS32842.'"'; ?>></td>
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
											<td>IS41243</td>
											<td class="subject-title">Introduction to Distributed Systems</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS41243" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS41243.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS41244</td>
											<td class="subject-title">Information Systems Strategies, Management & Acquisition</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS41244" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS41244.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS41245</td>
											<td class="subject-title">Business Process Management</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS41245" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS41245.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS41246</td>
											<td class="subject-title">Enterprise Resource Planning</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS41246" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS41246.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS41247</td>
											<td class="subject-title">Research Method</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS41247" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS41247.'"'; ?>></td>
										</tr>

										<tr>
        									<td><?php echo $e411; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e411">
        											<option value="IS412XX" selected hidden>Select The Elective Subject</option>
        											<option value="IS41248">Cloud Computing</option>
        											<option value="IS41249">Logistics Systems and Transportation Management</option>
        											<option value="IS41250">Human Resource Management</option>
        											<option value="IS41251">Data Mining and Applications</option>
        											<option value="IS41252">Multimedia and Hypermedia Systems Development</option>
        											<option value="IS412XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS412e1" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS412e1.'"'; ?>></td>
        								</tr>
        								<tr>
        									<td><?php echo $e412; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e412">
        											<option value="IS412XX" selected hidden>Select The Elective Subject</option>
        											<option value="IS41248">Cloud Computing</option>
        											<option value="IS41249">Logistics Systems and Transportation Management</option>
        											<option value="IS41250">Human Resource Management</option>
        											<option value="IS41251">Data Mining and Applications</option>
        											<option value="IS41252">Multimedia and Hypermedia Systems Development</option>
        											<option value="IS412XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS412e2" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS412e2.'"'; ?>></td>
        								</tr>
        								<tr>
        									<td><?php echo $e413; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e413">
        											<option value="IS412XX" selected hidden>Select The Elective Subject</option>
        											<option value="IS41248">Cloud Computing</option>
        											<option value="IS41249">Logistics Systems and Transportation Management</option>
        											<option value="IS41250">Human Resource Management</option>
        											<option value="IS41251">Data Mining and Applications</option>
        											<option value="IS41252">Multimedia and Hypermedia Systems Development</option>
        											<option value="IS412XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS412e3" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS412e3.'"'; ?>></td>
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
											<td>IS42853</td>
											<td class="subject-title">Research Project in Information Systems</td>
											<td>8</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS42853" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS42853.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS42254</td>
											<td class="subject-title">Business/IT Alignment</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS42254" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS42254.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS42255</td>
											<td class="subject-title">Business Process Simulation</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS42255" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS42255.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS42256</td>
											<td class="subject-title">Information System Economics</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS42256" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS42256.'"'; ?>></td>
										</tr>
										<tr>
											<td>IS42257</td>
											<td class="subject-title">Enterprise Modeling Ontologies</td>
											<td>2</td>
											<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS42257" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS42257.'"'; ?>></td>
										</tr>

										<tr>
        									<td><?php echo $e421; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e421">
        											<option value="IS422XX" selected hidden>Select The Elective Subject</option>
        											<option value="IS42258">Enterprise Architecture Framework</option>
        											<option value="IS42259">Web Service Technologies</option>
        											<option value="IS42260">Software Architecture</option>
        											<option value="IS42261">Computer System Security</option>
        											<option value="IS42262">Mobile Computing</option>
        											<option value="IS422XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS422e1" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS422e1.'"'; ?>></td>
        								</tr>
        								<tr>
        									<td><?php echo $e422; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e422">
        											<option value="IS422XX" selected hidden>Select The Elective Subject</option>
        											<option value="IS42258">Enterprise Architecture Framework</option>
        											<option value="IS42259">Web Service Technologies</option>
        											<option value="IS42260">Software Architecture</option>
        											<option value="IS42261">Computer System Security</option>
        											<option value="IS42262">Mobile Computing</option>
        											<option value="IS422XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS422e2" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS422e2.'"'; ?>></td>
        								</tr>
        								<tr>
        									<td><?php echo $e423; ?></td>
        									<td class="subject-title">
        										<select class="form-control form-control-sm" name="e423">
        											<option value="IS422XX" selected hidden>Select The Elective Subject</option>
        											<option value="IS42258">Enterprise Architecture Framework</option>
        											<option value="IS42259">Web Service Technologies</option>
        											<option value="IS42260">Software Architecture</option>
        											<option value="IS42261">Computer System Security</option>
        											<option value="IS42262">Mobile Computing</option>
        											<option value="IS422XX">NOT DECIDED YET!</option>
        										</select>
        									</td>
        									<td>2</td>
        									<td class="subject-grade"><input <?php echo 'id="'.$count.'"'; ?> class="form-control form-control-sm grade-input" type="text" name="IS422e3" onkeypress="focusSupport(<?php echo $count; $count++; ?>,event)" <?php echo 'value="'.$IS422e3.'"'; ?>></td>
        								</tr>

									</table>
								</div>
							</div>
					</div>
				</div>

			</div>

			<div class="container padding text-center">
				<input id="0" class="btn btn-lg" type="submit" name="submit" value="Go">
			</div>
		</form>
	</div>

	<script type="text/javascript" src="../js/functions.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>