<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include __DIR__ . '/../koneksi.php';

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];
        $sql = "DELETE FROM buku WHERE id=?";
        $result = $koneksi_->execute_query($sql, [$id]);

        if ($result) {
            header("location:index.php");
        }
    }
    ?>
</body>
</html>