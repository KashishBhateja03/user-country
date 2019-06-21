<html>
    <head>
        <title>Profile page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  </head>
    <body>
      <h1>Welcome
        <?php
        echo $_POST['username'];
        ?>
      </h1>
      <label for="countryname">Country name:</label><br>
      <input type="text" name="countryname"><br>

      <a href="editprofile.php">Want to edit your profile?</a><br>

      <a href=".com">Want to know your country?</a><br>

      <button><a href="login.php">logout</a></button>
    </body>
</html>
