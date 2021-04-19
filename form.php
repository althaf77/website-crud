<?php
  include("konek.php");
?>
<html>
<body>
<head>
<title>Website Exercise GYM</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<div class="container">
<form method="POST" action="proses-daftar.php" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input type="text" name="nama"class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label" >Alamat</label>
    <input type="text" name="alamat" class="form-control" id="inputAddress">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">NO HP/WA</label>
    <input type="number" name="hp"class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Pekerjaan</label>
    <input type="text" name="pekerjaan" class="form-control" id="inputPassword4" placeholder="ex:Wiraswasta">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Jenis Kelamin</label>
    <select name="jk" id="inputState" class="form-select">
      <option selected>Pilih Jenis kelamin</option>
      <option value="laki-laki">Laki Laki</option>
      <option value="perempuan">Perempuan</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Agama</label>
    <select name="agama" id="inputState" class="form-select">
      <option selected>Pilih Agama</option>
      <option value="islam">Islam</option>
      <option value="protestan">Protestan</option>
      <option value="katolik">Katolik</option>
      <option value="hindu">Hindu</option>
      <option value="budha">Budha</option>
      <option value="konghucu">Konghucu</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Pembayaran</label>
    <select name="bayar" id="inputState" class="form-select">
      <option selected>Pilih</option>
      <option value="tunai">Tunai</option>
      <option value="debit">Debit</option>
      <option value="kredit">Kredit</option>
    </select>
  </div>
  <div class="col-md-6">
  <label for="inputState" class="form-label">Plih Paket</label>
    <select name="paket" id="inputState" class="form-select">
      <option selected>Silahkan Pilih</option>
      <option value="silver">Silver</option>
      <option value="gold">Gold</option>
      <option value="diamond">Diamond</option>
      <option value="platinum">Platinum</option>
    </select>
  </div>
  <div class="col-md-6">
  <label for="inputState" class="form-label">Pilih Jangka Waktu</label>
    <select name="jangka" id="inputState" class="form-select">
      <option selected>Silahkan Pilih</option>
      <option value="1">1 Bulan</option>
      <option value="3">3 Bulan</option>
      <option value="6">6 Bulan</option>
      <option value="12">12 Bulan</option>
    </select>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" name="daftar" class="btn btn-primary">Daftar Sekarang</button>
  </div>
</form>
</div>

</body>
</html>
