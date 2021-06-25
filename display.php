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

    <div class="container-fluid text-right">
        <div class="row">
            <div class="col-lg-6 m-auto pt-4">
            <h5><a href="create.php"><input type="button" value="Create Users" class="btn btn-primary"></a></h5>
            </div>
        </div>
    </div>

    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Update</th>
                        </tr>
                    </thead>
                    <?php 
                        include'conn.php';
                        $query = "select * from user";
                        $result = mysqli_query($conn,$query);
                        
                        if(empty($result)){
                            header('location:create.php');
                        }
                        while($res = mysqli_fetch_array($result)) {
                    ?>
                    <tbody>
                        <tr>
                        <th scope="row"><?= $res['id'] ?></th>
                        <td><?= $res['username'] ?></td>
                        <td><?= $res['password'] ?></td>
                        <td><a href="delete.php?id=<?= $res['id'];?> "><input type="button" class="btn btn-primary" value="Delete"></a></td>
                        <td><a href="update.php?id=<?= $res['id'];?> "><input type="button" class="btn btn-primary" value="Update"></a></td>
                        </tr>
                    </tbody>

                    <?php 
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>    
</body>
</html>