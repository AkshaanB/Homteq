<?php
session_start();
include("db.php");
$pagename="Your Login Results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>$pagename</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>$pagename</h4>"; //display name of the page on the web page
$email = $_POST['email_address'];
$password = $_POST['password'];
$SQL = "SELECT * FROM users WHERE userEmail='$email'";
$exeSQL =  mysqli_query($conn,$SQL) or die (mysqli_error($conn));
$arrayu=mysqli_fetch_array($exeSQL);
if(!($email== $arrayu['userEmail'])){
    echo "<p><b>Sign up failed!</b></p>";
    echo "<p>Email not recognised, <a href=login.php>Login</a> again</p>";
}else{
    if($password!=$arrayu['userPassword']){
        echo "<p><b>Sign up failed!</b></p>";
        echo "<p>Password not valid, <a href=login.php>Login</a> again</p>";
    }else{
        echo "<p><b>Sign up successful!</b></p>";
        $_SESSION['userid'] = $arrayu['userId'];
        $_SESSION['usertype'] = $arrayu['userType'];
        $_SESSION['fname'] = $arrayu['userFName'];
        $_SESSION['sname'] = $arrayu['userSName'];
        echo "<p>Hello, ".$_SESSION['fname']." ".$_SESSION['sname']."</p>";
        if($arrayu['userType']=='A'){
            $_SESSION['user_type'] = 'Administrator';
            echo "<p>You successfully logged in as homteq Administrator!</p>";
            echo "<p>Continue to home page <a href=index.php>Home Tech</a></p>";
        }
        if($arrayu['userType']=='C'){
            $_SESSION['user_type'] = 'Customer';
            echo "<p>You successfully logged in as homteq Customer!</p>";
            echo "<p>Continue shopping for <a href=index.php>Home Tech</a></p>";
            echo "<p>View your <a href=basket.php>Smart Basket</a></p>";
        }
    }
}
include("footfile.html"); //include head layout
echo "</body>";
?>