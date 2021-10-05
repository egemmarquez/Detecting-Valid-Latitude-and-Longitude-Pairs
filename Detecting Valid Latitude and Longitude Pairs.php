<?php
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$_fp = fopen("php://stdin", "r");
fscanf($_fp, "%d", $trim);

$coordinates = [];
while ($trim --) {
    $coordinates[] = trim(fgets($_fp));
}

foreach ($coordinates as $coordinate) {
    if (preg_match_all('/\(\+?-?((?:[1-9]\d*)|(?:[1-9]\d*)\.\d+), \+?-?((?:[1-9]\d*)|(?:[1-9]\d*)\.\d+)\)/', $coordinate, $matches)) {
        if ($matches[1][0] > 90 || $matches[2][0] > 180) {
            echo "Invalid\n";
        } else {
            echo "Valid\n";
        }
    } else {
        echo "Invalid\n";
    }
}
?>
