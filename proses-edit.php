<?php

include("konek.php");
if(isset($_POST['simpan'])){

    $id= $_POST['id'];
    $nama = $_POST['nama'];
    $email= $_POST['email'];
    $alamat= $_POST['alamat'];
    $hp= $_POST['hp'];
    $pekerjaan= $_POST['pekerjaan'];
    $jk= $_POST['jk'];
    $agama= $_POST['agama'];
    $bayar= $_POST['bayar'];
    $paket= $_POST['paket'];
    $jangka= $_POST['jangka'];

    $sql= "UPDATE tabel_member SET nama='$nama', email='$email', alamat='$alamat', hp='$hp', pekerjaan='$pekerjaan', jk='$jk',
                                        agama='$agama', bayar='$bayar', paket='$paket', jangka='$jangka' WHERE id=$id";
    $query= mysqli_query($db, $sql);

    if($query){
        header('Location: admin.php');
    } else {
        die('gagal');
    }

}else{
    die("akses dilarang");
}




?>