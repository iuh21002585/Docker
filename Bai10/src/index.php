<?php
// Simple PHP application for Docker demo
$title = "PHP with Apache in Docker";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            text-align: center;
            background-color: #f4f4f4;
        }
        .container {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $title; ?></h1>
        <p>This is a simple PHP application running in a Docker container with Apache.</p>
        <p>PHP Version: <?php echo phpversion(); ?></p>
        <p>Server Info: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
        <p>Current Date and Time: <?php echo date('Y-m-d H:i:s'); ?></p>
    </div>
</body>
</html>