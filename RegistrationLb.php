<!DOCTYPE html >
<html>
     <head>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	 <meta charset="ISO 8859-1">
	     <title>Registration</title>
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
	         max-height:700px;
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
	         margin-left:16%;
             padding:10px;
             background: black;
             opacity: 0.9;
             color: white;
             min-width: 30px;
             font-size:15px;
                 }
			 
        input[type="text"],input[type="password"],input[type="email"]{
	             width: 50%;
             padding: 10px;
             outline: none;
             margin-top:8%;
                 }
			 
      
            .form{
	            display: -ms-flexbox; 
             display: flex;
             width: 100%;
             margin-top: 10px;   
                 }
      .form13{
	            display: -ms-flexbox; 
             display: flex;
             width: 100%;
			 margin-left : 33%;
             margin-top: 20px;   
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
			.strg{	  
             font-size:25px;
             color:red;
	         text-shadow:3px 4px 5px #333;			 
             }
			 
</style>
	 </head>
	 <body>
<?php
      require("marquee.html");
      
?>     <div class="container">

<?php
    if (isset($_GET['rest']) && is_numeric($_GET['rest'])){
      if ($_GET['rest'] > 0){
		   header("location:LoginFormLb.php");
	  } 
	  
	  if($_GET['rest'] < 0){
		   ?>     
		     <strong class="strg"><?php echo'Error !!'; ?></strong>
		<?php
	  }
	}
      ?>

		     <form action="recordingLb.php" enctype="multipart/form-data" method="post" name="frm">
		
		
		<div class="form">
		<i class="fa fa-envelope icon"></i>
		<input type="email" name="email"  placeholder="Email"/>
		</div>
		
		<div class="form">
		<i class="fas fa-key icon"></i>
		   <input type="password" name="psw"  placeholder="Password">
		</div>
		
		 
		<br>
		<input type="submit" name="send" value="Save" class="btn" onclick="return Validation();">
		</form>
		<br>
		
		 </div>
	 </body>
</html>
<script>
function Validation () {
var fullName = document.forms['frm']['fullName'];
var email = document.forms['frm']['email'];
var psw = document.forms['frm']['psw'];
	if ( (fullName.value != "") && (email.value != "") && (psw.value != "")){

           return true;
	}
	else {
	    alert ('you have not filled in all the fields');
		return false;
	}
}

</script>

