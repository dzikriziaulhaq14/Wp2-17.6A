<?php 
include("conn.php");

$data = $conn->query("SELECT m.id_barang_masuk, m.qty_masuk, b.kode_barang, b.nama_barang, b.satuan, o.nama_operator, m.created_at FROM tbl_barang_masuk m INNER JOIN tbl_barang b ON m.id_barang=b.id_barang INNER JOIN tbl_operator o ON m.id_operator=o.id_operator AND m.deleted_at IS null
ORDER BY m.id_barang_masuk desc");

// print_r($data);
?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Barang Masuk</h3>
    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Tgl. Masuk</th>
                    <th>Barang</th>
                    <th>Satuan</th>
                    <th>QTY</th>
                    <th>Operator</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                    while($value = $data->fetch_object()){
                        ?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$value->created_at;?></td>
                                <td><?=$value->kode_barang;?>-<?=$value->nama_barang;?></td>
                                <td><?=$value->satuan;?></td>
                                <td><?=$value->qty_masuk;?></td>
                                <td><?=$value->nama_operator;?></td>
                                <td>
                                    <a href="index.php?hal=hapus_barang_masuk&id=<?=$value->id_barang_masuk;?>" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Hapus</a>
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