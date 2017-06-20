<!-- 
// 1- connect to db
$host="localhost";
$user="1278002";
$password="noor1993";
$database="1278002";
$connect=  mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_errno()){
    die("cannot connect to database field:". mysqli_connect_error());
    
}
 else {
    echo 'Database is connected';  
}

   ?> 
    


-->









<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="css/bootstrap.css"> 
	 <link rel="stylesheet" href="css/bootstrap-theme.css">
	 <link rel="stylesheet" href="fonts/font-awesome.min.css">
	 
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
     <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
	 <link rel="stylesheet" href="css/style2.css" type="text/css" media="screen" > 
	 <script rel="stylesheet" href="js/html5shiv.min"></script>
	 <script rel="stylesheet" href="js/respond.min"></script>
     <script src="js/jquery-3.1.0.js"></script>
	 <script src="js/bootstrap.min.js"></script>
	 
    
	      <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
	 <script src="js/jsstyle.js"></script>
	 
	      <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">

  </head>
	   
	<style>
	body{
	font-family:"Roboto",sans-serif;
	}
	.android{
   float:left;
   margin-left:50px;
   letter-spacing:0.5px;
   font-family: 'Audiowide', cursive;
   font-weight:bold;
   font-size:1.5em;
   color:white;}
    </style>	
	 
	    <body> 
	    
		<nav class="navbar navbar-inverse" style="font-family:Roboto,Helvetica,Arial,sans-serif;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand  android" href="#" class=""><font color="#ec364c">Bit</font>phones</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
       
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="file:///C:/Users/noormohammed/Desktop/New%20folder/index.html"> Home </a></li>
        <li><a href="file:///C:/Users/noormohammed/Desktop/New%20folder/phones.html"> Phones </a></li>
        <li><a href="file:///C:/Users/noormohammed/Desktop/New%20folder/tablets.html"> Tablets</a></li>
        <li><a href="#">Contacts</a></li>
      </ul>
    </div>
  </div>
</nav>

    
	
	<!-- 
if (isset($_POST['submit'])) { 
 $name=$_POST['name'];
  $email=$_POST['email'];
    $message=$_POST['message'];
   $query="insert noot1(name,email,message)values('". $name . "','". $email . "','". $message . "')";
        $result=  mysqli_query($connect, $query);
        if( $result){
            echo '</br>Data is inerted';
        } 
 else {
   die("Database query failed. " . mysqli_error($connection));
 }
}
       
        
   ?>   -->
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	   
	    <div class="page4">
  
  <div class="container">
  <div class="row">
  <i class="fa fa-headphones fa-lg" aria-hidden="true"></i>
  
  <p>Feel free to contacts us to ask any question</p>
   <button class="text-center"><a href="#four">CONTACTS</a></button>
  
    </div>
  </div>
   </div> 





 























<div class="container"> 
 
<div class="row" style="margin-top:20px" id="four">
<div class="col-sm-7 border" style="">
<h3 style="font-family:font-family:'Muli', sans-serif;color:#ec364c;font-weight:bold" >Contact Us</h3>

  <form class="form-horizontal" role="form" style="" method="POST">
   <div class="form-group" style="padding-top:35px;">
		  <label for="name" class="control-label col-sm-2">Name</label>
		   <div class="col-sm-6">
		    <input type="text" id="name" class="form-control" placeholder="Full Name" name="name" required>
		   </div>
		    </div>
  
  
   <div class="form-group">
		  <label for="email" class="control-label col-sm-2">E-mail</label>
		   <div class="col-sm-6">
		    <input type="email" id="email" class="form-control" placeholder="Your E-mail " name="email" required>
		   </div>
		</div>
		
		
  <div class="form-group">
		    <label for="comments" class="control-label col-sm-2" >Message</label>
		   <div  class="col-sm-6" class="raw-sm-6" >
		    <textarea  id="message" class="form-control my-fixed" rows="8" name="message"></textarea>
		   </div>
		   
		 </div>
  
  
  
    <div class="form-group">
		    <label for="submit" class="control-label col-sm-2"></label>
		   <div  class="col-sm-6"  >
		    <input type="Submit" id="submit"  class="form-control"  value="Submit" name="submit" >
		   </div>
		   
		 </div>
  
  </form>
 

</div>

















<div class="col-sm-4 col-sm-offset-1" >
<h3 style="font-family:font-family:'Muli', sans-serif;color:#ec364c;font-weight:bold"> Quick Contact </h3>
<span class="quick_contact" ><span class="glyphicon glyphicon-envelope" style="margin-top:2.5px"></span> info@noormohammed.com</span><br>
<span class="quick_contact" ><span class="glyphicon glyphicon-earphone" style=""> </span> 000-000-000</span><br>
<span class="quick_contact" ><span class="glyphicon glyphicon-home" style=""> </span> Iraq-Baghdad</span><br>


<hr></hr>
</div>

</div>
</div>





		<section class="footer" style="margin-top:15px">
    <div class="container">
     <div class="row">
	  <div class="col-sm-12">
		  <a href=""><i class="fa fa-facebook-square fa-lg"></i></a>
		  <a href=""><i class="fa fa-linkedin-square fa-lg"></i></a>
		  <a href=""><i class="fa fa-youtube-square fa-lg"></i></a>
		  <a href=""><i class="fa fa-google-plus-square fa-lg"></i></a>
		  <a href=""><i class="fa  fa-instagram fa-lg"> </i></a>
  
        <div class="style" style="font-weight:normal;padding-bottom:6px;font-size:13px;padding-top:26px;color:#666;letter-spacing:1.5px" >
		<font color="#ec364c">Bit</font>phones &copy Noor Mohammed</div>
	  </div>
     </div>
	</div> 
  </section>
		










</body>
	   </html>
























<!--
//5 close connection
mysqli_close($connect);
?>
















  
  
  
  