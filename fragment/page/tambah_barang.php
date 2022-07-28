<?php

if(isset($_POST['simpan'])){
    include("./conn.php");
    date_default_timezone_set("Asia/Jakarta");
    
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $id_operator = 3;
    $satuan = $_POST['satuan'];

    $tgl = date('Y-m-d H:i:s', time());
    // insert into table barang 
    $query = "INSERT into tbl_barang (kode_barang, nama_barang, harga_barang, satuan, id_operator, created_at, updated_at) values ('$kode_barang', '$nama_barang', '$harga_barang', '$satuan','$id_operator','$tgl','$tgl')";

    $insert = $conn->query($query);

    if($insert){
        ?>
        <script>
            alert("Berhasil menambahkan data");
            window.location="index.php?hal=daftar_barang";
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
                    <label for="exampleInputEmail1">Kode Barang</label>
                    <input type="text" class="form-control" name="kode_barang" placeholder="Masukkan kode barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan nama barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Harga Barang</label>
                    <input type="number" class="form-control" name="harga_barang" placeholder="Masukan harga barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Satuan</label>
                    <select name="satuan" name="satuan" class="form-control">
                        <option value="Pcs">PCS</option>
                        <option value="Unit">Unit</option>
                        <option value="Box">Box</option>
                    </select>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>