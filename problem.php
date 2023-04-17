<?php
$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$role = $_POST['role'];

if ($role == 'admin') {
    // If 'Admin', redirect to the admin page
    header('Location: admin.php?firstName=' . urlencode($first_name) . '&lastName=' . urlencode($last_name));
    exit;
} elseif ($role == 'manager') {
    // If 'Manager', redirect to the manager page
    header('Location: manager.php?firstName=' . urlencode($first_name) . '&lastName=' . urlencode($last_name));
    exit;
} elseif ($role == 'ceo') {
    // If 'CEO', redirect to the CEO page
    header('Location: ceo.php?firstName=' . urlencode($first_name) . '&lastName=' . urlencode($last_name));
    exit;
}
?>
