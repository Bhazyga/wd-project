

<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    
    <canvas id="myChart" width="400" height="200"></canvas>

    <script>
        // Sample data for the bar chart
        const data = {
            labels: ['Category 1', 'Category 2', 'Category 3', 'Category 4'],
            datasets: [{
                label: 'Data Set 1',
                data: [30, 45, 15, 60], // Replace with your data values
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        };

        // Get the canvas element
        const ctx = document.getElementById('myChart').getContext('2d');

        // Create a new bar chart
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>
