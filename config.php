<?php 
  
   $mysqli = new mysqli("localhost","285344","yD!aHFwAz7gf4fs","285344");

   
    
   
   if ($mysqli->connect_errno) { 
   
       echo "MySQL sunucu ile baglanti kurulamadi! </br>"; 
   
       echo "HATA: " . mysqli_connect_error(); 
   
       exit; 
   
   } 
 
   ?>