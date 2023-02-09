<?php
// Первое задание

$price1 = 1503;
$price2 = 1120;
$price3 = 220;

$product1 = 'Чайник';
$product2 = 'Кофейник';
$product3 = 'Кипятильник';

// Второе задание
$price4 = 1230;
$price5 = 1440;
$price6 = 2350;

$price7 = 330;
$price8 = 550;
$price9 = 1000;

$average = ($price1 + $price2 + $price3) / 3;

$maxProduct = $product1;

function maxPrice($price1, $price2, $price3) {
    $maxPrice = 0;

    if($price1 > $price2 && $price1 > $price3) {
        $maxPrice = $price1; 
    } else if ($price2 > $price1 && $price2 > $price3) {
        $maxPrice = $price2;
    } else if($price3 > $price1 && $price3 > $price2) {
        $maxPrice = $price3;
    } else {
        echo "Введите полную цену товара";
    }

    return $maxPrice;
}

function maxProduct($price1, $price2, $price3, $product1, $product2, $product3) {
    $maxProduct = '';

    if($price1 > $price2 && $price1 > $price3) {
        $maxProduct = $product1;
    } else if ($price2 > $price1 && $price2 > $price3) {
        $maxProduct = $product2;
    } else if($price3 > $price1 && $price3 > $price2) {
        $maxProduct = $product3;
    } else {
        echo "Введите полную цену товара";
    }

    return $maxProduct;
}

// Третье задание

function passwordValidator($password) {
    $passwordValid = 'qwerty123';

    if($password == $passwordValid) {
        return 'Пароль верный';
    } else {
        return 'Пароль не верный';
    }
}

// Четвёртое задание
function inf() {
    $price = 100;
 
    for($i = 0; $price < 150; $i++) {
        if(!$i) {
            $price = ($price * 0.1) + $price;
            echo "В конце года:  ".round($price).'руб. <br/>';
        } else {
            $price = ($price * 0.035) + $price;
            echo "Через $i лет:  ".round($price).'руб. <br/>';
    }
}
}

// Пятое задание
$orders = [
    'Чайник',
    'Стакан',
    'Кофейник',
    'Кипятильник'
];

array_push($orders, "Компьютер", "Ноутбук");

sort($orders);

// Шестое задание
$ordersArrays = ["Чайник" => 1230, "Кофейник" => 1120, "Кипятильник" => 220];
$ordersArrays["Ложка"] = 200;
$ordersArrays["Ручка"] = 100;


function sumOrders($ordersArrays) {

    $summa = array_sum($ordersArrays);
    return $summa;
} 

function increasingArray($ordersArrays) {
    asort($ordersArrays);
    foreach($ordersArrays as $key => $value) {
        echo "Товар: " .$value 
             ." Цена: " .$key ."<br>";
    }
}

function decreasingArray($ordersArrays) {
    arsort($ordersArrays);
    foreach($ordersArrays as $key => $value) {
        echo "Товар: " .$value 
             ." Цена: " .$key ."<br>";
    }
}

function alphabeticalArray($ordersArrays) {
    ksort($ordersArrays);
    foreach($ordersArrays as $key => $value) {
        echo "Товар: " .$value 
             ." Цена: " .$key ."<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №1</title>
</head>
<body>


    <h1>Первое задание</h1>

<p>
    <?
        echo $product1 . ' => ' . $price1 .' руб';  
    ?> 
    <br>
    <?
        echo $product2 . ' => ' . $price2 .' руб';
    ?> 
    <br>
    <? 
        echo $product3 . ' => ' . $price3 .' руб';
    ?>
</p>

<h3>
    <?
        echo 'Средняя цена товаров = ' .round($average)
    ?>
</h3>

<h1>Второе задание</h1>

<table>
		<thead>
			<tr>
				<th>Товар</th>
				<th>Цена</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
                    <?
                        echo $product1
                    ?>
                </td>
				<td><?echo $price1?></td>
			</tr>
			<tr>
				<td><?echo $product2?></td>
				<td><?echo $price2?></td>
			</tr>
			<tr>
				<td><?echo $product3?></td>
				<td><?echo $price3?></td>
			</tr>
		</tbody>
	</table>
    
    <h3>
        <?
            echo 'Средняя цена товаров = ' .round($average) .' руб';
        ?>
    </h3>

    <p>
        <?
            echo 'Самый дорогой товар - ' .maxProduct($price1, $price2, $price3, $product1, $product2, $product3) . ' - с ценой ' .maxPrice($price1, $price2, $price3). ' руб';
        ?> <br>
        <?
            echo 'Самый дорогой товар - ' .maxProduct($price4,$price5, $price6, $product1, $product2, $product3) . ' - с ценой '  .maxPrice($price4, $price5, $price6). ' руб';
        ?> <br>
        <?
            echo 'Самый дорогой товар - ' .maxProduct($price7, $price8, $price9, $product1, $product2, $product3) . ' - с ценой '  .maxPrice($price7, $price8, $price9). ' руб';
        ?>
    </p>

    <h1>Третье задание</h1>

    <p>
        <?
            echo passwordValidator('qwery123');
            print passwordValidator('qwerty123');
        ?>
    </p>

    <h1>Четвёртое задание</h1>

    <p>
        <?
            inf();
        ?>
    </p>

    <h1>Пятое задание</h1>

    <p>
        <?
            for($i = 0; $i < count($orders); $i++) {
                echo $orders[$i];
                echo "<br>";
            }
            echo "Кол-во товаров - " .count($orders);
            echo "<br>";
        ?>
        <br>
    </p>

    <h1>Шестое задание</h1>
    <p>
    <?
        foreach($ordersArrays as $key => $value) {
            echo "<span>Товар: $key </span> <br> <b> Цена: $value </b> <br>";
            echo "<hr>";
        }

        echo "<b>Кол-во товаров: </b>" .count($ordersArrays) ."<br>";

        echo "<b>Сумарная стоимость товаров: </b>".sumOrders($ordersArrays) ."<br>";
        
        echo "<br>";

        echo "<b>Массив в порядке возрастания цены: </b>" ."<br>";
        increasingArray($ordersArrays);

        echo "<br>";

        echo "<b>Массив в порядке убывания цены: </b>" ."<br>";
        decreasingArray($ordersArrays);

        echo "<br>";

        echo "<b>Массив товаров в алфавитном порядке: </b>" ."<br>";
        alphabeticalArray($ordersArrays)
    ?>
    </p>

    <h1>Седьмое задание</h1>
    <div>
        <?
            echo "Здравствуйте, меня зовут Илья, я - веб разработчик, мой стек технологий - HTML, CSS, Sass, Bootstrap, JavaScipt, PHP(базовый уровень), работа с бд SQL ." 
        ?>
    </div>

    <h1>Восьмое задание</h1>
    <div>
        <?
            echo '<table border=1>';
            for ($i=0; $i<=255; $i += 50) 
            {
                echo '<tr>';
                
                for ($j=0; $j<=255; $j += 50)
                {
                    for ($k=0; $k<=255; $k += 50)
                    {
                        echo '<td style="background-color:RGB('.$i.', '.$j.', '.$k.');"> rgb('.$i.', '.$j.', '.$k.')</td>';
                    }
                }
                
                echo '</tr>';
            }
            echo'</table>';
        ?>
    </div>

    <h1>Девятое задание</h1>
    <div>
        <?
            $n = 50;
            do {
                $min = rand(0, 30);
                $max = rand(0, 30);
                $sum = $min + $max;
                echo $sum ."<br>";
            } while ($sum <= $n) 
        ?>
    </div>
    
</body>
</html>