<!DOCTYPE html>
<html>
     <head>
	     <title>Modifier location</title>
		 <meta charset="ISO 8859-1">
		 <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
		 <style>
		      body{	  
                 margin:0;
                 padding:0;
                 background: url('bblio.jpg') no-repeat center fixed; 
                 -webkit-background-size: cover; 
                 background-size: cover;  
		         }
				 
             .container{
	             width: 50%;
	             height: 585px;
	             text-align: center;
	             margin: 0 auto;
	             background:rgba(251,251,251,0.5);
	             margin-top: -50px;
                 }
				 
             ::-webkit-scrollbar{
                 width:8px;
                 }
				 
             ::-webkit-scrollbar-thumb {
	             background:#ECD9BA;
   	             border-radius:100px;			 
                 }
				 
           .icon {
	             margin-top:8%;
	             margin-left:10%;
                 padding:10px;
                 background: black;
                 opacity: 0.9;
                 color: white;
                 min-width: 30px;
                 font-size:15px;
                 }
             input[type="text"],input[type="password"],input[type="file"]{
	             width: 20%;
                 padding: 8px;
                 outline: none;
                 margin-top:8%;
                 }
			 input[type="date"]{
				 width: 21%;
                 padding: 5px;
                 outline: none;
                 margin-top:8%;
			 }
             select {
	             width: 23%;
                 padding: 8px;
                 outline: none;
                 margin-top:8%;
                 }

             .form{
	             display: -ms-flexbox; 
                 display: flex;
                 width: 100%;
                 margin-bottom: 15px;  
                 }

             .form1{
	             display: -ms-flexbox; 
                 display: flex;
                 width: 100%;
                 margin-bottom:-15px ; }

	         .form2{
	             display: -ms-flexbox; 
                 display: flex;
                 width: 100%;
                 margin-top:-30px;
				 }

             .form3 {
	             display: -ms-flexbox; 
                 display: flex;
                 width: 100%;
                 margin-top:-20px; 
				 } 

             .form4 {
	             display: -ms-flexbox; 
                 display: flex;
                 width: 100%;
                 margin-left:50%;
                 margin-top:-45.2%;
				 }
				 
             .form5 {
	             display: -ms-flexbox; 
                 display: flex;
                 width: 100%;
                 margin-left:50%;
                 margin-top:-2%; 
				 } 

             .form6 {
	             display: -ms-flexbox; 
                 display: flex;
                 width: 100%;
                 margin-left:50%;
                 margin-top:-2.2%; 
				 }

             .form7 {
	             display: -ms-flexbox; 
                 display: flex;
                 width: 100%;
                 margin-left:50%;
                 margin-top:-3%; 
				 }

             .form8 {
	             display: -ms-flexbox; 
                 display: flex;
                 width: 100%;
                 margin-left:0%;
                 margin-top:-2.65%; 
				 }

             .form9 {
	             display: -ms-flexbox; 
                 display: flex;
                 width: 100%;
                 margin-left:50%;
                 margin-top:-13%; 
				 }

             .form10 {
	             display: -ms-flexbox; 
                 display: flex;
                 width: 100%;
                 margin-left:0%;
                 margin-top:-3%;
				 }

             .form11 {	
	             display: -ms-flexbox; 
                 display: flex;
                 width: 100%;
                 margin-left:50%;
                 margin-top:-13.1%; 
				 }

             .form12{
	             display: -ms-flexbox; 
                 display: flex;
                 width: 100%;
                 margin-left:0%;
                 margin-top:-2%;
                 }
				 
             
				 
				 .form13{
	             display: -ms-flexbox; 
                 display: flex;
                 width: 50%;
                 margin-left:60%;
                 margin-top:-7%;
                 }
				  label{
					width:150px;
                    padding: 10px;
                    background: black; 
                    display: table;
                    color: white;
	                border-radius: 10px;
	                cursor:pointer;
	                opacity:0.9;
                 }
				 
                  label:hover {
                     background-color:black;
	                 opacity:2;   
                 }
 		 
		         input[type="file"] {
                  display: none;
                 }
				

            .btn{
	             background-color: black;
                 color: white;
                 padding: 10px ;
                 border: none;
                 cursor: pointer;
                 width: 25%;
                 margin-left:0%;
                 margin-top:3%;
                 opacity: 0.9;
                 }
             .btn:hover {
                 opacity: 2;
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
  require("connexion.php");
 if(isset($_POST['entrer'])){
         if(isset($_POST['numlocation'],$_POST['prelocat'],$_POST['numlocataire']) && !empty($_POST['numlocataire']) && !empty($_POST['numlocation']) && !empty($_POST['prelocat'])){
			 $idlocation=htmlspecialchars($_POST['numlocation']);
			 $idlocataire=htmlspecialchars($_POST['numlocataire']);
			 $prenom=htmlspecialchars($_POST['prelocat']);
   
         $requet=mysql_query("select * from louer where id='".$idlocation."' ") or die (mysql_error());	
          		 $resultat_rq=mysql_fetch_array($requet);
				 $resultat_id=$resultat_rq['id'];
				 $resultat_nom=$resultat_rq['nom'];
				 $resultat_prenom=$resultat_rq['prenom'];
				 $resultat_adresse=$resultat_rq['adresse'];
				 $resultat_numtel=$resultat_rq['num_tele'];
				 $resultat_titre=$resultat_rq['titre_livre'];
				 $resultat_genre=$resultat_rq['genre_livre'];
				 $resultat_langue=$resultat_rq['langue_livre'];
				 $resultat_auteur=$resultat_rq['auteur_livre'];
				 $resultat_datep=$resultat_rq['date_parution'];
				 $resultat_lieup=$resultat_rq['lieu_parution'];
				 $resultat_datelo=$resultat_rq['date_location'];
				 $resultat_datere=$resultat_rq['date_retour'];
				 $resultat_image=$resultat_rq['image_user'];
         $requet2=mysql_query("select mot_de_pass from locataire where Num_locataire='".$idlocataire."'")or die (mysql_error());
		 $resultat_rq2=mysql_fetch_array($requet2);
		 $resultat_password=$resultat_rq2['mot_de_pass'];
	 //------------------------------------------------------------------------
			 $genre_lv=mysql_query("select `genre` from `genrelivre`");
       $genre="";
	   while(list($genre_nom)=mysql_fetch_row($genre_lv)){
		     $genre.="<option>$genre_nom</option>";
	   }
	         $genre="<option >$resultat_genre</option>".$genre;
	 //------------------------------------------------------------------------
	 $langue_lv=mysql_query("select `langue` from languelivre");
	  $langue="";
	  while(list($langue_nom)=mysql_fetch_row($langue_lv)){
		     $langue.="<option>$langue_nom</option>";
	  }
	         $langue="<option >$resultat_langue</option>".$langue;
	 //------------------------------------------------------------------------
	    $titre_livre=mysql_query("select `nom` from livre");
		  $titre="";
		  while(list($nom_lv)=mysql_fetch_row($titre_livre)){
			  $titre.="<option>$nom_lv</option>";
		  }
		      $titre="<option >$resultat_titre</option>".$titre;
			  
     //------------------------------------------------------------------------
?>              

           <!--  <h3 align="center" color="white" >Locataire N&deg;: <?php// echo $resultat_id ; ?></h3> -->
		     <form action="modification.php" enctype="multipart/form-data" method="post">
		<div class="form1"  >
          <i class="fa fa-user icon"></i>
		<input type="text" name="prenom"  value="<?php echo $resultat_prenom ?>">	
		</div>
		<div class="form">
		<i class="fa fa-user icon"></i>
		<input type="text" name="nom"  value="<?php echo $resultat_nom ?>">
		</div>
		<div class="form2">
		<i class="fas fa-phone icon"></i>
		<input type="text" name="numero"  value="<?php echo $resultat_numtel ?>">
		</div>
		<div class="form3">
		<i class="fas fa-address-book icon"></i>
		<input type="text" name="adresse" value="<?php echo $resultat_adresse ?>">
		</div>
		<div class="form4">
		<i class="fas fa-language icon"></i>
         <select name="langue">
             <?php echo $langue;?>
		</select>
		</div>
		<div class="form5">
				<i class="fa fa-user icon"></i>
		<input type="text" name="auteur" value="<?php echo $resultat_auteur ?>" >
		</div>
		<div class="form6"> 
		   <i class="fa fa-calendar icon"></i>
		<input type="date" name="datePa" title="date de parution" value="<?php echo $resultat_datep ?>">
		</div>
		<div class="form7">
		<i class="fa fa-map-marker-alt icon"></i>
		<input type="text" name="lieu"  value="<?php echo $resultat_lieup ?>">
		  
		</div>
		<div class="form8">
		<i class="fas fa-key icon"></i>
		   <input type="password" name="motdepass"  value="<?php echo $resultat_password ?>">
		
		</div>
		<div class="form9">
		   <i class="fa fa-calendar icon"></i>
         <input type="date" name="dateLo" title="date de location" value="<?php echo $resultat_datelo ?>">
		</div>
		<div class="form10">
			 <i class="fa fa-book icon"></i>
		      <select name="titre">
             <?php echo $titre ?>
		</select>
		
		</div>
		  <div class="form11">
		   <i class="fa fa-calendar icon"></i>
         <input type="date" name="dateRo" title="date de retour" value="<?php echo $resultat_datere ?>">
		</div>
		<div class="form12">
		 <i class="fas fa-book icon"></i>
		  <select name="genre">
           <?php echo $genre; ?>
		</select>
		</div>
		<div>
		      <input type="hidden" name="idlocation" value="<?php  echo $resultat_id ?>">
			  <input type="hidden" name="idlocataire" value="<?php echo $idlocataire ?>">
			  
		</div>
		<div class="form13">
		
		   <?php echo ('<img src="upload/'.$resultat_image.'" height="30" />'); ?>
		   <input type="hidden" name="drapeau"  value="oui" />
		   <label> Choisir une image
          <input type="file" size="60" class="upload" name="photo" >
           </label>
		   
		</div>
		<input type="submit" name="modifier" value="Modifier" class="btn">
		</form>
<?php
		 }		 
}	 ?>
</div>
	 </body>
</html>