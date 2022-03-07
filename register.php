<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css.css" type="text/css"> 
</head>

<body>
<div class="topnav">
  <a href="main.htm">Home</a>
</div>

<div class="sidenav">
  <a href="play.htm">Play</a>
  <a class="active" href="contact.htm">Contact</a>
  <a href="tournament.htm">Tournaments</a>
  <a href="register.php">Register</a>
</div>
<div class="main"
    <h1>Register</h1>
    <p>Create a new account in NIS Games</p>
    <html>
        <form action="register.php" method="post">
            <div>
                <div>
                    <label>Username</label> <br>
                    <input type="text" placeholder="name123" name="u_name" width="100%"><br>
                </div>
                <div>
                    <label>Email</label>:bg-gray-800 <br>
                    <input type="text" placeholder="example@mail.com" name="email" width = "100%"><br>
                </div>
                <div>
                   <label>Password</label> <br>
                   <input type="text" placeholder="********" name="password" width="100%"><br>
                <div>
                <div>
                   <label>Repeat password</label><br>
                   <input type="text" placeholder="********" name="password_check" width="100%"><br>
                <div>
            </div>
            <input type="submit" name="btn" value="Register">
        </form>
    </html>
    <?php
    if(isset($_POST['btn']))
    {
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "database1_example");
        $users_username = $_POST['u_name'];
        $users_email = $_POST['email'];
        $users_password = $_POST['password'];
        $query = mysqli_query($conn, "INSERT INTO users(username, email, password) VALUES('$users_username', '$users_email', '$users_password')");
        if ($query == true)
        {
            echo "<script>alert('Thank you for registration')</script>";
        }
        else
        {
            echo "<script>alert('Try again! ')</script>";
            exit();
        }
    }
    ?>
</div>
</body>
</html>