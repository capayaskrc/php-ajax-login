<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE LOGIN</title>
	<link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/main.css">
	<link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
</head>
<body>
       
       <div class="left-menu">
	   <h1>Income Generating Project System</h1>
	       <?php 
		        if($userLevel == 'SUPERUSER'){ 
		               include 'includes/menu-for-superuser.php';               	     
		        }elseif ($userLevel == 'SYSADMIN') {
		        	   include 'includes/menu-for-sysadmin.php';
		        }elseif ($userLevel == 'HR') {
		        	   include 'includes/menu-for-hr.php';
		        }elseif ($userLevel == 'USER') {
		        	   include 'includes/menu-for-user.php';
		        } 
	        ?>
       </div>
       <div class="right-menu">
       	     <li><a href="login/logout.php">Logout</a></li>
       	     <li><a href="#">Welcome!&nbsp;<?php echo $_SESSION['user']['fullname']?></a></li> 
       </div>
            <div class="divider"></div>
 


