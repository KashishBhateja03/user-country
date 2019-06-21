<html>
<body>
  <div>
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username">
  </div><p> </p>
  <div>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
  </div><p> </p>  
<div>
  <button onclick="logout.html">submit</button>
</div>

  <!--  <div>
      <label for="countryname">Country name:</label><br>
      <input type="text" id="countryname" name="countryname">
    </div> -->
</body>
</html>
