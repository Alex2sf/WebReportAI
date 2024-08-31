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
        .form-grid input[type="number"] {
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
            <h2>AI Super Assistant Form</h2>
        </header>

        <main>
            <div class="form-container">
                <?php
                // Konfigurasi Koneksi Database
                include 'connect.php';

                // Memproses form saat disubmit
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nama = $_POST['Nama'];
                    $uCode_Alphamini = $_POST['uCode_Alphamini'];
                    $Face_Unlock = $_POST['Face_Unlock'];
                    $Listen_to_My_Command_Alphamini = $_POST['Listen_to_My_Command_Alphamini'];
                    $Happy_Birthday = $_POST['Happy_Birthday'];
                    $Piggy_Bank = $_POST['Piggy_Bank'];
                    $Forklift_Truck = $_POST['Forklift_Truck'];
                    $Shooting = $_POST['Shooting'];
                    $Voice_Controlled_Fan = $_POST['Voice_Controlled_Fan'];
                    $Smart_Door = $_POST['Smart_Door'];
                    $Magical_Hand = $_POST['Magical_Hand'];
                    $Waste_Sorting = $_POST['Waste_Sorting'];
                    $Intelligent_Lamp = $_POST['Intelligent_Lamp'];
                    $Final_Project_1_AI_Super_Assistant = $_POST['Final_Project_1_AI_Super_Assistant'];
                    $Final_Project_2_AI_Super_Assistant = $_POST['Final_Project_2_AI_Super_Assistant'];

                    // Menghitung total score
                    $score_total = $uCode_Alphamini + $Face_Unlock + $Listen_to_My_Command_Alphamini +
                                   $Happy_Birthday + $Piggy_Bank + $Forklift_Truck + $Shooting +
                                   $Voice_Controlled_Fan + $Smart_Door + $Magical_Hand + $Waste_Sorting +
                                   $Intelligent_Lamp + $Final_Project_1_AI_Super_Assistant +
                                   $Final_Project_2_AI_Super_Assistant;

                    // Query SQL untuk menyimpan data
                    $sql = "INSERT INTO AI_Super_Assistant 
                            (Nama, uCode_Alphamini, Face_Unlock, Listen_to_My_Command_Alphamini, Happy_Birthday, Piggy_Bank, Forklift_Truck, Shooting, Voice_Controlled_Fan, Smart_Door, Magical_Hand, Waste_Sorting, Intelligent_Lamp, Final_Project_1_AI_Super_Assistant, Final_Project_2_AI_Super_Assistant, Score_Total) 
                            VALUES ('$nama', $uCode_Alphamini, $Face_Unlock, $Listen_to_My_Command_Alphamini, $Happy_Birthday, $Piggy_Bank, $Forklift_Truck, $Shooting, $Voice_Controlled_Fan, $Smart_Door, $Magical_Hand, $Waste_Sorting, $Intelligent_Lamp, $Final_Project_1_AI_Super_Assistant, $Final_Project_2_AI_Super_Assistant, $score_total)";

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

                        <label for="uCode_Alphamini">uCode Alphamini:</label>
                        <input type="number" id="uCode_Alphamini" name="uCode_Alphamini" required>

                        <label for="Face_Unlock">Face Unlock:</label>
                        <input type="number" id="Face_Unlock" name="Face_Unlock" required>

                        <label for="Listen_to_My_Command_Alphamini">Listen to My Command Alphamini:</label>
                        <input type="number" id="Listen_to_My_Command_Alphamini" name="Listen_to_My_Command_Alphamini" required>

                        <label for="Happy_Birthday">Happy Birthday:</label>
                        <input type="number" id="Happy_Birthday" name="Happy_Birthday" required>

                        <label for="Piggy_Bank">Piggy Bank:</label>
                        <input type="number" id="Piggy_Bank" name="Piggy_Bank" required>

                        <label for="Forklift_Truck">Forklift Truck:</label>
                        <input type="number" id="Forklift_Truck" name="Forklift_Truck" required>

                        <label for="Shooting">Shooting:</label>
                        <input type="number" id="Shooting" name="Shooting" required>

                        <label for="Voice_Controlled_Fan">Voice Controlled Fan:</label>
                        <input type="number" id="Voice_Controlled_Fan" name="Voice_Controlled_Fan" required>

                        <label for="Smart_Door">Smart Door:</label>
                        <input type="number" id="Smart_Door" name="Smart_Door" required>

                        <label for="Magical_Hand">Magical Hand:</label>
                        <input type="number" id="Magical_Hand" name="Magical_Hand" required>

                        <label for="Waste_Sorting">Waste Sorting:</label>
                        <input type="number" id="Waste_Sorting" name="Waste_Sorting" required>

                        <label for="Intelligent_Lamp">Intelligent Lamp:</label>
                        <input type="number" id="Intelligent_Lamp" name="Intelligent_Lamp" required>

                        <label for="Final_Project_1_AI_Super_Assistant">Final Project 1 AI Super Assistant:</label>
                        <input type="number" id="Final_Project_1_AI_Super_Assistant" name="Final_Project_1_AI_Super_Assistant" required>

                        <label for="Final_Project_2_AI_Super_Assistant">Final Project 2 AI Super Assistant:</label>
                        <input type="number" id="Final_Project_2_AI_Super_Assistant" name="Final_Project_2_AI_Super_Assistant" required>

                        <input type="submit" id="submit" value="Submit">
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
