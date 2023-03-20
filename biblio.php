<!DOCTYPE html >
<html >
     <head>
           <meta  charset="utf-8" />
           <title>Bibliothéque</title>
         <style type="text/css">
         
             body{			  
                 margin:0;
                 padding:0;
                 background: url('bblio.jpg') no-repeat center fixed; 
                 -webkit-background-size: cover; 
                 background-size: cover;  
		         }	
				 
             .container{
	             width: 500px;
	             height: 200px;
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
				 h1{
					 text-align:center;
					 padding:10%;
					 text-shadow : 5px 3px 4px khaki;
				 }
         </style>
     </head>

     <body>
 <?php require("marquee.html");
       require("Vmenu.html");     
?>
	<div class="container">
	     <h1>Bienvenue dans votre bibliothèque... :)</h1>     
	</div>
</body>
</html>