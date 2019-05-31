<?php
session_start();
include("connection.php");
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>C Tutorial</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
   <meta name="author" content="Ctutorial" />
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/color/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="assets/img/favicon.ico">
	   
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="styleshe et" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
	
</head>

<body>
	<!-- navbar -->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<h1 class="brand"><a href="index.html">Home</a></h1>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
							<li><a title="team" href="#about">About</a></li>
							<li><a title="Courses" href="#services">Courses</a></li>
							<!--<li><a title="works" href="#works">Works</a></li>
							<li><a title="blog" href="#blog">Blog</a></li>
							<li><a href="page.html">Page</a></li>-->
							<li><a title="contact" href="#contact">Contact</a></li>
							<li><a title="Login" href="login.html">Login</a></li>
							<li><a title="register" href="register.html">Sign up</a></li>
							
							
						</ul>
					</nav>
				</div>
			</div>
		</div>

    <body>
        <div class="container">
     
       <header>
                <h1></br></br></br></br></h1>
			
            <section>				
                <div id="container_demo" >
                   <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="process.php" method="post" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="email" class="email" data-icon="e" >Email  </label>
                                    <input id="email" name="email" required="required" type="email" placeholder="mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p">Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Inkmatters@121" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="remember" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" name="send" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="register.html" class="to_register">Register</a>
								</p>
                            </form>
                        </div>
    </div>
	</div>
	</section>
</body>
</head>
</html>

<?php
if(isset($_POST['send']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];	
	$query="SELECT * FROM  user WHERE username='$username' && password='$password'";
	$data=mysqli_query($con,$query);
	$total=mysqli_num_rows($data);
	if($total>=1)
	{
	
		$_SESSION['user_name']=$username;
		header("location : index.php");
	}
	else
	{
	echo "login failed";
	}
	
	
	
	
}
?>


	