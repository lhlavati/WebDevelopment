<?php
include("spoj.php");
	session_start();
	$ime=$_SESSION['ime'];
	$prezime=$_SESSION['prezime'];

if(!isset($_SESSION['id'])){
	header("location: prijava.php");
}
else{
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
    <div style="align:center; width:500px; margin: 50px 0px 0px 100px;">
	<?php
	echo "<h1>Dobrodošli $ime $prezime</h1>";
	?>
    <h1>Dodaj proizvod</h1>
      <div class="main-login main-center">
          <form class="form-horizontal" method="post" action="">
            
            <div class="form-group">
              <label class="cols-sm-2 control-label">Proizvod</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <input type="text" class="form-control" name="proizvod"  placeholder="Unesite proizvod" required="required" />
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="cols-sm-2 control-label">Opis</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <input type="text" class="form-control" name="opis"  placeholder="Unesite opis" required="required"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="cols-sm-2 control-label">Količina</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <input type="number" class="form-control" name="kolicina" placeholder="Unesite kolicinu" required="required"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="cols-sm-2 control-label">Cijena</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <input type="text" class="form-control" name="cijena" placeholder="Unesite cijenu" required="required"/>
                </div>
              </div>
            </div>

            <div class="form-group ">
              <button class="btn btn-primary btn-lg btn-block login-button" name="dodaj">Dodaj proizvod</button>
            </div>
          </form>

  <?php

      if(isset($_POST['dodaj'])){
            
        // deklariranje varijabla
        $proizvod = mysqli_real_escape_string($con, $_POST['proizvod']);
        $opis = mysqli_real_escape_string($con, $_POST['opis']);
        $kolicina = mysqli_real_escape_string($con, $_POST['kolicina']);
        $cijena = mysqli_real_escape_string($con, $_POST['cijena']);
        

          $insert = "insert into prozvodi (proizvod, opis, kolicina, cijena) values ('$proizvod', '$opis', '$kolicina', '$cijena')";

          $run_insert = mysqli_query($con, $insert);

          if($run_insert){
            echo "<script>alert('Proizvod je uspješno dodan!')</script>";
            echo "<script>window.open('unos.php', '_self')</script>";
          }
      }
?>

        </div>
            <a href="ispis.php">Ispis</a>
            <a href="odjava.php">Odjava</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html> 

<?php
}
?>
