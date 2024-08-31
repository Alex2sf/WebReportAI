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
            <h2>Advanced Smart Life Form</h2>
        </header>

        <main>
            <div class="form-container">
                <?php
                // Konfigurasi Koneksi Database
                include 'connect.php';

                // Memproses form saat disubmit
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nama = $_POST['Nama'];
                    $radar = $_POST['Radar'];
                    $carrier_robot = $_POST['Carrier_Robot'];
                    $gorilla = $_POST['Gorilla'];
                    $obstacle_avoidance = $_POST['Obstacle_Avoidance'];
                    $alpha1e = $_POST['Alpha1E'];
                    $street_sweeper = $_POST['Street_Sweeper'];
                    $collectorbot = $_POST['Collectorbot'];
                    $smart_car = $_POST['Smart_Car'];
                    $robotic_arm = $_POST['Robotic_Arm'];
                    $heavy_equipment = $_POST['Heavy_Equipment'];
                    $enabled_life = $_POST['Enabled_Life'];
                    $boxing_bot = $_POST['Boxing_Bot'];
                    $final_project_1 = $_POST['Final_Project_1'];
                    $final_project_2 = $_POST['Final_Project_2'];

                    // Menghitung total score
                    $score_total = $radar + $carrier_robot + $gorilla + $obstacle_avoidance + $alpha1e +
                                   $street_sweeper + $collectorbot + $smart_car + $robotic_arm +
                                   $heavy_equipment + $enabled_life + $boxing_bot + $final_project_1 + $final_project_2;

                    // Query SQL untuk menyimpan data
                    $sql = "INSERT INTO Advanced_Smart_Life 
                            (Nama, Radar, Carrier_Robot, Gorilla, Obstacle_Avoidance, Alpha1E, Street_Sweeper, Collectorbot, Smart_Car, Robotic_Arm, Heavy_Equipment, Enabled_Life, Boxing_Bot, Final_Project_1, Final_Project_2, Score_Total) 
                            VALUES ('$nama', $radar, $carrier_robot, $gorilla, $obstacle_avoidance, $alpha1e, $street_sweeper, $collectorbot, $smart_car, $robotic_arm, $heavy_equipment, $enabled_life, $boxing_bot, $final_project_1, $final_project_2, $score_total)";
                    
                    if (mysqli_query($conn, $sql)) {
                        echo "<p>Data berhasil disimpan!</p>";
                    } else {
                        echo "<p>Gagal menyimpan data: " . mysqli_error($conn) . "</p>";
                    }

                    mysqli_close($conn);
                }
                ?>

                <!-- Formulir HTML -->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-grid">
                        <div>
                            <label for="Nama">Nama:</label>
                            <input type="text" id="Nama" name="Nama" required>
                        </div>
                        <div>
                            <label for="Radar">Radar:</label>
                            <input type="number" id="Radar" name="Radar" required>
                        </div>
                        <div>
                            <label for="Carrier_Robot">Carrier Robot:</label>
                            <input type="number" id="Carrier_Robot" name="Carrier_Robot" required>
                        </div>
                        <div>
                            <label for="Gorilla">Gorilla:</label>
                            <input type="number" id="Gorilla" name="Gorilla" required>
                        </div>
                        <div>
                            <label for="Obstacle_Avoidance">Obstacle Avoidance:</label>
                            <input type="number" id="Obstacle_Avoidance" name="Obstacle_Avoidance" required>
                        </div>
                        <div>
                            <label for="Alpha1E">Alpha1E:</label>
                            <input type="number" id="Alpha1E" name="Alpha1E" required>
                        </div>
                        <div>
                            <label for="Street_Sweeper">Street Sweeper:</label>
                            <input type="number" id="Street_Sweeper" name="Street_Sweeper" required>
                        </div>
                        <div>
                            <label for="Collectorbot">Collectorbot:</label>
                            <input type="number" id="Collectorbot" name="Collectorbot" required>
                        </div>
                        <div>
                            <label for="Smart_Car">Smart Car:</label>
                            <input type="number" id="Smart_Car" name="Smart_Car" required>
                        </div>
                        <div>
                            <label for="Robotic_Arm">Robotic Arm:</label>
                            <input type="number" id="Robotic_Arm" name="Robotic_Arm" required>
                        </div>
                        <div>
                            <label for="Heavy_Equipment">Heavy Equipment:</label>
                            <input type="number" id="Heavy_Equipment" name="Heavy_Equipment" required>
                        </div>
                        <div>
                            <label for="Enabled_Life">Enabled Life:</label>
                            <input type="number" id="Enabled_Life" name="Enabled_Life" required>
                        </div>
                        <div>
                            <label for="Boxing_Bot">Boxing Bot:</label>
                            <input type="number" id="Boxing_Bot" name="Boxing_Bot" required>
                        </div>
                        <div>
                            <label for="Final_Project_1">Final Project 1:</label>
                            <input type="number" id="Final_Project_1" name="Final_Project_1" required>
                        </div>
                        <div>
                            <label for="Final_Project_2">Final Project 2:</label>
                            <input type="number" id="Final_Project_2" name="Final_Project_2" required>
                        </div>
                    </div>
                    <button type="submit" id="submit">Submit</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
