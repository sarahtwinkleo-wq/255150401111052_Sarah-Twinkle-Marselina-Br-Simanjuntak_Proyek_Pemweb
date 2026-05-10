<?php

class AuthController extends Controller {

    public function login() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $admin = (new Admin())->login(
                $_POST['username'],
                $_POST['password']
            );

            if ($admin) {

                $_SESSION['admin'] = $admin['username'];

                header("Location: index.php?action=dashboard");

            }

        }

        require 'views/login.php';

    }

    public function logout() {

        session_destroy();

        header("Location: index.php?action=login");

    }

}
