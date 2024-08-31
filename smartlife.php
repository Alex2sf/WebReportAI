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
        <h2>AI Smart Life Form</h2>
        </header>

        <main>
            <div class="form-container">
                <?php
                // Konfigurasi Koneksi Database
                include 'connect.php';

                // Memproses form saat disubmit
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nama = $_POST['Nama'];
                    $smart_desk_lamp = $_POST['Smart_Desk_Lamp'];
                    $smart_fan = $_POST['Smart_Fan'];
                    $smart_garage = $_POST['Smart_Garage'];
                    $smart_garden = $_POST['Smart_Garden'];
                    $my_ai_home = $_POST['My_AI_Home'];
                    $smart_trash_can = $_POST['Smart_Trash_Can'];
                    $assistant_traffic_police = $_POST['Assistant_Traffic_Police'];
                    $smart_laundry_rack = $_POST['Smart_Laundry_Rack'];
                    $electronics_gate = $_POST['Electronics_Gate'];
                    $smart_street_sweeper = $_POST['Smart_Street_Sweeper'];
                    $sorting_robotic_arm = $_POST['Sorting_Robotic_Arm'];
                    $crab_robot = $_POST['Crab_Robot'];
                    $self_project_day_1 = $_POST['Self_Project_Day_1'];
                    $self_project_day_2 = $_POST['Self_Project_Day_2'];

                    // Menghitung total score
                    $score_total = $smart_desk_lamp + $smart_fan + $smart_garage + $smart_garden +
                                   $my_ai_home + $smart_trash_can + $assistant_traffic_police +
                                   $smart_laundry_rack + $electronics_gate + $smart_street_sweeper +
                                   $sorting_robotic_arm + $crab_robot + $self_project_day_1 +
                                   $self_project_day_2;

                    // Query SQL untuk menyimpan data
                    $sql = "INSERT INTO AI_Smart_Life 
                            (Nama, Smart_Desk_Lamp, Smart_Fan, Smart_Garage, Smart_Garden, My_AI_Home, Smart_Trash_Can, Assistant_Traffic_Police, Smart_Laundry_Rack, Electronics_Gate, Smart_Street_Sweeper, Sorting_Robotic_Arm, Crab_Robot, Self_Project_Day_1, Self_Project_Day_2, Score_Total) 
                            VALUES ('$nama', $smart_desk_lamp, $smart_fan, $smart_garage, $smart_garden, $my_ai_home, $smart_trash_can, $assistant_traffic_police, $smart_laundry_rack, $electronics_gate, $smart_street_sweeper, $sorting_robotic_arm, $crab_robot, $self_project_day_1, $self_project_day_2, $score_total)";

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

                        <label for="Smart_Desk_Lamp">Smart Desk Lamp:</label>
                        <input type="number" id="Smart_Desk_Lamp" name="Smart_Desk_Lamp" required>

                        <label for="Smart_Fan">Smart Fan:</label>
                        <input type="number" id="Smart_Fan" name="Smart_Fan" required>

                        <label for="Smart_Garage">Smart Garage:</label>
                        <input type="number" id="Smart_Garage" name="Smart_Garage" required>

                        <label for="Smart_Garden">Smart Garden:</label>
                        <input type="number" id="Smart_Garden" name="Smart_Garden" required>

                        <label for="My_AI_Home">My AI Home:</label>
                        <input type="number" id="My_AI_Home" name="My_AI_Home" required>

                        <label for="Smart_Trash_Can">Smart Trash Can:</label>
                        <input type="number" id="Smart_Trash_Can" name="Smart_Trash_Can" required>

                        <label for="Assistant_Traffic_Police">Assistant Traffic Police:</label>
                        <input type="number" id="Assistant_Traffic_Police" name="Assistant_Traffic_Police" required>

                        <label for="Smart_Laundry_Rack">Smart Laundry Rack:</label>
                        <input type="number" id="Smart_Laundry_Rack" name="Smart_Laundry_Rack" required>

                        <label for="Electronics_Gate">Electronics Gate:</label>
                        <input type="number" id="Electronics_Gate" name="Electronics_Gate" required>

                        <label for="Smart_Street_Sweeper">Smart Street Sweeper:</label>
                        <input type="number" id="Smart_Street_Sweeper" name="Smart_Street_Sweeper" required>

                        <label for="Sorting_Robotic_Arm">Sorting Robotic Arm:</label>
                        <input type="number" id="Sorting_Robotic_Arm" name="Sorting_Robotic_Arm" required>

                        <label for="Crab_Robot">Crab Robot:</label>
                        <input type="number" id="Crab_Robot" name="Crab_Robot" required>

                        <label for="Self_Project_Day_1">Self Project Day 1:</label>
                        <input type="number" id="Self_Project_Day_1" name="Self_Project_Day_1" required>

                        <label for="Self_Project_Day_2">Self Project Day 2:</label>
                        <input type="number" id="Self_Project_Day_2" name="Self_Project_Day_2" required>
                    </div>
                    <input type="submit" id="submit" value="Submit">
                </form>
            </div>
        </main>
    </div>
</body>
</html>
