<?php

require_once "../View/viewTampilTodolist.php";
require_once "../BusinessLogic/tambahTodolist.php";

tambahTodolist("Huda");
tambahTodolist("Anam");
tambahTodolist("Irfan");

viewTampilTodolist();
