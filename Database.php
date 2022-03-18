<!DOCTYPE html>
<html>
    <head>

    </head>
<body>
    
<?php
 include 'PHP/INSERT_Forfatter.php';
 include 'PHP/INSERT_Artikkel.php';
 include 'PHP/INSERT_F_AV_A.php';
 ?>

</p>
<form method="POST">
 <input type="integer" name="idForfatter">
 Forfatter ID
 </p>
 <input type="text" name="Fornavn">
 Forfatter fornavn
 </p>
 <input type="text" name="Etternavn">
 Forfatter etternavn
 </p>
 <input type="integer" name="idArtikkel">
 Artikkel ID
</p>
 <input type="text" name="tittel">
 Tittel for nettsiden
 </p>
 <input type="text" name="lenke">
 Link til nettsiden
 </p>
 <input type="text" name="dato_skrevet">
 Dato den ble skrevet
 </p>
 <input type="text" name="info">
 Informasjon
 </p>
<input type="datetime" name="Dato_inlagt">
 Dato lagt inn på Nettsiden (yyyy.mm.dd hh:mm:ss)
</p> 

 <input type="submit" name="leggtil" value="Legg til">
</form>
 </p>
</body>
 </html>