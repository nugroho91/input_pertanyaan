<!DOCTYPE html>
<html>
<head>
    <title>Analisis Pertanyaan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Halaman Utama</h1>
    <!-- Konten halaman utama -->

    <?php
   $file = 'pertanyaan.csv';
   $handle = fopen($file, 'r');

   // Inisialisasi array untuk menyimpan jumlah pertanyaan per trainer, materi, dan batch
   $jumlah_pertanyaan_per_trainer = [];
   $jumlah_pertanyaan_per_materi = [];
   $jumlah_pertanyaan_per_batch = [];

   // Baca file CSV dan hitung jumlah pertanyaan per trainer, materi, dan batch
   while (($data = fgetcsv($handle)) !== FALSE) {
       $trainer = $data[0];
       $materi = $data[1];
       $batch = $data[3];

       // Hitung jumlah pertanyaan per trainer
       if (!isset($jumlah_pertanyaan_per_trainer[$trainer])) {
           $jumlah_pertanyaan_per_trainer[$trainer] = 1;
       } else {
           $jumlah_pertanyaan_per_trainer[$trainer]++;
       }

       // Hitung jumlah pertanyaan per materi
       if (!isset($jumlah_pertanyaan_per_materi[$materi])) {
           $jumlah_pertanyaan_per_materi[$materi] = 1;
       } else {
           $jumlah_pertanyaan_per_materi[$materi]++;
       }

       // Hitung jumlah pertanyaan per batch
       if (!isset($jumlah_pertanyaan_per_batch[$batch])) {
           $jumlah_pertanyaan_per_batch[$batch] = 1;
       } else {
           $jumlah_pertanyaan_per_batch[$batch]++;
       }
   }

   // Tutup file CSV
   fclose($handle);

   // Tampilkan hasil analisis
   echo '<h2>Analisis Pertanyaan</h2>';
   echo '<h3>Jumlah Pertanyaan per Trainer</h3>';
   echo '<ul>';
   foreach ($jumlah_pertanyaan_per_trainer as $trainer => $jumlah) {
       echo '<li>' . $trainer . ': ' . $jumlah . ' pertanyaan</li>';
   }
   echo '</ul>';

   echo '<h3>Jumlah Pertanyaan per Materi</h3>';
   echo '<ul>';
   foreach ($jumlah_pertanyaan_per_materi as $materi => $jumlah) {
       echo '<li>' . $materi . ': ' . $jumlah . ' pertanyaan</li>';
   }
   echo '</ul>';

   echo '<h3>Jumlah Pertanyaan per Batch</h3>';
   echo '<ul>';
   foreach ($jumlah_pertanyaan_per_batch as $batch => $jumlah) {
       echo '<li>' . $batch . ': ' . $jumlah . ' pertanyaan</li>';
   }
   echo '</ul>';

    include 'analisis_pertanyaan.php';
    ?>

    <!-- Konten halaman utama lainnya -->
</body>
</html>
