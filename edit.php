<?php
session_start();

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    // Load file XML
    $file = simplexml_load_file('mahasiswa.xml');

    // Cari elemen yang sesuai dengan id (id) yang akan diedit
    $userToEdit = null;
    foreach ($file->user as $user) {
        if ($user->id == $id) { // Mengubah 'id' menjadi 'id'
            $userToEdit = $user;
            break;
        }
    }

    // Jika data ditemukan, edit
    if ($userToEdit != null) {
        $userToEdit->nama = $nama;
        $userToEdit->alamat = $alamat;

        // Simpan perubahan ke file XML
        $file->asXML('mahasiswa.xml');

        $_SESSION['message'] = 'Data mahasiswa berhasil diubah';
    } else {
        $_SESSION['message'] = 'Data mahasiswa tidak ditemukan';
    }

    header('Location: index.php');
    exit();
}
?>
