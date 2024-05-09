<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gambar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .simpan-btn {
            display: inline-block;
            width: 100px;
            height: 40px;
            padding: 10px;
            margin-right: 10px;
            background-color: #007bff; /* Mengubah warna latar belakang tombol delete */
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            border: none; /* Menghapus border */
        }
        .simpan-btn:hover {
            background-color: #0056b3; /* Mengubah warna latar belakang tombol delete saat dihover */
        }
    </style>
</head>
<body>
    <div class="container">

        <h1>Edit Gambar</h1>
        <form action="<?= base_url('/images/update') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= $image['id'] ?>">
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" value="<?= $image['nama'] ?>"><br>
            <label for="deskripsi">Deskripsi:</label><br>
            <textarea id="deskripsi" name="deskripsi"><?= $image['deskripsi'] ?></textarea><br>
            <label for="file_gambar">File Gambar:</label><br>
            <input type="file" id="file_gambar" name="file_gambar"><br><br>
            <button class="simpan-btn" type="submit">Simpan</button>
        </form>

    </div>
    
</body>
</html>
