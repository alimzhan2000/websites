<?php
   // include ("bd.php");
    session_start();
    $conn = mysqli_connect("a230191.mysql.mchost.ru", "a230191_1", "alimzhan2538", "a230191_1");
// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
			} 	
//заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $submit = strip_tags($_POST['submit']);
    $name = strip_tags($_POST['name']);
    $subject = strip_tags($_POST['subject']);
    $message = strip_tags($_POST['message']);
    $mail = strip_tags($_POST['mail']);
    if (isset($_POST['submit']))    
	{				
    $sql = "INSERT INTO vopros (name, subject, message, mail) VALUES ('$name','$subject','$message','$mail')";
    if (mysqli_query($conn, $sql)) {
    include("index1.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
                }
    ?>