<!DOCTYPE html>
<html>
    <head>
        <title>Detail form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<style>
form {
    width:250px;
    height:150px;
    border:2px solid #a5a5a5;
    padding:10px;
    background-color:#f3f3f3;
    border-radius:3px;
    float:right;
    text-align:center;
    margin-top:2px;
}

label {
  display: inline-block;
  width: 120px;
}
div {
    align-content:center;
    font-size:15px;
    margin-bottom: 2px;
}

.error {
  color: red;
  margin-left: 5px;
}
p {
    color:red;
    text-align:center;
    display: block;
}

label.error {
  display: inline;
}
</style>
</head>
<body>
  <div>
      <form id="first_form" method="post" action="profile.php">
        <div>
          <label for="username">Username:</label><br>
          <input type="text" id="username" name="username" required>
        </div><p> </p>
        <div>
          <label for="password">Password:</label><br>
          <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        </div><p> </p>

        <div>
          <button onclick="profile.php">submit</button>
        </div>
      </form>
    </div>
     <?php
      $con = mysqli_connect("127.0.0.1","root","","countryproject");
      if (!$con)
      {
        die ('Could not connect:' . mysql_error());
      }
        echo $_POST['username'];
      $sql= "INSERT INTO user values($_POST['username'],$_POST['password'])";
      $con->exec($sql);
      $result=mysql_query($sql,$con);
      echo " ". $_POST['username'];
      mysqli_close($con);
      ?>

    </body>

</html>
