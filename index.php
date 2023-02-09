<?php 

// Задание 2

$password2 = $_POST["password"];

function checkPassword($password2) {
    $validPassword = 'qwerty123';

    if($password2 == $validPassword) {
        header('Location: task2.php'); 
        die();
    } else if($password2 == '') {
        return "введите пароль";
    } else {
        return "пароль не верный";
    }
}

// Задание 4

$num1 = $_POST['num1'];
$char = $_POST['char'];
$num2 = $_POST['num2'];

function calculation($num1, $char, $num2) {
    $result = 0;

    if(!empty($num1) && !empty($char) && !empty($num2)) {
        switch($char) {
            case '+':
                $result = $num1 + $num2;
                return $result;
                break;
            case '-':
                $result = $num1 - $num2;
                return $result;
                break;
            case '*':
                $result = $num1 * $num2;
                return $result;
                break;
            case '/':
                $result = $num1 / $num2;
                return $result;
                break;    
        } 
    } else {
        return $result; 
    }
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работа с формами</title>
</head>
<body>

    <h1>Задание 1</h1>

    <form action="index.php" method="POST">
        <input name="name" type="text" placeholder="Введите ФИО">
        <input name="address" type="text" placeholder="Введите адрес">
        <input name="email" type="text" placeholder="Введите Email">
        <input name="password" type="password" placeholder="Введите пароль">
        <button>Отправить</button>
    </form>

    <div style="margin-top: 10px">
        <b>Ваши данные: </b> <br>
        <p>
            Имя: <? echo $_POST["name"]?> <br>
        </p>
        <p>
            Адрес: <?echo $_POST["address"]?> <br>
        </p>
        <p>
            Ел. почта: <?echo $_POST["email"]?> <br>
        </p> 
        <p>
            Пароль: <?echo $_POST["password"]?>
        </p>
    </div>

    <h1>Задание 2</h1>

    <div>
        Статус: <?echo checkPassword($password2)?>
    </div>

    <h1>Задание 3</h1>

    <form action="index.php" method="POST">
        <input name="to" type="text">
        <input name="subject" type="email">
        <textarea name="message" cols="30" rows="10"></textarea>
        <button name="mail_ok">submit</button>
    </form>

    <? 
        $to = $_POST['to'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if(!empty($to) && !empty($subject) && !empty($message)) {
            $mail = mail($to, $subject, $message);
            if($mail == true) {
                echo 'Письмо отправлено';
            } else {
                echo 'Не удалось отправить письмо'; 
            }
        } else {
            echo 'Введите данные';
        }
    ?>

    <h1>Задание 4</h1>

    <form action="index.php" method="POST">
        <input name="num1" type="text" placeholder="Введите первое число">
        <input name="char" type="text" placeholder="Введите знак">
        <input name="num2" type="text" placeholder="Введите второе число">
        <button>Посчитать</button>
    </form>   


    <p>
        Результат: <?echo calculation($num1, $char, $num2)?>
    </p>

    <h1>Задание 5</h1>

    <form action="task5.php" method="POST">
        <h3>Введите данные о пользователе</h3>
        <input type="text" name="qName" placeholder="Введите имя">
        <input type="text" name="qBirdYear" placeholder="Введите год рождения">
        <input type="text" name="languageProgramming" placeholder="Сколько вы знаете я.п.">
        <button>Отправить</button>
    </form>

    <h1>Задание 6</h1>

    <form action="index.php" method="POST">
        <h3>На каком курсе вы обучаетесь:</h3>
        <input name="kurs" type="number" placeholder="Введите число">
        <h3>Сколько вам осталось учиться:</h3>
        <input name="year" type="number" placeholder="Введите число">
        <h3>Из какой вы группы:</h3>
        <input name="group" type="text" placeholder="Введите название группы">
        <div style="margin-top: 20px;">
            <button>Проверить тест</button>
        </div>
    </form>

    <?
    $result = 0;

    if($_POST['kurs'] == "3") {
        $result++;
    }
        
    if($_POST['year'] == "1") {
        $result++;
    }

    if($_POST['group'] == "ИСП-205") {
        $result++;
    }

    echo 'Результат: ' .$result .' правильных ответа';
        
    ?>


</body>
</html>