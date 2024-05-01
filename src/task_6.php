<link rel="stylesheet" href="style.css">

<h2>Розробити функцію визначення площі трикутника по координатам вершин.</h2>

<?php
    function triangle_area($Ax, $Ay, $Bx, $By, $Cx, $Cy)
    {
        $ABx = $Bx - $Ax;
        $ABy = $By - $Ay;
        $ACx = $Cx - $Ax;
        $ACy = $Cy - $Ay;

        $p = $ABx * $ACy - $ABy * $ACx;

        return abs($p) / 2;
    }

    echo "Площа трикутника: " . triangle_area(0, 0, 4, 0, 2, 3);
