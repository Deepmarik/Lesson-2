<?php
//Lesson2
// Задание 1

$date = 1380;
$text= "Когда была Куликовская битва?- выберите один из вариантов: 1380, 1812, 1917 - ";  
$answerUser = (int)readline($text);
  
  switch ($date) {
    case $answerUser==1917:
        echo 'ops';
    break;
    case $answerUser==1812:
        echo 'ops2';
    break;
    case $answerUser==1380:
        echo 'Знаток истории';
    break;
    default;
        echo $text;
    break;
  
 }
