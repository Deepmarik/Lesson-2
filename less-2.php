<?php
//Lesson2
// Задание 1

$date = 1380;
$text= "Когда была Куликовская битва?- выберите один из вариантов: 1380, 1812, 1917 - ";  
do { $answerUser = (int)readline($text);
    switch ($date) {
        case $answerUser==1917:
        case $answerUser==1812:
            echo 'ops';
        break 2;
        case $answerUser==1380:
            echo 'Знаток истории';
        break 2;
        
     }
} while (true); 
  
  

//Задание 2
$name1 = readline("Привет, как тебя зовут?\n");
$objective = readline("Что сегодня нужно сделать?\n");
for ($i=0;$i< $objective; $i++){}
$time = (int)readline("Сколько времени это займет?\n");
$objective1 = readline("А что еще сегодня нужно сделать?\n");
$time1 = (int)readline("Сколько времени это займет?\n");
$objective2 = readline("И последнее что сегодня нужно сделать?\n");
$time2 = (int)readline("Сколько времени это займет?\n");
$sum=$time+ $time1+$time2;
echo "$name1, у тебя сегодня три задачи, а именно:\n  - $objective ({$time}ч)\n - $objective1 ({$time}ч)\n - $objective2 ({$time}ч)\n ";
echo "$name1, это займет у тебя $sum ч\n ";
error_reporting(E_ALL);
ini_set('display_errors', 'on');