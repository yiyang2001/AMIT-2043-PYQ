<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html>
<body>
<?php include 'header.php'; ?>

<div class="container">
<h2>Create Student</h2>

<form method="post" action="">
  Name: <input type="text" name="name"><br><br>
  Age: <input type="number" name="age"><br><br>
  Email: <input type="email" name="email"><br><br>
  <input type="submit" name="submit" value="Create">
</form>
</div>
<?php
// Check if the form is submitted
// Hint : isset(), $_POST
// Hint : INSERT, mysqli_query() == TRUE 



?>

</body>
</html>
