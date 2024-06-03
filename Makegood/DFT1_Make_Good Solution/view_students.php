<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html>
<body>
<?php include 'header.php'; ?>

<div class="container">
<h2>Student List</h2>
<table border="1">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Email</th>
    <th>Created At</th>
  </tr>

<?php

// SQL query to select all students
$sql = "SELECT id, name, age, email, created_at FROM students";

// Execute the SQL query and store the result
$result = mysqli_query($conn, $sql);

// Check if there are any results returned by the query and display them
if ( mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["name"]. "</td>
                <td>" . $row["age"]. "</td>
                <td>" . $row["email"]. "</td>
                <td>" . $row["created_at"]. "</td>
            </tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);    
?>
</table>
</div>
</body>
</html>
