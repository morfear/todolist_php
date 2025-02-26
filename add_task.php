<?php
$todos = isset($_POST['todos']) ? json_decode($_POST['todos'], true) : [];
$newTodo = isset($_POST['newTodo']) ? trim($_POST['newTodo']) : '';
if ($newTodo) $todos[] = $newTodo;
?>