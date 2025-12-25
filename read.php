<?php
$data = file_exists('data.txt') ? file('data.txt') : [];

// 在庫集計
$stock = [];

foreach ($data as $line) {
    list($time, $item, $amount) = explode("\t", trim($line));
    $amount = (int)$amount;

    if (!isset($stock[$item])) {
        $stock[$item] = 0;
    }
    $stock[$item] += $amount;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>ミニ冷蔵庫</title>
</head>
<body>
<div class="container">
<h2>ミニ冷蔵庫</h2>
<h2 class="section-heading">履歴:</h2>
<pre><?php echo htmlspecialchars(implode("", $data), ENT_QUOTES, 'UTF-8'); ?></pre>

<h2 class="section-heading">現在の在庫:</h2>
<pre>
<?php
foreach ($stock as $item => $qty) {
    echo $item . " : " . $qty . "\n";
}
?>
</pre>

<form action="clear.php" method="post">
    <button type="submit">ミニ冷蔵庫を空にする</button>
</form>

</div>
</body>
</html>
