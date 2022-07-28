<?php
include("./conn.php");
date_default_timezone_set("Asia/Jakarta");

$query_barang = "SELECT id_barang, kode_barang, nama_barang, satuan FROM tbl_barang where deleted_at is NULL ORDER BY nama_barang ASC";

$data_barang = $conn->query($query_barang);

if(isset($_POST['simpan'])){
    $id_barang = $_POST['id_barang'];
    $qty_masuk = $_POST['qty_masuk'];
    $id_operator = 3;
    $tgl = date('Y-m-d H:i:s', time());
    // insert into table barang masuk
    $query = "INSERT into tbl_barang_masuk (qty_masuk, id_barang, id_operator, created_at, updated_at) values ('$qty_masuk', '$id_barang', '$id_operator','$tgl','$tgl')";

    $insert = $conn->query($query);

    if($insert){
        ?>
        <script>
            alert("Berhasil menambahkan data barang masuk");
            window.location="index.php?hal=daftar_barang_masuk";
        </script>
        <?php
    }
    
    
}
?>

<div class="col-md-6">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Barang Masuk</h3>
        </div>

        <form method="post" action="">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Pilih Barang</label>
                    <select name="id_barang" class="form-control">
                        <?php

                        while ($item = $data_barang->fetch_array()) {
                            echo '<option value="'.$item['id_barang'].'">'.$item['kode_barang'].'-'.$item['nama_barang'].' ('.$item['satuan'].')</option>';
                        }
                        ?>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Barang</label>
                    <input type="number" class="form-control" name="qty_masuk" placeholder="0" value="0" min="0">
                </div>
                
            </div>

            <div class="card-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>