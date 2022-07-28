<?php 
include("conn.php");

$data = $conn->query("SELECT b.*, o.nama_operator FROM tbl_barang b INNER JOIN tbl_operator o ON b.id_operator=o.id_operator and b.deleted_at is null ORDER BY b.id_barang desc");

// print_r($data);
?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Barang</h3>
    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Operator</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                    while($value = $data->fetch_array()){
                        ?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$value['kode_barang'];?></td>
                                <td><?=$value['nama_barang'];?></td>
                                <td><?=$value['satuan'];?></td>
                                <td><?=$value['nama_operator'];?></td>
                                <td>
                                    <a href="index.php?hal=edit_barang&id=<?=$value['id_barang'];?>" class="btn btn-sm btn-primary">
                                        <i class="far fa-edit"></i> 
                                        Edit
                                    </a>
                                    <a href="index.php?hal=hapus_barang&id=<?=$value['id_barang'];?>" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php
                        $no++;
                    }

                ?>
                
                
            </tbody>
        </table>
    </div>

</div>