<?php

    require_once("connection.php");
    $UserID = $_GET['GetID'];
    $query = "select * from records where id='".$UserID."' ";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $UserID = $row['id'];
        $UserName = $row['name'];
        $UserEmail = $row['email'];
        $UserAge = $row['age'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3">Update Form in Php</h3>
                    </div>
                    <div class="card-body">
                        <form action="update.php?ID=<?php echo $UserID ?>" method="post">
                            <input type="text" class="form-control mb-2" placeholder="User Name" name="name" value="<?php echo $UserName ?>">
                            <input type="email" class="form-control mb-2" placeholder="User Email" name="email" value="<?php echo $UserEmail ?>">
                            <input type="text" class="form-control mb-2" placeholder="User Age" name="age" value="<?php echo $UserAge ?>">
                            <button class="btn btn-primary" name="update">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>
