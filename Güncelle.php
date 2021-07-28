<?php 
   include "config.php";
   if (     isset($_COOKIE['$name1']) OR   isset($_COOKIE['$Ad'])     ) { 
  
      header("Location: index.php"); 
    
      exit(); 
    
     } 

   $uname1=$_POST["Ad"];
   $soyname=$_POST["Soyadi"];
   $upass1=$_POST["Parolası"];
   $upass2=$_POST["Parolası2"];




   $islem=$mysqli -> query("UPDATE üye SET Ad='$uname1'  Soyadi='$soyname' Parolası='$upass2' where Parolası='$upass1'");
  

  

   header("Location: index.php"); 

   

   ?>