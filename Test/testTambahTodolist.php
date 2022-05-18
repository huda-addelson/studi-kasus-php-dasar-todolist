<?php

require_once "../Model/todolist.php";
require_once "../BusinessLogic/tambahTodolist.php";

tambahTodolist("Khoirul");
tambahTodolist("Huda");
tambahTodolist("Addelson");
tambahTodolist("Anam");

var_dump($todolist);
