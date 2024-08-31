<?php
// Konfigurasi Koneksi Database
include 'connect.php';

// Daftar tabel yang akan ditampilkan
$tables = [
    'uKit_Advanced',
    'AI_Smart_Life',
    'Fantasy_Zoo',
    'Future_Town',
    'Magic_World',
    'Advanced_Smart_Life',
    'AI_Super_Assistant'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            max-width: 800px;
            margin: 20px auto;
            border: 1px solid #ddd;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #333;
            font-weight: 600;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .form-grid label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #444;
        }

        .form-grid input[type="text"],
        .form-grid input[type="number"],
        .form-grid input[type="datetime-local"],
        .form-grid select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
            color: #333;
        }

        #submit {
            background: linear-gradient(90deg, #007bff, #0056b3);
            color: #ffffff;
            border: none;
            padding: 15px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        #submit:hover {
            background: linear-gradient(90deg, #0056b3, #003d7a);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        #submit:active {
            background: linear-gradient(90deg, #003d7a, #001d3a);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transform: translateY(2px);
        }

        /* Sidebar styles */
        .sidebar {
            background-color: #6343c6;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            color: #fff;
        }

        .sidebar-brand img {
            display: block;
            margin: 0 auto;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            position: relative;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 4px;
        }

        .sidebar ul li a:hover {
            background-color: #7a5ecf;
        }

        .sidebar ul li ul {
            display: none;
            list-style-type: none;
            padding-left: 20px;
            background-color: #5a3d9b;
            position: absolute;
            top: 0;
            left: 100%;
            width: 200px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
            z-index: 100;
        }

        .sidebar ul li:hover ul {
            display: block;
        }

        .sidebar ul li ul li a {
            padding: 10px;
            font-size: 14px;
        }

        .main-content {
            margin-left: 270px; /* Adjust based on sidebar width */
            padding: 20px;
        }

        header {
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .table-container {
            margin: 20px auto;
            overflow-x: auto;
            width: 100%;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            min-width: 600px; /* Ensures the table is not too narrow */
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        @media screen and (max-width: 768px) {
            th, td {
                font-size: 14px;
                padding: 10px;
            }
        }

        .table-container a.button {
    display: inline-block;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    color: #fff;
    text-align: center;
    font-size: 14px;
    margin: 2px;
    transition: background-color 0.3s, box-shadow 0.3s;
}

.table-container a.button.update {
    background-color: #007bff;
    border: 1px solid #007bff;
}

.table-container a.button.update:hover {
    background-color: #0056b3;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.table-container a.button.update:active {
    background-color: #003d7a;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    transform: translateY(2px);
}

.table-container a.button.delete {
    background-color: #dc3545;
    border: 1px solid #dc3545;
}

.table-container a.button.delete:hover {
    background-color: #c82333;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.table-container a.button.delete:active {
    background-color: #a71d2a;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    transform: translateY(2px);
}

    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <img src="aici.png" alt="Admin Logo" style="width: 200px; height: auto;">
        </div>

        <ul>
            <li><a href="individus.php"><i class="fas fa-user"></i> Form Individu</a></li>
            <li>
                <a href="#"><i class="fas fa-users"></i> Form Kelas</a>
                <ul>
                    <li><a href="advanced.php"><i class="fas fa-file-alt"></i> Advanced Smart Life For</a></li>
                    <li><a href="fantasyzoo.php"><i class="fas fa-file-alt"></i> Fantasy Zoo</a></li>
                    <li><a href="futuretown.php"><i class="fas fa-file-alt"></i> Future Town</a></li>
                    <li><a href="magicworld.php"><i class="fas fa-file-alt"></i> Magic World</a></li>
                    <li><a href="smartlife.php"><i class="fas fa-file-alt"></i> AI Smart Life</a></li>
                    <li><a href="superassistant.php"><i class="fas fa-file-alt"></i> AI Super Assistant</a></li>
                    <li><a href="uit.php"><i class="fas fa-file-alt"></i> uKit Advanced</a></li>
                </ul>
            </li>
            <li><a href="table_individu.php"><i class="fas fa-table"></i> Tabel Individu</a></li>
            <li><a href="tabel_kelas.php"><i class="fas fa-table"></i> Tabel Kelas</a></li>
            <li><a href="vusal3.php"><i class="fas fa-chart-bar"></i> Visualisasi</a></li>
            <li><a href="login.php"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h2>Daftar Tabel Kelas</h2>
        </header>

        <main>
            <?php
            // Menampilkan tabel dari setiap kelas
            foreach ($tables as $table) {
                echo "<h2>$table</h2>";
                
                $sql = "SELECT * FROM $table";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    echo "<div class='table-container'>";
                    echo "<table>";
                    echo "<tr>";

                    // Menampilkan header tabel dengan mengganti 'rata_rata' menjadi 'Score_Total'
                    $fields = $result->fetch_fields();
                    foreach ($fields as $field) {
                        $columnName = $field->name;
                        if ($columnName == 'rata_rata') {
                            $columnName = 'Score_Total'; // Ganti nama kolom 'rata_rata' dengan 'Score_Total'
                        }
                        echo "<th>" . htmlspecialchars($columnName ?? '') . "</th>";
                    }
                    echo "<th>Update</th>"; // Tambahkan kolom header untuk Update
                    echo "<th>Delete</th>"; // Tambahkan kolom header untuk Delete
                    echo "</tr>";

                    // Menampilkan data tabel dengan mengganti 'rata_rata' menjadi 'Score_Total'
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        foreach ($row as $key => $value) {
                            if ($key == 'rata_rata') {
                                $key = 'Score_Total'; // Ganti nama kolom 'rata_rata' dengan 'Score_Total'
                            }
                            echo "<td>" . htmlspecialchars($value ?? '') . "</td>";
                        }
                        echo "<td><a href='update.php?id=" . htmlspecialchars($row['id']) . "&table=" . htmlspecialchars($table) . "' class='button update'>Update</a></td>";
echo "<td><a href='deletes.php?id=" . htmlspecialchars($row['id']) . "&table=" . htmlspecialchars($table) . "' class='button delete' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Delete</a></td>";

                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "</div>";
                } else {
                    echo "<p>Tidak ada data di tabel ini.</p>";
                }
            }
            ?>

        </main>
    </div>
</body>
</html>

<?php
$conn->close();
?>

