<?php


include "config.php";
include "index.php"

?>
<html>
<head> 
<title>Sikayet Sistemi/Üye Ol </title>
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
    


<form class="kısım5" action="Uyekaydi.php"  method="GET">
<br> &nbsp;&nbsp; Adınız: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name1"> <br><br>
&nbsp;&nbsp; Soyadınız: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="soyname1"> <br><br>

&nbsp; &nbsp; Parola:  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="parola"><br><br>
&nbsp; &nbsp; Parola Onayla: <input type="password" name="parola2"><br><br> 
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <input type="submit" value="Üye Ol"></form>


</body>

</html>


