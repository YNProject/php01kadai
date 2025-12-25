<?php
$item   = $_POST['item'] ?? '';
$amount = $_POST['amount'] ?? '';

if ($item !== '' && $amount !== '') {
    $line = date('Y-m-d H:i:s') . "\t" . $item . "\t" . $amount . "\n";
    file_put_contents('data.txt', $line, FILE_APPEND);
}

header('Location: index.php');
exit;
?>