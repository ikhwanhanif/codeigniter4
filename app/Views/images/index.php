<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Gambar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            width: 90%;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .add-btn {
            display: inline-block;
            width: auto;
            padding: 10px 20px;
            margin-right: 10px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }
        .add-btn:hover {
            background-color: #0056b3;
        }
        .edit-btn{
            display: inline-block;
            width: 100px;
            padding: 10px;
            margin-right: 10px;
            background-color: #ffdf00;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .edit-btn:hover {
            background-color: #ffc40c;
        }
        .delete-btn {
            display: inline-block;
            width: 100px;
            height: 40px;
            padding: 10px;
            margin-right: 10px;
            background-color: #dc3545; /* Mengubah warna latar belakang tombol delete */
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            border: none; /* Menghapus border */
        }
        .delete-btn:hover {
            background-color: #c82333; /* Mengubah warna latar belakang tombol delete saat dihover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CRUD Gambar</h1>
        <a href="<?= base_url('/images/create') ?>" class="add-btn">Tambah Gambar</a>
        <table border="1">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php foreach ($images as $image): ?>
            <tr>
                <td><?= $image['nama'] ?></td>
                <td><?= $image['deskripsi'] ?></td>
                <td><img src="<?= base_url('uploads/' . $image['file_gambar']) ?>" width="100"></td>
                <td>
                    <a href="<?= base_url('/images/edit/' . $image['id']) ?>" class="edit-btn">Edit</a>
                    
                    <form action="<?= base_url('/images/delete/' . $image['id']) ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="delete-btn" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
</body>
    <footer style="text-align: center; margin-top: 20px; margin-bottom: 20px">
        &copy; <?php echo date("Y"); ?> Ikhwan Hanif. All Rights Reserved.
    </footer>
</html>
