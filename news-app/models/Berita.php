<?php

require_once 'config/Database.php';

class Berita extends Model {

    public static function getAll() {

        $conn = Database::connect();

        $query = $conn->query("SELECT * FROM berita");

        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function create($judul, $isi, $gambar) {

    $conn = Database::connect();

    $stmt = $conn->prepare(
        "INSERT INTO berita (judul, isi, gambar)
         VALUES (?, ?, ?)"
    );

    return $stmt->execute([
        $judul,
        $isi,
        $gambar
    ]);

}

public static function delete($id) {

    $conn = Database::connect();

    $stmt = $conn->prepare(
        "DELETE FROM berita WHERE id=?"
    );

    return $stmt->execute([$id]);

}

public static function find($id) {

    $conn = Database::connect();

    $stmt = $conn->prepare(
        "SELECT * FROM berita WHERE id=?"
    );

    $stmt->execute([$id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);

}

public static function update($id, $judul, $isi) {

    $conn = Database::connect();

    $stmt = $conn->prepare(
        "UPDATE berita
         SET judul=?, isi=?
         WHERE id=?"
    );

    return $stmt->execute([
        $judul,
        $isi,
        $id
    ]);

}

}
