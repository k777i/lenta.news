<?php
require_once __DIR__.'/../controllers/newsController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Статьи</th>
        <th>Дата</th>
    </tr>
    <?php foreach($allNews as $new): ?>
    <tr>
        <td> <a href="/controllers/newsController.php?id=<?=$new['id']; ?>"><?php echo $new['author']; ?></a></td>
        <td><?php echo $new['pabdate']; ?></td>
    </tr>
    <?php endforeach; ?>
    <a href="/views/addnews.php">Добавить</a>
</table>
</body>
</html>