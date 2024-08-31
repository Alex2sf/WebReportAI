<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Navigation</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        h1 {
            margin-bottom: 20px;
        }

        .button-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            width: 80%;
            max-width: 1000px;
            margin: 0 auto;
        }

        .button {
            display: inline-block;
            padding: 20px 30px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #45a049;
        }

   


    </style>
</head>
<body>
<header>
        <div class="container">
            <div class="logo">
                <img src="aici.png" alt="Artificial Intelligence Center Indonesia">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Tentang</a></li>
                    <li><a href="individu.php">Nilai Individu</a></li>
                    <li><a href="nilaikelas.php">Nilai Kelas</a></li>
                    <li><a href="table_individu.php">Tabel Individu</a></li>
                    <li><a href="tabel_kelas.php">Tabel Kelas</a></li>
                    <li><a href="visual.php">Visualisasi</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <h1>PILIH KELAS</h1>

    <div class="button-container">
        <?php
        // Array of pages
        $pages = [
            "Advanced Smart Life Form" => "advanced.php",
            "AI Super Assistant" => "superassistant.php",
            "Ai Smart Life" => "smartlife.php",
            "Fantasy Zoo" => "fantasyzoo.php",
            "Future Town" => "futuretown.php",
            "Magic World" => "magicworld.php",
            "uKit Advanced" => "uit.php"
        ];

        // Generate buttons
        foreach ($pages as $pageName => $pageLink) {
            echo "<a href='$pageLink' class='button'>$pageName</a>";
        }
        ?>
    </div>

</body>
</html>
