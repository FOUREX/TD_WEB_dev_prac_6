<link rel="stylesheet" href="style.css">

<h2>Розробити функцію, яка визначає периметр трикутника.</h2>

<?php
    function triangle_is_valid($side_1, $side_2, $side_3)
    {
        return ($side_1 < ($side_2 + $side_3)) && ($side_2 < ($side_1 + $side_3)) && ($side_3 < ($side_1 + $side_2));
    }
    
    function perimeter_of_triangle($side_1, $side_2, $side_3)
    {
        if (!triangle_is_valid($side_1, $side_2, $side_3)) {
            return 0;
        }
        
        return $side_1 + $side_2 + $side_3;
    }

    echo "Периметр трикутника: " . perimeter_of_triangle(2, 3, 4);
