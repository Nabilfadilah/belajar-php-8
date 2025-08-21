<?php

function sayHello(string $first, string $middle = "", string $last): void
{
    // panggil parameternya
    echo "Hello $first $middle $last" . PHP_EOL;
}


sayHello("Mohammad", "Nabil", "Fadilah");
// sayHello("Mohammad", "Fadilah"); // error

// named argument, kita bisa panggil argument secara bebas urutannya
sayHello(last: "Fadilah", first: "Mohammad", middle: "Nabil");
sayHello(first: "Mohammad", last: "Fadilah");
