<!DOCTYPE HTML >
<html>
     <head>
           <meta charset="utf-8" >
           <title>Accueil</title>
		   
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
	             height: 300px;
	             text-align: center;
	             margin: 0 auto;
	             background:rgba(251,251,251,0.5);
	             margin-top:175px;
                 }
				 
             ::-webkit-scrollbar{
                 width:8px;
             }
			 
             ::-webkit-scrollbar-thumb {
	             background:#ECD9BA;
   	             border-radius:100px;			 
                 }
             .btn{
	             background-color: black;
                 color: white;
                 padding: 15px ;
                 border: 2px inset khaki;
                 cursor: pointer;
                 width: 60%;
                 margin-left:0%;
                 margin-top:10%;
                 opacity: 0.75;
				 color:khaki;
                 }
				 .form{
					 width:0;
				 }
				 .form1{
					 width:0;
				 }
             .btn:hover {
                 opacity: 1;
                 }
             .btn1{
	             background-color: black;
                 color: white;
                 padding: 15px ;
                 border: 2px inset khaki;
                 cursor: pointer;
                 width: 60%;
                 margin-left:0%;
                 margin-top:0%;
                 opacity: 0.75;
				 color:khaki;
                 }
				 .btn1:hover {
                 opacity: 1;
                 }
				 h1{
					 text-shadow:3px 1px 5px khaki;
					 text-align:center;
					 padding-top:12px;
					 text-decoration : underline;
					 
				 }
				 h3 {
					 text-shadow:3px 1px 5px khaki;
					 text-align:center;
				 }
         </style>
     </head>

     <body>
    <div class="container">
	     <h1><i>Bienvenue au bibliothéque</i></h1>
		 <h3><i>Vous êtes le locataire ou le bibliothécaire?</i></h3>
	     <form action="LoginForm.php" method="post" name="form">
		     <input type="submit" value="Locataire" name="send" class="btn">
		 </form>
		 <form action="LoginFormLb.php" method="post" name="form1">
		     <input type="submit" value="Bibliothécaire" name="send1" class="btn1">
		 </form>
	</div>
</body>
</html>
