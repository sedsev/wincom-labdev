	try
      {
      $db=new PDO('mysql:host=93.188.160.43;dbname=u956372823_dev','u956372823_root','rootdev'); 
	  echo "<h3>connect successfull to the database on Hostinger server</h3>"."</br>";
      }
      catch(Exception $e)
      {
      die('Erreur:'.$e->getMessage());
      }
	  