<?php

include('../db.php'); // Подключение к базе данных

$showbyid = $_REQUEST['showbyid'];
$query = "SELECT * FROM c_exam_task";
$result = mysqli_query($link, $query);

$tasks = [];
while ($row = mysqli_fetch_assoc($result)) {
    $tasks[] = $row;
}


// var_dump ($_REQUEST);
foreach ($tasks as $task) {
    if ($task['id'] == $showbyid) {
        // var_dump ($user['login']);    
        
    echo 
    "<pre><code><div><p class='line4'>{$task['text_en']}</p></div></code></pre>";
    }
    else {
        
    }
}