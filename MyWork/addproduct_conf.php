<?php
session_start();
include("db.php");
$pagename="New Product Confirmation"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>$pagename</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php");
echo "<h4>$pagename</h4>"; //display name of the page on the web page
$prod_name = $_POST['prod_name'];
$small_pic = $_POST['small_pic'];
$large_pic = $_POST['large_pic'];
$short_desc = $_POST['short_desc'];
$long_desc = $_POST['long_desc'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$SQL = "INSERT INTO Product (prodName, prodPicNameSmall, prodPicNameLarge, prodDescripShort, prodDescripLong, prodPrice, prodQuantity) VALUES ('$prod_name','$small_pic','$large_pic','$short_desc','$long_desc',$price,$quantity)";
$exeSQL =  mysqli_query($conn,$SQL);
$error_number = mysqli_errno($conn);
if($error_number==0){
    echo "<p>The product has been added</p>";
    echo "<p><b>Name of the small picture:</b> $small_pic</p>";
    echo "<p><b>Name of the large picture:</b> $large_pic</p>";
    echo "<p><b>Short description:</b> $short_desc</p>";
    echo "<p><b>Long description:</b> $long_desc</p>";
    echo "<p><b>Price:</b> $$price</p>";
    echo "<p><b>Quantity:</b> $quantity</p>";
}else{
    echo "<p><b>Error when adding the product</b></p>";
    if($error_number==1062){
        echo "<p>The uniqueness of the product name has been breached</p>";
        echo "<p>Go back to <a href=addproduct.php>Add Product</a></p>";
    }    
    if($error_number==1064){
        echo "<p>illegal characters have been entered such as apostrophes [ ' ] and backslashes [ \ ]</p>";
        echo "<p>Go back to <a href=addproduct.php>Add Product</a></p>";
    }
    if($error_number==1054){
        echo "<p>Illegal characters have been entered in the fields that are expecting numerical values</p>";
        echo "<p>Go back to <a href=addproduct.php>Add Product</a></p>";
    }
}
include("footfile.html"); //include head layout
echo "</body>";
?>