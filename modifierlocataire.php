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
                 padding:7px;
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
    	$rqt=mysql_query("select id,prenom from louer order by prenom") or die (mysql_error());
		$rqt1=mysql_query("select Num_locataire from locataire order by prenom") or die (mysql_error());
?>      
<table align="center">
     <tr>
	     <th width="52%">Locataires </th>
		 <th width="10px">N&deg; de location</th>
		 <th width="10%">N&deg; de locataire</th>
	 </tr>
</table>
<?php while( $resultat=mysql_fetch_array($rqt) ){
	         $resultat1=mysql_fetch_array($rqt1);
		 $nom = $resultat['prenom'];
		 $id=$resultat['id'];
		  $id_locataire=$resultat1['Num_locataire'];
?> 
		  <table align="center">
              <tr>
			     <td width="18.3%"><strong><?php echo $nom ?></strong></td>
				 <td width="10.2%"><strong><?php echo $id ?></strong></td>
				 <td width="6.8%"><strong><?php echo $id_locataire ?></strong></td>
			  </tr>
         </table>
 <?php
	  }
	  
 
?>

<h3 align="center">Modification des locations :</h3>
<div align="center" >
     <form action="location.php" method="post">
	 
	  <div align="center" >
	     <i class="	fas fa-sort-numeric-up icon"></i>
         <input type="text" name="numlocation" placeholder="N&deg; de location">
		 <br>
		 <br>
		 <i class="	fas fa-sort-numeric-up icon"></i>
		 <input type="text" name="numlocataire" placeholder="N&deg; de locataire">
		 <br>
		 <br>
		 <i class="fas fa-user icon"></i>
		 <input type="text" name="prelocat" placeholder="pr&eacute;nom de locataire">
		 <br>
		 <br>
		 <input type="submit" name="entrer" value="Entrer" class="btn">
		 
      </div>
	  
	  </form>
</div>	 
</div>
	 </body>
</html>