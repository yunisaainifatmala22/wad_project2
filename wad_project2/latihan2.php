<?php
    //Buatkan dua input area yang dapat diisi
        //input pertama berupa angka
        //input kedua berupa dropdown
    //buatkan 1 button yang bernama hitung

?>

<!DOCTYPE html>
<html>
<head>
<body>
    <h1>KALKULATOR SEDERHANA</h1>
</head>
<body>
    <form action="Latihan3.php" method="get">
        <!-- Input pertama untuk angka -->
        <label for="angka1">Masukkan Angka Pertama: </label>
        <input type="number" name="angka1" id="angka1" required><br><br>
        
        <!-- Input kedua berupa dropdown -->
        <label for="operasi">Pilih Operasi: </label>
        <select name="operasi" id="operasi">
            <option value="tambah">Tambah</option>
            <option value="kurang">Kurang</option>
            <option value="kali">Kali</option>
            <option value="bagi">Bagi</option>
        </select><br><br>

        <!-- Input kedua untuk angka -->
        <label for="angka2">Masukkan Angka Kedua: </label>
        <input type="number" name="angka2" id="angka2" required><br><br>

        <!-- Tombol "hitung" -->
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
        if (isset($_POST['hitung'])) {
            // Mengambil data dari form
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operasi = $_POST['operasi'];
            
            // Proses perhitungan
            $hasil = 0;
            if ($operasi == 'tambah') {
                $hasil = $angka1 + $angka2;
            } elseif ($operasi == 'kurang') {
                $hasil = $angka1 - $angka2;
            } elseif ($operasi == 'kali') {
                $hasil = $angka1 * $angka2;
            } elseif ($operasi == 'bagi') {
                $hasil = $angka1 / $angka2;
            }
            
            // Menampilkan hasil
            echo "<p>Hasil perhitungan: $hasil</p>";
        }
    ?>

</body>
</html>
