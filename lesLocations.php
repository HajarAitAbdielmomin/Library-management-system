<!DOCTYPE html>
<html>
     <head>
	     <title>Les locations</title>
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
	         height: 330px;
	         text-align: center;
	         margin: 0 auto;
	         background:rgba(251,251,251,0.5);
	         margin-top: 50px;
			 margin-left:18%;
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
	         margin-top:2.5%;
             border-collapse:collapse ;
             border: 0.5px solid black;
             width: 100%;
             }

         th, td {
             padding: 8px;
             border: 0.5px solid black;
             width:40px;
             text-align:left;
             <!-- font-size:1.1vw; -->
             }

         tr:nth-child(even){background-color:#F5F5DD}

         th {
             background-color: #ECD9BA;
             color: black;
             }
         
		  h1{
	         padding-top:1%;
	         text-shadow:3px 4px 5px #333;
	         <!--position:fixed; -->
             }
			 .pagi {
				 background-color:#F5F5DD;
				  
                 font-size:18px;
                 padding: 5px 9px;
                 border:0.5px solid black;			 
                 color: black; 
                 
				 color:black;
			 }
		
		 .pagi:hover{
			 background-color:#ECD9BA;
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
		$results_per_page = 2;
		$sql=mysql_query("select * from louer");
		$number_of_results = mysql_num_rows($sql);
		
		$number_of_pages = ceil($number_of_results/$results_per_page);
	  if(!isset($_GET['page']))
	     {
		  $page=1;
	     } 
		 else  {
		  $page=$_GET['page'];
	             }
	  $this_page_first_result = ($page-1)*$results_per_page;
	  $sql= ("select * from louer limit " . $this_page_first_result . ',' . $results_per_page);
      $result = mysql_query($sql);
		
     // $requet=mysql_query("select * from louer");
?>   	

	 <h1 align="center" color="white" >Les locations:</h1>   
	
<?php
      while($result_requet=mysql_fetch_array($result)){
		  $result_nom=$result_requet['nom'];
		  $result_prenom=$result_requet['prenom'];
		  $result_adresse=$result_requet['adresse'];
		  $result_num=$result_requet['num_tele'];
		  $result_titre=$result_requet['titre_livre'];
		  $result_genre=$result_requet['genre_livre'];
		  $result_langue=$result_requet['langue_livre'];
		  $result_auteur=$result_requet['auteur_livre'];
		  $result_date1=$result_requet['date_parution'];
		  $result_lieu=$result_requet['lieu_parution'];
		  $result_date2=$result_requet['date_location'];
		  $result_date3=$result_requet['date_retour'];
		  $result_image=$result_requet['image_user'];
?>        
       <table>
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
		 <td><?php echo $result_nom ?></td>
		 <td><?php echo $result_prenom ?></td>
		 <td><?php echo $result_adresse ?></td>
		 <td><?php echo $result_num ?></td>
		 <td><?php echo $result_titre ?></td>
		 <td><?php echo $result_genre ?></td>
		 <td><?php echo $result_langue ?></td>
		 <td><?php echo $result_auteur ?></td>
		 <td><?php echo $result_date1 ?></td>
		 <td><?php echo $result_lieu ?></td>
		 <td><?php echo $result_date2 ?></td>
		 <td><?php echo $result_date3 ?></td>
		 <td><?php echo ('<img src="upload/'.$result_image.'" height="60px" width="60px" />'); ?></td> 
     </tr>
	 </table>
	 <br>
<?php   } 
       
      for($page=1;$page<=$number_of_pages;$page++){
		  echo '<a class="pagi" href="lesLocations.php?page='.$page.'">'.$page.' </a>';
	  }
	  
	mysql_close();
?>
</div>
	 </body>
</html>