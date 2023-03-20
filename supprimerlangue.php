<!DOCTYPE html>
<html>
     <head>
	     <title>suppression d'une langue</title>
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
				 
             .btn{
	             background-color: black;
                 color: white;
                 padding: 4px ;
                 border: none;
                 cursor: pointer;
                 width: 20%;
                 opacity: 0.9;
                 }

             .btn:hover {
                 opacity: 1;
                 }

             .icon {
                 padding:6.5px;
                 background: black;
                 opacity: 0.9;
                 color: white;
                 min-width: 40px;
                 text-align: center;
                 font-size:15px;
                 }
             input[type="text"]{
	             width: 30%;
	             margin-left:-1%;
                 padding: 5px;
                 outline: none;
                 }
				 
              h3{
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
require("connexion.php");
     if(isset($_POST['supprimer'])){
		 if(isset($_POST['suplangue']) && !empty($_POST['suplangue'])){
			 $supp=htmlspecialchars($_POST['suplangue']);
			 mysql_query("delete from languelivre where langue='".$supp."'");
?>          <strong ><font color="red"><?php echo 'La langue ';echo $supp; echo' est supprim&eacute'; ?></font></strong>
<?php
		 }		 
	 }
	 $rqt=mysql_query("select * from languelivre order by langue") or die (mysql_error());
?>      
<table align="center">
     <tr>
	     <th>Langues </th>
	 </tr>
</table>
<?php while($resultat = mysql_fetch_array($rqt)){
		 $nom = $resultat['langue'];
 ?>      <table align="center">
              <tr>
			     <td ><strong><?php echo $nom ?></strong></td>
			  </tr>
         </table>
 <?php
} 
?>

<h3 align="center">Suppression d'une langue :</h3>
<div align="center" >
     <form action="supprimerlangue.php" method="post">
	 
	  <div align="center" >
	     <i class="fas fa-language icon"></i>
         <input type="text" name="suplangue" placeholder="Langue">
		 <input type="submit" name="supprimer" value="Supprimer" class="btn">
		 
      </div>
	  
	  </form>
</div>
</div>
	 </body>
</html>