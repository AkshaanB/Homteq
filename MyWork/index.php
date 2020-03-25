<?php
session_start();
include("db.php");
$pagename="Make your home smart"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>$pagename</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php");
echo "<h4>$pagename</h4>"; //display name of the page on the web page
$SQL = "SELECT prodId, prodName, prodPicNameSmall, prodDescripShort, prodPrice FROM product";
$exeSQL = mysqli_query($conn,$SQL) or die (mysqli_error($conn));

echo "<table style='border:0px;'>";
while($arrayp=mysqli_fetch_array($exeSQL)){
    echo "<tr>";
        echo "<td  style='border: 0px'><a href=prodbuy.php?u_prod_id=".$arrayp['prodId']."><img src=images/small_images/".$arrayp['prodPicNameSmall']." height=200 width=200/></a></td>";
        echo "<td style='border: 0px'><p><h5>".$arrayp['prodName']."</h5>";
        echo "<p>".$arrayp['prodDescripShort']."</p>";
        echo "<p><b>$".$arrayp['prodPrice']."</b></p>";
        echo "</td>";
    echo "</tr>";
}
echo "</table>";
include("footfile.html"); //include head layout
echo "</body>";
?>