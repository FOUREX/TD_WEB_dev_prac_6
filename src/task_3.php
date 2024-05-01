<link rel="stylesheet" href="style.css">

<h2>Розробити функцію визначення площі трикутника по трьом сторонам.</h2>

<?php
    function triangle_is_valid($side_1, $side_2, $side_3)
    {
        return ($side_1 < ($side_2 + $side_3)) && ($side_2 < ($side_1 + $side_3)) && ($side_3 < ($side_1 + $side_2));
    }
    
    function area_of_triangle($side_1, $side_2, $side_3)
    {
        if (!triangle_is_valid($side_1, $side_2, $side_3)) {
            return 0;
        }

        $p = ($side_1 + $side_2 + $side_3) / 2;
        
        return sqrt($p * ($p - $side_1) * ($p - $side_2) * ($p - $side_3));
    }

    echo "Площа трикутника: " . area_of_triangle(2, 3, 4);
