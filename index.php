<?php
include "add_task.php";
include "delete_task.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>Morfear todo List</h1>
    <a href="https://github.com/morfear" target='_blank'>Github</a>
	<form id='todoForm' method='POST'>
		<input type="text" name='newTodo' id='newTodo' required>
		<button type='submit'>Add</button>
		<input type="hidden" name='todos' id='todos' value='<?=json_encode($todos)?>'>
	</form>
	 <ul id="todoList">
        <?php foreach ($todos as $index => $todo):   ?>
        <li>
            <span><?= htmlspecialchars($todo) ?></span>
            <form method="POST" style="margin: 0;">
                <input type="hidden" name="delete" value="<?= $index ?>">
                <input type="hidden" name="todos" value='<?= json_encode($todos) ?>'>
                <button type="submit">Delete</button>
            </form>
        </li>
        <?php endforeach; ?>
    </ul>
	<script scr='./main.js'></script>
</body>
</html>