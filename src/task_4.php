<link rel="stylesheet" href="style.css">

<h2>Скласти функцію, яка перевірятиме введене з клавіатури число на парність.</h2>

<?php
    function number_is_even($number)
    {
        return $number % 2 == 0 ? "парним" : "не парним";
    }
    
                      // Є сенс робити через форму?
    $number_1 = 5;   // Мені здається, що просто зайва трата часу
    $number_2 = 6;  // Якщо потрібно тооооооооо, напишіть в коментарях
                   // Зроблю через форму, шо ж...

    echo sprintf("Число %d є %s<br>", $number_1, number_is_even($number_1));
    echo sprintf("Число %d є %s<br>", $number_2, number_is_even($number_2));
