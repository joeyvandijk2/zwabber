<?php
session_start();
include_once("classes/table.php");
include_once("classes/database.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href='css/calendar.css' rel='stylesheet' />
    <link href='fullcalendar/fullcalendar.css' rel='stylesheet' />
    <link href='fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src='fullcalendar/fullcalendar.min.js'></script>
</head>
<body>

<div class="container-fluid topbalk">
    <div class="col-xs-2 col-md-2 logo">
        <img src="images/logo5.gif">
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
        <button type="button" class="btn btn-default logout">log out</button>
    </div>
</div>

<div class="content container">
    <table class="table table-condensed">
        <h2> Werknemer info </h2>
        <tr class="active">
            <th>voornaam:</th>
            <td>Hans</td>
        </tr>
        <tr class="active">
            <th>achternaam:</th>
            <td>Timmerman</td>
        </tr>
        <tr class="active">
            <th>telefoon nummer:</th>
            <td>0610955356</td>
        </tr>
        <tr class="active">
            <th>email:</th>
            <td>Hans@gmail.com:</td>
        </tr>
        <tr class="active">
            <th>woonplaats:</th>
            <td>Arnem, Hogeweg, 13 POHT34</td>
        </tr>
        <tr class="active">
            <th>geslacht:</th>
            <td>man</td>
        </tr>
    </table>
    <table class="table table-hover todo">
        <h2> To do </h2>
        <tr>
            <th>bedrijf naam</th>
            <th>kamer naam</th>
            <th>kamer nummer</th>
            <th>kamer locatie</th>
            <th>minimum punten</th>
            <th>behaald punten</th>
        </tr>
        <tr>
            <td>scania</td>
            <td>kantine</td>
            <td>1</td>
            <td>bij binnenkomst</td>
            <td>80</td>
            <td></td>
        </tr>

    </table>
    <div id='calendar'></div>
</div>
<div id="footer"></div>

<script src="js/fullcalendar.js"></script>
</body>
</html>
<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })
</script>