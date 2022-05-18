<?php

require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BusinessLogic/tambahTodolist.php";
require_once __DIR__ . "/../Model/todolist.php";

function viewTambahTodolist()
{
    echo "Menambahkan Todolist" . PHP_EOL;

    $todo = input("Todo (ketik x untuk batal)");

    if ($todo === "x") {
        echo "Maaf Anda Batal Menambah Todo" . PHP_EOL;
    } else {
        tambahTodolist($todo);
    }
}
