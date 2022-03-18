<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <?php
 // Tilkoblingsinformasjon
 $tjener = "localhost";
 $brukernavn = "root";
 $passord = "root";
 $database = "DBfornettside";
 // Opprette en kobling
 $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
 // Sjekk om koblingen virker
 // if ($kobling->connect_error) {
 // die("Noe gikk galt: " . $kobling->connect_error);
// }
// else {
 // echo "Koblingen virker"; }

 //Angi UTF-8 som tegnsett
 $kobling->set_charset("utf8");
$sql = "SELECT K.idForfatter, K.Fornavn, K.Etternavn, B.idArtikkel, B.tittel, B.lenke, B.dato_skrevet, B.info, P.Dato_inlagt
FROM  DBfornettside.Forfatter K, DBfornettside.Artikkel B, DBfornettside.Forfatter_has_Artikkel P
WHERE K.idForfatter=P.Forfatter_idForfatter AND P.Artikkel_idArtikkel=B.idArtikkel
ORDER BY K.Fornavn";
$resultat = $kobling->query($sql);
echo "<table>"; // Starter tabellen
echo "<tr>"; // Lager en rad med overskrifter
 echo "<th>Fornavn</th>";
 echo "<th>Etternavn</th>";
 echo "<th>Tittel</th>";
 echo "<th>Info</th>";
 echo "<th>Lenke</th>";
 echo "<th>Dato skrevet</th>";
 echo "<th>Forfatter ID</th>";
 echo "<th>Artikkel ID</th>";
 echo "<th>Dato Innlagt</th>";


echo "</tr>";
while($rad = $resultat->fetch_assoc()) {
 $TT= $rad["tittel"];
 $IF= $rad["info"];
 $Dato= $rad["dato_skrevet"];
 $FID = $rad["idForfatter"];
 $FF = $rad["Fornavn"];
 $FE = $rad["Etternavn"];
 $AID = $rad["idArtikkel"];
 $Kilde = $rad["lenke"];
 $DIL = $rad["Dato_inlagt"];

 echo "<tr>";
 echo "<td>$FF</td>";
 echo "<td>$FE</td>";
 echo "<td>$TT</td>";
 echo "<td>$IF</td>";
 echo "<td>$Kilde</td>";
 echo "<td>$Dato</td>";
 echo "<td>$FID</td>";
 echo "<td>$AID</td>";
 echo "<td>$DIL</td>";

 echo "</tr>";
}
echo "</table>"; // Avslutter tabellen
?>
</body>
</html>