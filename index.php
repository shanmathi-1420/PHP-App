<!DOCTYPE html>
<html>
<head>
    <title>PHP Application</title>
</head>
<body>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Display submitted data
    echo "<h2>Thank you for submitting the form!</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
} else {
    // Display the form
?>
    <h2>PHP Application</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["submit.php"]); ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
<?php } ?>

</body>
</html>


