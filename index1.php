<?php


 ?>
 
<html>
	<head>
		<title>chatbox intro</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	</head>
	<body style ="background:#00u">
		<nav class="navbar navbar-default navbar-fixed-top" style="background:#000" >
			
  <div class="container">
  <ul class="nav navbar-nav navbar-left">
      <a><li ><a href="index1.php?option=registration" >
<span><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="lightgreen" class="bi bi-person-fill-up" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
</svg><span class="glyphicon glyphicon-user" style="color: lightgreen"class="btn btn-outline-light" type="submit" style="float:left">Registration
      </span></span></li></a><a>
  </ul>
  <ul class="nav navbar-nav navbar-left">
      <li><a href="index1.php?option=login">
      	<span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg> <span class="glyphicon glyphicon-log-in" style="color:lightyellow" class="btn btn" type="submit"style="float:left"> Login
      	</span></span></a> 
      </ul></div>
    <ul class="nav navbar-nav navbar-right">
    	<div class="container">
   <li><a href="index1.php?option=chatbot"><span style="color:lightpink" class="btn btn-outline-dark" type="submit" style="float:left">Chatbot</a></li>
   </ul></div>
</nav>
<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="registration")
			{
			include('registration.php');
			}
			if($opt=="login")
			{
			include('login.php');
			}
			
			if($opt=="chatbot")
			{
			include('chatbot.php');
			}
			
			
			
		
		
	}
		?>
		
		
		
		
		</div>
	<!-- container -->
		
		



<br/>
<br/>
<br/>
<br/>

<!-- footer-->



	</body>
</html>

