<?php
// Konfigurasi Koneksi Database
include 'connect.php';

// Memproses form saat disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['Nama'];
    $magic_pen = $_POST['Magic_Pen'];
    $fantastic_painting_board = $_POST['Fantastic_Painting_Board'];
    $best_match = $_POST['Best_Match'];
    $sandbags = $_POST['Sandbags'];
    $bus_assistant = $_POST['Bus_Assistant'];
    $detection_radar = $_POST['Detection_Radar'];
    $car_control = $_POST['Car_Control'];
    $audio_display = $_POST['Audio_Display'];
    $fingertip_dancing = $_POST['Fingertip_Dancing'];
    $time_album = $_POST['Time_Album'];
    $hungry_shark = $_POST['Hungry_Shark'];
    $final_project_1_magic_world = $_POST['Final_Project_1_Magic_World'];
    $final_project_2_magic_world = $_POST['Final_Project_2_Magic_World'];

    // Menghitung total score
    $score_total = $magic_pen + $fantastic_painting_board + $best_match + $sandbags +
                   $bus_assistant + $detection_radar + $car_control + $audio_display +
                   $fingertip_dancing + $time_album + $hungry_shark +
                   $final_project_1_magic_world + $final_project_2_magic_world;

    // Query SQL untuk menyimpan data
    $sql = "INSERT INTO Magic_World 
            (Nama, Magic_Pen, Fantastic_Painting_Board, Best_Match, Sandbags, Bus_Assistant, Detection_Radar, Car_Control, Audio_Display, Fingertip_Dancing, Time_Album, Hungry_Shark, Final_Project_1_Magic_World, Final_Project_2_Magic_World, Score_Total) 
            VALUES ('$nama', $magic_pen, $fantastic_painting_board, $best_match, $sandbags, $bus_assistant, $detection_radar, $car_control, $audio_display, $fingertip_dancing, $time_album, $hungry_shark, $final_project_1_magic_world, $final_project_2_magic_world, $score_total)";

    if ($conn->query($sql) === TRUE) {
        $message = "Data berhasil disimpan!";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
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
        <h2>Magic World Form</h2>
        </header>

        <main>
            <div class="form-container">
                <?php if (isset($message)) { echo "<p>$message</p>"; } ?>
                <form method="post" action="">
                    <div class="form-grid">
                        <label for="Nama">Nama:</label>
                        <input type="text" id="Nama" name="Nama" required>

                        <label for="Magic_Pen">Magic Pen:</label>
                        <input type="number" id="Magic_Pen" name="Magic_Pen" required>

                        <label for="Fantastic_Painting_Board">Fantastic Painting Board:</label>
                        <input type="number" id="Fantastic_Painting_Board" name="Fantastic_Painting_Board" required>

                        <label for="Best_Match">Best Match:</label>
                        <input type="number" id="Best_Match" name="Best_Match" required>

                        <label for="Sandbags">Sandbags:</label>
                        <input type="number" id="Sandbags" name="Sandbags" required>

                        <label for="Bus_Assistant">Bus Assistant:</label>
                        <input type="number" id="Bus_Assistant" name="Bus_Assistant" required>

                        <label for="Detection_Radar">Detection Radar:</label>
                        <input type="number" id="Detection_Radar" name="Detection_Radar" required>

                        <label for="Car_Control">Car Control:</label>
                        <input type="number" id="Car_Control" name="Car_Control" required>

                        <label for="Audio_Display">Audio Display:</label>
                        <input type="number" id="Audio_Display" name="Audio_Display" required>

                        <label for="Fingertip_Dancing">Fingertip Dancing:</label>
                        <input type="number" id="Fingertip_Dancing" name="Fingertip_Dancing" required>

                        <label for="Time_Album">Time Album:</label>
                        <input type="number" id="Time_Album" name="Time_Album" required>

                        <label for="Hungry_Shark">Hungry Shark:</label>
                        <input type="number" id="Hungry_Shark" name="Hungry_Shark" required>

                        <label for="Final_Project_1_Magic_World">Final Project 1:</label>
                        <input type="number" id="Final_Project_1_Magic_World" name="Final_Project_1_Magic_World" required>

                        <label for="Final_Project_2_Magic_World">Final Project 2:</label>
                        <input type="number" id="Final_Project_2_Magic_World" name="Final_Project_2_Magic_World" required>
                    </div>
                    <input type="submit" id="submit" value="Submit">
                </form>
            </div>
        </main>
    </div>
</body>
</html>
