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
    <?php
        $first_name = $_GET['firstName'];
        $last_name = $_GET['lastName'];
    ?>
    <main class="content">
    <h1>Welcome <?php echo $first_name . ' ' . $last_name; ?>!</h1>
    
    <p>Please select one of the following options:</p>
    <ul>
        <li><a href="lost-password.php">Lost Password</a></li>
        <li><a href="isnt-working.php">My Computer Isn't Working</a></li>
    </ul>
    <script src="main.js"></script>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
