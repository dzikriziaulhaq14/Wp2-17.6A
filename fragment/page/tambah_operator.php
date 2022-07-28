<?php

if(isset($_POST['simpan'])){
    include("./conn.php");
    date_default_timezone_set("Asia/Jakarta");
    
    $nama_operator = $_POST['nama_operator'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $tgl = date('Y-m-d H:i:s', time());
    // insert into table barang 
    $query = "INSERT into tbl_operator (nama_operator, username, password, email) values ('$nama_operator', '$username', '$password', '$email')";

    $insert = $conn->query($query);

    if($insert){
        ?>
        <script>
            alert("Berhasil menambahkan data");
            window.location="index.php?hal=daftar_operator";
        </script>
        <?php
    }
}
?>

<div class="col-md-6">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Barang</h3>
        </div>

        <form method="post" action="">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">nama_operator</label>
                    <input type="text" class="form-control" name="nama_operator" placeholder="Masukkan nama operator">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukan password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">email</label>
                    <input type="text" class="form-control" name="email" placeholder="Masukan email">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>