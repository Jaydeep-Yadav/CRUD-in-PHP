<?php

include 'conn.php';

if(count($_POST)!=0){

    extract($_POST);
    extract($_GET);
    //$query = "INSERT INTO user(username,password) VALUES ('$username', '$password')";
    $query = "UPDATE user SET username='$username', password = '$password' WHERE id='$id' ";
    //var_dump($query);
    $result = mysqli_query($conn,$query);

    if($result == true){
        echo "Record Updated";
        
    }
    else{
        echo "Failed";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container-fluid shadow-sm">
		<div class="container pb-2 pt-2">
			<div class="h4 text-center">PHP CRUD Application </div>
		</div>
	</div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto pt-4">
               <form action="" method="post">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h1 class="text-center text-white">
                                Update Operation
                            </h1>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="" value=" ">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="">
                        </div>
                        <button type="submit" class="btn btn-success" >Submit</button>
                    </div>
               </form>
               <h5><a href="display.php"><input type="button" value="View Users" class="btn btn-primary"></a></h5>
            </div>
        </div>
    </div>

</body>
</html>