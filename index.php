<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
    exit(); // Make sure to exit after a header redirect
} else 

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Traffic Crime Data Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        .container {
            display: grid;
            height: 100vh;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: 0.1fr 0.5fr 2.2fr 0.2fr;
            grid-template-areas:
                "nav nav nav nav"
                "main main main main"
                "sidebar content1 content2 content3"
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
            padding: 0px;
            display: inline;
            justify-self: end;
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
            width: 50%;
        }

        #content1,
        #content2,
        #content3 {
            padding: 20px;
        }
        /* from */
        #content1{
            margin-left: -80px;
        }
        .content-item {
        background: #ecf0f1;
        color: #2c3e50;
        padding: 15px;
        border-radius: 5px;
        margin-top: 10px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
    }

    .content-item i {
        font-size: 30px;
        margin-right: 20px;
       
    }

    .content-item p {
        margin: 0;
        font-size: 16px;
    }
        /*to*/

    /* ... (previous styles) ... */

    footer {
        grid-area: footer;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-areas: "copy by";
        gap: 1rem;
        padding: 15px;
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
            font-size: 24pt;
            color: #34495e;
        }

        .menu-item,
        .menu-ite {
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
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
        }

        .menu-item:hover,
        .menu-ite:hover {
            background: #fff352;
        }

        .menu-item i,
        .menu-ite i {
            margin-right: 10px;
            font-size: 24px;
        }
        a{
            text-decoration: none;
            color:white
        }
        a:hover {
    color: red;
  }
    </style>
</head>

<body>
    <div class="container">
        <nav>
            <marquee>
                <h1>Welcome to Online Traffic Crime Data Management System - PHP</h1>
            </marquee>
            <div class="error success" >
        </nav>
        <main>
        <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>User:  <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
</div>
        </main>
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
            <h2>Today's Offences</h2>
            <div class="content-item">
                <i class="fas fa-calendar-day icon"></i>
                <p>Explore and manage offenses recorded on the current day.</p>
            </div>
        </div>
        
        <div id="content2">
            <h2>Total Traffic Offenders Listed</h2>
            <div class="content-item">
                <i class="fas fa-users icon"></i>
                <p>View the list of all traffic offenders along with their details.</p>
            </div>
        </div>
        
        <div id="content3">
            <h2>Total Number of Offenses</h2>
            <div class="content-item">
                <i class="fas fa-file-alt icon"></i>
                <p>Get insights into the overall number of recorded offenses.</p>
            </div>
        </div>
        
        <footer>
            <p>&copy; 2023 All Rights Reserved</p>
            <p id="by">OTCDM-PHP by: (Chrissy & Hussein) v1.0</p>
        </footer>
    </div>
</body>

</html>