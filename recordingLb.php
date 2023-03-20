<?php 
     require("connexion.php");
	 $destin = "upload";
	     $state =0;
         if ( isset($_POST['send']) ) {

				
				 
				 
		  
             $password=htmlspecialchars($_POST['psw']);
			 $email=htmlspecialchars($_POST['email']);
			
			 $req = "select max(id) from admin";
			 $res = mysql_query($req);
			 $idMax = mysql_result($res,0);
			 $idL = 0;
			 if ($idMax != null){
				 $idL = $idMax + 1;
				 
			 } else{
				 $idL = 1;
			 }
			$result = mysql_query("insert into admin values('".$idL."','".$email."','".$password."')") or die (mysql_error());
             if($result == true){
				 $state=1;
	          } 
				 
		  else {
			 $state=-1;
		 }}
        header('location:RegistrationLb.php?rest='.$state);
 
	mysql_close();
	
?>
