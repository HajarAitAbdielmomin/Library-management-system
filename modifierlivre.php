<!DOCTYPE html>
<html>
     <head>
	 <title>Modification d'un livre</title>
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
<?php
     require("marquee.html");
     require("Vmenu.html");	 
?>	     
<div class="container">
<?php 
require("connexion.php");
     if(isset($_POST['modifier'])){
		 if(isset($_POST['Numlivre']) && !empty($_POST['Nomlivre'])){
			 $numero=htmlspecialchars($_POST['Numlivre']);
			 $nomlv=htmlspecialchars($_POST['Nomlivre']);
			 mysql_query("update livre set nom='".$nomlv."' where num_livre='".$numero."'");
?>          <strong ><font color="red"><?php echo 'Modifi&eacute; avec succ&egrave;s' ?></font></strong>
<?php
		 }		 
	 }
	 $rqt=mysql_query("select * from livre order by nom") or die (mysql_error());
?>      
<table align="center">
     <tr>
	     <th width="41%">Les livres </th>
	     <th width="10%">N&deg; de livre</th>
	 </tr>
</table>
<?php while($resultat = mysql_fetch_array($rqt)){
	     $Num = $resultat['num_livre'];
		 $nom = $resultat['nom'];
 ?>      <table align="center">
              <tr>
			     <td width="39%"><strong><?php echo $nom ?></strong></td>
				 <td width="10%"><strong><?php echo $Num ?></strong></td>
			  </tr>
         </table>
 <?php
} 
?>

<h3 align="center">Modification de livres :</h3>
<div align="center" >
     <form action="modifierlivre.php" method="post">
	 
	  <div align="center" >
	     <i class="fas fa-sort-numeric-up icon"></i>
         <input type="text" name="Numlivre" placeholder="Entrer le N&deg; de livre">
		 <br> <br>
		 <i class="fa fa-book icon"></i>
		 <input type="text" name="Nomlivre" placeholder="Livre modifi&eacute;">
      </div>
	  <input type="submit" name="modifier" value="Modifier" class="btn">
	  </form>
</div> 

</div>
	 </body>
</html>