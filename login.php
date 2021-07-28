<?php 
   include "config.php";

   $uname=$_POST["Ad"];
   $upass=$_POST["Parolası"];

   $result=$mysqli -> query ("SELECT * FROM üye where Ad='$uname' AND  Parolası='$upass' ");
   $satir_sayisi=$result->num_rows;
   if($satir_sayisi==0){
      
      header("Location: index.php"); 
      exit();


   }
   $satir=$result->fetch_assoc();
   setcookie("Ad",$satir["Ad"],time()+500);
   setcookie("Parolası",$satir["Parolası"],time()+500);


   header("Location: Uyesayfa.php"); 

   

   ?>