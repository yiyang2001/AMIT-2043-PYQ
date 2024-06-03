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
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (name, age, email) VALUES ('$name', $age, '$email')";
    
    if (mysqli_query($conn,$sql) === TRUE) {
        echo "New student created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

</body>
</html>
