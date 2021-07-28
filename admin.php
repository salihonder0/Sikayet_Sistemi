<?php


include "config.php";
include "index.php";

?>
<html>
<head> 
<title>Sikayet Sistemi/Admin Giris </title>
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
    


<form class="kısım5" action="Adminsayfa.php"  method="POST">
<br> &nbsp;&nbsp;&nbsp;&nbsp; ADMİN<br><br>
<br> &nbsp;&nbsp; Adınız: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Adı"> <br><br>
&nbsp; &nbsp; Parola:  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="Parolasi"><br><br>

 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <input type="submit" value="Giriş Yap"></form>


</body>

</html>


&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;