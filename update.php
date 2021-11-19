<?php

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $UserName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $UserAge = $_POST['age'];

        $query = " update records set name = '".$UserName."', email = '".$UserEmail."', age = '".$UserAge."' where id='".$UserID."' ";

        $result = mysqli_query($con,$query);

        if($result){
            header("location:view.php");
        }
        else{
            echo 'Please Check Your Query';
        }
    }
    else{

        header("location:view.php");

    }



?>