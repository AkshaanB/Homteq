<?php
session_start();
include("db.php");
$pagename="Your Sign Up Results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>$pagename</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>$pagename</h4>"; //display name of the page on the web page
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$address = $_POST['address'];
$postcode = $_POST['postcode'];
$tel_no = $_POST['tel_no'];
$email_address = $_POST['email_address'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
if($password!=$c_password){
    echo "<p><b>Sign up failed!</b></p>";
    echo "<p>The 2 passwords entered are not matching</p>";
    echo "<p>Make sure you enter them correctly</p>";
    echo "<p>Go back to <a href=signup.php>Sign up</a></p>";
}else{
    if(!filter_var($email_address,FILTER_VALIDATE_EMAIL)){
        echo "<p><b>Sign up failed!</b></p>";
        echo "<p>Email address not valid</p>";
        echo "<p>Make sure you enter correct email address</p>";
        echo "<p>Go back to <a href=signup.php>Sign up</a></p>";
    }else{
        $SQL = "INSERT INTO Users (userType, userFName, userSName, userAddress, userPostCode, userTelNo, userEmail, userPassword) VALUES ('','$f_name','$l_name','$address','$postcode','$tel_no','$email_address','$password')";
        $exeSQL =  mysqli_query($conn,$SQL);
        $error_number = mysqli_errno($conn);
        if($error_number==0){
            echo "Sign up successful";
            echo "<br>";
            echo "<p>Welcome! $f_name $l_name</p>";
            echo "<p>To continue, please <a href=login.php>Login</a></p>";
        }else{
            echo "<p><b>Sign up failed!</b></p>";
            if($error_number==1062){
                echo "<p>Email address already in use</p>";
                echo "<p>You may already registered or try another email address</p>";
                echo "<p>Go back to <a href=signup.php>Sign up</a></p>";
            }    
            if($error_number==1064){
                echo "<p>Invalid characters entered in the form</p>";
                echo "<p>Make sure you avoid the following characters: apostrophes like['] and backslashes like[\]</p>";
                echo "<p>Go back to <a href=signup.php>Sign up</a></p>";
            }
        }
    }
}
include("footfile.html"); //include head layout
echo "</body>";
?>