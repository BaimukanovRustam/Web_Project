<?php
$login=$_POST['login'];
$password=$_POST['password'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$age=$_POST['age'];
echo $login;
echo "<br>";
echo $password;
echo "<br>";
echo $name;
echo "<br>";
echo$surname;
echo "<br>";
echo $age;
echo "<br>";

require_once 'Connection.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($host, $user, "", $database)
    or die("Ошибка " . mysqli_error($link));

// выполняем операции с базой данных
$query ="SELECT * FROM logins";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    echo "Выполнение запроса прошло успешно";
}
while( $row = mysqli_fetch_assoc($result) ){
        printf("%s (%s)\n", $row['Name'], $row['Disease']);
    } 
// закрываем подключение
mysqli_close($link);

?>
