<head>
    <link rel="stylesheet" href="style.css">
</head>
<header class="header">
  <div class="header-menu">
    <img src="images/hamburger.png" class="menu-button">
  </div>
  <h1 class="header-title">Halifax Canoe and Kayak</h1>
  <div class="logout">
  <?php
        session_start();
            echo '<form method="POST" action="logout.php">';
            echo '<button type="submit" name="logout">Logout</button>';
            echo '</form>';
    ?>
  </div>
  <div class="header-image">
    <img src="images/paddle-white.png" alt="canoe paddle logo">
  </div>
</header>
