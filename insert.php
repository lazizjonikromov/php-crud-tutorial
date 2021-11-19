<?php

    require_once("connection.php");

    if(isset($_POST['submit'])){
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['age'])){
            echo 'Please in the Blanks';                
        }
        else{
            $UserName = $_POST['name'];
            $UserEmail = $_POST['email'];
            $UserAge = $_POST['age'];

            $query = "insert into records (name, email, age) values('$UserName', '$UserEmail', '$UserAge')";
            $result = mysqli_query($con,$query);

            if($result){
                header("location:view.php");
            }
            else{
                echo 'Please Check Your Query';
            }
        }
    }
    else{
        header("location:index.php");
    }


?>