<?php
include("./conn.php");
date_default_timezone_set("Asia/Jakarta");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $tgl = date('Y-m-d H:i:s', time());
    // insert into table barang 
    $query = "UPDATE tbl_barang_masuk SET deleted_at='$tgl' where id_barang_masuk='$id'";

    $delete = $conn->query($query);

    if($delete){
        ?>
        <script>
            alert("Berhasil menghapus data barang masuk");
            window.location="index.php?hal=daftar_barang_masuk";
        </script>
        <?php
    }
}
?>
