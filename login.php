<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      body{
        background-image: url('file:///C:/Users/user/Downloads/babur.jpg'); 
        background-size: cover; 
        background-repeat: no-repeat; 
        background-attachment: fixed; 
        margin: 0;
         display: flex; 
         flex-direction: column;
          justify-content: center; 
          align-items: center;
           height: 100vh;
      }
      h1{
        text-align: center;
         color: rgb(255, 255, 255);
          font-size: 36px; 
          margin-top: 20px;
      }
      form{
        width: 60%; 
        background: rgba(38, 147, 248, 0.60);
         box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) inset;
          border-radius: 10px; 
          border: 1px rgba(38, 147, 248, 0.60) solid; 
          padding: 20px;
           display: flex; 
           flex-direction: column;
            align-items: center;
             justify-content: center;
      }
      input{
        width: 100%; 
        padding: 10px;
         margin: 5px 0;
          border-radius: 5px;
      
        }
        button{
          width: 100%;
          padding: 10px; 
          background-color: #D9D10F; 
          border: none; 
          color: white; 
          cursor: pointer; 
          border-radius: 5px; 
          margin-top: 10px;
        }
    </style>
  </head>
<body >
  <h1 >Traffic Crime Data Management System</h1>
  <form method="post" action="login.php">
    <?php include('errors.php');?>
    <label for="username" style="color: white; margin-top: 10px;">Username:</label>
    <input type="text" id="username" name="username" placeholder="Enter your username" >

    <label for="password" style="color: rgba(243, 243, 232, 0.6); margin-top: 10px;">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" >

    <button type="submit" class="btn" name="login_user">Login</button>
    <a href="register.php">Sign up</a>
      </form>
</body>
</html>