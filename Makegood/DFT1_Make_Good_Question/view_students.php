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
      </tr>

      <?php

      // SQL query to select all students
      // Hint : SELECT


      // Execute the SQL query and store the result
      // Hint : mysqli_query() 


      // Check if there are any results returned by the query and display them
      // Hint : mysqli_num_rows(), mysqli_fetch_array(), $row["id"], mysqli_close()

      ?>
    </table>
  </div>
</body>

</html>