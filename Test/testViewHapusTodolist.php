<?php
require_once "../View/viewHapusTodolist.php";
require_once "../Model/todolist.php";
require_once "../BusinessLogic/tampilTodolist.php";
require_once "../BusinessLogic/tambahTodolist.php";

tambahTodolist("Huda");
tambahTodolist("Anam");
tambahTodolist("Dea");
tambahTodolist("Nanda");
tampilTodolist();

viewHapusTodolist();
tampilTodolist();
