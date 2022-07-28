<?php
include("./conn.php");
date_default_timezone_set("Asia/Jakarta");
$id = $_GET['id'];

$query = "SELECT * FROM tbl_barang where id_barang='$id'";

$data = $conn->query($query);

while($value = $data->fetch_array()){
    $kode_barang = $value['kode_barang'];
    $nama_barang = $value['nama_barang'];
    $harga_barang = $value['harga_barang'];
    $satuan = $value['satuan'];
}

if(isset($_POST['ubah'])){
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $satuan = $_POST['satuan'];
    $tgl = date('Y-m-d H:i:s', time());
    // insert into table barang 
    $query = "UPDATE tbl_barang SET kode_barang='$kode_barang', nama_barang='$nama_barang', harga_barang='$harga_barang',satuan='$satuan', updated_at='$tgl' where id_barang='$id'";

    $update = $conn->query($query);

    if($update){
        ?>
        <script>
            alert("Berhasil mengubah data");
            window.location="index.php?hal=daftar_barang";
        </script>
        <?php
    }
}
?>


<div class="col-md-6">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Barang</h3>
        </div>

        <form method="post" action="">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode Barang</label>
                    <input type="text" class="form-control" name="kode_barang" value="<?=$kode_barang;?>" placeholder="Masukkan kode barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" value="<?=$nama_barang;?>" placeholder="Masukkan nama barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Harga Barang</label>
                    <input type="number" class="form-control" name="harga_barang" value="<?=$harga_barang;?>" placeholder="Masukan harga barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Satuan</label>
                    <select name="satuan" name="satuan" class="form-control">
                        <option value="Pcs" <?=$satuan=='Pcs'?'selected':'';?>>PCS</option>
                        <option value="Unit" <?=$satuan=='Unit'?'selected':'';?>>Unit</option>
                        <option value="Box" <?=$satuan=='Box'?'selected':'';?>>Box</option>
                    </select>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
            </div>
        </form>
    </div>
</div>