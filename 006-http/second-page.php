<html lang="ru">
<head>
    <title>
        PHP HTTP HOMEWORK
    </title>
    <meta http-equiv="content-language" content="ru">
</head>
<body>

<ul>
    <li><a href='first-page.php'>первая страница</a></li>
    <li><a href="second-page.php">вторая страница</a></li>
    <li><a href="third-page.php">третья страница</a></li>
    <li><a href="fourth-page.php">четвертая страница </a></li>

</ul>



<?php

echo  'Hello second page!' .PHP_EOL;

$what = $_GET['what'] ?? 'Пока';
$name = $_GET['name'] ?? 'Неизвестный';
echo "$what, $name!";

header('Content-Type: text/html;charset=utf-8');
header('Content-Disposition: attachment; filename="downloaded.txt"');

readfile('original.txt')


?>
</body>
</html>

