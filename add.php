<?php
session_start();

if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    // Validasi data
    if (empty($id) || empty($nama) || empty($alamat)) {
        $_SESSION['message'] = 'Semua field harus diisi';
        header('Location: index.php');
        exit();
    }

    // Sanitasi data
    $id = htmlspecialchars($id);
    $nama = htmlspecialchars($nama);
    $alamat = htmlspecialchars($alamat);

    // Load file XML
    $users = simplexml_load_file('mahasiswa.xml');

    // Tambahkan data baru
    $user = $users->addChild('user');
    $user->addChild('id', $id);
    $user->addChild('nama', $nama);
    $user->addChild('alamat', $alamat);

    // Simpan perubahan ke file XML
    $dom = new DomDocument();
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($users->asXML());
    $dom->save('mahasiswa.xml');

    // Set pesan sukses
    $_SESSION['message'] = 'Mahasiswa berhasil ditambahkan';
    header('Location: index.php');
    exit();
} else {
    $_SESSION['message'] = 'Data gagal ditambahkan!';
    header('Location: index.php');
    exit();
}
