<!DOCTYPE HTML>
<html>
     <head>
           <meta charset="utf-8" >
           <title>Login</title>
		   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	             height: 476px;
	             text-align: center;
	             margin: 0 auto;
	             background:rgba(251,251,251,0.5);
	             margin-top:90px;
                 }
				 
             ::-webkit-scrollbar{
                 width:8px;
             }
			 
             ::-webkit-scrollbar-thumb {
	             background:#ECD9BA;
   	             border-radius:100px;			 
                 }
				 
             .container img{
	             width: 150px;
	             height: 150px;
	             margin-top: -60px;
				 margin-left : -5%;
                 }
 
             input[type="text"],input[type="password"]{
	             width: 50%;
                 padding: 15px;
                 outline: none;
                 margin-top:8%;
                 } 
				 
             .form{
	             display: -ms-flexbox;
                 display: flex;
                 width: 100%;
                 margin-bottom: 15px;  
                 }
 
             .btn{
	             background-color: black;
                 color: white;
                 padding: 15px ;
                 border: none;
                 cursor: pointer;
                 width: 25%;
                 margin-left:0%;
                 margin-top:5%;
                 opacity: 0.9;
                 }
				 
             .btn:hover {
                 opacity: 1;
                 }
				 
             .icon {
	             margin-top:8%;
	             margin-left:13%;
                 padding:13px;
                 background: black;
                 opacity: 0.9;
                 color: white;
                 min-width: 50px;
                 text-align: center;
                 font-size:25px;
                 }
				 
             a:hover {
                 color: gray;
                 }
				 
             a{
	             text-decoration:none;
	             color:white;
	             font-size:18px;
	             display:block
                 }
				 
             .div{
	             margin-top:5%;
	             width:500px;
	             height:51px;
	             background-color:black;
	             opacity: 0.7;
                 }
          .return{
			  color : black;
			  width : 5%;
		  }
         </style>
     </head>

     <body>
 <?php 
 require("marquee.html");   
 
?>
	    <div class="container">
		 <a class="return" href="index.php">
    <i class="fa fa-arrow-left" style="margin-left :46%;margin-top:15%;"></i>
  </a>
		
	<img src="icon.png"/>	
		<form action="logged.php" method="post" name="frm">
		<div class="form"  >
          <i class="fa fa-user icon"></i>
		<input type="text" name="username" placeholder="Username"/>	
		</div>
		<div class="form">
		<i class="fa fa-key icon"></i>
		<input type="password" name="password" placeholder="Password"/>
		</div>
		
		<input type="submit" name="submit" value="Connect" class="btn" onclick="return Validation();"/>
		</form>
		<div class="div">
		<a href="motdepass.php">Forgotten password?</a>
		<a href="inscrire.php">Register</a>
		</div>
	</div>
</body>
</html>

<script>

function Validation () {
var name = document.forms['frm']['username'];
var psw = document.forms['frm']['password'];
	if ((name.value != "") && (psw.value != "")){

           return true;
	}
	else {
	    alert ('you have not filled in all the fields');
		return false;
	}
}

</script>