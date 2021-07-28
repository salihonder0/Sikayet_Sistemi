<html>
<head>
    <title>Sikayet Sistemi</title>
    <meta charset="utf-8">
<style type="text/css" >
.tablo3 {
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







</style>
</head>
</html>
<?php


include "config.php";
if (     !isset($_COOKIE['$name1']) OR   !isset($_COOKIE['$Ad'])     ) { 
  
   
    
include "Adminsayfa2.php";

$sql="select * from üye";
$cevap=mysqli_query($mysqli,$sql);





echo "<table class=tablo3 border=1>";
echo "<tr><th>Üye ID</th><th>Adı</th><th>Soyadı</th><th>Parolası</th><th>Sil</th><th>Güncelle</th></tr>";

while($gelen=mysqli_fetch_array($cevap))
{
   
    echo "<tr><td align=middle>".$gelen['Üyeid']."</td>";
    echo "<td align=middle>".$gelen['Ad']."</td>";
    echo "<td align=middle>".$gelen['Soyadi']."</td>";
    echo "<td align=middle>".$gelen['Parolası']."</td>";
    echo "<td align=middle>  <form action=Uyesil.php method=POST><input type=submit value=Sil></form>  </td>";
    echo "<td >  <form action=Uyeprofilgüncelle.php><input type=submit value=Güncelle></form>  </td>";
      
}

echo "</table>";
       


}
else {

    header("Location: index.php"); 
}

?>


