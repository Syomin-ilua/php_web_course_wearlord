<?php 

$qName = $_POST['qName'];
$qBirdYear = $_POST['qBirdYear'];
$languageProgramming = $_POST['languageProgramming'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анкета пользователя</title>
</head>
<body>

    <p style="margin-bottom: 0px;"><b>Ваши данные:</b></p> <br>
        
        <p style="margin-top: 0px;">
        <?
            if(!empty($qName) && !empty($qBirdYear) && !empty($languageProgramming)) {
                $userYear = 2023 - $qBirdYear;
        
                echo 'Ваше имя: ' .$qName; 
                echo '<br>'; 
                echo 'Вам: ' .$userYear .' лет';
                echo '<br>'; 
                echo 'Вы знаете ' .$languageProgramming . ' языков програмирования'; 
            } else {
                echo 'Введите данные правильно!';
            }
        ?>
        </p>
    
</body>
</html>