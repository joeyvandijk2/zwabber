<?php
session_start();
include_once("classes/table.php");
include_once("classes/database.php");
include_once("classes/login.php");
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
            <th>behaald punten</th>
            <th>minimum punten</th>
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
    <div id="calendar" class="fc fc-unthemed fc-ltr">
        <div class="fc-toolbar fc-header-toolbar">
            <div class="fc-left">
                <div class="fc-button-group">
                    <button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span
                                class="fc-icon fc-icon-left-single-arrow"></span></button>
                    <button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span
                                class="fc-icon fc-icon-right-single-arrow"></span></button>
                </div>
                <button type="button"
                        class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled"
                        disabled="">today
                </button>
            </div>
            <div class="fc-right">
                <div class="fc-button-group">
                    <button type="button"
                            class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month
                    </button>
                    <button type="button" class="fc-basicWeek-button fc-button fc-state-default">week</button>
                    <button type="button" class="fc-basicDay-button fc-button fc-state-default fc-corner-right">day
                    </button>
                </div>
            </div>
            <div class="fc-center"><h2>April 2017</h2></div>
            <div class="fc-clear"></div>
        </div>
        <div class="fc-view-container">
            <div class="fc-view fc-month-view fc-basic-view">
                <table>
                    <thead class="fc-head">
                    <tr>
                        <td class="fc-head-container fc-widget-header">
                            <div class="fc-row fc-widget-header">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th>
                                        <th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th>
                                        <th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th>
                                        <th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th>
                                        <th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th>
                                        <th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th>
                                        <th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </td>
                    </tr>
                    </thead>
                    <tbody class="fc-body">
                    <tr>
                        <td class="fc-widget-content">
                            <div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 647.6px;">
                                <div class="fc-day-grid fc-unselectable">
                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 107px;">
                                        <div class="fc-bg">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past"
                                                        data-date="2017-03-26"></td>
                                                    <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past"
                                                        data-date="2017-03-27"></td>
                                                    <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past"
                                                        data-date="2017-03-28"></td>
                                                    <td class="fc-day fc-widget-content fc-wed fc-other-month fc-past"
                                                        data-date="2017-03-29"></td>
                                                    <td class="fc-day fc-widget-content fc-thu fc-other-month fc-past"
                                                        data-date="2017-03-30"></td>
                                                    <td class="fc-day fc-widget-content fc-fri fc-other-month fc-past"
                                                        data-date="2017-03-31"></td>
                                                    <td class="fc-day fc-widget-content fc-sat fc-past"
                                                        data-date="2017-04-01"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="fc-content-skeleton">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <td class="fc-day-top fc-sun fc-other-month fc-past"
                                                        data-date="2017-03-26"><a class="fc-day-number"
                                                                                  data-goto="{&quot;date&quot;:&quot;2017-03-26&quot;,&quot;type&quot;:&quot;day&quot;}">26</a>
                                                    </td>
                                                    <td class="fc-day-top fc-mon fc-other-month fc-past"
                                                        data-date="2017-03-27"><a class="fc-day-number"
                                                                                  data-goto="{&quot;date&quot;:&quot;2017-03-27&quot;,&quot;type&quot;:&quot;day&quot;}">27</a>
                                                    </td>
                                                    <td class="fc-day-top fc-tue fc-other-month fc-past"
                                                        data-date="2017-03-28"><a class="fc-day-number"
                                                                                  data-goto="{&quot;date&quot;:&quot;2017-03-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a>
                                                    </td>
                                                    <td class="fc-day-top fc-wed fc-other-month fc-past"
                                                        data-date="2017-03-29"><a class="fc-day-number"
                                                                                  data-goto="{&quot;date&quot;:&quot;2017-03-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a>
                                                    </td>
                                                    <td class="fc-day-top fc-thu fc-other-month fc-past"
                                                        data-date="2017-03-30"><a class="fc-day-number"
                                                                                  data-goto="{&quot;date&quot;:&quot;2017-03-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a>
                                                    </td>
                                                    <td class="fc-day-top fc-fri fc-other-month fc-past"
                                                        data-date="2017-03-31"><a class="fc-day-number"
                                                                                  data-goto="{&quot;date&quot;:&quot;2017-03-31&quot;,&quot;type&quot;:&quot;day&quot;}">31</a>
                                                    </td>
                                                    <td class="fc-day-top fc-sat fc-past" data-date="2017-04-01"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a>
                                                    </td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="fc-event-container"><a
                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable">
                                                            <div class="fc-content"><span
                                                                        class="fc-title">All Day Event</span></div>
                                                            <div class="fc-resizer fc-end-resizer"></div>
                                                        </a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 107px;">
                                        <div class="fc-bg">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td class="fc-day fc-widget-content fc-sun fc-past"
                                                        data-date="2017-04-02"></td>
                                                    <td class="fc-day fc-widget-content fc-mon fc-past"
                                                        data-date="2017-04-03"></td>
                                                    <td class="fc-day fc-widget-content fc-tue fc-past"
                                                        data-date="2017-04-04"></td>
                                                    <td class="fc-day fc-widget-content fc-wed fc-past"
                                                        data-date="2017-04-05"></td>
                                                    <td class="fc-day fc-widget-content fc-thu fc-past"
                                                        data-date="2017-04-06"></td>
                                                    <td class="fc-day fc-widget-content fc-fri fc-past"
                                                        data-date="2017-04-07"></td>
                                                    <td class="fc-day fc-widget-content fc-sat fc-past"
                                                        data-date="2017-04-08"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="fc-content-skeleton">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <td class="fc-day-top fc-sun fc-past" data-date="2017-04-02"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a>
                                                    </td>
                                                    <td class="fc-day-top fc-mon fc-past" data-date="2017-04-03"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a>
                                                    </td>
                                                    <td class="fc-day-top fc-tue fc-past" data-date="2017-04-04"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a>
                                                    </td>
                                                    <td class="fc-day-top fc-wed fc-past" data-date="2017-04-05"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a>
                                                    </td>
                                                    <td class="fc-day-top fc-thu fc-past" data-date="2017-04-06"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a>
                                                    </td>
                                                    <td class="fc-day-top fc-fri fc-past" data-date="2017-04-07"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-07&quot;,&quot;type&quot;:&quot;day&quot;}">7</a>
                                                    </td>
                                                    <td class="fc-day-top fc-sat fc-past" data-date="2017-04-08"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-08&quot;,&quot;type&quot;:&quot;day&quot;}">8</a>
                                                    </td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="fc-event-container" colspan="2"><a
                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-not-end fc-draggable">
                                                            <div class="fc-content"><span
                                                                        class="fc-title">Long Event</span></div>
                                                        </a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 107px;">
                                        <div class="fc-bg">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td class="fc-day fc-widget-content fc-sun fc-past"
                                                        data-date="2017-04-09"></td>
                                                    <td class="fc-day fc-widget-content fc-mon fc-past"
                                                        data-date="2017-04-10"></td>
                                                    <td class="fc-day fc-widget-content fc-tue fc-past"
                                                        data-date="2017-04-11"></td>
                                                    <td class="fc-day fc-widget-content fc-wed fc-today fc-state-highlight"
                                                        data-date="2017-04-12"></td>
                                                    <td class="fc-day fc-widget-content fc-thu fc-future"
                                                        data-date="2017-04-13"></td>
                                                    <td class="fc-day fc-widget-content fc-fri fc-future"
                                                        data-date="2017-04-14"></td>
                                                    <td class="fc-day fc-widget-content fc-sat fc-future"
                                                        data-date="2017-04-15"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="fc-content-skeleton">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <td class="fc-day-top fc-sun fc-past" data-date="2017-04-09"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-09&quot;,&quot;type&quot;:&quot;day&quot;}">9</a>
                                                    </td>
                                                    <td class="fc-day-top fc-mon fc-past" data-date="2017-04-10"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-10&quot;,&quot;type&quot;:&quot;day&quot;}">10</a>
                                                    </td>
                                                    <td class="fc-day-top fc-tue fc-past" data-date="2017-04-11"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-11&quot;,&quot;type&quot;:&quot;day&quot;}">11</a>
                                                    </td>
                                                    <td class="fc-day-top fc-wed fc-today fc-state-highlight"
                                                        data-date="2017-04-12"><a class="fc-day-number"
                                                                                  data-goto="{&quot;date&quot;:&quot;2017-04-12&quot;,&quot;type&quot;:&quot;day&quot;}">12</a>
                                                    </td>
                                                    <td class="fc-day-top fc-thu fc-future" data-date="2017-04-13"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-13&quot;,&quot;type&quot;:&quot;day&quot;}">13</a>
                                                    </td>
                                                    <td class="fc-day-top fc-fri fc-future" data-date="2017-04-14"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-14&quot;,&quot;type&quot;:&quot;day&quot;}">14</a>
                                                    </td>
                                                    <td class="fc-day-top fc-sat fc-future" data-date="2017-04-15"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-15&quot;,&quot;type&quot;:&quot;day&quot;}">15</a>
                                                    </td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="fc-event-container"><a
                                                                class="fc-day-grid-event fc-h-event fc-event fc-not-start fc-end fc-draggable fc-resizable">
                                                            <div class="fc-content"><span
                                                                        class="fc-title">Long Event</span></div>
                                                            <div class="fc-resizer fc-end-resizer"></div>
                                                        </a></td>
                                                    <td rowspan="6"></td>
                                                    <td class="fc-event-container" colspan="2"><a
                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable">
                                                            <div class="fc-content"><span
                                                                        class="fc-title">Conference</span></div>
                                                            <div class="fc-resizer fc-end-resizer"></div>
                                                        </a></td>
                                                    <td class="fc-event-container" rowspan="6"><a
                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable">
                                                            <div class="fc-content"><span class="fc-time">7a</span>
                                                                <span class="fc-title">Birthday Party</span></div>
                                                        </a></td>
                                                    <td rowspan="6"></td>
                                                    <td rowspan="6"></td>
                                                </tr>
                                                <tr>
                                                    <td class="fc-event-container" rowspan="5"><a
                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable">
                                                            <div class="fc-content"><span class="fc-time">4p</span>
                                                                <span class="fc-title">Repeating Event</span></div>
                                                        </a></td>
                                                    <td rowspan="5"></td>
                                                    <td class="fc-event-container"><a
                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable">
                                                            <div class="fc-content"><span class="fc-time">10:30a</span>
                                                                <span class="fc-title">Meeting</span></div>
                                                        </a></td>
                                                </tr>
                                                <tr>
                                                    <td class="fc-event-container"><a
                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable">
                                                            <div class="fc-content"><span class="fc-time">12p</span>
                                                                <span class="fc-title">Lunch</span></div>
                                                        </a></td>
                                                </tr>
                                                <tr>
                                                    <td class="fc-event-container fc-limited"><a
                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable">
                                                            <div class="fc-content"><span class="fc-time">2:30p</span>
                                                                <span class="fc-title">Meeting</span></div>
                                                        </a></td>
                                                    <td class="fc-more-cell" rowspan="1">
                                                        <div><a class="fc-more">+3 more</a></div>
                                                    </td>
                                                </tr>
                                                <tr class="fc-limited">
                                                    <td class="fc-event-container"><a
                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable">
                                                            <div class="fc-content"><span class="fc-time">5:30p</span>
                                                                <span class="fc-title">Happy Hour</span></div>
                                                        </a></td>
                                                </tr>
                                                <tr class="fc-limited">
                                                    <td class="fc-event-container"><a
                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable">
                                                            <div class="fc-content"><span class="fc-time">8p</span>
                                                                <span class="fc-title">Dinner</span></div>
                                                        </a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 107px;">
                                        <div class="fc-bg">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td class="fc-day fc-widget-content fc-sun fc-future"
                                                        data-date="2017-04-16"></td>
                                                    <td class="fc-day fc-widget-content fc-mon fc-future"
                                                        data-date="2017-04-17"></td>
                                                    <td class="fc-day fc-widget-content fc-tue fc-future"
                                                        data-date="2017-04-18"></td>
                                                    <td class="fc-day fc-widget-content fc-wed fc-future"
                                                        data-date="2017-04-19"></td>
                                                    <td class="fc-day fc-widget-content fc-thu fc-future"
                                                        data-date="2017-04-20"></td>
                                                    <td class="fc-day fc-widget-content fc-fri fc-future"
                                                        data-date="2017-04-21"></td>
                                                    <td class="fc-day fc-widget-content fc-sat fc-future"
                                                        data-date="2017-04-22"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="fc-content-skeleton">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <td class="fc-day-top fc-sun fc-future" data-date="2017-04-16"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-16&quot;,&quot;type&quot;:&quot;day&quot;}">16</a>
                                                    </td>
                                                    <td class="fc-day-top fc-mon fc-future" data-date="2017-04-17"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-17&quot;,&quot;type&quot;:&quot;day&quot;}">17</a>
                                                    </td>
                                                    <td class="fc-day-top fc-tue fc-future" data-date="2017-04-18"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-18&quot;,&quot;type&quot;:&quot;day&quot;}">18</a>
                                                    </td>
                                                    <td class="fc-day-top fc-wed fc-future" data-date="2017-04-19"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-19&quot;,&quot;type&quot;:&quot;day&quot;}">19</a>
                                                    </td>
                                                    <td class="fc-day-top fc-thu fc-future" data-date="2017-04-20"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-20&quot;,&quot;type&quot;:&quot;day&quot;}">20</a>
                                                    </td>
                                                    <td class="fc-day-top fc-fri fc-future" data-date="2017-04-21"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-21&quot;,&quot;type&quot;:&quot;day&quot;}">21</a>
                                                    </td>
                                                    <td class="fc-day-top fc-sat fc-future" data-date="2017-04-22"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-22&quot;,&quot;type&quot;:&quot;day&quot;}">22</a>
                                                    </td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="fc-event-container"><a
                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable">
                                                            <div class="fc-content"><span class="fc-time">4p</span>
                                                                <span class="fc-title">Repeating Event</span></div>
                                                        </a></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 107px;">
                                        <div class="fc-bg">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td class="fc-day fc-widget-content fc-sun fc-future"
                                                        data-date="2017-04-23"></td>
                                                    <td class="fc-day fc-widget-content fc-mon fc-future"
                                                        data-date="2017-04-24"></td>
                                                    <td class="fc-day fc-widget-content fc-tue fc-future"
                                                        data-date="2017-04-25"></td>
                                                    <td class="fc-day fc-widget-content fc-wed fc-future"
                                                        data-date="2017-04-26"></td>
                                                    <td class="fc-day fc-widget-content fc-thu fc-future"
                                                        data-date="2017-04-27"></td>
                                                    <td class="fc-day fc-widget-content fc-fri fc-future"
                                                        data-date="2017-04-28"></td>
                                                    <td class="fc-day fc-widget-content fc-sat fc-future"
                                                        data-date="2017-04-29"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="fc-content-skeleton">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <td class="fc-day-top fc-sun fc-future" data-date="2017-04-23"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-23&quot;,&quot;type&quot;:&quot;day&quot;}">23</a>
                                                    </td>
                                                    <td class="fc-day-top fc-mon fc-future" data-date="2017-04-24"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-24&quot;,&quot;type&quot;:&quot;day&quot;}">24</a>
                                                    </td>
                                                    <td class="fc-day-top fc-tue fc-future" data-date="2017-04-25"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-25&quot;,&quot;type&quot;:&quot;day&quot;}">25</a>
                                                    </td>
                                                    <td class="fc-day-top fc-wed fc-future" data-date="2017-04-26"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-26&quot;,&quot;type&quot;:&quot;day&quot;}">26</a>
                                                    </td>
                                                    <td class="fc-day-top fc-thu fc-future" data-date="2017-04-27"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-27&quot;,&quot;type&quot;:&quot;day&quot;}">27</a>
                                                    </td>
                                                    <td class="fc-day-top fc-fri fc-future" data-date="2017-04-28"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a>
                                                    </td>
                                                    <td class="fc-day-top fc-sat fc-future" data-date="2017-04-29"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a>
                                                    </td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="fc-event-container"><a
                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable"
                                                                href="http://google.com/">
                                                            <div class="fc-content"><span class="fc-title">Click for Google</span>
                                                            </div>
                                                            <div class="fc-resizer fc-end-resizer"></div>
                                                        </a></td>
                                                    <td></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 112px;">
                                        <div class="fc-bg">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td class="fc-day fc-widget-content fc-sun fc-future"
                                                        data-date="2017-04-30"></td>
                                                    <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future"
                                                        data-date="2017-05-01"></td>
                                                    <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future"
                                                        data-date="2017-05-02"></td>
                                                    <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future"
                                                        data-date="2017-05-03"></td>
                                                    <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future"
                                                        data-date="2017-05-04"></td>
                                                    <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future"
                                                        data-date="2017-05-05"></td>
                                                    <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future"
                                                        data-date="2017-05-06"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="fc-content-skeleton">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <td class="fc-day-top fc-sun fc-future" data-date="2017-04-30"><a
                                                                class="fc-day-number"
                                                                data-goto="{&quot;date&quot;:&quot;2017-04-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a>
                                                    </td>
                                                    <td class="fc-day-top fc-mon fc-other-month fc-future"
                                                        data-date="2017-05-01"><a class="fc-day-number"
                                                                                  data-goto="{&quot;date&quot;:&quot;2017-05-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a>
                                                    </td>
                                                    <td class="fc-day-top fc-tue fc-other-month fc-future"
                                                        data-date="2017-05-02"><a class="fc-day-number"
                                                                                  data-goto="{&quot;date&quot;:&quot;2017-05-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a>
                                                    </td>
                                                    <td class="fc-day-top fc-wed fc-other-month fc-future"
                                                        data-date="2017-05-03"><a class="fc-day-number"
                                                                                  data-goto="{&quot;date&quot;:&quot;2017-05-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a>
                                                    </td>
                                                    <td class="fc-day-top fc-thu fc-other-month fc-future"
                                                        data-date="2017-05-04"><a class="fc-day-number"
                                                                                  data-goto="{&quot;date&quot;:&quot;2017-05-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a>
                                                    </td>
                                                    <td class="fc-day-top fc-fri fc-other-month fc-future"
                                                        data-date="2017-05-05"><a class="fc-day-number"
                                                                                  data-goto="{&quot;date&quot;:&quot;2017-05-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a>
                                                    </td>
                                                    <td class="fc-day-top fc-sat fc-other-month fc-future"
                                                        data-date="2017-05-06"><a class="fc-day-number"
                                                                                  data-goto="{&quot;date&quot;:&quot;2017-05-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a>
                                                    </td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<script>
    $(document).ready(function () {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            defaultDate: '2017-04-12',
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2017-04-01'
                },
                {
                    title: 'Long Event',
                    start: '2017-04-07',
                    end: '2017-04-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2017-04-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2017-04-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2017-04-11',
                    end: '2017-04-13'
                },
                {
                    title: 'Meeting',
                    start: '2017-04-12T10:30:00',
                    end: '2017-04-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2017-04-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2017-04-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2017-04-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2017-04-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2017-04-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2017-04-28'
                }
            ]
        });

    });
</script>