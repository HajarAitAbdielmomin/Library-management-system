
<?php
@session_start();
require("connexion.php");
  	        $emailLB=htmlspecialchars($_POST['email']);
            $passwordLB=htmlspecialchars($_POST['password']);
			 //$etat = '';
            $sql1=mysql_query("select * from admin where  email='".$emailLB."' and password='".$passwordLB."'");			
			if(mysql_num_rows($sql1) > 0){
				$data = mysql_fetch_assoc($sql1);
				$_SESSION['logged'] = true;
				
				$_SESSION['em']=$data['email'];
				$_SESSION['psw']=$data['password'];
			 
				header('location:biblio.php');      
			} else {
				$etat = mysql_num_rows($sql1);
				header('location:LoginFormLb.php?etat='.$etat);
			}
		
?>

