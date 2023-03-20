<?php
@session_start();
require ("connexion.php");
  	        $user=$_POST['username'];
            $password=$_POST['password'];
			 
            $sql1=mysql_query("select * from locataire where  prenom='".$user."' and mot_de_pass='".$password."'");			
			if(mysql_num_rows($sql1) <= 0){
              header("location:LoginForm.php");
			} else {
				$_SESSION['logged'] = true;
				$_SESSION['psw']=$_POST['password'];
			    $_SESSION['prenom']=$_POST['username'];
				header("location:locataire.php");
			}
?>