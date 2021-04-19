<?php
include("konek.php");
if(isset($_POST['daftar'])){
    //ambil data di database
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


    $sql = "INSERT INTO tabel_member (nama, email, alamat, hp, pekerjaan, jk, agama, bayar, paket, jangka)
                VALUE ('$nama', '$email', '$alamat', '$hp', '$pekerjaan', '$jk', '$agama', '$bayar', '$paket', '$jangka')";
    $query = mysqli_query($db, $sql);

    if($query){
        echo"<script>alert('Data Berhasil Disimpan, dan akan diteruskan ke email anda !');
        window.location='halmut.php';</script>";
    }else{
        header('Location: index.php/status=gagal');
    }
}else{
    die("Akses Ditolak");
}


?>