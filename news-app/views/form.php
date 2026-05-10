<!DOCTYPE html>
<html>
<head>
    <title>Tambah Berita</title>
</head>
<body>

    <h1>Tambah Berita</h1>

    <form method="POST" enctype="multipart/form-data">

        <input type="text" name="judul" placeholder="Judul">

        <br><br>

        <textarea name="isi" placeholder="Isi berita"></textarea>

        <br><br>

         <input type="file" name="gambar">

         <br><br>

        <button type="submit">Simpan</button>

    </form>

</body>
</html>
