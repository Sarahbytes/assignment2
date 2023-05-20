<!DOCTYPE html>
<html>
<head>
    <title>Add Adventure</title>
</head>
<body>
    <h1>Add Adventure</h1>
    <form action="admin-confirm.php" method="POST">
        <label for="heading">Heading:</label>
        <input type="text" name="heading" required><br><br>

        <label for="tripDate">Trip Date:</label>
        <input type="date" name="tripDate" required><br><br>

        <label for="duration">Duration:</label>
        <input type="number" name="duration" required><br><br>

        <label for="summary">Summary:</label><br>
        <textarea name="summary" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Add Adventure">
    </form>
</body>
</html>
