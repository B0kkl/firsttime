<?php
include('server.php');
?>
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    die(); // Stop executing the rest of the page
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Accident and Vehicle Data</title>
</head>
<body>
    <canvas id="myChart" width="400" height="400"></canvas>

    <?php
        // Embed PHP variables directly into JavaScript
        echo "<script>
            var accidentCount = $accident_count;
            var vehicleCount = $vehicle_count;

            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Accidents', 'Vehicles'],
                    datasets: [{
                        label: 'Count',
                        data: [accidentCount, vehicleCount],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                        ],
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
        </script>";
    ?>
</body>
</html>