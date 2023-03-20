<!DOCTYPE html>
<html>
     <head>
	     <title></title>
		 <meta charset="utf-8">
		     <style>
	
         body{	  
             margin:0;
             padding:0;
             background: url('bblio.jpg') no-repeat center fixed; 
             -webkit-background-size: cover; 
             background-size: cover;			  
             }
			 
         ::-webkit-scrollbar{
             width:8px; 
             }
			 
         ::-webkit-scrollbar-thumb {
	         background:#ECD9BA;
   	         border-radius:100px;			 
             }
			 
         .container{
	         width: 50%;
	         height: 647px;
	         text-align: center;
	         margin: 0 auto;
	         background:rgba(251,251,251,0.5);
	         margin-top: 18px;
             }
			 
         a:hover {
             color: gray;
             }
			 
          a{
	         text-decoration:none;
	         color:black;
	         font-size:18px;
             }
			 
          h2{
	         padding-top:1%;
	         text-shadow:3px 4px 5px #333;
             }
			 
          h3{
	         padding-top:1%;
	         text-shadow:3px 4px 5px #333;
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
      $destin = "upload"; 
    if (isset($_POST["drapeau"]))
  {      echo '<h2>Envoi des fichiers ...</h2>';
    
         for($x=0;$x<sizeof($_FILES["srcfic"]["name"]);$x++)
	{
			 $nomup = $_FILES['srcfic']['name'][$x];
              if ($_FILES['srcfic']['error'][$x] >0)
         {
?>			 
            <h2><?php echo 'Erreur sur le fichier :&nbsp;' .$_FILES['srcfic']['error'][$x] . "<br><br>"; ?></h2>
<?php
         }
             else
         {
             if (file_exists("$destin/$nomup")) 
         {
             $ancienfic = $nomup . microtime() . ".old" ; 
             rename("$destin/$nomup","$destin/$ancienfic");
?>
            <h2><?php echo "<br>Le fichier " . $nomup . " existe déjà<br>L'ancien " . $nomup . " sera renommé " . $ancienfic . "<br>"; ?></h2>
<?php			
         }
             $siz = round($_FILES['srcfic']['size'][$x] / 1024,2); 
             $typ = $_FILES['srcfic']['type'][$x]; 
?>
             <h2><?php echo "Type&nbsp;:&nbsp;$typ<br>Taille&nbsp;:&nbsp;$siz&nbsp;Ko<br>"; ?></h2>
<?php
                 if($siz > 2256) 
             {
?>
                <h2><?php echo "Fichier &quot;$nom&quot; trop volumineux pour l'upload<br><br>";?></h2>
<?php
             }
                 else 
             {
                     switch ($typ)
                 {
                     case "image/gif":
                     case "image/pjpeg":
                     case "image/jpeg":
                     case "image/x-png":
                     case "image/png":
                     case "image/tiff":
                     case "image/bmp":
              if(move_uploaded_file($_FILES['srcfic']['tmp_name'][$x],"$destin/$nomup"))
             {
?>
                <h2><?php echo "Le fichier &quot;" . $_FILES['srcfic']['name'][$x] . "&quot; a été correctement envoyé ";
                 echo "dans le dossier &quot;$destin/&quot;</strong><br><br>";?></h2>
<?php
                 chmod("$destin/$nomup",0777);
             }
         else 
         { 
		     if ($nomup=="") $nomup = "Fichier_Inconnu"; {
?>
            <h2><?php echo "Désolé, je n'ai pas pu envoyer le fichier &quot;$nom&quot; dans le dossier &quot;$destin/&quot; !<br><br>";?></h2>
<?php			
			 }
         }
    break;
    
    default:
?>	
	<h2><?php echo "<br>Fichier &quot;$nom&quot; d'un type incorrect<br><br>"; ?></h2>
<?php
	break;
	             } 
             }
         } 
    } 
   
  }
  require("connexion.php");
  if (isset($_POST['bouton'])) {
	  if(isset($_POST['prenom'],$_POST['nom'],$_POST['numero'],$_POST['adresse'],$_POST['langue'],$_POST['auteur'],$_POST['datePa'],$_POST['lieu'],$_POST['motdepass'],$_POST['dateLo'],$_POST['titre'],$_POST['dateRo'],$_POST['genre'])
		 && !empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['numero']) && !empty($_POST['adresse']) && !empty($_POST['langue']) && !empty($_POST['auteur']) && !empty($_POST['datePa']) && !empty($_POST['lieu']) && !empty($_POST['motdepass']) && !empty($_POST['dateLo']) && !empty($_POST['titre']) && !empty($_POST['dateRo']) && !empty($_POST['genre'])) 
	  {
             $password=htmlspecialchars($_POST['motdepass']);
			 $nom=htmlspecialchars($_POST['nom']);
			 $prenom=htmlspecialchars($_POST['prenom']);
			 $adresse=htmlspecialchars($_POST['adresse']);
			 $numero=htmlspecialchars($_POST['numero']);
			 $titre=htmlspecialchars($_POST['titre']);
			 $genre=htmlspecialchars($_POST['genre']);
			 $langue=htmlspecialchars($_POST['langue']);
			 $auteur=htmlspecialchars($_POST['auteur']);
			 $dateparu=htmlspecialchars($_POST['datePa']);
			 $lieu=htmlspecialchars($_POST['lieu']);
			 $date1=htmlspecialchars($_POST['dateLo']);
			 $date2=htmlspecialchars($_POST['dateRo']);
			 $img = $nomup;
			 
			 mysql_query("insert into `louer` values('','".$nom."','".$prenom."','".$adresse."','".$numero."','".$titre."','".$genre."','".$langue."','".$auteur."','".$dateparu."','".$lieu."','".$date1."','".$date2."','".$img."')") or die (mysql_error());
			 mysql_query("insert into `locataire` values('','".$prenom."','".$password."')"); 
			 
	?>
	<h3 align="center"><?php echo'Formulaire à bien été enregistré !'; ?></h3>
	<br>
	<br>		 
	<a href="LoginForm.php"> <h3> Se connecter </h3></a>
<?php	
	  }
else {
?>    
     <h2><?php echo 'vous n`avez pas rempli toutes les informations'; ?></h2>
	   <a href="inscrire.php"> <h3> Retour </h3></a>
    <?php 
	}	
    }
	mysql_close();
?>	   </div>  
	 </body>
</html>