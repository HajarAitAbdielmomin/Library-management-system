<!DOCTYPE HTML >
<html >
<head>
<meta charset="ISO 8859-1" >
<title>Les locataires</title>
     <style >
	
          body{		  
             margin:0;
             padding:0;
             background: url('bblio.jpg') no-repeat center fixed; 
             -webkit-background-size: cover; 
             background-size: cover; 
		     }
			 
         .container{
	         width: 80%;
	         height: 300px;
	         text-align: center;
	         margin: 0 auto;
	         background:rgba(251,251,251,0.5);
	         margin-top: 150px;
	         overflow-x:auto;	
             }
			 
         ::-webkit-scrollbar{
             width:8px;
             }
			 
         ::-webkit-scrollbar-thumb {
	         background:#ECD9BA;
   	         border-radius:100px;			 
             }
 
         table {
	         margin-top:3%;
             border-collapse:collapse ;
             border: 0.5px solid black;
             width: 100%;
             }

         th, td { 
             padding: 8px;
             border: 0.5px solid black;
             <!-- font-size:1.1vw; -->
             }

         tr:nth-child(even){background-color:#F5F5DD}

         th {
	         text-align: left;
             background-color: #ECD9BA;
             color: black;
             }
         h1{
	         padding-top:1%;
	         text-shadow:3px 4px 5px #333;
	         <!--position:fixed; -->
             }
			 
         .btn{
	         background-color: black;
             color: white;
             padding: 10px ;
             border: none;
             cursor: pointer;
             width: 10%;
             margin-left:0%;
             margin-top:2%;
             opacity: 0.9;	
             }

         .btn:hover {
             opacity: 1;
             }
		 .stg {
			 color:red;
			 font-size:25px;
		 }
	 </style>
</head>
<body>
 <?php 
 @session_start();
 require("marquee.html");
 //require("menu.html"); 
 ?>
 <div class="container" >
 <?php
     require ("connexion.php");
	/* if (isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
	
    $rqt=mysql_query("select prenom from locataire where prenom='".$uname."'");
	
	if(mysql_num_rows($rqt)){
		 $sql1=mysql_query("select * from locataire where  prenom='".$uname."' and mot_de_pass='".$password."'");
     
	 if(mysql_num_rows($sql1)!=1){
		
?>
		<script>
		alert('The password is not correct!');
		</script>
<?php	
      header("location:index.php");	
	   exit();
    }
	}
	else{
?>
	  <strong class="stg"><?php echo'Ce pr&eacute;nom n&#146;existe pas'; ?></strong>
	<?php 
	  exit();
	}
   
        
}*/
//----------------------------------------------------------------------------------------------------------//
    // if (isset($_POST['submit']) ) {
	 //if (isset($_POST['username'],$_POST['password']) && !empty($_POST['username']) and !empty ($_POST['password'])) 
		// if (isset($_POST['username'])) 
	       //{
			    if(isset($_SESSION['logged'])) {
	         $num=$_SESSION['prenom'];
			  
		     $requêt=mysql_query("select * from louer where prenom='$num' ")or die(mysql_error());
			?>
 <h1 align="center" color="white" >Vos locations :</h1>
<?php			
	        while($resultat = mysql_fetch_array($requêt)) 
				 //($resultat = mysql_fetch_array($requêt)) ;
			 {
		     $resultat_id=$resultat['id'];
			 $resultat_nom=$resultat['nom'];
			 $resultat_prenom=$resultat['prenom'];
			 $resultat_adresse=$resultat['adresse'];
			 $resultat_numero=$resultat['num_tele'];
			 $resultat_titre=$resultat['titre_livre'];
			 $resultat_genre=$resultat['genre_livre'];
			 $resultat_langue=$resultat['langue_livre'];
			 $resultat_auteur=$resultat['auteur_livre'];
			 $resultat_date=$resultat['date_parution'];
			 $resultat_lieu=$resultat['lieu_parution'];
			 $resultat_date1=$resultat['date_location'];
			 $resultat_date2=$resultat['date_retour'];
			 $resultat_image=$resultat['image_user'];
 ?>
    
           
             <table >
                 <tr>
                     <th >Nom</th>
                     <th >Pr&eacute;nom</th>
                     <th >Adresse</th>
                     <th >Num&eacute;ro de t&eacute;l&eacute;phone</th>
					 <th >Titre de livre</th>
					 <th >Genre de livre</th>
					 <th >Langue de livre</th>
					 <th >l'auteur</th>
					 <th >Date de parution</th>
					 <th >Lieu de parution</th>
					 <th >Date de location</th>
					 <th >Date de retour</th>
					 <th >image de locataire</th>
				 </tr>
				 <tr>
				     <td><?php echo $resultat_nom ?></td>
					 <td><?php echo $resultat_prenom ?></td>
					 <td><?php echo $resultat_adresse ?></td>
					 <td><?php echo $resultat_numero ?></td>
					 <td><?php echo $resultat_titre ?></td>
					 <td><?php echo $resultat_genre ?></td>
					 <td><?php echo $resultat_langue ?></td>
					 <td><?php echo $resultat_auteur ?></td>
					 <td><?php echo $resultat_date ?></td>
					 <td><?php echo $resultat_lieu ?></td>
					 <td><?php echo $resultat_date1 ?></td>
					 <td><?php echo $resultat_date2 ?></td>
					 <td><?php echo ('<img src="upload/'.$resultat_image.'" height="60px" width="60px" />'); ?></td>
				 </tr>
             </table>	
            			 
		<?php 
			 		 
		 
				 }
				 ?>
				  <form action="disconnect.php" method="post"> 
			     <input type="submit" value="D&eacute;connecter" name="send" class="btn">
			 </form>
			 <?php
				 }else {
					 header("location:LoginForm.php");
				 }
     mysql_close();
	  ?>
	</div>	 
</body>
</html>
