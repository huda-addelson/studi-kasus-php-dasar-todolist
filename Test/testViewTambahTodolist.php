<?php

require_once "../BusinessLogic/tambahTodolist.php";
require_once "../BusinessLogic/tampilTodolist.php";
require_once "../View/viewTambahTodolist.php";

tambahTodolist("Mantap");
tambahTodolist("Eko");
tambahTodolist("Untuk");

viewTambahTodolist();
tampilTodolist();
viewTambahTodolist();
tampilTodolist();
