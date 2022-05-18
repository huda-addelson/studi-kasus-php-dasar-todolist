<?php

require_once __DIR__ . "/../Model/todolist.php";
require_once __DIR__ . "/../BusinessLogic/tampilTodolist.php";
require_once __DIR__ . "/../View/viewTambahTodolist.php";
require_once __DIR__ . "/../View/viewHapusTodolist.php";
require_once __DIR__ . "/../Helper/input.php";


function viewTampilTodolist()
{
    while (true) {
        tampilTodolist();

        echo "PILIH MENU" . PHP_EOL;
        echo "1. Tambah Todolist" . PHP_EOL;
        echo "2. Hapus Todolist" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == 1) {
            viewTambahTodolist();
        } elseif ($pilihan == 2) {
            viewHapusTodolist();
        } elseif ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }
    echo "Sampai Jumpa Lagi" . PHP_EOL;
}
