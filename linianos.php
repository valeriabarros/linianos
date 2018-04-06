<?php

function linianos() {
    $pattern = ['', '', 'Linio', '', 'IT', 'Linio', '', '', 'Linio', 'IT', '', 'Linio', '', '', 'Linianos'];
    $result = [];
    for ($i = 1; $i <= 100; $i++) {
        $value = $pattern[($i - 1) % 15];
        if (!empty($value)) {
            $result[] = $value;
            continue;
        }
        $result[] = $i;
        
    }
    print_r(implode(PHP_EOL, $result));
}

linianos();