<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data User</title>
</head>
<body class="bg-secondary bg-opacity-10 row justify-content-center align-item-center">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-3 rounded " style="width: 89rem;">
  <div class="container-fluid">
  <a class="navbar-brand" style="width:10rem;">Data User</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('index.php/user') ?>">Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('index.php/user/tambah')?>">Tambah</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" name="username" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<br>
<div class="row justify-content-center align-item-center ">
    <div class="shadow p-3 mb-5 bg-body rounded text-white" style="width: 89rem;">
        <div class="card-body">  
            <div class="mb-3">
                <form action="" method="get">
                </form>
                <?php if(!empty($data)):?>
                    <table class="table table-striped table-bordered ">
                        <thead>
                            <th class="text-center">ID</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Action</th>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            <?php foreach ($data AS $key => $value):?>
                            <tr>
                                <td class="text-center"><?php echo $i++; ?></td>
                                <td><?php echo $value['username'] ?></td>
                                <td><?php echo $value['email'] ?></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('index.php/user/edit/'.$value['id']) ?>">
                                      <button  class="btn btn-success text-white btn-sm">Edit</button>
                                    </a>
                                    <a href="<?php echo base_url('index.php/user/delete/'.$value['id']) ?>">
                                      <button  class="btn btn-danger text-white btn-sm">Delete</button>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach?>
                        </tbody>
                    </table>
                <?php endif?>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>