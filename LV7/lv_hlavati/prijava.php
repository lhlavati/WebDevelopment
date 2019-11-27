<?php
session_start();
 include("spoj.php");
?>
<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Title</title>
  </head>
  <body>
		<div>
			<form method="post" action="" id="form1" style="" class="form-inline">
				<div class="form-group">
					<label for="email">Email: </label>
					<input type="email" name="email" class="form-control" placeholder="Email" required="required" />
				</div>
				<div class="form-group">
					<label for="pwd">Password: </label>
					<input type="password" class="form-control" name="pass" placeholder="Password" required="required"/>
				</div>
					<button  name="login" type="submit" class="btn btn-default">Login</button>
			</form>
		</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html> 

<?php
	/*session_start();*/
if(isset($_POST['login'])){
	
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$pass = mysqli_real_escape_string($con, $_POST['pass']);

	$get_user = "select * from korisnici where email='$email' AND lozinka='$pass'";
	$run_user = mysqli_query($con, $get_user);
	$check = mysqli_num_rows($run_user);

	if($check==1){
		$_SESSION['e-mail']=$email;
			$user_query = "SELECT * FROM korisnici WHERE email='$email' AND lozinka='$pass'";
			$run = mysqli_query($con, $user_query);
			while($row = mysqli_fetch_array($run)){
				$user_id = $row['id'];
				$ime = $row['ime'];
				$prezime = $row['prezime'];
			}
		$_SESSION['id'] = $user_id;
		$_SESSION['ime'] = $ime;
		$_SESSION['prezime'] = $prezime;
		 
		echo "<script>window.open('dodaj_proizvod.php', '_self')</script>";
	}

	else{
		echo "<script>alert('Password or email is not correct!')</script>";
	}
}
?>


