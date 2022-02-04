<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Data</title>
</head>
<body>
<div class="row justify-content-center align-item-center position-absolute top-50 start-50 translate-middle">
    <div class="shadow shadow-lg p-5 mb-9 rounded  card text-dark bg-light mb-3" style="width: 30rem;">
        <div class="card-body"> 
            <div class="d-grid gap-2">
            <h1 class=" row justify-content-center align-text-middle">Form edit</h1>
                <form action="<?php echo base_url('index.php/user/action_edit/'.$data['id']); ?>"method="post">
                    <label for="username" class="form-label" >Nama : </label><br>
                    <input type="text"name="username" value="<?php echo $data['username'] ?>" class="form-control" required><br>
                    <label for="email" class="form-label">Email : </label><br>
                    <input type="email" name="email" value="<?php echo $data['email'] ?>" class="form-control" required><br>
                    <label for="password" class="form-label">Password : </label><br>
                    <input type="password" name="password" id="password" value="<?php echo $data['password'] ?>" class="form-control" required><br>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-danger text-white btn-sm">Update</button>
                    </div>
                </form>
                <a href="<?php echo base_url('index.php/user') ?>">
                    <div class="d-grid gap-2">
                        <button  class="btn btn-primary text-white btn-sm">Data User</button>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>