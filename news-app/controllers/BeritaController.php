<?php

class BeritaController extends Controller {

    public function dashboard() {

        if (!isset($_SESSION['admin'])) {

            header("Location: index.php?action=login");
            exit;

        }

        $data = Berita::getAll();

        require 'views/home.php';
    }

    public function create() {

        if (!isset($_SESSION['admin'])) {

            header("Location: index.php?action=login");
            exit;

        }

        if ($_POST) {

            $gambar = $_FILES['gambar']['name'];

            move_uploaded_file(
                $_FILES['gambar']['tmp_name'],
                'public/uploads/' . $gambar
            );

            Berita::create(
                $_POST['judul'],
                $_POST['isi'],
                $gambar
            );

            header("Location: index.php?action=dashboard");
        }

        require 'views/form.php';
    }

    public function edit() {

        if (!isset($_SESSION['admin'])) {

            header("Location: index.php?action=login");
            exit;

        }

        $id = $_GET['id'];

        $news = Berita::find($id);

        if ($_POST) {

            Berita::update(
                $id,
                $_POST['judul'],
                $_POST['isi']
            );

            header("Location: index.php?action=dashboard");
        }

        require 'views/edit.php';
    }

    public function delete() {

        if (!isset($_SESSION['admin'])) {

            header("Location: index.php?action=login");
            exit;

        }

        $id = $_GET['id'];

        Berita::delete($id);

        header("Location: index.php?action=dashboard");
    }
}
