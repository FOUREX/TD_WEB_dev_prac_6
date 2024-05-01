<link rel="stylesheet" href="style.css">

<h2>Розробити функцію, яка визначає максимальне з трьох чисел.</h2>

<?php
    function max_number($num_1, $num_2, $num_3)
    {
        return max($num_1, $num_2, $num_3);
    }

    echo "Максимальне число: " . max_number(1, 3, 2);
