<?php
include("koneksi.php");
if(isset($_POST['simpan'])){
    $Nama=$_POST['Nama'];
    $Tarif=$_POST['Tarif'];

    $sql="INSERT INTO tb_parkir(jenis_kendaraan,tarif)VALUES('$Nama','$Tarif')";
    $query =mysqli_query($db,$sql);
}
?> 