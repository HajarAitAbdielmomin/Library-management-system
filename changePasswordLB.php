<!DOCTYPE html>
<html>
     <head>
	 <meta charset="utf-8">
	     <title>Changing password</title>
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	         max-height: 600px;
	         text-align: center;
	         margin: 0 auto;
	         background:rgba(251,251,251,0.5);
	         margin-top:60px;
			
             }
			 
         ::-webkit-scrollbar{
             width:8px; 
             }
			 
         ::-webkit-scrollbar-thumb {
	         background:#ECD9BA;
   	         border-radius:100px;			 
             }
			 
         .d1 {
	         display: -ms-flexbox; 
             display: flex;
             width: 100%;
             margin-top: 10px;  
             }
			 
         .d2{
	         margin-top:5.5%;
	         width:500px;
	         height:37px;
	         background-color:black;
	         opacity: 0.7;
	         padding-top:13px;
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
			 
         input[type="password"],input[type="email"]{
	         width: 50%;
             padding: 8px;
             outline: none;
             margin-top:8%;
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
			 
          a:hover {
                 color: gray;
                 }
				 
             a{
	             text-decoration:none;
	             color:white;
	             font-size:18px;
	             display:block;
                 }
		 
         h2{
	         padding-top:7%;
	         text-shadow:3px 4px 5px #333;
           }
		   .div{
	             margin-top:8.5%;
	             width:500px;
	             height:40px;
	             background-color:black;
	             opacity: 0.7;
                 }
                  .strg{	  
             font-size:25px;
             color:red;
	         text-shadow:3px 4px 5px #333;			 
             }
		 </style>
	 </head>
	 <body>
     <?php require("marquee.html");	 
?>		  
	 <div class="container">
 
<?php 
     require("connexion.php");
 
		 $new=htmlspecialchars($_POST['new']);			 
		 $cnfr=htmlspecialchars($_POST['confirm']);
		 $email=htmlspecialchars($_POST['emailLB']);
		 if (!empty($new) && !empty($cnfr) && !empty($email)){
		     if($cnfr == $new)
			 {
				 $name=mysql_query("select * from admin where email = '".$email."'");
				 if(mysql_num_rows($name) > 0){
		  mysql_query("update admin set password='".$cnfr."' where email='".$email."'") or die(mysql_error());
?>
		<strong class="strg"><?php echo'Le mot de passe a été changé'; ?></strong>
	 <?php 
	       }
	  
	  else {
		?>  <strong class="strg"><?php echo'Email n&#146;existe pas'; ?></strong>
	 <?php }
	 
			 }
			 
	 else {
		 ?>
		<strong class="strg"><?php echo'Erreur de confirmation de mot de pass!'; ?></strong>
	 <?php }
		 }
     mysql_close();	 
	 
	 ?>
	 <!-- ----------------------------------------------------------------------------- -->
	 
	 <h2 align="center" >Modifier le mot de passe :</h2>
	 <form action="changePasswordLB.php" method="post" name="frm">
	
	 <div class="d1">
	 
		     <i class="fa fa-envelope icon"></i>
			 <input type="email" name="emailLB" placeholder="Email">
		 </div>
	    <div class="d1">
		     <i class="fa fa-key icon"></i>
			 <input type="password" name="new" placeholder="New password">
		 </div>
		 <div class="d1">
		     <i class="fa fa-key icon"></i>
			 <input type="password" name="confirm" placeholder="Confirm password">
		 </div>
		     <input type="submit" class="btn" name="send" value="Change" onclick = " return Validation ();">
			 <div class="div">
		     <a href="LoginFormLb.php">Connect</a>
			 </div>
	 </form>
      </div>	 
	 </body>
</html>
<script>
function Validation () {
var email = document.forms['frm']['emailLB'];
var Newpsw = document.forms['frm']['new'];
var Confrmpsw = document.forms['frm']['confirm'];
	if ((email.value != "") && (Newpsw.value != "") && (Confrmpsw.value != "")){

           return true;
	}
	else {
	    alert ('you have not filled in all the fields');
		return false;
	}
}

</script>