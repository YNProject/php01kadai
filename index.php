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
    <form action="write.php" method="post">
        <label>品名:</label>
        <input type="text" name="item" required><br>

        <label>数量:</label>
        <input type="number" name="amount" required><br>

        <button type="submit">送信</button>
    </form>
    <a href="read.php">在庫を見る</a>
</div>
</body>
</html>
