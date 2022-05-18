<?php

/**
 * menampilkan todo di list
 */


function tampilTodolist()
{
    global $todolist;

    echo "TAMPIL TODOLIST" . PHP_EOL;

    foreach ($todolist as $key => $value) {
        echo "$key. $value" . PHP_EOL;
    }
}
