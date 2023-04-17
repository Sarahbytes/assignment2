<?php
    session_start();
    
    // Destroy the session
    session_destroy();
    if (isset($_POST['logout'])) {
        session_start();
        session_destroy();
        header('Location: index.php');
        exit;
    }
    
    
    // Redirect to the index page
    header('Location: index.php');
    exit;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe & Kayak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header><?php include 'header.php'; ?></header>
<main class="content">
    <h1>You have been logged out.</h1>
    <script src="main.js"></script>
</main>
</body>
</html>
