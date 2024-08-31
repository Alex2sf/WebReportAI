<?php
include 'connect.php'; // Koneksi ke database

// Fungsi untuk mengambil data dari tabel tertentu
function getData($tableName) {
    global $conn;
    $filterName = isset($_GET['filter_name']) ? $_GET['filter_name'] : '';
    $sql = "SELECT * FROM $tableName";
    
    if ($filterName != '') {
        $sql .= " WHERE Nama LIKE ?";
    }

    $stmt = $conn->prepare($sql);

    if ($filterName != '') {
        $filterParam = '%' . $filterName . '%';
        $stmt->bind_param('s', $filterParam);
    }

    $stmt->execute();
    $result = $stmt->get_result();

    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    $stmt->close();
    return $data;
}

// Ambil data untuk setiap tabel
$dataAdvancedSmartLife = getData('Advanced_Smart_Life');
$dataFantasyZoo = getData('Fantasy_Zoo');
$dataMagicWorld = getData('Magic_World');
$dataFutureTown = getData('Future_Town'); // Changed to appropriate variable name
$dataAI_Smart_Life = getData('AI_Smart_Life'); // Changed to appropriate variable name
$dataAISuperAssistant = getData('AI_Super_Assistant'); // Changed to appropriate variable name
$dataIndividu = getData('nilai_individu');

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Visualization</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .filter-form {
            margin-bottom: 20px;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .chart-container {
            width: 100%;
            margin: 0 auto;
        }
        /* Back Button Styles */
        .back-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
            margin-bottom: 20px;
            text-decoration: none;
            display: inline-block;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h1>Data Visualization</h1>
<a href="index.php" class="back-button">Back to Home</a>

<form class="filter-form" method="get" action="">
    <label for="filter_name">Filter by Name:</label>
    <input type="text" id="filter_name" name="filter_name" value="<?php echo htmlspecialchars(isset($_GET['filter_name']) ? $_GET['filter_name'] : ''); ?>">
    <input type="submit" value="Filter">
</form>

<div class="grid-container">
    <!-- Advanced Smart Life Chart -->
    <div class="chart-container">
        <h2>Advanced Smart Life</h2>
        <canvas id="chartAdvancedSmartLife"></canvas>
    </div>

    <!-- Fantasy Zoo Chart -->
    <div class="chart-container">
        <h2>Fantasy Zoo</h2>
        <canvas id="chartFantasyZoo"></canvas>
    </div>

    <!-- Magic World Chart -->
    <div class="chart-container">
        <h2>Magic World</h2>
        <canvas id="chartMagicWorld"></canvas>
    </div>

    <!-- Future Town Chart -->
    <div class="chart-container">
        <h2>Future Town</h2>
        <canvas id="chartFutureTown"></canvas>
    </div>

    <!-- AI Smart Life Chart -->
    <div class="chart-container">
        <h2>AI Smart Life</h2>
        <canvas id="chartAISmartLife"></canvas>
    </div>

    <!-- AI Super Assistant Chart -->
    <div class="chart-container">
        <h2>AI Super Assistant</h2>
        <canvas id="chartAISuperAssistant"></canvas>
    </div>

    <!-- Individu Scores Chart -->
    <div class="chart-container">
        <h2>Individu Scores</h2>
        <canvas id="chartIndividu"></canvas>
    </div>
</div>

<script>
    // Function to create chart
    function createChart(ctx, labels, data, backgroundColor, borderColor) {
        return new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Score Total',
                    data: data,
                    backgroundColor: backgroundColor,
                    borderColor: borderColor,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    // Advanced Smart Life Data
    const dataAdvancedSmartLife = <?php echo json_encode($dataAdvancedSmartLife); ?>;
    const labelsAdvancedSmartLife = dataAdvancedSmartLife.map(item => item.Nama);
    const scoresAdvancedSmartLife = dataAdvancedSmartLife.map(item => item.Score_Total);
    createChart(document.getElementById('chartAdvancedSmartLife').getContext('2d'), labelsAdvancedSmartLife, scoresAdvancedSmartLife, 'rgba(54, 162, 235, 0.2)', 'rgba(54, 162, 235, 1)');

    // Fantasy Zoo Data
    const dataFantasyZoo = <?php echo json_encode($dataFantasyZoo); ?>;
    const labelsFantasyZoo = dataFantasyZoo.map(item => item.Nama);
    const scoresFantasyZoo = dataFantasyZoo.map(item => item.Score_Total);
    createChart(document.getElementById('chartFantasyZoo').getContext('2d'), labelsFantasyZoo, scoresFantasyZoo, 'rgba(75, 192, 192, 0.2)', 'rgba(75, 192, 192, 1)');

    // Magic World Data
    const dataMagicWorld = <?php echo json_encode($dataMagicWorld); ?>;
    const labelsMagicWorld = dataMagicWorld.map(item => item.Nama);
    const scoresMagicWorld = dataMagicWorld.map(item => item.Score_Total);
    createChart(document.getElementById('chartMagicWorld').getContext('2d'), labelsMagicWorld, scoresMagicWorld, 'rgba(54, 162, 235, 0.2)', 'rgba(54, 162, 235, 1)');

    // Future Town Data
    const dataFutureTown = <?php echo json_encode($dataFutureTown); ?>;
    const labelsFutureTown = dataFutureTown.map(item => item.Nama);
    const scoresFutureTown = dataFutureTown.map(item => item.Score_Total);
    createChart(document.getElementById('chartFutureTown').getContext('2d'), labelsFutureTown, scoresFutureTown, 'rgba(54, 162, 235, 0.2)', 'rgba(54, 162, 235, 1)');

    // AI Smart Life Data
    const dataAISmartLife = <?php echo json_encode($dataAI_Smart_Life); ?>;
    const labelsAISmartLife = dataAISmartLife.map(item => item.Nama);
    const scoresAISmartLife = dataAISmartLife.map(item => item.Score_Total);
    createChart(document.getElementById('chartAISmartLife').getContext('2d'), labelsAISmartLife, scoresAISmartLife, 'rgba(255, 159, 64, 0.2)', 'rgba(255, 159, 64, 1)');

    // AI Super Assistant Data
    const dataAISuperAssistant = <?php echo json_encode($dataAISuperAssistant); ?>;
    const labelsAISuperAssistant = dataAISuperAssistant.map(item => item.Nama);
    const scoresAISuperAssistant = dataAISuperAssistant.map(item => item.Score_Total);
    createChart(document.getElementById('chartAISuperAssistant').getContext('2d'), labelsAISuperAssistant, scoresAISuperAssistant, 'rgba(153, 102, 255, 0.2)', 'rgba(153, 102, 255, 1)');

    // Individu Scores Data
    const dataIndividu = <?php echo json_encode($dataIndividu); ?>;
    const labelsIndividu = dataIndividu.map(item => item.Nama);
    const scoresIndividu = dataIndividu.map(item => item.Score);
    createChart(document.getElementById('chartIndividu').getContext('2d'), labelsIndividu, scoresIndividu, 'rgba(75, 192, 192, 0.2)', 'rgba(75, 192, 192, 1)');
</script>

</body>
</html>
