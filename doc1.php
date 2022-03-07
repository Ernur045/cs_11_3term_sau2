<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href="css.css" type="text/css"> 
		<title>Super tic-tac-toe</title>
        <style>
            body {background-color: lightblue;}
            h1 {color: white; text-align: center;}
            p{font-family: verdana; font-size: 20 px;}
        </style>
    </head>
    <body>"
        <h1> My first website</h1>
        <p> YOu can leave your comments. Enter the following information</p>
        <html>
            <form action="doc1.php" method="post">
                <label> Name </label>
                <div>
                    <input type="text" name="u_name"><br>
                </div>
                <div>
                    <label> Email</label>
                </div>
                <div>
                    <input type="text" name="email"> <br>
                </div>
                <div>
                    <label>Comment</label>
                </div>
                <div>
                    <textarea rows ="10" cols="50" id="content" name="content"></textarea>
                </div>
                <input type="submit" name="btn" value="ADD">
            </form>
        </html>
            <?php
            //checkin if button is clicked
            if(isset($_POST['btn'])) //checkin if button is clicked
            {
                $conn = mysqli_connect("localhost", "root", "");
                //select database using function
                mysqli_select_db($conn, "database1_example");
                $clients_name = $_POST['u_name'];
                $clients_email = $_POST['email'];
                $clients_comment = $_POST['content'];

                $query = mysqli_query($conn, "INSERT INTO clients(name, email, comment)VALUES('$clients_name', '$clients_email', '$clients_comment')");

                if($query == true)
                {
                    echo "<script>alert('Thanks for the comment! ')</script>";
                }
                else
                {
                    echo "<script>alert('Try again! ')</script>";
                    exit();
                }
            }
            ?>
    </body>
</html>