<!DOCTYPE html>
<html>
<head>
    <title>News App</title>
</head>
<body>

    <a href="index.php?action=logout">
        Logout
    </a>

    <br><br>

    <h1>Daftar Berita</h1>

    <a href="index.php?action=create">
        Tambah Berita
    </a>

    <?php foreach($data as $item): ?>

        <div style="border:1px solid black; padding:10px; margin:10px;">

            <h2><?= $item['judul']; ?></h2>

            <img
                src="public/uploads/<?= $item['gambar']; ?>"
                width="200"
            >

            <p><?= $item['isi']; ?></p>

            <a href="index.php?action=edit&id=<?= $item['id']; ?>">
                Edit
            </a>

            <br>

            <a href="index.php?action=delete&id=<?= $item['id']; ?>">
                Hapus
            </a>

            <small><?= $item['created_at']; ?></small>
            
        </div>

    <?php endforeach; ?>

</body>
</html>
