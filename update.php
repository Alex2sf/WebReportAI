<?php
// Konfigurasi Koneksi Database
include 'connect.php';

// Periksa apakah parameter 'id' dan 'table' ada di URL
if (isset($_GET['id']) && isset($_GET['table'])) {
    $id = $_GET['id'];
    $table = $_GET['table'];

    // Ambil data dari tabel berdasarkan ID
    $sql = "SELECT * FROM $table WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "Parameter tidak valid.";
    exit;
}

// Proses ketika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updateData = [];
    $updateSQL = "UPDATE $table SET ";

    // Buat query dinamis berdasarkan data yang diambil
    foreach ($row as $key => $value) {
        if ($key != 'id') { // Jangan update kolom ID
            $updateSQL .= "$key = ?, ";
            $updateData[] = $_POST[$key];
        }
    }

    // Hapus koma terakhir dan tambahkan kondisi WHERE
    $updateSQL = rtrim($updateSQL, ', ') . " WHERE id = ?";
    $updateData[] = $id;

    // Siapkan dan jalankan query update
    $stmt = $conn->prepare($updateSQL);
    $stmt->bind_param(str_repeat('s', count($updateData)), ...$updateData);
    
    if ($stmt->execute()) {
        echo "Data berhasil diperbarui.";
        header("Location: tabel_kelas.php");
        exit;
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h1>Update Data</h1>

<form method="post">
    <?php
    // Buat input form secara dinamis berdasarkan data yang diambil
    foreach ($row as $key => $value) {
        if ($key != 'id') { // Jangan tampilkan kolom ID
            echo "<label for='$key'>" . htmlspecialchars($key) . "</label>";
            echo "<input type='text' name='" . htmlspecialchars($key) . "' value='" . htmlspecialchars($value ?? '') . "' required>";
        }
    }
    ?>
    <input type="submit" value="Update">
</form>

</body>
</html>

<?php
$conn->close();
?>
