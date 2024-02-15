<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pertanyaan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2>Daftar Pertanyaan</h2>
    <table>
        <thead>
            <tr>
                <th>Nama Trainer</th>
                <th>Materi</th>
                <th>Pertanyaan</th>
                <th>Batch</th>
                <th>Tanggal Input Pertanyaan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Baca file CSV
            $file = 'pertanyaan.csv';
            $handle = fopen($file, 'r');

            // Tampilkan isi file CSV sebagai tabel
            while (($data = fgetcsv($handle)) !== FALSE) {
                echo '<tr>';
                foreach ($data as $value) {
                    echo '<td>' . htmlspecialchars($value) . '</td>';
                }
                echo '</tr>';
            }

            // Tutup file CSV
            fclose($handle);
            ?>
        </tbody>
    </table>
    <p><a href="index.php">Kembali ke Form</a></p>
</body>
</html>
