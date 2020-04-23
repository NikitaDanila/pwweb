<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
body{
  width: 50%;
  margin: auto;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login Form</h2>
<div class="container">
<form action="includes/login.inc.php" method="POST">
  <div class="imgcontainer">
    <img src="images/avatar.png" alt="Avatar" class="avatar" height="400" 
     width="231">
  </div>

  
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uid" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
        
    <button type="submit" name="submit">Login</button>
  
</form>
<form action="signupindex.php">
    <button action="submit" class="signupbtn">Sign Up</button>
</form>
  </div>
</body>
</html>
