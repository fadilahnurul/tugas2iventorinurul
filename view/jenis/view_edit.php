<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">">
    <title>tambah jenis</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="">barang</a>
        </li>
        <li class="nav-item">
        <a class="nav-link "  href="../jenis/index.php">jenis</a>
        </li>
        </ul>
    </div>
  </div>
</nav>
    <div class="container">
        <h1>edit jenis nurul</h1>
        <?php
        include '../../config/koneksi.php';

        $id=$_GET['id'];
        $query=mysqli_query($conn,"SELECT * FROM jenis WHERE id_jenis='$id'");
        $result=mysqli_fetch_array($query);
        ?>
        <form action="proses_edit.php?id=" method="post">
            <div class="mb-3">
                <label for="" class="form-label">id_jenis</label>
                <input type="text" class="form-control" value="<?php echo $result['id_jenis']?>" name ="id_jenis" id="" placeholder=""/>
                </div>
                <div class="mb-3">
                <label for="" class="form-label">nama_jenis</label>
                <input type="text" class="form-control"value="<?php echo $result['nama_jenis']?>" name="nama_jenis" id="" placeholder=""/>   
                </div>
                <button type="submit" class="btn btn-pimary">submit</button>           
        </form>
                <script src=">https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"></script>
           
    </div>
</body>
</html>