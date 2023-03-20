<!DOCTYPE html>
<html>
     <head>
	 <meta charset="ISO 8859-1">
	     <title>Changer de mot de pass</title>
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <style>

         body{	  
             margin:0;
             padding:0;
             background: url('bblio.jpg') no-repeat center fixed; 
             -webkit-background-size: cover; 
             background-size: cover;
             }
			 
         .container{
	         width: 500px;
	         height: 479px;
	         text-align: center;
	         margin: 0 auto;
	         background:rgba(251,251,251,0.5);
	         margin-top:60px;
             }
			 
         ::-webkit-scrollbar{
             width:8px; 
             }
			 
         ::-webkit-scrollbar-thumb {
	         background:#ECD9BA;
   	         border-radius:100px;			 
             }
			 
         .d1 {
	         display: -ms-flexbox; 
             display: flex;
             width: 100%;
             margin-top: 10px;  
             }
			 
         .d2{
	         margin-top:5.5%;
	         width:500px;
	         height:37px;
	         background-color:black;
	         opacity: 0.7;
	         padding-top:13px;
             }
			 
         .icon {
	         margin-top:8%;
	         margin-left:16%;
             padding:10px;
             background: black;
             opacity: 0.9;
             color: white;
             min-width: 30px;
             font-size:15px;
             }
			 
         input[type="password"],input[type="text"]{
	         width: 50%;
             padding: 8px;
             outline: none;
             margin-top:8%;
             }
			 
         .btn{
	         background-color: black;
             color: white;
             padding: 15px ;
             border: none;
             cursor: pointer;
             width: 25%;
             margin-left:0%;
             margin-top:5%;
             opacity: 0.9;	
             }
			 
         .btn:hover {
             opacity: 1;
             }
			 
         a:hover {
             color: gray;
             }
			 
         a{
	         text-decoration:none;
	         color:black;
	         font-size:20px;	
         }
		 
         h2{
	         padding-top:7%;
	         text-shadow:3px 4px 5px #333;
           }
		   
         .strg{
	         font-size:25px;
             color:red;			 
             }
		 </style>
	 </head>
	 <body>
     <?php require("marquee.html");
           //require("Vmenu.html");	 
?>		  
	 <div class="container">
	 <?php 
     require("connexion.php");

     if(isset($_POST['send']))
	 {
		 
	 if(isset($_POST['nouveau'],$_POST['confirmer'],$_POST['prenom']) && !empty($_POST['nouveau']) && !empty($_POST['confirmer']) && !empty($_POST['prenom']))
		 
     { 
		 $new=htmlspecialchars($_POST['nouveau']);			 
		 $cnfr=htmlspecialchars($_POST['confirmer']);
		 $prenom=htmlspecialchars($_POST['prenom']);
		     if($cnfr == $new)
			 {
				 $name=mysql_query("select prenom from locataire where prenom = '".$prenom."'");
				 if(mysql_num_rows($name)){
		  mysql_query("update locataire set mot_de_pass='".$cnfr."' where prenom='".$prenom."'") or die(mysql_error());
?>
		<strong class="strg"><?php echo'le mot de passe &agrave; chang&eacute;!'; ?></strong>
         <br>
		<strong><a href="LoginForm.php"><?php echo 'Se connecter';?></a></strong>
	 <?php }
	  else {
		?>  <strong class="strg"><?php echo 'Ce pr&eacute;nom n&#146;existe pas';?></strong>
	 <?php }
			 }
	 else {
		 ?>
		 <strong class="strg"><?php echo'Erreur de confirmation de mot de pass!'; ?></strong>
	 <?php }
	 }
	 else{
?>
		 <strong class="strg"><?php echo'Erreur de remplissage'; ?></strong>
		
	<?php } 
	
	 }
     mysql_close();	 
	 
	 ?>
	 <!-- ----------------------------------------------------------------------------- -->
	 <form action="motdepass.php" method="post">
	 <h2 align="center" >changer de mot de passe :</h2>
	 <div class="d1">
		     <i class="fa fa-user icon"></i>
			 <input type="text" name="prenom" placeholder="entrez votre pr&eacute;nom">
		 </div>
	    <div class="d1">
		     <i class="fa fa-key icon"></i>
			 <input type="password" name="nouveau" placeholder="entrez le nouveau mot de passe">
		 </div>
		 <div class="d1">
		     <i class="fa fa-key icon"></i>
			 <input type="password" name="confirmer" placeholder="confirmez le mot de pass">
		 </div>
		     <input type="submit" class="btn" name="send" value="Enregistrer">
		   
	 </form>
      </div>	 
	 </body>
</html>