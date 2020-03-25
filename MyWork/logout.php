<?php
session_start();
$pagename="Template"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>$pagename</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>$pagename</h4>"; //display name of the page on the web page
include ("detectlogin.php");
echo "<p>Thank you, ".$_SESSION['fname']." ".$_SESSION['sname']."</p>";
// remove all session variables
session_unset();
// destroy the session
session_destroy();
echo "<p>You are now logged out</p>";

include("footfile.html"); //include head layout
echo "</body>";
?>