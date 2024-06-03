<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html>

<body>
    <?php include 'header.php'; ?>

    <!-- Display Students -->
    <div class="container">
        <h2>Manage Students</h2>

        <h3>Student List</h3>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>

            <?php
            // SQL query to select all students
            $sql = "SELECT * FROM students";

            // Execute the SQL query and store the result
            $result = mysqli_query($conn, $sql);

            // Check if there are any results returned by the query and display them
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["age"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td><a href='manage_student.php?update=" . $row["id"] . "'>Update</a></td>
                            <td><a href='manage_student.php?delete=" . $row["id"] . "'>Delete</a></td>
                        </tr>";
                    }
                } else {
                echo "0 results";
                }
            ?>
        </table>

        <!-- Update Student -->
        <?php
        if (isset($_GET['update'])) {
            $id = $_GET['update'];
            $sql = "SELECT * FROM students WHERE id=$id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>
            <h3>Update Student</h3>
            <form method="post" action="">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
                Age: <input type="number" name="age" value="<?php echo $row['age']; ?>"><br><br>
                Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
                <input type="submit" name="update" value="Update">
            </form>
            <?php
            }
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $email = $_POST['email'];

            $sql = "UPDATE students SET name='$name', age=$age, email='$email' WHERE id=$id";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
                header('Location: manage_student.php');
                } else {
                echo "Error updating record: " . $conn->error;
                }
            }
        ?>

        <!-- Delete Student -->
        <?php
        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $sql = "DELETE FROM students WHERE id=$id";
            if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
                header('Location: manage_student.php');
                } else {
                echo "Error deleting record: " . $conn->error;
                }
            }
        $conn->close();
        ?>
    </div>

</body>

</html>