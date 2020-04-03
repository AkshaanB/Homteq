<?php
if(isset($_SESSION['userid'])){
    if($_SESSION['user_type'] == 'Customer'){
        echo "<i><b><p style='float: right'>".$_SESSION['fname']." ".$_SESSION['sname']." / Customer No: ".$_SESSION['userid']."</p></b></i>";
    }else if($_SESSION['user_type'] == 'Administrator'){
        echo "<i><b><p style='float: right'>".$_SESSION['fname']." ".$_SESSION['sname']." / Administrator No: ".$_SESSION['userid']."</p></b></i>";
    }
}

?>