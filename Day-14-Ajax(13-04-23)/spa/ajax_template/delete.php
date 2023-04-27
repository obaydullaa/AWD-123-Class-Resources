<?php
$id = $_POST['id'];

$connection = new mysqli('localhost', 'root', '', 'ajax');
$data = $connection->query("DELETE FROM students WHERE id = '$id'");