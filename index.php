<?php
session_start();
include_once("classes/table.php");
include_once("classes/database.php");
include_once("classes/modals.php");



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container-fluid topbalk">
		<div class="col-xs-2 col-md-2 logo">
            <img src="images/logo.jpg">
        </div>
		<div class="col-xs-6 col-md-6 menu">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Link</a></li>
                </ul>
            </div>
        </div>
		<div class="col-xs-4 col-md-4 inlog">
            <form>

                <input type="email" class="form-control inloginput" id="exampleInputEmail1" placeholder="Username">

                <input type="submit" class="btn btn-default logbtn" value="log in">

                <input type="password" class="form-control inloginput" id="exampleInputPassword1" placeholder="Password">

                <input type="submit" class="btn btn-default logbtn" value="register">



            </form>
        </div>
	</div>

	<div class="content container">
		<?php echo  $table; ?>
	</div>
	<div id="footer"></div>
</body>
</html>
<script>

</script>