<?php

require_once "../Model/todolist.php";
require_once "../BusinessLogic/hapusTodolist.php";
require_once "../BusinessLogic/tambahTodolist.php";
require_once "../BusinessLogic/tampilTodolist.php";

tambahTodolist("Khoirul");
tambahTodolist("Huda");
tambahTodolist("Addelson");
tambahTodolist("Budi");
tambahTodolist("Sarani");


hapusTodolist(5);
tampilTodolist();
hapusTodolist(2);
tampilTodolist();

$cek = hapusTodolist(5);
var_dump($cek);
