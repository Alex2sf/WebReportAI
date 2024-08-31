<?php
include 'connect.php'; // Menyertakan file koneksi

// Periksa apakah parameter 'id' ada di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data dari tabel berdasarkan ID
    $sql = "SELECT * FROM nilai_individu WHERE id = ?";
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
    // Ambil data dari form
    $nama = $_POST['Nama'];
    $bobot = $_POST['Bobot'];
    $kelas = $_POST['Kelas'];
    $modul = $_POST['Modul'];
    $score = $_POST['Score'];
    $tutor = $_POST['Tutor'];

    // Query untuk mengupdate data
    $sql = "UPDATE nilai_individu SET Nama = ?, Bobot = ?, Kelas = ?, Modul = ?, Score = ?, Tutor = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssi', $nama, $bobot, $kelas, $modul, $score, $tutor, $id);

    if ($stmt->execute()) {
        echo "Data berhasil diperbarui.";
        header("Location: table_individu.php"); // Redirect kembali ke halaman tabel
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
    <label for="Nama">Nama</label>
    <input type="text" name="Nama" value="<?= htmlspecialchars($row['Nama'] ?? '') ?>" required>

    <label for="Bobot">Bobot</label>
    <input type="number" name="Bobot" value="<?= htmlspecialchars($row['Bobot'] ?? '') ?>" required>

    <label for="Kelas">Kelas</label>
    <input type="text" name="Kelas" value="<?= htmlspecialchars($row['Kelas'] ?? '') ?>" required>

    <label for="Modul">Modul</label>
    <input type="text" name="Modul" value="<?= htmlspecialchars($row['Modul'] ?? '') ?>" required>

    <label for="Score">Score</label>
    <input type="number" name="Score" value="<?= htmlspecialchars($row['Score'] ?? '') ?>" required>

    <label for="Tutor">Tutor</label>
    <input type="text" name="Tutor" value="<?= htmlspecialchars($row['Tutor'] ?? '') ?>" required>

    <input type="submit" value="Update">
</form>

</body>
</html>

<?php
$conn->close();
?>
