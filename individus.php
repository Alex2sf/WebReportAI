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

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #444;
        }

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group input[type="datetime-local"],
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
            color: #333;
        }

        #submit {
            background: linear-gradient(90deg, black, #0056b3);
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
            <h2>Form Nilai Individu</h2>
        </header>

        <main>
            <div class="form-container">
                <form id="nilaiForm" action="" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="bobot">Bobot:</label>
                        <input type="number" id="bobot" name="bobot" min="1" required>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas:</label>
                        <select id="kelas" name="kelas" required>
                            <option value="">Pilih Kelas</option>
                            <option value="Advanced Smart Life">Advanced Smart Life</option>
                            <option value="AI Smart Life">AI Smart Life</option>
                            <option value="AI Super Assistant">AI Super Assistant</option>
                            <option value="Fantasy Zoo">Fantasy Zoo</option>
                            <option value="Future Town">Future Town</option>
                            <option value="Magic World">Magic World</option>
                            <option value="uKit Advanced">uKit Advanced</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="modul">Modul:</label>
                        <select id="modul" name="modul" required>
                            <option value="">Pilih Modul</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="score">Score:</label>
                        <input type="number" id="score" name="score" step="0.01" min="0" max="100" required>
                    </div>
                    <div class="form-group">
                        <label for="tutor">Tutor:</label>
                        <input type="text" id="tutor" name="tutor" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="submit" value="Submit">
                    </div>
                </form>
                <div class="message">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        require 'connect.php'; // Include your database connection file
                        
                        // Retrieve form data
                        $nama = $_POST['nama'];
                        $bobot = $_POST['bobot'];
                        $kelas = $_POST['kelas'];
                        $modul = $_POST['modul'];
                        $score = $_POST['score'];
                        $tutor = $_POST['tutor'];

                        // SQL query to insert the data into the database
                        $sql = "INSERT INTO nilai_individu (Nama, Bobot, Kelas, Modul, Score, Tutor) 
                                VALUES ('$nama', $bobot, '$kelas', '$modul', $score, '$tutor')";

                        // Execute the query
                        if ($conn->query($sql) === TRUE) {
                            echo "New record created successfully";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        $conn->close(); // Close the database connection
                    }
                    ?>
                </div>
            </div>
        </main>
    </div>

    <script>
        const kelasModulMap = {
            'Advanced Smart Life': [
                'Radar', 'Carrier Robot', 'Gorilla', 'Obstacle avoidance', 'Alpha1E',
                'Street Sweeper (Advanced)', 'Collectorbot', 'Smart car', 'Robotic arm (Advanced)',
                'Heavy equipment', 'Enabled Life', 'Boxing Bot', 'Final Project 1', 'Final Project 2',
                'Final Project 1 (Advanced Smart Life)', 'Final Project 2 (Advanced Smart Life)'
            ],
            'AI Smart Life': [
                'Smart Desk Lamp', 'Smart Fan', 'Smart Garage', 'Smart Garden', 'My AI Home',
                'Smart Trash Can', 'Assistant Traffic Police', 'Smart Laundry Rack', 'Electronics Gate',
                'Smart Street Sweeper', 'Sorting Robotic Arm', 'Crab Robot', 'Self Project Day 1', 'Self Project Day 2'
            ],
            'AI Super Assistant': [
                'uCode & Alphamini', 'Face Unlock', 'Listen to My Command Alphamini', 'Happy birthday',
                'Piggy bank', 'Forklift truck', 'Shooting', 'Voice Controlled Fan', 'Smart Door',
                'Magical Hand', 'Waste Sorting', 'Intelligent Lamp', 'Final Project 1 (AI Super Assistan )', 'Final Project 2 (AI Super Assistant)'
            ],
            'Fantasy Zoo': [
                'Little Mouse', 'Stair Climbing Robot', 'Battle Bot', 'Radar Installation',
                'Bulldozer', 'Sumo', 'Fantasy Zoo Little Mouse', 'Little Insect', 'Crab Robot',
                'Whale', 'Spider', 'Battle Robot', 'Final Project 1 (Fantasy Zoo)', 'Final Project 2 (Fantasy Zoo)'
            ],
            'Future Town': [
                'uCode Car', 'Flashlight', 'Football Playing Car', 'Obstacle Avoidance Car',
                'Boxing Robot', 'Chess Playing Robot', 'Sweeping Robot', 'Crane', 'Washing Machine',
                'Warehouse Management', 'Magnetic Levitation Train', 'Final Project 1 (Future Town)', 'Final Project 2 (Future Town)'
            ],
            'Magic World': [
                'Voice-Activated Traffic Lights', 'Weather Station', 'Infrared Tracking Car',
                'Voice-Controlled Fan', 'Smart Desk Lamp', 'Crab Robot', 'AI Weather Station',
                'Assistant Traffic Police', 'Smart Garage', 'Self Project Day 1', 'Self Project Day 2',
                'Final Project 1 (Magic World)', 'Final Project 2 (Magic World)'
            ],
            'uKit Advanced': [
                'Self-Balancing Robot', 'Climbing Robot', 'Gorilla', 'Obstacle Avoidance Car',
                'Sweeping Robot', 'Gorilla Robot', 'Little Insect', 'Sumo Robot', 'Carrier Robot',
                'Robo Hand', 'Gripper', 'Final Project 1 (uKit Advanced)', 'Final Project 2 (uKit Advanced)'
            ]
        };

        const kelasSelect = document.getElementById('kelas');
        const modulSelect = document.getElementById('modul');

        kelasSelect.addEventListener('change', function() {
            const selectedKelas = kelasSelect.value;
            const moduls = kelasModulMap[selectedKelas] || [];
            
            modulSelect.innerHTML = '<option value="">Pilih Modul</option>'; // Clear previous options

            moduls.forEach(function(modul) {
                const option = document.createElement('option');
                option.value = modul;
                option.textContent = modul;
                modulSelect.appendChild(option);
            });
        });
    </script>
</body>
</html>
