<!DOCTYPE html>
<html>
     <head>
	     <title>Modification d'un genre de livre</title>
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
	             width: 500px;
	             height: 425px;
	             text-align: center;
	             margin: 0 auto;
	             background:rgba(251,251,251,0.5);
	             margin-top: 10px;
	             padding-top:1%;
	             overflow-y:auto;
                 }
				 
             ::-webkit-scrollbar{
                 width:8px; 
                  }
				  
             ::-webkit-scrollbar-thumb {
	             background:#ECD9BA;
   	             border-radius:100px;			 
                 }
				 
               h3{
	             padding-top:1%;
	             text-shadow:3px 4px 5px #333;
                 }
				 
             .btn{
	             background-color: black;
                 color: white;
                 padding: 8px ;
                 border: none;
                 cursor: pointer;
                 width: 20%;
                 margin-left:0%;
                 margin-top:1%;
                 opacity: 0.9;
                 }
				 
             .btn:hover {
                 opacity: 1;
                 }
				 
             .icon {	
                 padding:7.5px;
                 background: black;
                 opacity: 0.9;
                 color: white;
                 min-width: 40px;
                 text-align: center;
                 font-size:13.5px;
                 }
				 
             input[type="text"]{
	             width: 40%;
	             margin-left:-1%;
                 padding: 5px;
                 outline: none;
                 }
				 
             table {
                 border-collapse: collapse;
                 width: 70%;
                 }

             th, td {
                 padding:3px;
                 border: 1px solid black;
                 }

             th {
                 background-color: #ECD9BA; 
                 }
         </style>
	 </head>
	 <body>
<?php require("marquee.html");
      require("Vmenu.html");   
?>	    
<div class="container">
<?php
     require("connexion.php");
  if(isset($_POST['modifier'])){
		 if(isset($_POST['Num'],$_POST['nomgenre']) && !empty($_POST['nomgenre']) && !empty($_POST['Num'])){
			 $numero=htmlspecialchars($_POST['Num']);
			 $nomgn=htmlspecialchars($_POST['nomgenre']);
			 mysql_query("update genrelivre set genre='".$nomgn."' where id='".$numero."'");
?>          <strong ><font color="red"><?php echo 'Modifi&eacute; avec succ&egrave;s' ?></font></strong>
<?php
		 }		 
	 }
	 $rqt=mysql_query("select * from genrelivre order by genre") or die (mysql_error());
?>      
<table align="center">
     <tr>
	     <th width="41%">Genres </th>
	     <th width="10%">N&deg; de genre</th>
	 </tr>
</table>
<?php while($resultat = mysql_fetch_array($rqt)){
	     $nom = $resultat['genre'];
		 $Num = $resultat['id'];
 ?>      <table align="center">
              <tr>
			     <td width="35%"><strong><?php echo $nom ?></strong></td>
				 <td width="10%"><strong><?php echo $Num ?></strong></td>
			  </tr>
         </table>
 <?php
} 
?>

<h3 align="center">Modification de genres de livres :</h3>
<div align="center" >
     <form action="modifiergenre.php" method="post">
	 
	  <div align="center" >
	     <i class="fas fa-sort-numeric-up icon"></i>
         <input type="text" name="Num" placeholder="Entrer le N&deg; de genre">
		 <br> <br>
		 <i class="fa fa-book icon"></i>
		 <input type="text" name="nomgenre" placeholder="Genre modifi&eacute;">
      </div>
	  <input type="submit" name="modifier" value="Modifier" class="btn">
	  </form>
</div> 
</div>
	 </body>
</html>