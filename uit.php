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
                    <li><a href="advanced.php"><i class="fas fa-file-alt"></i> Advanced Smart Life Form</a></li>
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
            <h2>uKit Advanced Form</h2>
        </header>

        <main>
            <div class="form-container">
                <?php
                // Konfigurasi Koneksi Database
                include 'connect.php';

                // Memproses form saat disubmit
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nama = $_POST['Nama'];
                    $Catapult = $_POST['Catapult'];
                    $Little_Fanner = $_POST['Little_Fanner'];
                    $Drawbridge = $_POST['Drawbridge'];
                    $Remote_Control_Forklift = $_POST['Remote_Control_Forklift'];
                    $Wheelsbot = $_POST['Wheelsbot'];
                    $Power_Steering = $_POST['Power_Steering'];
                    $Smart_Ringer = $_POST['Smart_Ringer'];
                    $Bucketbot = $_POST['Bucketbot'];
                    $Flashing_Color = $_POST['Flashing_Color'];
                    $Spider = $_POST['Spider'];
                    $Alpha1E = $_POST['Alpha1E'];
                    $Robo_Dance = $_POST['Robo_Dance'];
                    $Police_Car = $_POST['Police_Car'];
                    $Soccer = $_POST['Soccer'];

                    // Menghitung total score
                    $score_total = $Catapult + $Little_Fanner + $Drawbridge + $Remote_Control_Forklift +
                                   $Wheelsbot + $Power_Steering + $Smart_Ringer + $Bucketbot +
                                   $Flashing_Color + $Spider + $Alpha1E + $Robo_Dance +
                                   $Police_Car + $Soccer;

                    // Query SQL untuk menyimpan data
                    $sql = "INSERT INTO uKit_Advanced 
                            (Nama, Catapult, Little_Fanner, Drawbridge, Remote_Control_Forklift, Wheelsbot, Power_Steering, Smart_Ringer, Bucketbot, Flashing_Color, Spider, Alpha1E, Robo_Dance, Police_Car, Soccer, Score_Total) 
                            VALUES ('$nama', $Catapult, $Little_Fanner, $Drawbridge, $Remote_Control_Forklift, $Wheelsbot, $Power_Steering, $Smart_Ringer, $Bucketbot, $Flashing_Color, $Spider, $Alpha1E, $Robo_Dance, $Police_Car, $Soccer, $score_total)";

                    if ($conn->query($sql) === TRUE) {
                        echo "<p>Data berhasil disimpan!</p>";
                    } else {
                        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
                    }

                    $conn->close();
                }
                ?>

                <form method="post" action="">
                    <div class="form-grid">
                        <label for="Nama">Nama:</label>
                        <input type="text" id="Nama" name="Nama" required>

                        <label for="Catapult">Catapult:</label>
                        <input type="number" id="Catapult" name="Catapult" required>

                        <label for="Little_Fanner">Little Fanner:</label>
                        <input type="number" id="Little_Fanner" name="Little_Fanner" required>

                        <label for="Drawbridge">Drawbridge:</label>
                        <input type="number" id="Drawbridge" name="Drawbridge" required>

                        <label for="Remote_Control_Forklift">Remote Control Forklift:</label>
                        <input type="number" id="Remote_Control_Forklift" name="Remote_Control_Forklift" required>

                        <label for="Wheelsbot">Wheelsbot:</label>
                        <input type="number" id="Wheelsbot" name="Wheelsbot" required>

                        <label for="Power_Steering">Power Steering:</label>
                        <input type="number" id="Power_Steering" name="Power_Steering" required>

                        <label for="Smart_Ringer">Smart Ringer:</label>
                        <input type="number" id="Smart_Ringer" name="Smart_Ringer" required>

                        <label for="Bucketbot">Bucketbot:</label>
                        <input type="number" id="Bucketbot" name="Bucketbot" required>

                        <label for="Flashing_Color">Flashing Color:</label>
                        <input type="number" id="Flashing_Color" name="Flashing_Color" required>

                        <label for="Spider">Spider:</label>
                        <input type="number" id="Spider" name="Spider" required>

                        <label for="Alpha1E">Alpha1E:</label>
                        <input type="number" id="Alpha1E" name="Alpha1E" required>

                        <label for="Robo_Dance">Robo Dance:</label>
                        <input type="number" id="Robo_Dance" name="Robo_Dance" required>

                        <label for="Police_Car">Police Car:</label>
                        <input type="number" id="Police_Car" name="Police_Car" required>

                        <label for="Soccer">Soccer:</label>
                        <input type="number" id="Soccer" name="Soccer" required>

                        <input type="submit" id="submit" value="Submit">
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
