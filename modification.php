<!DOCTYPE html>
<html>
   <head>
         <title>Modifier location</title>
		 <meta charset="ISO 8859-1">
		 <style>
		     body{ 
                 margin:0;
                 padding:0;
                 background: url('bblio.jpg') no-repeat center fixed; 
                 -webkit-background-size: cover; 
                 background-size: cover;  
		         }	
				 
             .container{
	             width: 80%;
	             height: 310px;
	             text-align: center;
	             margin: 0 auto;
	             background:rgba(251,251,251,0.5);
	             margin-top: 85px;
				 margin-left:18%;
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
	             
                 }
				 
			 h2{
	             padding-top:1%;
	             text-shadow:3px 4px 5px #333;
	             
                 }
		 </style>
   </head>
   <body>
<?php
    require("marquee.html");
    require("Vmenu.html");	
?>   
<div class="container"> 
<?php
$destin = "upload";
         if ( ($_FILES['photo']['error'] == 0) ) {
			 if ( ($_FILES['photo']['type'] == "image/jpg") || ($_FILES['photo']['type'] == "image/png") || ($_FILES['photo']['type'] == "image/jpeg") ) {
				 if ( $_FILES['photo']['size'] < 10000 ) {
				 $nomup = $_FILES['photo']['name'];
				 /*if (file_exists("$destin/$nomup")) 
                 {
                 $renomer = $nomup .".old" ; 
                 rename("$destin/$nomup","$destin/$renommer");
		         }*/
				 $nomtmp = $_FILES['photo']['tmp_name'];
				 move_uploaded_file($nomtmp,"$destin/$nomup");
				 }
			 }
		 }
	require("connexion.php");
	if (isset($_POST['modifier'])){
		

		 if(isset($_POST['prenom'],$_POST['nom'],$_POST['numero'],$_POST['adresse'],$_POST['langue'],$_POST['auteur'],$_POST['datePa'],$_POST['lieu'],$_POST['motdepass'],$_POST['dateLo'],$_POST['titre'],$_POST['dateRo'],$_POST['genre'],$_POST['idlocation'],$_POST['idlocataire'])
		 && !empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['numero']) && !empty($_POST['adresse']) && !empty($_POST['langue']) && !empty($_POST['auteur']) && !empty($_POST['datePa']) && !empty($_POST['lieu']) && !empty($_POST['motdepass']) && !empty($_POST['dateLo']) && !empty($_POST['titre']) && !empty($_POST['dateRo']) && !empty($_POST['genre']) && !empty($_POST['idlocation']) && !empty($_POST['idlocataire']) )
		 {   
		 
		     $preloc=htmlspecialchars($_POST['prenom']);
			 $nomloc=htmlspecialchars($_POST['nom']);
			 $numloc=htmlspecialchars($_POST['numero']);
			 $adrsloc=htmlspecialchars($_POST['adresse']);
			 $langueloc=htmlspecialchars($_POST['langue']);
			 $auteurloc=htmlspecialchars($_POST['auteur']);
			 $datep=htmlspecialchars($_POST['datePa']);
			 $lieup=htmlspecialchars($_POST['lieu']);
			 $passwordloc=htmlspecialchars($_POST['motdepass']);
			 $datel=htmlspecialchars($_POST['dateLo']);
			 $titreliv=htmlspecialchars($_POST['titre']);
			 $dater=htmlspecialchars($_POST['dateRo']);
			 $genreliv=htmlspecialchars($_POST['genre']);
			 $idlocation=htmlspecialchars($_POST['idlocation']);
			 $numlocataire=htmlspecialchars($_POST['idlocataire']);
			 $photo = $nomup;
			 
			if ($photo != ""){
				mysql_query(" update `louer` set nom='".$nomloc."', prenom='".$preloc."', adresse='".$adrsloc."', num_tele='".$numloc."', titre_livre='".$titreliv."', genre_livre='".$genreliv."', langue_livre='".$langueloc."', auteur_livre='".$auteurloc."', date_parution='".$datep."', lieu_parution='".$lieup."', date_location='".$datel."', date_retour='".$dater."', image_user='".$photo."' where id='".$idlocation."' ") or die (mysql_error());
			} 
             else{
               mysql_query(" update `louer` set nom='".$nomloc."', prenom='".$preloc."', adresse='".$adrsloc."', num_tele='".$numloc."', titre_livre='".$titreliv."', genre_livre='".$genreliv."', langue_livre='".$langueloc."', auteur_livre='".$auteurloc."', date_parution='".$datep."', lieu_parution='".$lieup."', date_location='".$datel."', date_retour='".$dater."' where id='".$idlocation."' ") or die (mysql_error());
             }
?>
      		 <h2><?php// echo 'Mise &agrave; jour N&deg;1 avec succ&egrave;s';?></h2>
<?php
			 mysql_query(" update `locataire` set mot_de_pass='".$passwordloc."', prenom='".$preloc."' where Num_locataire='".$numlocataire."' ") or die (mysql_error());
?>
			 <h2><?php //echo 'Mise &agrave; jour N&deg;2 avec succ&egrave;s';?></h2>
<?php			 
		    $reqt=mysql_query("select * from  `louer` where id='".$idlocation."'");
			 
			while( $result = mysql_fetch_array($reqt)){
			
			 $result_idlocat=$result['id'];
			 $result_nom=$result['nom'];
			 $result_prenom=$result['prenom'];
			 $result_adrsloc=$result['adresse'];
			 $result_numloc=$result['num_tele'];
			 $result_titreliv=$result['titre_livre'];
			 $result_genreliv=$result['genre_livre'];
			 $result_langueloc=$result['langue_livre'];
			 $result_auteurloc=$result['auteur_livre'];
			 $result_datep=$result['date_parution'];
			 $result_lieup=$result['lieu_parution'];
			 $result_datel=$result['date_location'];
			 $result_dater=$result['date_retour'];
			 $result_photo =$result['image_user'];
?>			 
 <h1 align="center" color="white" >Locataire N&deg;: <?php echo $result_idlocat ; ?></h1>
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
				     <td><?php echo $result_nom?></td>
					 <td><?php echo $result_prenom ?></td>
					 <td><?php echo $result_adrsloc ?></td>
					 <td><?php echo $result_numloc ?></td>
					 <td><?php echo $result_titreliv ?></td>
					 <td><?php echo $result_genreliv ?></td>
					 <td><?php echo $result_langueloc ?></td>
					 <td><?php echo $result_auteurloc ?></td>
					 <td><?php echo $result_datep ?></td>
					 <td><?php echo $result_lieup ?></td>
					 <td><?php echo $result_datel ?></td>
					 <td><?php echo $result_dater ?></td>
					 <td><?php echo ('<img src="upload/'.$result_photo.'" height="60px" width="60px" />'); ?></td>
				 </tr>
             </table>	
             <br>
             <br>	
<?php	
			}
  	}
	mysql_close();
}
?>
</div>
   </body>
</html>