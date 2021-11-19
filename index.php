<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3">Registration Form in Php</h3>
                    </div>
                    <div class="card-body">
                        <form action="insert.php" method="post">
                            <input type="text" class="form-control mb-2" placeholder="User Name" name="name">
                            <input type="email" class="form-control mb-2" placeholder="User Email" name="email">
                            <input type="text" class="form-control mb-2" placeholder="User Age" name="age">
                            
                            <button class="btn btn-primary mt-2"><a href="view.php" style="color: #fff;text-decoration:none; width:30px;">View</a></button>
                            <button class="btn btn-primary mt-2" name="submit" style="float: right;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>
