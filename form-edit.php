<?php
include("konek.php");

if ( !isset($_GET['id'])){
  header('Location: daftar-member.php');
}

$id = $_GET['id'];

$sql= "SELECT * FROM tabel_member WHERE id=$id";
$query= mysqli_query($db, $sql);
$member= mysqli_fetch_assoc($query);


if(mysqli_num_rows($query) < 1){
    die("Data Tidak ada");
}


?>
<html>
<body>
<head>
<title>Website Exercise GYM</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<div class="container">
<form method="POST" action="proses-edit.php" class="row g-3">

<input type="hidden" name="id" value="<?php echo $member['id'] ?>"/>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input type="text" name="nama"class="form-control" id="inputEmail4" value="<?php echo $member['nama'] ?>"/>
  </div>

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputPassword4" value="<?php echo $member['email'] ?>"/>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label" >Alamat</label>
    <input type="text" name="alamat" class="form-control" id="inputAddress" value="<?php echo $member['alamat'] ?>" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">NO HP/WA</label>
    <input type="number" name="hp"class="form-control" id="inputEmail4" value="<?php echo $member['hp'] ?>"/>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Pekerjaan</label>
    <input type="text" name="pekerjaan" class="form-control" id="inputPassword4" placeholder="ex:Wiraswasta" 
    value="<?php echo $member['pekerjaan'] ?>"/>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Jenis Kelamin</label>
    <?php $jk = $member['jk']; ?>
    <select name="jk" id="inputState" class="form-select">
      <option selected>Pilih Jenis kelamin</option>
      <option <?php echo ($jk == 'laki-laki') ? "selected": "" ?>>Laki Laki</option>
      <option <?php echo ($jk == 'perempuan') ? "selected": "" ?>>Perempuan</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Agama</label>
    <?php $agama = $member['agama']; ?>
    <select name="agama" id="inputState" class="form-select">
      <option selected>Pilih Agama</option>
      <option <?php echo ($agama == 'islam') ? "selected": "" ?>>islam</option>
      <option <?php echo ($agama == 'protestan') ? "selected": "" ?>>Protestan</option>
      <option <?php echo ($agama == 'katolik') ? "selected": "" ?>>katolik</option>
      <option <?php echo ($agama == 'hindu') ? "selected": "" ?>>Hindu</option>
      <option <?php echo ($agama == 'budha') ? "selected": "" ?>>Budha</option>
      <option <?php echo ($agama == 'konghucu') ? "selected": "" ?>>konghucu</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Pembayaran</label>
    <?php $bayar = $member['bayar']; ?>
    <select name="bayar" id="inputState" class="form-select">
      <option selected>Pilih</option>
      <option <?php echo ($bayar == 'tunai') ? "selected": "" ?>>Tunai</option>
      <option <?php echo ($bayar == 'debit') ? "selected": "" ?>>Debit</option>
      <option <?php echo ($bayar == 'kredit') ? "selected": "" ?>>Kredit</option>
    </select>
  </div>
  <div class="col-md-6">
  <label for="inputState" class="form-label">Plih Paket</label>
  <?php $paket = $member['paket']; ?>
    <select name="paket" id="inputState" class="form-select">
      <option selected>Silahkan Pilih</option>
      <option <?php echo ($paket == 'silver') ? "selected": "" ?>>Silver</option>
      <option <?php echo ($paket == 'gold') ? "selected": "" ?>>Gold</option>
      <option <?php echo ($paket == 'diamond') ? "selected": "" ?>>Diamond</option>
      <option <?php echo ($paket == 'platinum') ? "selected": "" ?>>Platinum</option>
    </select>
  </div>
  <div class="col-md-6">
  <label for="inputState" class="form-label">Pilih Jangka Waktu</label>
  <?php $jangka = $member['jangka']; ?>
    <select name="jangka" id="inputState" class="form-select">
      <option selected>Silahkan Pilih</option>
      <option <?php echo ($jangka == '1') ? "selected": "" ?>>1 Bulan</option>
      <option <?php echo ($jangka == '3') ? "selected": "" ?>>3 Bulan</option>
      <option <?php echo ($jangka == '6') ? "selected": "" ?>>6 Bulan</option>
      <option <?php echo ($jangka == '12') ? "selected": "" ?>>12 Bulan</option>
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
    <button type="submit" name="simpan" class="btn btn-primary">Simpan Perubahan</button>
  </div>
</form>
</div>

</body>
</html>
