<?php

	try
      {
      $db=new PDO('mysql:host=mysql.hostinger.fr;dbname=u956372823_dev','root','u956372823_root'); 
	  echo "connect successfull to the database on Hostinger server"."</br>";
      }
      catch(Exception $e)
      {
      die('Erreur:'.$e->getMessage());
      }
		 
?>