<?php
session_start();
include("db.php");
$pagename="View & Edit product"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>$pagename</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php");
echo "<h4>$pagename</h4>"; //display name of the page on the web page
 
if(isset($_POST['updated_hidden_prodId']) && isset($_POST['new_price']) && isset($_POST['new_p_quantity'])){
    $pridtobeupdated = $_POST['updated_hidden_prodId'];
    $newprice = $_POST['new_price'];
    $newqutoadd = $_POST['new_p_quantity'];

    $SQL_update = "SELECT prodQuantity FROM product WHERE prodId=$pridtobeupdated";
    $exe_sql_update = mysqli_query($conn,$SQL_update) or die (mysqli_error($conn));
    $arrayqu=mysqli_fetch_array($exe_sql_update);
    $newstock = $arrayqu['prodQuantity'] + $newqutoadd;

    if(!empty($newprice)){
        $SQL = "UPDATE product SET prodPrice=$newprice , prodQuantity=$newstock WHERE prodId=$pridtobeupdated";
        $exe_sql = mysqli_query($conn,$SQL) or die (mysqli_error($conn));
    }else{
        $SQL = "UPDATE product SET prodQuantity=$newstock WHERE prodId=$pridtobeupdated";
        $exe_sql = mysqli_query($conn,$SQL) or die (mysqli_error($conn));
    }

}

$SQL = "SELECT prodId, prodName, prodPicNameSmall, prodDescripShort, prodPrice, prodQuantity FROM product";
$exeSQL = mysqli_query($conn,$SQL) or die (mysqli_error($conn));

echo "<table style='border:0px;'>";
while($arrayp=mysqli_fetch_array($exeSQL)){
    echo "<tr>";
        echo "<td  style='border: 0px'><a href=prodbuy.php?u_prod_id=".$arrayp['prodId']."><img src=images/small_images/".$arrayp['prodPicNameSmall']." height=200 width=200/></a></td>";
        echo "<td style='border: 0px'><p><h5>".$arrayp['prodName']."</h5>";
        echo "<p>".$arrayp['prodDescripShort']."</p>";
        echo "<form method=post action=".$_SERVER['PHP_SELF'].">";
            echo "<table style='border-collapse: collapse;border:0px solid white;'>";
                echo "<tr>";
                    echo "<td><p>Current Price: <b>$".$arrayp['prodPrice']."</b></p></td>";
                    echo "<td><p>New Price: <input type=text name=new_price maxlength=9 step=.01 /></p></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><p>Current Stock: <b>".$arrayp['prodQuantity']."</b></p></td>";
                    echo "<td><p>Add number of items: ";
                    echo "<select name='new_p_quantity'>";
                    for($i=1;$i<=$arrayp['prodQuantity'];$i++){
                        echo "<option value='$i'>$i</option>";
                    }
                    echo "</select>";
                    echo "</p></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td><input type=submit value='Update'></td>";
                echo "<td><input type=reset value='Clear details'></td>";
                echo "<input type=hidden name='updated_hidden_prodId' value='".$arrayp['prodId']."'/>";
                echo "</tr>";
            echo "</table>";
        echo "</form>";
        echo "</td>";
    echo "</tr>";
}
echo "</table>";
include("footfile.html"); //include head layout
echo "</body>";
?>