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
        <h2>Fantasy Zoo Form</h2>
        </header>

        <main>
            <div class="form-container">

                <!-- PHP Form Processing -->
                <?php
                // Konfigurasi Koneksi Database
                include 'connect.php';

                // Memproses form saat disubmit
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nama = $_POST['Nama'];
                    $cat_eyes = $_POST['Cat_Eyes'];
                    $big_mouth = $_POST['Big_Mouth'];
                    $elephant = $_POST['Elephant'];
                    $dog = $_POST['Dog'];
                    $giraffe = $_POST['Giraffe'];
                    $bird_wings = $_POST['Bird_Wings'];
                    $snail = $_POST['Snail'];
                    $scorpion = $_POST['Scorpion'];
                    $trial = $_POST['Trial'];
                    $fish = $_POST['Fish'];
                    $alphamini = $_POST['Alphamini'];
                    $octopus = $_POST['Octopus'];
                    $dinosaur = $_POST['Dinosaur'];
                    $dwarf = $_POST['Dwarf'];

                    // Menghitung total score
                    $score_total = $cat_eyes + $big_mouth + $elephant + $dog + $giraffe +
                                   $bird_wings + $snail + $scorpion + $trial + $fish +
                                   $alphamini + $octopus + $dinosaur + $dwarf;

                    // Query SQL untuk menyimpan data
                    $sql = "INSERT INTO Fantasy_Zoo 
                            (Nama, Cat_Eyes, Big_Mouth, Elephant, Dog, Giraffe, Bird_Wings, Snail, Scorpion, Trial, Fish, Alphamini, Octopus, Dinosaur, Dwarf, Score_Total) 
                            VALUES ('$nama', $cat_eyes, $big_mouth, $elephant, $dog, $giraffe, $bird_wings, $snail, $scorpion, $trial, $fish, $alphamini, $octopus, $dinosaur, $dwarf, $score_total)";

                    if (mysqli_query($conn, $sql)) {
                        echo "<p>Data berhasil disimpan!</p>";
                    } else {
                        echo "<p>Error: " . mysqli_error($conn) . "</p>";
                    }

                    mysqli_close($conn);
                }
                ?>

                <!-- Formulir Pendaftaran -->
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-grid">
                        <div>
                            <label for="Nama">Nama</label>
                            <input type="text" id="Nama" name="Nama" required>
                        </div>
                        <div>
                            <label for="Cat_Eyes">Cat Eyes</label>
                            <input type="number" id="Cat_Eyes" name="Cat_Eyes" required>
                        </div>
                        <div>
                            <label for="Big_Mouth">Big Mouth</label>
                            <input type="number" id="Big_Mouth" name="Big_Mouth" required>
                        </div>
                        <div>
                            <label for="Elephant">Elephant</label>
                            <input type="number" id="Elephant" name="Elephant" required>
                        </div>
                        <div>
                            <label for="Dog">Dog</label>
                            <input type="number" id="Dog" name="Dog" required>
                        </div>
                        <div>
                            <label for="Giraffe">Giraffe</label>
                            <input type="number" id="Giraffe" name="Giraffe" required>
                        </div>
                        <div>
                            <label for="Bird_Wings">Bird Wings</label>
                            <input type="number" id="Bird_Wings" name="Bird_Wings" required>
                        </div>
                        <div>
                            <label for="Snail">Snail</label>
                            <input type="number" id="Snail" name="Snail" required>
                        </div>
                        <div>
                            <label for="Scorpion">Scorpion</label>
                            <input type="number" id="Scorpion" name="Scorpion" required>
                        </div>
                        <div>
                            <label for="Trial">Trial</label>
                            <input type="number" id="Trial" name="Trial" required>
                        </div>
                        <div>
                            <label for="Fish">Fish</label>
                            <input type="number" id="Fish" name="Fish" required>
                        </div>
                        <div>
                            <label for="Alphamini">Alphamini</label>
                            <input type="number" id="Alphamini" name="Alphamini" required>
                        </div>
                        <div>
                            <label for="Octopus">Octopus</label>
                            <input type="number" id="Octopus" name="Octopus" required>
                        </div>
                        <div>
                            <label for="Dinosaur">Dinosaur</label>
                            <input type="number" id="Dinosaur" name="Dinosaur" required>
                        </div>
                        <div>
                            <label for="Dwarf">Dwarf</label>
                            <input type="number" id="Dwarf" name="Dwarf" required>
                        </div>
                    </div>
                    <input type="submit" id="submit" value="Submit">
                </form>
            </div>
        </main>
    </div>
</body>
</html>
