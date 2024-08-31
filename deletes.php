<?php
include 'connect.php'; // Menyertakan file koneksi

// Periksa apakah parameter 'id' dan 'table' ada di URL
if (isset($_GET['id']) && isset($_GET['table'])) {
    $id = $_GET['id'];
    $table = $_GET['table'];

    // Query untuk menghapus data berdasarkan ID dari tabel yang ditentukan
    $sql = "DELETE FROM $table WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        echo "Data berhasil dihapus dari tabel $table.";
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "Parameter tidak valid.";
}

$conn->close();

// Redirect kembali ke halaman tabel kelas setelah delete
header("Location: tabel_kelas.php");
exit;
?>
