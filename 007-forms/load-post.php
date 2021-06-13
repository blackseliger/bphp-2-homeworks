<html lang="ru">
<head>
    <title>
        PHP FORM HOMEWORK
    </title>
    <meta http-equiv="content-language" content="ru">
</head>
<body>

<form enctype="multipart/form-data" action="upload.php" method="post">
    С каким именем сохранить файл на сервере: <input type="text" name="file_name"/>
    Выберите файл: <input type="file" name="content"/>
    <input type="submit" name="submit" value="Отправить">
</form>


<?php


?>
</body>
</html>