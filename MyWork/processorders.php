<?php
session_start();
include ("db.php");
$pagename="Process Orders"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>$pagename</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php");
echo "<h4>$pagename</h4>"; //display name of the page on the web page
//display random text
$SQL="";
$exe_sql=mysqli_query($conn,$SQL) or die (mysqli_error($conn));

echo "<table style='border:0px;'>";
while($arrayo=mysqli_fetch_array($exeSQL)){
    echo "<tr>";
        
    echo "</tr>";
}
echo "</table>";
    
include("footfile.html"); //include head layout
echo "</body>";
?>