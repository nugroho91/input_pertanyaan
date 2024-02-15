<?php
// Cek apakah ada data yang dikirim
if(isset($_POST['nama_trainer']) && isset($_POST['materi']) && isset($_POST['pertanyaan']) && isset($_POST['batch']) && isset($_POST['tanggal_input'])) {
    // Menyiapkan data untuk ditulis ke file CSV
    $data = array(
        $_POST['nama_trainer'],
        $_POST['materi'],
        $_POST['pertanyaan'],
        $_POST['batch'],
        $_POST['tanggal_input']
    );

    // Nama file CSV yang akan disimpan
    $file = 'pertanyaan.csv';

    // Buka file CSV, jika belum ada akan dibuat
    $fp = fopen($file, 'a');

    // Menulis data ke file CSV
    fputcsv($fp, $data);

    // Tutup file CSV
    fclose($fp);

    // Redirect kembali ke halaman form setelah data disimpan
    header('Location: berhasil.php');
    exit;
} else {
    echo 'Data tidak lengkap';
}

?>
