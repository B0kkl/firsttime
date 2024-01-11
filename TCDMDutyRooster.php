<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Traffic Crime Data Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: grid;
            height: 100vh;
            grid-template-columns: 0.2fr 1fr 2fr 3fr;
            grid-template-rows: 0.1fr 0.5fr 2.2fr 3.2fr;
            grid-template-areas:
                "nav nav nav nav"
                "main main main main"
                "sidebar content1 content1 content3"
                "footer footer footer footer";
            gap: 1rem;
        }

        nav {
            grid-area: nav;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
            text-align: center;
            padding: 10px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
        }

        main {
            grid-area: main;
            padding: 0;
        }

        #sidebar {
            grid-area: sidebar;
            background: #2c3e50;
            color: white;
            padding: 20px;
            font-size: 18px;
            text-align: center;
            background-image: url('file:///C:/Users/user/Downloads/ml.jpg');
            border-radius: 5px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
            margin: 0;
        }

        #content1,
        #content2,
        #content3 {
            padding: 20px;
            margin: 10px;
        }

        footer {
            grid-area: footer;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-areas: "copy by";
            gap: 1rem;
            padding: 20px;
            background-color: #34495e;
            color: white;
        }

        p {
            margin: 0;
            font-size: 14px;
        }

        #by {
            text-align: right;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            font-size: 36px;
            margin-top: 20px;
        }

        h2 {
            text-align: center;
            color: #333333;
            grid-column: span 4;
            margin-bottom: 20px;
        }

        .offenceh2 {
            font-size: 24pt;
            color: #34495e;
            text-align: left;
            margin-left: 1rem;
        }

        .menu-item {
            background: #3498db;
            color: white;
            padding: 20px;
            font-size: 16px;
            border-radius: 5px;
            transition: background 0.3s;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            margin-bottom: 10px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.2);
        }

        .menu-item:hover {
            background: #fff352;
        }

        .menu-item i {
            margin-right: 10px;
            font-size: 24px;
        }

 #content1 {
    padding: 20px;
    width: 100%;
}

.offenceh2 {
    font-size: 28px;
    color: #3498db; /* Header color */
    text-align: center; /* Center the text */
    margin-bottom: 20px; /* Add some space at the bottom */
    border-bottom: 2px solid #3498db; /* Add a bottom border */
    padding-bottom: 5px; /* Adjust the padding at the bottom */
}
.data-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
}

.data-table th,
.data-table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ecf0f1;
}

.data-table thead {
    background-color: #3498db;
    color: white;
}

.data-table tbody tr:hover {
    background-color: #f5f5f5;
}

.data-table tbody td {
    color: #333;
}

/* Optional: Add striped rows for better readability */
.data-table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Optional: Add responsive styles */
@media (max-width: 768px) {
    .data-table {
        overflow-x: auto;
    }
}

    </style>
</head>

<body>
    <div class="container">
        <nav>
            <h1> Online Traffic Crime Data Management System - PHP</h1>
        </nav>
        <main></main>
        <div id="sidebar">
        <h2 class="fas fa-traffic-light black-icon"> T.C.D.M--SYSTEM</h2>
            <div class="menu-item" onclick="window.location.href='index.php'"><i class="fas fa-tachometer-alt black-icon"></i> Dashboard</div>
            <div class="menu-item"onclick="window.location.href='TCDMReport.php'"><i class="fas fa-chart-bar black-icon"></i> Reports</div>
            <div class="menu-item" onclick="window.location.href='TCDMOffence.php'"><i class="fas fa-file-alt black-icon"></i> Offence Records</div>
            <div class="menu-item"onclick="window.location.href='TCDMReceipt.php'"><i class="fas fa-receipt black-icon"></i> Receipt</div>
            <div class="menu-item"onclick="window.location.href='TCDMSettings.php'"><i class="fas fa-calendar black-icon"></i> Duty Roster</div>
            <div class="menu-item" ><a href="index.php?logout='1'"><i class="fas fa-cogs black-icon"></i> LogOut</a></div>
        </div>
        <div id="content1">
            <h2 class="offenceh2">DUTY ROSTER</h2>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Employee</th>
                        <th>Task Description</th>
                        <th>Duration</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2023-12-01</td>
                        <td>08:00 AM - 12:00 PM</td>
                        <td>John Doe</td>
                        <td>Task A</td>
                        <td>4 hours</td>
                        <td>Main Office</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
        <footer>
            <p>&copy; 2023 All Rights Reserved</p>
            <p id="by">OTCDM-PHP by: (Chrissy & Hussein) v1.0</p>
        </footer>
    </div>
</body>

</html>