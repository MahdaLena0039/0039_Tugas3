<?php
include 'database.php';
$db_0039 = new Database();

$aksi = $_GET['aksi'];

function uploadGambar() {
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === 0) {
        $targetDir = "uploads/"; // Direktori untuk menyimpan gambar
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true); // Membuat folder jika belum ada
        }

        $fileName = basename($_FILES['gambar']['name']);
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedTypes = ['jpg', 'jpeg', 'png']; // Format yang diizinkan

        if (!in_array($fileExt, $allowedTypes)) {
            return false; // Tipe file tidak diizinkan
        }

        $fileNewName = uniqid() . '.' . $fileExt;
        $targetFile = $targetDir . $fileNewName;

        // Pindahkan file yang diupload ke direktori target
        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFile)) {
            return $targetFile; // Mengembalikan path file gambar
        } else {
            return false; // Gagal upload
        }
    }
    return false;
}

if ($aksi == 'tambah') {
    $gambar = uploadGambar(); // Panggil fungsi upload gambar

    if ($gambar) {
        // Tambahkan data ke database bersama dengan path gambar
        $db_0039->tambahData($_POST['nama'], $_POST['jns_kelamin'], $_POST['alamat'], $_POST['nohp'], $gambar);
        header("location:index.php?status=success");
        exit();
    } else {
        header("location:index.php?status=error"); // Jika upload gambar gagal
        exit();
    }
}

elseif ($aksi == 'update') {
    $gambar = uploadGambar(); // Upload gambar baru jika ada

    if ($gambar) {
        // Update data beserta gambar baru
        $db_0039->updateData($_POST['id'], $_POST['nama'], $_POST['jns_kelamin'], $_POST['alamat'], $_POST['nohp'], $gambar);
    } else {
        // Update data tanpa mengubah gambar (tidak diupload gambar baru)
        $db_0039->updateData($_POST['id'], $_POST['nama'], $_POST['jns_kelamin'], $_POST['alamat'], $_POST['nohp'], null);
    }
    header("location:index.php?");
    exit();
}

elseif ($aksi == 'hapus') {
    $db_0039->hapusData($_GET['id']);
    header("location:index.php?");
    exit();
}



?>