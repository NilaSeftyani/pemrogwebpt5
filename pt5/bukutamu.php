<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Buku Tamu</title>
<style>
  /* CSS untuk mengatur tata letak */
  body {
    text-align: center; /* Posisikan teks di tengah */
  }
  form {
    border: 2px solid #000;
    padding: 20px;
    width: fit-content; /* Sesuaikan dengan ukuran konten */
    margin: auto; /* Posisikan ke tengah */
  }
</style>
</head>
<body>
<h2>Buku Tamu</h2>
<?php
// Jika metode yang digunakan adalah POST, lakukan pemrosesan formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai input dari formulir
    $nama = $_POST['nama'] ?? ''; // Mendapatkan nilai 'nama' dari formulir atau mengatur default kosong jika tidak ada
    $email = $_POST['email'] ?? ''; // Mendapatkan nilai 'email' dari formulir atau mengatur default kosong jika tidak ada
    $komentar = $_POST['komentar'] ?? ''; // Mendapatkan nilai 'komentar' dari formulir atau mengatur default kosong jika tidak ada


    echo "<h3>Terima kasih!</h3>";
    echo "<p>Data Anda telah disimpan.</p>";
}
?>
<!-- Tambahkan garis di sekitar formulir menggunakan PHP -->
<?php if ($_SERVER["REQUEST_METHOD"] != "POST") { ?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama" required><br><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" required><br><br>
  <label for="komentar">Komentar:</label><br>
  <textarea id="komentar" name="komentar" rows="4" required></textarea><br><br>
  <input type="submit" value="Simpan">
</form>
<?php } ?>
</body>
</html>
