<link rel="stylesheet" href="style.css">

<h2>Розробити функцію виведення імені у стовпчик декілька раз.</h2>

<?php
    function wrap_word($word, $repetitions)
    {
        for ($i = 0; $i < $repetitions; $i++) {
            for ($j = 0; $j < strlen($word); $j++) {
                echo substr($word, $j, 1) . "<br>";
            }
            
            echo "<br>";
        }
    }
    
    wrap_word("Bruh", 3);
