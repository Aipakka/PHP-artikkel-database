
<?php
if(isset($_POST["leggtil"]))
{

 // Tilkoblingsinformasjon
 $tjener = "localhost";
 $brukernavn = "root";
 $passord = "root";
 $database = "DBfornettside";

 // Opprette en kobling
 $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
 // Sjekk om koblingen virker
 if ($kobling->connect_error) {
 die("Noe gikk galt: " . $kobling->connect_error);
}
 // Angi UTF-8 som tegnsett
 $kobling->set_charset("utf8");
 // Lagrer skjemafeltene i enklere navn
 $IDartikkel = $_POST["idArtikkel"];
 $tittel = $_POST["tittel"];
 $lenke = $_POST["lenke"];
 $dato_skrevet = $_POST["dato_skrevet"];
 $info = $_POST["info"];

 $sql = "INSERT INTO Artikkel (idArtikkel, tittel, lenke, dato_skrevet, info) VALUES ('$IDartikkel', '$tittel', 
'$lenke','$dato_skrevet', '$info')";

 if($kobling->query($sql)) {
 echo "Spørringen $sql ble gjennomført.";
 } else {
 echo "Noe gikk galt med spørringen $sql ($kobling->error).";
 }


}
?>