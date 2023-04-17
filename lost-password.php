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
    <h1>Lost Password</h1>
    
    <form method="POST" action="send-email.php">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        
        <input type="hidden" name="emailType" value="lostPassword">
        
        <button type="submit">Submit</button>
    </form>
    <script src="main.js"></script>
</main>
</body>
</html>
