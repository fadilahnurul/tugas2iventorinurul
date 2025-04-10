<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1> jenis</h1>
        <a href="view_tambah.php" class="btn btn-primary">tambah jenis</a>
        <br><br>
        <table class="table table-striped table-bordered">
            
                <tr>
                    <th>id_jenis</th>
                    <th>nama_jenis</th>
                    <th>aksi</th>
                    

                </tr>
               </thead>
               <tbody>
                <?php 
                include '../../config/koneksi.php';
                $query = mysqli_query ($conn,"SELECT * FROM jenis");
                if(mysqli_num_rows($query) > 0){
                    $id_jenis = 209;
                    while($result=mysqli_fetch_assoc($query)){
                        ?>

                        <tr>
                            <td><?php echo $result['id_jenis']?></td>
                            <td><?php echo $result['nama_jenis']?></td>
                            <td>
                                <a href="view_edit.php?id=<?php echo $result['id_jenis'];?>" class="btn btn-warning">Edit</a>
                                <a href="proses_hapus.php?id=<?php echo $result['id_jenis']; ?>"
                                onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini')" class="btn btn-denger">Hapus</a>
                            </td>
                        </tr>
                        
                        <?php
                        $id_jenis++;
                    }
                }else{
                    echo "belum ada data";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>