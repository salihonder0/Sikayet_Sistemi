
<?php


include "config.php";
include "Uyesayfa.php";

if (     isset($_COOKIE['$name1']) OR   isset($_COOKIE['$Ad'])     ) { 
  
  header("Location: index.php"); 

  exit(); 

 } 




?>
<html>
<head> 
<title>Sikayet Sistemi/Üye Giriş </title>
<style type="text/css" >
.kısım5{
    position: absolute;
    
  top: 450px;
  right: 600;
  width: 520px;
  height: 220px;
  opacity: .9;
  background-color: rgb(126, 148, 145);
  font-size: large;
font-style: italic;


    
}
</style>
</head>


<body>
    


<form class="kısım5" action="Güncelle.php"  method="POST">
<br> &nbsp;&nbsp; Adı: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Ad"> <br><br>
Soyad: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Soyadi"> <br><br>
 Eski Parola:  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="Parolası"><br><br>
Yeni Parola:  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="Parolası2"><br><br>


 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <input type="submit" value="Güncelle"></form>


</body>

</html>


&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;