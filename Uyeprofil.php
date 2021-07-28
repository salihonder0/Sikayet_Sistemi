<html>
<head>
    <title>Sikayet Sistemi</title>
    <meta charset="utf-8">
<style type="text/css" >
.tablo {
    position: absolute;
  top: 450px;
  right: 600;
  width: 520px;
  height: 180px;
  opacity: .9;
  background-color: rgb(126, 148, 145);
  font-size: large;
font-style: italic;
}




.tablo1 {
    position: absolute;
  top: 650px;
  right: 680;
  width:40px;
  height: 5px;
  opacity: .9;
  background-color: rgb(126, 148, 145);
  font-size: large;
font-style: italic;
}


</style>
</head>

<?php


include "config.php";
include "Uyesayfa.php";
if (     isset($_COOKIE['$name1']) OR   isset($_COOKIE['$Ad'])     ) { 
  
  header("Location: index.php"); 

  exit(); 

 } 




$tutucu=$_COOKIE["Ad"];

$result=$mysqli -> query ("Select * from üye where Ad='$tutucu' LIMIT 1 ");

$satir = $result->fetch_assoc();



echo "<table  class=tablo border=1>";
echo "<tr><th>Üye Id</th><th>Adı</th><th>Soyadı</th><th>Parolası</th></tr>";


    echo "<tr><td>".$satir['Üyeid']."</td>";
    echo "<td>".$satir['Ad']."</td>";
    echo "<td>".$satir['Soyadi']."</td>";
    echo "<td> ****</td>";
    

echo "</table>";

echo "<table  class=tablo1 border=1>";



    echo "<tr><td >  <form action=Uyeprofilgüncelle.php><input type=submit value=Güncelle></form>  </td> </tr>";
       

echo "</table>";


?>

</html>
