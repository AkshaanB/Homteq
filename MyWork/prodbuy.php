<?php
session_start();
$pagename="A smart buy for a smart home"; //Create and populate a variable called $pagename
include("db.php");
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>$pagename</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php");
echo "<h4>$pagename</h4>"; //display name of the page on the web page
$prodId = $_GET['u_prod_id'];
echo "<p>Selected product Id: $prodId</p>";
$SQL = "SELECT prodId, prodName, prodPicNameLarge, prodDescripLong, prodPrice, prodQuantity FROM Product WHERE prodId='$prodId'";
$exeSQL = $exeSQL = mysqli_query($conn,$SQL) or die (mysqli_error($conn));
$arrayp=mysqli_fetch_array($exeSQL);
echo "<table style='border:0px;'>";
    echo "<tr>";
        echo "<td  style='border: 0px'><img src=images/large_images/".$arrayp['prodPicNameLarge']." height=300 width=300/></td>";
        echo "<td style='border: 0px'><p><h5>".$arrayp['prodName']."</h5>";
        echo "<p>".$arrayp['prodDescripLong']."</p>";
        echo "<p><b>$".$arrayp['prodPrice']."</b></p>";
        echo "<p>Number of stocks left: ".$arrayp['prodQuantity']."</p>";
        echo "<p>Number to be purchased: </p>";
        echo "<form method=post action=basket.php>";
            echo "<select name='p_quantity'>";
            for($i=1;$i<=$arrayp['prodQuantity'];$i++){
                echo "<option value='$i'>$i</option>";
            }
            echo "</select>";
            echo "<input type=submit value='Add to basket'/>";
            echo "<input type=hidden name='hidden_prodId' value='$prodId'/>";
        echo "</form>";
        echo "</td>";
    echo "</tr>";
echo "<table>";
include("footfile.html"); //include head layout
echo "</body>";
?>