<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Cek apakah data login telah dikirimkan melalui metode POST
            if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {
                // Mendapatkan data login dari form
                $username = $_POST['username'];
                $password = $_POST['password'];
                $role = $_POST['role'];

                // Cek login berdasarkan role
                if ($role == 'mahasiswa') {
                    // Proses login sebagai mahasiswa
                    if ($username == '123456' && $password == 'mahasiswa') {
                        // Mahasiswa login berhasil
                        echo "<h2>Selamat datang, $username!</h2>";
                        echo "<h3>Dashboard Mahasiswa</h3>";
                        echo "<ul>";
                        echo "<li><a href='daftarsidang.php'>Daftar Sidang</a></li>";
                        echo "<li><a href='viewjadwal.html'>View Jadwal Persidangan</a></li>";
                        echo "<li><a href='requestjadwal.html'>Request Perubahan Jadwal Persidangan</a></li>";
                        echo "</ul>";
                    } else {
                        // Mahasiswa login gagal
                        echo "<h2>Login Mahasiswa gagal. Silakan cek kembali NIM dan password.</h2>";
                    }
                } elseif ($role == 'dosen') {
                    // Proses login sebagai dosen
                    if ($username == '789012' && $password == 'dosen123') {
                        // Dosen login berhasil
                        echo "<h2>Selamat datang, $username!</h2>";
                        echo "<h3>Dashboard Dosen</h3>";
                        echo "<ul>";
                        echo "<li><a href='#'>View Data Mahasiswa yang Dibimbing</a></li>";
                        echo "<li><a href='viewjadwal.html'>View Jadwal Persidangan</a></li>";
                        echo "<li><a href='requestjadwal.html'>Request Perubahan Jadwal Persidangan</a></li>";
                        echo "</ul>";
                    } else {
                        // Dosen login gagal
                        echo "<h2>Login Dosen gagal. Silakan cek kembali NIP dan password.</h2>";
                    }
                } elseif ($role == 'bks') {
                    // Proses login sebagai BKS
                    if ($username == '345678' && $password == 'bks123') {
                        // BKS login berhasil
                        echo "<h2>Selamat datang, $username!</h2>";
                        echo "<h3>Dashboard BKS</h3>";
                        echo "<ul>";
                        echo "<li><a href='#'>Pengelolaan Jadwal Persidangan</a></li>";
                        echo "<li><a href='#'>Pengelolaan Data Mahasiswa dan Dosen</a></li>";
                        echo "</ul>";
                    } else {
                        // BKS login gagal
                        echo "<h2>Login BKS gagal. Silakan cek kembali BKS No. dan password.</h2>";
                    }
                }
            } else {
                // Tampilkan pesan jika data login tidak lengkap
                echo "<h2>Data login tidak lengkap.</h2>";
            }
        } else {
            // Tampilkan pesan jika halaman diakses langsung tanpa data login
            echo "<h2>Halaman tidak dapat diakses secara langsung. Silakan login terlebih dahulu.</h2>";
        }
    ?>
</body>
</html>
