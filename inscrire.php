<!DOCTYPE html >
<html>
     <head>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	 <meta charset="ISO 8859-1">
	     <title>Inscrire</title>
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
	         height:631.5px;
	         text-align: center;
	         margin: 0 auto;
	         background:rgba(251,251,251,0.5);
	         margin-top:50px;
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
			 
         input[type="text"],input[type="password"]{
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
             margin-bottom:-15px ; 
			 }

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
             margin-top:-45.5%;
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
             margin-top:-2.8%;
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
             margin-top:-13.3%;
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
             margin-left:62.5%;
			 margin-top:-5%;
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
             padding: 15px ;
             border: none;
             cursor: pointer;
             width: 25%;
             margin-left:0%;
             margin-top:2%;
             opacity: 0.9; 	
             }
			 
         .btn:hover {
              opacity: 2;
             }
			 
         a:hover {
             color: gray;
         }
		 
         a{
	         text-decoration:none;
	         color:white;
	          font-size:18px;	
              }
			  
         .div1 {
 	         margin-left:0%;
	         width:100%;
	         height:32px;
	         background-color:black;
	         opacity: 0.7;
	         margin-top:0.57%;
	         padding-top:10px;
             }
			 
</style>
	 </head>
	 <body>
<?php
              require("marquee.html");
			 // require("Vmenu.html");
      require("connexion.php");
	  $genre_lv=mysql_query("select `genre` from `genrelivre`");
       //$genre="";
	   while(list($genre_nom)=mysql_fetch_array($genre_lv)){
		     $genre.="<option>$genre_nom</option>";
	   }
	         //$genre="<option value='-1'>Genre de livre</option>".$genre;
	//-----------------------------------------------------------------------
	 $langue_lv=mysql_query("select `langue` from languelivre");
	  $langue="";
	  while(list($langue_nom)=mysql_fetch_row($langue_lv)){
		     $langue.="<option>$langue_nom</option>";
	  }
	         $langue="<option value='-1'>Langue</option>".$langue;
	//------------------------------------------------------------------------
	    $titre_livre=mysql_query("select `nom` from livre");
		  $titre="";
		  while(list($nom_lv)=mysql_fetch_row($titre_livre)){
			  $titre.="<option>$nom_lv</option>";
		  }
		      $titre="<option value='-1'>Titre de livre</option>".$titre;
			  
?>

	    
		 <div class="container">
		     <form action="Enregistrement.php" enctype="multipart/form-data" method="post">
		<div class="form1"  >
          <i class="fa fa-user icon"></i>
		<input type="text" name="prenom"  placeholder="pr&eacute;nom de l'utilisateur"/>	
		</div>
		<div class="form">
		<i class="fa fa-user icon"></i>
		<input type="text" name="nom"  placeholder="nom de l'utilisateur"/>
		</div>
		<div class="form2">
		<i class="fas fa-phone icon"></i>
		<input type="text" name="numero"  placeholder="num&eacute;ro de telephone"/>
		</div>
		<div class="form3">
		<i class="fas fa-address-book icon"></i>
		<input type="text" name="adresse"  placeholder="adresse"/>
		</div>
		<div class="form4">
		<i class="fas fa-language icon"></i>
         <select name="langue">
             <?php echo $langue;?>
		</select>
		</div>
		<div class="form5">
				<i class="fa fa-user icon"></i>
		<input type="text" name="auteur"  placeholder="l'auteur de livre"/>
		</div>
		<div class="form6"> 
		   <i class="fa fa-calendar icon"></i>
		<input type="date" name="datePa" title="date de parution" placeholder="date de parution"/>
		</div>
		<div class="form7">
		<i class="fa fa-map-marker-alt icon"></i>
		<input type="text" name="lieu"  placeholder="lieu de parution"/>
		  
		</div>
		<div class="form8">
		<i class="fas fa-key icon"></i>
		   <input type="password" name="motdepass"  placeholder="mot de pass">
		
		</div>
		<div class="form9">
		   <i class="fa fa-calendar icon"></i>
         <input type="date" name="dateLo" title="date de location"  placeholder="date de location"/>
		</div>
		<div class="form10">
			 <i class="fa fa-book icon"></i>
		      <select name="titre">
             <?php echo $titre; ?>
		</select>
		
		</div>
		  <div class="form11">
		   <i class="fa fa-calendar icon"></i>
         <input type="date" name="dateRo" title="date de retour" placeholder="date de retour"/>
		</div>
		<div class="form12">
		 <i class="fas fa-book icon"></i>
		  <select name="genre">
           <?php echo $genre; ?>
		</select>
		</div>
		<div class="form13">
		     <label> Choisir une image
             <input type="file" size="60" class="upload" name="srcfic[]">
             </label> 
	         <input type="hidden" name="drapeau"  value="oui" />
		</div>
		<input type="submit" name="bouton" value="Enregistrer" class="btn">
		</form>
		<div class="div1">
		<a href="LoginForm.php">Se connecter</a>
		</div>
		 </div>
	 </body>
</html>