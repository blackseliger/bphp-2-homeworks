<?php

echo "Hello, world!";

//  2.1 task
const ANOTHER_CONST = 'Прощай, мир.';
echo __FILE__;
echo ANOTHER_CONST . __LINE__;

// heredoc 2.2 task

$strHeredoc = <<<EOD
 Я студент Нетологии
EOD;
echo $strHeredoc;

// 2.3 task

$a = 'Fish';
$b = 'human';

echo <<<EOD
 $a рыбою сыта, а $b человеком.
EOD;

// 3.1 task Desc type

$variable = 3.14;

if (is_bool($variable)) {
    echo ' bool';
} else if (is_float($variable)) {
    echo ' float';
} else if (is_int($variable)) {
    echo ' int';
} else if (is_string($variable)) {
    echo ' string';
} else if (is_null($variable)) {
    echo ' null';
} else if (is_array($variable) || is_object($variable) || is_resource($variable)) {
    echo ' other';
} else {
    echo 'false';
}



