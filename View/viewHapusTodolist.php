<?php

require_once __DIR__ . "/../BusinessLogic/hapusTodolist.php";
require_once __DIR__ . "/../Helper/input.php";



function viewHapusTodolist()
{
    echo "MENGHAPUS TOOLIST" . PHP_EOL;


    $pilihan = input("Nomor(x untuk batal)");
    if ($pilihan == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $success = hapusTodolist($pilihan);

        if ($success) {
            echo "Sukses mengahpus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}
