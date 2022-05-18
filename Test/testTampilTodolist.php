<?php

require_once "../Model/todolist.php";
require_once "../BusinessLogic/tampilTodolist.php";

// $todolist[1] = "Belajar PHP";
// $todolist[2] = "Belajar HTML";
// $todolist[3] = "Belajar CSS";
// $todolist[4] = "Belajar Javascript";

$todolist = [
    1 => "Belajar PHP",
    2 => "Belajar HTML",
    3 => "Belajar CSS",
    4 => "Belajar Javascript"
];

tampilTodolist();
