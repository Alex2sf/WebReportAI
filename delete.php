<?php
include 'connect.php'; // Menyertakan file koneksi

// Periksa apakah parameter 'id' ada di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM nilai_individu WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "ID tidak ditemukan.";
}

$conn->close();

// Redirect kembali ke halaman tabel setelah delete
header("Location: table_individu.php");
exit;
?>
