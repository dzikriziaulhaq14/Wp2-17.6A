<?php

$sever = "localhost";
$user = "root";
$pass = "";
$db = "wpa_inventori";

$conn = new mysqli($sever,$user,$pass,$db);

// if($conn->connect_error){
  //   echo "Koneksi gagal ".$conn->connect_error;
//  }else{
   //  echo "koneksi berhasil";
 // }