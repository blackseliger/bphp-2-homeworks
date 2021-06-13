<?php

echo $_FILES['content']['name'] .PHP_EOL      ;
echo basename($_FILES['content']['tmp_name']);
// а что делает GET тогда, зачем он нужен?...



$upload_dir = "./upload";

if (($_POST['file_name'] === "") || ($_FILES['content']['error'] === UPLOAD_ERR_NO_FILE)) {
    header('Location: load-post.php');
} else {
    $tmp_name = $_FILES['content']['tmp_name'];
    $name = basename(($_POST['file_name']));
   if  (move_uploaded_file($tmp_name, "$upload_dir/$name")) {
       echo 'Файл корректен и был успешно загружен. \n';
       echo  $_FILES['content']['sizes']. "байт";
       echo  "$upload_dir/$name путь файла";
   } else {
       echo "Возможная атака с помощью файловой загрузки!\n";
   }
}

echo 'Некоторая отладочная информация:';
print_r($_FILES);


