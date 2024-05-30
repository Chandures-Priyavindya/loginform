<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
    // Check if a success message is set in the URL
    if (isset($_GET['login']) && $_GET['login'] == 'success') {
        // Display "Login is success" message
        echo "<h1>Login is success</h1>";
        // Display JavaScript alert
        echo "<script>alert('Login is success');</script>";
    }
    ?>
    <!-- You can add more content here -->
</body>
</html>
