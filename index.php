<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostgreSQL Connection Test</title>
</head>
<body>
    <?php
    // Database connection parameters
    $dbhost = 'postgres'; // Change this to your database host
    $dbname = 'postgres'; // Change this to your database name
    $dbuser = 'postgres'; // Change this to your database username
    $dbpass = 'postgres'; // Change this to your database password

    try {
        // Attempt to connect to the database
        $conn = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo "<h1>Connected to PostgreSQL successfully!</h1>";
    } catch(PDOException $e) {
        echo "<h1>Failed to connect to PostgreSQL: " . $e->getMessage() . "</h1>";
    }

    // Close the database connection
    $conn = null;
    ?>

    <footer>
        <p>This is a simple PHP application for testing PostgreSQL database connection.</p>
    </footer>
</body>
</html>

