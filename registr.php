<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "alim");
// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
			} 	
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $name = strip_tags($_POST['name']);
    $login =strip_tags($_POST['login']);
    $pas1 = strip_tags($_POST['pas1']);
    $pas2 = strip_tags($_POST['pas2']);
 //удаляем лишние пробелы
    $login = trim($login);
    $name = trim($name);
    $pas1 = trim($pas1);
    $pas2 = trim($pas2);
    if ($pas1==$pas2)
	{			

		if (strlen($login)>15||strlen($name)>15)
		{
			echo "Имя или юсернейм слишком огромны по буквам";
		}
		else 
		{
			//check password lenght
		if(strlen($pas1>15)||strlen($pas1)<6)
			{
			echo "Пароль должен быть больше 6 букв, но меньше 15";
			}
           else 
           {
            $query = mysqli_query($conn, "SELECT id FROM registracia WHERE login='".mysqli_real_escape_string($conn, $_POST['login'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        echo "Пользователь с таким логином уже существует в базе данных";
    }
                else {
 // подключаемся к базе	
    $sql = "INSERT INTO registracia (id, name, login, password) VALUES ('', '$name','$login','$pas1')";
    if (mysqli_query($conn, $sql)) {
    include("index1.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
                }
           }
           }
    }
else echo "Пароли не совпадают";
           

    ?>