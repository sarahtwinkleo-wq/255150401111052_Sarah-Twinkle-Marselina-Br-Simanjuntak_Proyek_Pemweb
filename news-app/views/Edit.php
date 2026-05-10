<!DOCTYPE html>
<html>
<head>
    <title>Edit Berita</title>
</head>
<body>

    <h1>Edit Berita</h1>

    <form method="POST">

        <input
            type="text"
            name="judul"
            value="<?= $news['judul']; ?>"
        >

        <br><br>

        <textarea name="isi"><?= $news['isi']; ?></textarea>

        <br><br>

        <button type="submit">
            Update
        </button>

    </form>

</body>
</html>
