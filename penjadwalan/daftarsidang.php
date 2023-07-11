<!DOCTYPE html>
<html>
<head>
  <title>Daftar Sidang</title>
  <link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
  <div class="container">
    <h2>Daftar Sidang</h2>
    <form action="process_data.php" method="POST">
      <div class="form-group">
        <label for="nim">No NIM:</label>
        <input type="text" id="nim" name="nim" required>
      </div>
      <div class="form-group">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" required>
      </div>
      <div class="form-group">
        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required>
      </div>
      <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" id="tgl_lahir" name="tgl_lahir" required>
      </div>
      <div class="form-group">
        <label for="no_telepon">No Telepon:</label>
        <input type="text" id="no_telepon" name="no_telepon" required>
      </div>
      <div class="form-group">
        <label for="fakultas">Fakultas:</label>
        <select id="fakultas" name="fakultas" required>
          <option value="">Pilih Fakultas</option>
          <option value="Fakultas 1">Fakultas 1</option>
          <option value="Fakultas 2">Fakultas 2</option>
          <!-- Tambahkan opsi fakultas lainnya -->
        </select>
      </div>
      <div class="form-group">
        <label for="jurusan">Jurusan:</label>
        <select id="jurusan" name="jurusan" required>
          <option value="">Pilih Jurusan</option>
          <option value="Jurusan 1">Jurusan 1</option>
          <option value="Jurusan 2">Jurusan 2</option>
          <!-- Tambahkan opsi jurusan lainnya -->
        </select>
      </div>
      <div class="form-group">
        <label for="agama">Agama:</label>
        <select id="agama" name="agama" required>
          <option value="">Pilih Agama</option>
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <!-- Tambahkan opsi agama lainnya -->
        </select>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" required></textarea>
      </div>
      <div class="form-group">
        <label for="nama_orang_tua">Nama Orang Tua:</label>
        <input type="text" id="nama_orang_tua" name="nama_orang_tua" required>
      </div>
      <div class="form-group">
        <label for="pekerjaan_orang_tua">Pekerjaan Orang Tua:</label>
        <input type="text" id="pekerjaan_orang_tua" name="pekerjaan_orang_tua" required>
      </div>
      <div class="form-group">
        <label for="jabatan_orang_tua">Jabatan Orang Tua:</label>
        <input type="text" id="jabatan_orang_tua" name="jabatan_orang_tua" required>
      </div>
      <div class="form-group">
        <label for="alamat_orang_tua">Alamat Orang Tua:</label>
        <textarea id="alamat_orang_tua" name="alamat_orang_tua" required></textarea>
      </div>
      <div class="form-group">
        <label for="no_sk_pembimbing">No SK Pembimbing:</label>
        <input type="text" id="no_sk_pembimbing" name="no_sk_pembimbing" required>
      </div>
      <div class="form-group">
        <label for="tgl_sk_pembimbing">Tanggal SK Pembimbing:</label>
        <input type="date" id="tgl_sk_pembimbing" name="tgl_sk_pembimbing" required>
      </div>
      <div class="form-group">
        <label for="judul_skripsi">Judul Skripsi:</label>
        <input type="text" id="judul_skripsi" name="judul_skripsi" required>
      </div>
      <div class="form-group">
        <label for="dosen_pembimbing">Dosen Pembimbing:</label>
        <input type="text" id="dosen_pembimbing" name="dosen_pembimbing" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Submit" class="btn">
      </div>
    </form>
  </div>
</body>
</html>
