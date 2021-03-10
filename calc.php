<?php

// Формируем массив для JSON ответа
$result = array(
'date' => $_POST["date"],
'deposit' => $_POST["deposit"],
'term' => $_POST["term"],
'term' => $_POST["term"],
'replenishment' => $_POST["replenishment"],
'replenishment__sum' => $_POST["replenishment__sum"],
'replenishment__sum' => $_POST["replenishment__sum"],



); 

// Переводим массив в JSON
echo json_encode($result); 