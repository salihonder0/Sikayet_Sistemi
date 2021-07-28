<?php


include "config.php";   
setcookie("Ad",0,time()-500);
setcookie("Parolası",0,time()-500);
echo "<script>alert('Basarıyla Çıkış Yaptınız...');</script>";
header("Location: index.php");

?>