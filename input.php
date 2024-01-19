<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pilihan Mata Kuliah</title>
</head>
<body>
    <h2>Form Pilihan Mata Kuliah</h2>
    
    <form action="config.php" method="post">
        <label for="mahasiswa">Nama Mahasiswa:</label>
        <input type="text" name="mahasiswa" required><br>

        <label for="matkul">Mata Kuliah:</label>
        <select name="matkul" required>
            <option value="Mtk">Mtk</option>
            <option value="Inggris">Inggris</option>
            <!-- Tambahkan opsi mata kuliah lainnya sesuai kebutuhan -->
        </select><br>

        <label for="jml_sks">Jumlah SKS:</label>
        <select name="jml_sks" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <!-- Sesuaikan jumlah SKS dengan yang ada di tabel sks -->
        </select><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>