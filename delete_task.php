<?php
include "add_task.php";
if (isset($_POST['delete'])) unset($todos[$_POST['delete']]);
?>