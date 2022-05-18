<?php

require_once __DIR__ . "/Model/todolist.php";
require_once __DIR__ . "/BusinessLogic/tampilTodolist.php";
require_once __DIR__ . "/BusinessLogic/tambahTodolist.php";
require_once __DIR__ . "/BusinessLogic/hapusTodolist.php";
require_once __DIR__ . "/View/viewTampilTodolist.php";
require_once __DIR__ . "/View/viewTambahTodolist.php";
require_once __DIR__ . "/View/viewHapusTodolist.php";
require_once __DIR__ . "/Helper/input.php";

echo "Aplikasi Todolist" . PHP_EOL;

viewTampilTodolist();
