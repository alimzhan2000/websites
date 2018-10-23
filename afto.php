<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "alim");
// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
			} 	
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login =strip_tags($_POST['login']);
    $pas1 = strip_tags($_POST['pas1']);
    $submit = strip_tags($_POST['submit']);
 //удаляем лишние пробелы
    $pas1 = trim($pas1);
    if ($submit)
	{			
            $query = mysqli_query($conn, "SELECT id FROM registracia WHERE login='".mysqli_real_escape_string($conn, $_POST['login'])."'");
    if(mysqli_num_rows($query) > 0)
    {
         $sql = mysqli_query($conn, "SELECT id FROM registracia WHERE password='".mysqli_real_escape_string($conn, $_POST['pas1'])."'");
                    if(mysqli_num_rows($sql) > 0){
                        include("index1.php");
                    }
                    else echo "password is incorrect";
                }
                else {
            echo "login is incorrect";
                }
    }


    ?>