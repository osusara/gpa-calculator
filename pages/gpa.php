<?php session_start() ?>
<?php require_once("../includes/functions.php"); ?>

<?php 

	$errors = array();

	$gpa1 = 0;
	$gpa2 = 0;
	$gpa3 = 0;
	$gpa4 = 0;
	$div = 0;
	$fgpa = 0;

	if(isset($_SESSION['gpa1']) || isset($_SESSION['gpa2']) || isset($_SESSION['gpa3']) || isset($_SESSION['gpa4'])){
		$c1 = $_SESSION['c1'];
		$c2 = $_SESSION['c2'];
		$c3 = $_SESSION['c3'];
		$c4 = $_SESSION['c4'];

		$gpa1 = $_SESSION['gpa1'];
		$gpa2 = $_SESSION['gpa2'];
		$gpa3 = $_SESSION['gpa3'];
		$gpa4 = $_SESSION['gpa4'];

		$div = $c1*0.2 + $c2*0.2 + $c3*0.3 + $c3*0.3;

		if($div > 0){
			$fgpa = round((($gpa1*$c1*0.2 + $gpa2*$c2*0.2 + $gpa3*$c3*0.3 + $gpa4*$c3*0.3)/$div),4);
		}else{
			$errors[] = 'Final GPA calculation error! (division by 0)<br> Make sure that you add the grades correctly';
		}

	}else{
		$errors[] = 'There is a problem in one of your GPAs';
	}

	if(isset($_POST['return'])){
		// Removing all the values in session
		$_SESSION = array();

		// Removing Cookies
		if(isset($_COOKIE[session_name()])){
        	setcookie(session_name(), '', time()-86400, '/');
    	}

    	// Destroying the session
    	session_destroy();

    	header('Location: ../index.php');
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

	<title>Your GPAs</title>
</head>
<body>

	<div class="container-fluid">
 		
    </div>

	<div class="container-fluid">
		<div class="row  align-middle">
			<div class="col-md-4 col-sm-8 col-xs-10 mx-auto">
				<div class="card">
					<div class="card-body text-center">
						<?php
 							// Display errors
 							if(isset($errors) && !empty($errors)){
 								echo '<div class="alert alert-danger" role="alert">';
 								echo '<p class="error">'.$errors[0].'</p>';
 								echo '</div>';
 			 				}
   						?>
						<div class="topic">
							<strong><?php echo $fgpa; ?></strong>
						</div>
						<h6>Is your current GPA</h6>
						<br>
						<div class="container">
							<table class="table">
							<tr>
								<td class="gpa-rows">1st Year GPA</td>
								<td class="gpa-rows"><?php echo round($gpa1,4); ?></td>
							</tr>
							<tr>
								<td class="gpa-rows">2nd Year GPA</td>
								<td class="gpa-rows"><?php echo round($gpa2,4); ?></td>
							</tr>
							<tr>
								<td class="gpa-rows">3rd Year GPA</td>
								<td class="gpa-rows"><?php echo round($gpa3,4); ?></td>
							</tr>
							<tr>
								<td class="gpa-rows">4th Year GPA</td>
								<td class="gpa-rows"><?php echo round($gpa4,4); ?></td>
							</tr>
						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<div class="container padding text-center">
			<a class="btn btn-lg" href="../index.php" name="return">Return</a>
		</div>
	</div>

	<script type="text/javascript" src="../js/functions.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>