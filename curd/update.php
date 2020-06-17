<?php
    require_once("connection.php");
 
    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $UserName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $UserAge = $_POST['age'];
        $UserBranch = $_POST['branch'];
 
        $query = " update posts set User_Name = '".$UserName."', User_Email='".$UserEmail."',User_Age='".$UserAge."',User_Branch='".$UserBranch"' where User_ID='".$UserID."'";
        $result = mysqli_query($con,$query);
 
        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:view.php");
    }
 
 
?>