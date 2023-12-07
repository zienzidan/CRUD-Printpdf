<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <section class="title">
    <h1>Ubah Data Siswa</h1>
  </section>

  <?php
  // Load file koneksi.php
  include "koneksi.php";

  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];

  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM siswa WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute(); // Eksekusi query insert
  $data = $sql->fetch(); // Ambil semua data dari hasil eksekusi $sql
  ?>

  <div class="form-card">
  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
    <section class='input'>
      <p class='input__label'>NIS</p>
      <input class='input__form' type="text" name="nis" value="<?php echo $data['nis']; ?>">
    </section>
    <section class='input'>
      <p class='input__label'>Nama</p>
      <input class='input__form' type="text" name="nama" value="<?php echo $data['nama']; ?>">
    </section>
    <section class='input'>
      <p class="input__label">Jenis Kelamin</p>
      <?php
      if($data['jenis_kelamin'] == "Laki-laki"){
        echo "<div class='input__form'><input type='radio' name='jenis_kelamin' value='Laki-laki' checked='checked'> <p class='input__form'>Laki-laki</p></div>";
        echo "<div class='input__form'><input type='radio' name='jenis_kelamin' value='perempuan'> <p class='input__form'>Perempuan</p></div>";
      }else{
        echo "<div class='input__form'><input type='radio' name='jenis_kelamin' value='Laki-laki'> <p class='input__form'>Laki-laki</p></div>";
        echo "<div class='input__form'><input type='radio' name='jenis_kelamin' value='perempuan' checked='checked'> <p class='input__form'>Perempuan</p></div>";
      }
      ?>
    </section>
    <section class='input'>
      <p class='input__label'>Telepon</p>
      <input class='input__form' type="text" name="telp" value="<?php echo $data['telp']; ?>">
    </section>
    <section class='input'>
      <p class='input__label'>Alamat</p>
      <textarea class='input__form' name="alamat"><?php echo $data['alamat']; ?></textarea>
    </section>
    <section class='input'>
      <p class='input__label'>Foto</p>
      <input class='input__form' type="file" name="foto">
    </section>

    <input type="submit" value="Ubah" class='button submit'>
    <a href="index.php" class='button'>Batal</a>
  </form>
  </div>
</body>
</html>