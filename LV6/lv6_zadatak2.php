<?php

//............................................................................//

$datoteka = fopen("tekst.txt", "r+") or die("Unable to open file!");
$str_tekst = fread($datoteka,filesize("tekst.txt"));
$izrezani_tekst = explode(" ", $str_tekst);
$varijabla = 0;
$novi_red = implode("\n", $izrezani_tekst);
//fwrite($datoteka, print_r($novi_red, TRUE));
fclose($datoteka);

//............................................................................//

$brojac = 0;
$prvi = 0;
$mjesto =0;
for ($i = 0; $i <= strlen($str_tekst)-1; $i++) {
    if($prvi==0){
        if($str_tekst[$i] == 'k'){
            $brojac++;
            $prvi=1;
            $mjesto = $i+1;
        }
    }
    elseif ($str_tekst[$i] == 'k'){
        $brojac++;
    }
}
echo "Prvo slovo k se pojavljuje na $mjesto mjestu a ukupno ima $brojac pojavljivanja.";

//............................................................................//

$mailovi = array("josip.ouzecky125@gmail.com", "ivan.ivanovic@gmail.com", "antun.opacak@gmail.com", "ilija.opacak@gmail.com", "eugen.jukic@gmail.com", "karlo.kovacevic@gmail.com", "marija.ovzetski@gmail.com", "isuse.boze@gmail.com", "perica.peric@gmail.com");

$pomocno = 0;
echo "<br><br><br>";
echo "<table>";
for($i=0; $i < 3; $i++){
    echo "<tr>";
    for($j=0; $j < 3; $j++){
        echo "<th>";
        echo $mailovi[$j+$pomocno];
        echo "</th>";
    }
    $pomocno +=3;
    echo "</tr>";
}
echo "</table>";

?>