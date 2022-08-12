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
$numberTasks= (int)readline("Сколько задач на сегодня? - ");
 for ($i=0; $i < $numberTasks; $i++){

    $objective = readline("Что сегодня нужно сделать?\n");
    $time = (int)readline("Сколько времени это займет?\n");
    $sum +=$time;
    $planDay .= $objective . ' ';
 }
 echo PHP_EOL;
 echo $sum; 
 echo PHP_EOL;
 echo $planDay;
