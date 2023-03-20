<?php
 $host='localhost';
 $user='root';
 $password='';
 $db_name='biblio';
 $connexion=mysql_connect($host,$user,$password) or die ("probleme de connection");
  $req=mysql_select_db($db_name,$connexion)or die ("probleme de selection de base de donn&eacute;e");
?>
