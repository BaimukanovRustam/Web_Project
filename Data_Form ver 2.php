<?php
echo htmlspecialchars($_POST['login']);
echo htmlspecialchars($_POST['password']);
echo htmlspecialchars($_POST['name']);
echo htmlspecialchars($_POST['surname']);
echo (int)$_POST['age'];
?>
