<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <section class="title">
    <h1>Tambah Data Siswa</h1>
  </section>

  <div class="form-card">
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <section class="input">
    <p class="input__label">NIS</p>
    <input class="input__form" type="text" name="nis">
  </section>
  <section class="input">
    <p class="input__label">Nama</p>
    <input class="input__form" type="text" name="nama">
  </section>
  <section class="input">
    <p class="input__label">Jenis Kelamin</p>
    <div class="input__form">
      <input type="radio" name="jenis_kelamin" value="Laki-laki"> <p class="input__form">Laki-laki</p>
    </div>
    <div class="input__form">
      <input type="radio" name="jenis_kelamin" value="Perempuan"> <p class="input__form">Perempuan</p>
    </div>
  </section>
  <section class="input">
    <p class="input__label">Telepon</p>
    <input class="input__form" type="text" name="telp">
  </section>
  <section class="input">
    <p class="input__label">Alamat</p>
    <textarea class="input__form" name="alamat"></textarea>
  </section>
  <section class="input">
    <p class="input__label">Foto</p>
    <input class="input__form" type="file" name="foto">
  </section>
  <input type="submit" value="Simpan" class="button submit">
  <a href="index.php" class="button">Batal</a>
  </form>
  </div>
</body>
</html>