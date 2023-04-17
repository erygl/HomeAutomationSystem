<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Automation System Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
<?php
      $username = "";
      $password = "";
      $error = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Check if the username and password are valid
        if ($username == "eraygul" && $password == "123456") {
          // Redirect to the home page

            $url="homePage.php?username=".$username;
          header("Location:".$url);
          exit();
        } else {
          // Display an error message
          $error = "Invalid username or password. Please try again.";
        }
      }
    ?>
    <div id="main"> 
        <h2 style="text-align: center;">Home Automation System</h2>
        <br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form">
                <input type="text" id="username" name="username" placeholder="Username" value="<?php echo htmlspecialchars($username); ?>"/>
            </div>

            <div class="form">
                <input type="password" id="password" name="password"placeholder="Password" required />
            </div>

            <div class="form">
                <button class="loginButton" type="submit">Log in</button>
            </div>
        </form>

    </div>

</body>

</html>