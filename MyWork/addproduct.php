<?php
session_start();
$pagename="Add a New Product"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>$pagename</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php");
echo "<h4>$pagename</h4>"; //display name of the page on the web page
echo "<form method = post  action = addproduct_conf.php>";
echo "<table style='border:0px;'>";
    echo "<tr>";
        echo "<td>*Product name</td>";
        echo "<td><input type=text name=prod_name required/></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>*Small Picture name</td>";
        echo "<td><input type=text name=small_pic required/></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>*Large Picture name</td>";
        echo "<td><input type=text name=large_pic required/></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>*Short Description</td>";
        echo "<td><input type=text name=short_desc required/></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>*Long Description</td>";
        echo "<td><input type=text name=long_desc required/></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>*Price</td>";
        echo "<td><input type=number name=price maxlength=9 step=.01 required/></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>*Initial Stock Quantity</td>";
        echo "<td><input type=number name=quantity maxlength=4 required/></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td><input type=submit value='Add Product'></td>";
        echo "<td><input type=reset value='Clear form'></td>";
    echo "</tr>";
echo "</table>";
echo "</form>";
include("footfile.html"); //include head layout
echo "</body>";
?>