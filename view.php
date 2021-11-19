<?php

    require_once("connection.php");
    $query = "select * from records";
    $result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table-bordered">
                        <tr>
                            <td>User ID</td>
                            <td>User Name</td>
                            <td>User Email</td>
                            <td>User Age</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        <?php
                            while($row=mysqli_fetch_assoc($result))
                            {
                                $UserID = $row['id'];
                                $UserName = $row['name'];
                                $UserEmail = $row['email'];
                                $UserAge = $row['age'];
                        ?>
                            <tr>
                                <td><?php echo $UserID ?></td>
                                <td><?php echo $UserName ?></td>
                                <td><?php echo $UserEmail ?></td>
                                <td><?php echo $UserAge ?></td>
                                <td><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                                <td><a href="delete.php?Del=<?php echo $UserID ?>">Delete</a></td>
                            </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <a href="index.php" style="color: #fff;text-decoration:none; width:0px;"><button class="btn btn-primary mt-2">Create</button></a>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>
