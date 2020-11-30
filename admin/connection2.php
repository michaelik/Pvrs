<?php
try{
  $db = new PDO('mysql:host=localhost;dbname=allocate','root','');
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  die("can't create a connection".mysqli_error());
}
