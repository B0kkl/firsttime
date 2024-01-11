<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
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
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>