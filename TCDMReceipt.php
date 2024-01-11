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
            width: 100%;
            height: 100%;
        }

        .container {
            display: grid;
            height: 100vh;
            width: 100%;
            grid-template-columns: repeat(4, auto);
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
            width: 100%;
        }

        main {
            grid-area: main;
            padding: 0px;
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
            width: auto;
        }
        /* from */
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
        border-radius: 5px;
         box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
         width: 100%;
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

        .offenceh2 {
            font-size: 24pt;
            color: #34495e;
            text-align: left;
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
        /*form table*/
        
        #content1{
            width: 100%;
            margin-left: -100px;
        }
    #content2,
    #content3 {
        padding: 20px;
        position: relative;
        width: 5%;
        background-color: #fff352;
    }

    .data-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .data-table th, .data-table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ecf0f1;
    }
    .search-container {
        display: flex;
      justify-content: space-between;
      align-items: center;
       padding: 5px; 
        width: 50%;
        border: 2px;;
    }

.search-container label {
  font-weight: bold;
  margin-right: 10px; /* Add space between label and input */
}

.search-container input[type="text"] {
  padding: 5px;
  width: 100%;
  border-style: dashed;
}
    #create-btn {
        position: absolute;
        padding: 10px;
        margin: 5px;
       background-color: #3498db;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer; 
        top: 40%;
        margin-left: 49%;
    }
        /*overlay */
        .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        align-items: center;
        justify-content: center;
        z-index: 1;
        /* overflow: auto; */
    }

    .form-container {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        height: 97%;
        width: 100%;
        margin: 29px;
    }
    form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    width: 100%;
    box-sizing: border-box;
}

h2 {
    text-align:center;
    color: #333333;
    grid-column: span 4;
    margin-bottom: 20px;
}

.input-group,
.input-group2 {
    display: flex;
    flex-direction: column;
}

.input-group label,
.input-group2 label {
    margin-bottom: 5px;
    color: #555555;
}

.input-group input,
.input-group select,
.input-group2 input,
.input-group2 select {
    padding: 10px;
    box-sizing: border-box;
    margin-bottom: 10px;
    border: 1px solid #cccccc;
    border-radius: 4px;
    width: 100%; /* Full width */
}

.button2 {
    background-color: #3498db;
    color: #ffffff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    box-sizing: border-box;
    align-items: center;
 width: 100%;
}

.input-group2 {
    margin-bottom: 15px;
}

/* Additional styling for labels and form controls */
label {
    display: block;
    margin-bottom: 8px;
    color: #555555;
}

input,
select {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    margin-bottom: 10px;
    border: 1px solid #cccccc;
    border-radius: 4px;
}
    #close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }
   select, input{
        width: auto;
    }
    .data-table{
        overflow: auto;
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
            
                <h1>Online Traffic Crime Data Management System - PHP</h1>
            
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
         <h2 class="offenceh2">Receipt</h2>
         <div id="button">
            <button id="create-btn">New Receipt  </button>
            </div> 
                    <div class="search-container">
                        <label for="search">Search:</label>
                        <input type="text" id="search" placeholder="search term name"><br>
                    </div> 
 
                    <div class="data-table">
                    <table class="data-tabl">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name of offender</th>
                                <th>Offence</th>
                                <th>Vehicle Registration</th>
                                <th> Arresting Officcer</th>
                                <th>General Receipt N0</th>
                                <th>Fine </th>
                                
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Data 1</td>
                                <td>Data 2</td>
                                <td>Data 3</td>
                                <td>Data 4</td>
                                <td>Data 5</td>
                                <td>Data 6</td>
                                <td>Data 7</td>
                                <td>Data 8</td>
                            </tr>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
                    <!-- <div id="button">
                    <button id="create-bt">Create New Table </button>
                    </div> -->
                <div class="overlay" id="overlay">
                    <div class="form-container">
                        <span id="close-btn">&times;</span>
                        <!-- Add your entry form elements here -->
                      
    <form>
        <h2>Create Receipt Record</h2>

        <!-- Officer Information -->
        <div class="input-group">
            <label for="entryField">Officer Name</label>
            <input type="text" id="entryField" placeholder="Officer Name">
        </div>

        <!-- Accident Details -->
        <div class="input-group">
            <label>Date</label>
            <input type="text">
        </div>

        <div class="input-group">
            <label>Name of Offender</label>
            <input type="text">
        </div>

        <div class="input-group">
            <label>Vehicle Registration</label>
            <input type="text">
        </div>

        <div class="input-group">
            <label>General Receipt N0</label>
            <input type="text">
        </div>
        
        <!-- Location Information -->
        <div class="input-group">
            <label>Fine</label>
            <input type="text">
        </div>

        <div class="input-group">
            <label>Status</label>
            <input type="text">
        </div>
 
        <button class="button2">Create</button>
    </form>
           

            </div>
     </div>                
</div>  
         <footer>
                <p>&copy; 2023 All Rights Reserved</p>
                <p id="by">OTCDM-PHP by: (Chrissy & Hussein) v1.0</p>
            </footer>
        </div>   
        <script>
            document.getElementById('create-btn').addEventListener('click', function () {
        document.getElementById('overlay').style.display = 'flex';
    });

    // Close overlay on close button click
    document.getElementById('close-btn').addEventListener('click', function () {
        document.getElementById('overlay').style.display = 'none';
    });

    // Close overlay on click outside the form
    window.addEventListener('click', function (event) {
        var overlay = document.getElementById('overlay');
        if (event.target === overlay) {
            overlay.style.display = 'none';
        }
    });
        </script>
</body>

</html>