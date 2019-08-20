<?php session_start() ?>
<?php require_once("../includes/functions.php"); ?>
<?php 
	$errors = array();

	if(isset($_POST['submit'])){

		if(isset($_POST['department']) && empty($errors)){
			switch ($_POST['department']) {
				case 'cis':
					header('Location: cis.php');
					break;

				case 'fst':
					header('Location: fst.php');
					break;

				case 'nr':
					header('Location: ../index.php');
					break;

				case 'pst':
					header('Location: ../index.php');
					break;

				case 'pe':
					header('Location: ../index.php');
					break;

				case 'sm':
					header('Location: ../index.php');
					break;
				
				default:
					$errors[] = 'Select your department correctly';
					break;
			}
		}else{
			$errors[] = 'Select your department correctly';
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

	<title>Applied Sciences</title>
</head>
<body>

	<form action="app.php" method="post">
		
		<div class="container-fluid">
			<div class="row  align-middle">
				<div class="col-md-4 col-sm-8 col-xs-10 mx-auto">
					<div class="card">
						<div class="card-body text-center">
							<div class="topic">
								<strong>I'm</strong>
							</div>
							<h6>In the department of</h6>
							<div class="container">
								<select class="form-control main-select" name="department">
									<option selected disabled hidden>Choose your department</option>
									<option value="cis">Computing and Information Systems</option>
									<option value="fst">Food Sciences and Technology</option>
									<option value="nr" disabled>Natural Resources</option>
									<option value="pst" disabled>Physical Sciences and Technology</option>
									<option value="pe" disabled>Physical Education</option>
									<option value="sm" disabled>Sport Management</option>
								</select>
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
		
			<div class="container padding text-center">
				<input class="btn btn-lg" type="submit" name="submit" value="Next">
			</div>
		</div>
	</form>

	<script type="text/javascript" src="js/functions.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>