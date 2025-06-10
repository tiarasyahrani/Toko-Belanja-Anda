<?php
session_start();
require_once 'vendor/autoload.php';

use Google\Client;
use Google\Service\Oauth2;

$client = new Client();
$client->setClientId('478248295792-q0otkvkcqt9jr5c1knef5bqljdjol1jn.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/tokobelanjaandaaa/google-callback.php');
$client->addScope("email");
$client->addScope("profile");


if (isset($_GET['code'])) {
    try {
        // Tukar code dari Google menjadi token akses
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

        if (!isset($token['error'])) {
            $client->setAccessToken($token['access_token']);

            // Ambil info user dari Google
            $oauth = new Oauth2($client);
            $google_account_info = $oauth->userinfo->get();

            $user = [
                'name' => $google_account_info->name,
                'email' => $google_account_info->email,
                'picture' => $google_account_info->picture
            ];

            // Simpan data user di session
            $_SESSION['user'] = $user;

            // Arahkan ke halaman utama setelah login
            header('Location: tbazenara.php');
            exit();
        } else {
            echo "Gagal mengambil token dari Google:<br><pre>";
            print_r($token);
            echo "</pre>";
        }
    } catch (Exception $e) {
        echo "Terjadi kesalahan: " . $e->getMessage();
    }
} else {
    echo "Kode otorisasi Google tidak ditemukan di URL (code).";
}
