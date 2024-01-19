<?php
// Koneksi ke database (sesuaikan dengan informasi database Anda)
$host = "localhost";
$username = "root";
$password = "";
$database = "uaspemerograman1";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Tangkap data dari formulir
$mahasiswa = $_POST['mahasiswa'];
$matkul = $_POST['matkul'];
$jml_sks = $_POST['jml_sks'];

// Ambil ID mahasiswa berdasarkan nama mahasiswa
$sql_select_mahasiswa = "SELECT id_mhs FROM mahasiswa WHERE nama = '$mahasiswa'";
$result_mahasiswa = $conn->query($sql_select_mahasiswa);

// Ambil ID matkul berdasarkan nama matkul
$sql_select_matkul = "SELECT id_mtkul FROM matkul WHERE nama = '$matkul'";
$result_matkul = $conn->query($sql_select_matkul);

// Pastikan data mahasiswa dan matkul ditemukan
if ($result_mahasiswa->num_rows > 0 && $result_matkul->num_rows > 0) {
    $row_mahasiswa = $result_mahasiswa->fetch_assoc();
    $id_mhs = $row_mahasiswa['id_mhs'];

    $row_matkul = $result_matkul->fetch_assoc();
    $id_matkul = $row_matkul['id_mtkul'];

    // Simpan data ke dalam tabel_krs
    $sql_insert_tabel_krs = "INSERT INTO krs (id_mhs, id_matkul, sks) 
                             VALUES ('$id_mhs', '$id_matkul', '$jml_sks')";

    // Eksekusi query untuk menyimpan data ke dalam tabel_krs
    if ($conn->query($sql_insert_tabel_krs) === TRUE) {
        echo "Data berhasil disimpan di tabel_krs.";
    } else {
        echo "Error: " . $sql_insert_tabel_krs . "<br>" . $conn->error;
    }
} else {
    echo "Error: Mahasiswa atau mata kuliah tidak ditemukan.";
}

$conn->close();
?>