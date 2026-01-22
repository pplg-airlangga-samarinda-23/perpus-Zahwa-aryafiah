<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Buku</h1>
    <a href="create.php"></a>
    <table>
        <thead>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Stok</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php $no=0; foreach ($books as $books) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $book['judul'] ?></td>
                <td><?= $book['pengarang'] ?></td>\
                <td><?= $book['stok'] ?></td>
                <td>
                    <a href="edit.php">Edit</a>
                    <a href="hapus.php">Hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <?php

    include __DIR__ . '/../koneksi.php';

    $sql = "SELECT * FROM buku";
    $books = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);

    ?>
</body>
</html>