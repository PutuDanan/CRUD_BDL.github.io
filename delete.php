<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET["id"];

    // Load file XML
    $users = simplexml_load_file('mahasiswa.xml');

    // Cari elemen yang sesuai dengan NIM (id) yang akan dihapus
    $userToDelete = -1;
    $index = 0;
    foreach ($users->user as $user) {
        if ($user->id == $id) {
            $userToDelete = $index;
            break;
        }
        $index++;
    }

    // Jika data ditemukan, hapus
    if ($userToDelete != -1) {
        unset($users->user[$userToDelete]);

        // Simpan perubahan ke file XML
        file_put_contents('mahasiswa.xml', $users->asXML());
        $_SESSION['message'] = 'Data mahasiswa berhasil dihapus';
    } else {
        $_SESSION['message'] = 'Data mahasiswa tidak ditemukan';
    }

    header('Location: index.php');
    exit();
} else {
    $_SESSION['message'] = 'Terjadi kesalahan saat menghapus data';
    header('Location: index.php');
    exit();
}
