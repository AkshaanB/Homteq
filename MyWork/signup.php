<?php
session_start();
$pagename="Sign Up"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>$pagename</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>$pagename</h4>"; //display name of the page on the web page
echo "<form method = post  action = signup_process.php>";
echo "<table style='border:0px;'>";
    echo "<tr>";
        echo "<td>*First name</td>";
        echo "<td><input type=text name=f_name required/></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>*Last name</td>";
        echo "<td><input type=text name=l_name required/></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>*Address</td>";
        echo "<td><input type=text name=address required/></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>*Postcode</td>";
        echo "<td><input type=text name=postcode required/></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>*Tel No</td>";
        echo "<td><input type=text name=tel_no required/></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>*Email Address</td>";
        echo "<td><input type=text name=email_address required/></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>*Password</td>";
        echo "<td><input type=password name=password required/></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>*Confirm Password</td>";
        echo "<td><input type=password name=c_password required/></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td><input type=submit value='Sign up'></td>";
        echo "<td><input type=reset value='Clear form'></td>";
    echo "</tr>";
echo "</table>";
echo "</form>";
include("footfile.html"); //include head layout
echo "</body>";
?>