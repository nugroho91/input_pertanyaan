<!DOCTYPE html>
<html>
<head>
    <title>Form Input Pertanyaan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        form input[type="text"],
        form textarea,
        form input[type="date"],
        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        form textarea {
            height: 100px;
            resize: vertical;
        }

        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }

        @media screen and (min-width: 600px) {
            .container {
                max-width: 600px;
                margin: 50px auto;
            }

            form label,
            form input[type="text"],
            form textarea,
            form input[type="date"],
            form input[type="submit"] {
                margin-bottom: 20px;
            }
        }
      .checkmark {
          width: 30px;
          height: 30px;
          background-image: url('checkmark.png'); /* Ganti dengan path gambar centang */
          background-size: cover;
          display: none;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          z-index: 9999;
          animation: fadeIn 0.5s ease-in-out;
      }

      @keyframes fadeIn {
          0% {
              opacity: 0;
          }
          100% {
              opacity: 1;
          }
      }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Input Pertanyaan</h2>
        <form method="POST" action="simpan_pertanyaan.php">
            <label>Nama Trainer:</label><br>
            <input type="text" name="nama_trainer"><br>

            <label>Materi:</label><br>
            <input type="text" name="materi"><br>

            <label>Pertanyaan:</label><br>
            <textarea name="pertanyaan" rows="4" cols="50"></textarea><br>

            <label>Batch:</label><br>
            <input type="text" name="batch"><br>

            <label>Tanggal Input Pertanyaan:</label><br>
            <input type="date" name="tanggal_input"><br>

            <input type="submit" value="Submit">
        </form>
    </div>
  <div class="checkmark"></div>
  <script>
      // Ambil elemen form
      const form = document.querySelector('form');

      // Tambahkan event listener untuk form submit
      form.addEventListener('submit', function() {
          // Ambil elemen .checkmark
          const checkmark = document.querySelector('.checkmark');
          // Tampilkan elemen .checkmark
          checkmark.style.display = 'block';
          // Atur timeout untuk menghilangkan .checkmark setelah beberapa detik
          setTimeout(() => {
              checkmark.style.display = 'none';
          }, 3000); // Hapus setelah 3 detik
      });
  </script>
</body>
</html>
