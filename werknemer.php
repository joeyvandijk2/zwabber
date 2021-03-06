<?php
session_start();
include_once("classes/table.php");
include_once("classes/database.php");
include_once("classes/login.php");
include_once("hulp/werknemerinfo.php");
include_once("hulp/werknemertodo.php");
$db = new db();
$result = $db->conn->query($db->select("werkdagen", "WHERE werknemerId=" . $_SESSION["wid"]));
$results = $db->conn->query($db->select("werkdagen", "WHERE werknemerId=" . $_SESSION["wid"]));
$werkinfo = new werknemerinfo();
$werkin = $werkinfo->werkinfo();
$werktodo = new werknemertodo();
$werkto = $werktodo->todo();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href='fullcalendar/fullcalendar.min.css' rel='stylesheet' />
    <link href='fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <script src='fullcalendar/lib/moment.min.js'></script>
    <script src='fullcalendar/lib/jquery.min.js'></script>
    <script src='fullcalendar/fullcalendar.min.js'></script>


    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid topbalk">
    <div class="col-xs-2 col-md-2 logo">
        <img src="images/logo5.gif">
    </div>
    <div class="col-xs-6 col-md-6 menu">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Overzicht<span class="sr-only">(current)</span></a></li>
                <li><a href="werknemer.php">Werknemer</a></li>
            </ul>
        </div>
    </div>
    <div class="col-xs-4 col-md-4 inlog">
        <?= $login; ?>
    </div>
</div>
<div class="content container">

    <?= $werkin; ?>
    <?= $werkto; ?>
    <?php
    if($_SESSION["wid"] != 0){
        echo "<a><span class='glyphicon glyphicon-plus' data-toggle='modal' data-target='.createdag'></span></a>";
        echo '<div id="calendar"></div>';
        echo ' <div class="modal fade bs-example-modal-sm createdag" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Werkdag in plannen</h4>
                </div>
                <form method="get" action="hulp/Create.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Werknemer ID:</label>
                            <input type="text" name="werknemerid" value="'.$_SESSION["wid"].'">
                        </div>
                        <div class="form-group">
                            <label>Dag tijd:</label>
                            <input type="text" name="tijd" value="09:00-17:00">
                        </div>
                        <div class="form-group">
                            <label>Dag Datum(YYYY-MM-DD):</label>
                            <input type="text" name="dag">
                        </div>

                        <input type="text" class="invisible" name="create" value="werkdag">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Plannen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>';
    }

    ?>
    <?php
    while($wd = $result->fetch_assoc())
    {
        echo ' <div class="modal fade bs-example-modal-sm dag'.$wd["werkdagId"].'" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Werkdag veranderen</h4>
                </div>
                <form method="get" action="hulp/Update.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Werknemer ID:</label>
                            <input type="text" name="werknemerid" value="'.$wd["werknemerId"].'">
                        </div>
                        <div class="form-group">
                            <label>Dag tijd:</label>
                            <input type="text" name="tijd" value="'.$wd["werkTitle"].'">
                        </div>
                        <div class="form-group">
                            <label>Dag Datum(YYYY-MM-DD):</label>
                            <input type="text" name="dag" value="'.$wd["werkdag"].'">
                        </div>

                        <input type="text" class="invisible" name="update" value="werkdag">
                        <input type="text" class="invisible" name="id" value="'.$wd["werkdagId"].'">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Verander</button>
                        <a class="btn btn-primary" href="hulp/Delete.php?delete=werkdag&id='.$wd["werkdagId"].'">Delete</a>
                    </div>
                </form>
            </div>
        </div>
    </div>';
    }
    ?>

</body>
</html>
<script>
    $(document).ready(function () {

        $('#calendar').fullCalendar({
            eventClick: function(calEvent) {
                $('.dag'+calEvent.id).modal('show');

            },
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events

            events:

                [
                    <?php
                    while($wd = $results->fetch_assoc())
                    {
                        echo "{";
                        echo " id: '".$wd["werkdagId"]."' ,";
                        echo " title: '".$wd["werkTitle"]."' ,";
                        echo " start: '".$wd["werkdag"]."'";
                        echo "},";
                    }
                    ?>
            ]
        });

    });
</script>