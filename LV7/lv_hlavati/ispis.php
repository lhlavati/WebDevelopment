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
  
  <?php  
		$get_proizvodi = "select * from prozvodi";
		$run = mysqli_query($con, $get_proizvodi);
		$check = mysqli_num_rows($run);

			while($row = mysqli_fetch_array($run)){
				$proizvod = $row['proizvod'];
				$opis = $row['opis'];
				$kolicina = $row['kolicina'];
				$cijena = $row['cijena'];

				
				echo "<table>
				<tr>
					<th>Proizvod</th>
					<th>Opis</th>
					<th>Kolicina</th>
					<th>Cijena</th>
				</tr>
				
				<tr>
					<td>$proizvod</td>
					<td>$opis</td>
					<td>$kolicina</td>
					<td>$cijena</td>
				</tr>
				
				</table>";
			}

  ?>
		<div>
			<h1>Proizvod je unesen.</h1>
			<a href="dodaj_proizvod.php">Dodaj proizvod</a>
			<a href="odjava.php">Odjava</a>
		</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html> 


