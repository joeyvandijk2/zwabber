<?php
session_start();
include_once("classes/table.php");
include_once("classes/database.php");

$db = new db();
$classtable = new table();

if(empty($_GET["table"])){$_GET["table"] = "bedrijf";}
if($_GET["table"] == "bedrijf"){
    $table = $classtable->bedrijfen();
    $bedrijven = $db->conn->query($db->select("bedrijf"));
    while($row = $bedrijven->fetch_assoc())
    {
        echo '
    <!-- Small modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".upd'.$row["bedrijfId"].'">Small modal</button>
    
    <div class="modal fade bs-example-modal-sm upd'.$row["bedrijfId"].'" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            update bedrijf '.$row["bedrijfId"].'?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>';

        echo '
    <!-- Small modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".del'.$row["bedrijfId"].'">Small modal</button>
    
    <div class="modal fade bs-example-modal-sm del'.$row["bedrijfId"].'" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            dlete >?'.$row["bedrijfId"].'
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>';
    }
}
if($_GET["table"] == "kamer") {
    $table = $classtable->kamers();
    $kamers = $db->conn->query($db->select("kamer"));
    while ($row = $kamers->fetch_assoc()) {
        echo '
    <!-- Small modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".upd' . $row["kamerId"] . '">Small modal</button>
    
    <div class="modal fade bs-example-modal-sm upd' . $row["kamerId"] . '" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            update kamer ' . $row["kamerId"] . '?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>';

        echo '
    <!-- Small modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".del' . $row["kamerId"] . '">Small modal</button>
    
    <div class="modal fade bs-example-modal-sm del' . $row["kamerId"] . '" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            dlete >?' . $row["kamerId"] . '
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>';
    }
}
if($_GET["table"] == "object") {
    $table = $classtable->objecten();
    $object = $db->conn->query($db->select("object"));
    while ($row = $object->fetch_assoc()) {
        echo '
    <!-- Small modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".upd' . $row["objectId"] . '">Small modal</button>
    
    <div class="modal fade bs-example-modal-sm upd' . $row["objectId"] . '" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            update object ' . $row["objectId"] . '?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>';

        echo '
    <!-- Small modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".del' . $row["objectId"] . '">Small modal</button>
    
    <div class="modal fade bs-example-modal-sm del' . $row["objectId"] . '" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            dlete >?' . $row["objectId"] . '
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>';
    }
}



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
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
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })
</script>