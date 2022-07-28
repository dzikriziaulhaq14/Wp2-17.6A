<?php
include("./conn.php");
date_default_timezone_set("Asia/Jakarta");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $tgl = date('Y-m-d H:i:s', time());
    // insert into table barang 
    $query = "UPDATE tbl_barang_keluar SET deleted_at='$tgl' where id_barang_keluar='$id'";

    $delete = $conn->query($query);

    if($delete){
        ?>
        <script>
            alert("Berhasil menghapus data barang keluar");
            window.location="index.php?hal=daftar_barang_keluar";
        </script>
        <?php
    }
}
?>
