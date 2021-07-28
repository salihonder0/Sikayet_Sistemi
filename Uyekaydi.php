<?php


include "config.php";

if($_GET["parola"]==$_GET["parola2"])
{
 $newname=$_GET["name1"];
 $newsoyad=$_GET["soyname1"];
 $newparola=$_GET["parola"];

 $islem=$mysqli -> query("INSERT INTO üye (Ad,Soyadi,Parolası)  VALUES ('$newname',' $newsoyad','$newparola')");
 if($islem==false)
    echo("Error:" .  $mysqli -> error);
    echo "<script>alert('Basarıyla Üye Oldunuz.');</script>";
    header("Location: index.php"); 
    
}
else
echo "<script>alert('Parolalar uyusmuyor.');</script>";

?>