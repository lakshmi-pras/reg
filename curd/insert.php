<?php
 
    require_once("connection.php");
 
    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['age'] || empty($_Post['branch'])))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $UserName = $_POST['name'];
            $UserEmail = $_POST['email'];
            $UserAge = $_POST['age'];
            $UserBranch = $_POST['branch'];
 
            $query = " insert into posts (User_Name, User_Email,User_Age,User_Branch) values('$UserName','$UserEmail','$UserAge','User_Branch')";
            $result = mysqli_query($con,$query);
 
            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }
 
 
 
?>