<header><?php include 'header.php'; ?></header>
<div class="content">
<?php
    $emailType = $_POST['emailType'];
    // New account
    if ($emailType == 'newAccount') {
        echo 'A new account has been created.';
    // Lost password
    } else if ($emailType == 'lostPassword') {
        echo 'An email to reset your password has been sent.';
    }
?>
</div>