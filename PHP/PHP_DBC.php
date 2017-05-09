<?php
//Parametre mysql
define('DB_SERVER','mysql.hostinger.fr');
define('DB_SERVER_USERNAME','u956372823_root');
define('DB_SERVER_PASSWORD','rootdev');
define('BD_NAME','u956372823_dev');

// connexion au serveur mysql
$connect = mysqli_connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD);
		if(!$con){
			die('<p>impossible de se connecter LWN:'.mysqli_error().'</p>');
			} else{
			echo '<p>Connection successfull to Mysql on Hostinger!</p>';
			}
			
//selection de la base de donnees
$db = mysqli_select_db(DB_NAME, $connect);
if(!$db){
			die('<p>impossible d\'utliliser la base:'.mysqli_error().'</p>');
		} else{
			echo '<p> Database is successfully selected!</p>';
		}
?>