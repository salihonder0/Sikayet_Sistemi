<?php

include("config.php");
if (     isset($_COOKIE['$name1']) OR   isset($_COOKIE['$Ad'])     ) { 
  
    header("Location: index.php"); 
  
    exit(); 
  
   } 
$char= $_POST['Ad'];

$sql = "DELETE FROM üye WHERE Ad=$char";


$cevap = mysqli_query($mysqli,$sql);
       
if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
    echo "Kayıt Silindi!</br>";
    header("Location: Üyeler.php");
}


?>
