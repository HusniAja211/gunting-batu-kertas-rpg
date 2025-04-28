<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/gamehub/public/css/output.css">
    <title>Gunting Batu Kertas RPG</title>
    <style>
        /* Styling untuk alert */
        .alert {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7); /* Latar belakang gelap */
            padding: 20px;
            border-radius: 10px;
            z-index: 9999; /* Pastikan berada di atas elemen lain */
            text-align: center;
            min-width: 300px;
            display: none; /* Sembunyikan alert secara default */
        }

        /* Kelas untuk menampilkan alert */
        .alert.visible {
            display: block;
        }

        /* Kelas untuk menyembunyikan alert */
        .hidden {
            display: none;
        }
    </style>
<body class="h-screen flex flex-col bg-[url('asset/bg.jpg')] bg-cover bg-center relative">