<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form values
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
} else{
    $name = "";
    $email = "";
}
?>

<form method="post" action="">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    Email: <input type="text" name="email" value="<?php echo $email; ?>">
    <input type="submit" name="submit" value="Submit">
</form>