<?php
   // include ("bd.php");
    session_start();
    $conn = mysqli_connect("a242031.mysql.mchost.ru", "a242031_1", "alimzhan2538", "a242031_1");
// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
			} 	
//заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $submit = strip_tags($_POST['submit']);
    $name = strip_tags($_POST['name']);
    $tel = strip_tags($_POST['tel']);
    if (isset($_POST['submit']))    
	{				
    $sql = "INSERT INTO zakazi1 (name, telephone) VALUES ('$name', '$tel')";
    if (mysqli_query($conn, $sql)) {
        include("index1.php");
//    echo " Закак принят на обраотку <a href='index1.php'>Вернуться на страницу</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
                }
    ?>