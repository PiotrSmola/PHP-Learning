<?php
//Zad 2.2
$a = 4;
define('b', 10);
$c = 4.0;
$d = 5.667;
print($a+b."\n");
print($a/b."\n");
print(pow($a, b)."\n");
print(b%$a."\n");
if ($a===b){
    print("Są\n");
} else { print("Nie są\n");
};

if ($a>b) {
print("Jest\n");
} 
else print("Nie jest\n");
//operator trójargumentowy TODO
if ($a===$c) print("Mają\n"); else print("nie mają\n");
echo "[d] = ". floor($d).PHP_EOL;
echo "round(d, 2) = ". round($d, 2).PHP_EOL;



