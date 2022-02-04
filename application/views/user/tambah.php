<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tambah User</title>
    
</head>
<body class="bg-secondary bg-opacity-10 row justify-content-center align-item-center">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-3 rounded " style="width: 89rem;">
  <div class="container-fluid">
  <a class="navbar-brand" style="width: 10rem;">Tambah User</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo base_url('index.php/user') ?>">Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url('index.php/user/tambah')?>">Tambah</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="row justify-content-center align-item-center">
    <div class="shadow shadow-lg p-5 mb-9 rounded  card text-dark bg-light mb-3" style="width: 30rem;">
        <div class="card-body bg-light">  
            <div class="mb-3">
                <form action="<?php echo base_url('index.php/user/action_tambah'); ?>"method="post">
                        <label for="username" class="form-label">Nama : </label><br>
                        <input type="text"name="username" class="form-control" required><br>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email : </label><br>
                        <input type="email" name="email" class="form-control" required><br>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password : </label><br>
                        <input type="password" name="password" class="form-control"required><br>
                    </div>
                    <div class="d-grid gap-2">
                        <button  class="btn btn-primary text-white">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</div>
</body>
</html>