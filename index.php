<!DOCTYPE html>
<html>
    <head>
        <title>Index PHP</title>
        <meta charset='utf-8'>
    </head>
    <body>
        <?php
        // Моя первая программа!
        echo "Привет мир! Как дела?<br>";
        echo "Как дела йопт?<br>";
        $a = 50;
        $b = 30;
        $c = 0x1A;
        echo $a+$b;
        $hi = 'Чо как? Сам как?';
        echo "<br> $hi Все ок, бро! <br>";
        $beer = 'Heineken';
        echo "{$beer}s <br>";
        echo <<<OIL
        ЧТО ЗА ХУЙНЯ?
OIL;
        $array = Array('Сыр','Kolbosa','Chease');
        echo $array[0];
        $array[2] = 'Мороженное';
        echo $array[2];
        $arr = Array('молоко' => 'Сыр, Молоко');
        echo "<br> {$arr['молоко']}";
        
        $ARRAY = Array
        (
            Array('сыр' => 'молочные'),
            Array('шоколад' => 'сникерс')
        );
        echo $ARRAY[1]['шоколад'];
        $ARRAY2 = Array
        ('samearray' =>
            Array('сыр' => 'молочные'),
            Array('шоколад' => 'сникерс')
        );
        echo $ARRAY2['samearray']['щоколад'];
        $arr2 = Array('key2' => 'val2', 'чипсы');
        echo "<br>$arr2[0]";
        $arr2[] = 'Бананы';
        echo "<br>$arr2[1]";
        
        class car 
        {
            var $color = 'White';
            function tut_tut() { 
                echo 'Bip-Bip'; 
                
            }
        }
        $honda = new car;
        echo "<br>$honda->color";
        $d = $g = 7;
        echo $d;
        
        $arr3 = Array('element');
        $arr3[] = Array('key' => 'val');
        $arr3[1]['key2'] = 'val2';
        $arr3[0] = $arr3[1]['key2'];
        echo $arr3[0];
        echo "<br>";
        echo gettype($a);
        echo "<br>";
        echo "<br>";
        echo $a++;
        echo $a;
        
        $ab = 'Вася';
        $ad = 'Петя';
        $ab=$ab ^ $ad;
        $ad=$ab ^ $ad;
        $ab=$ab ^ $ad;
        echo "<br> $ab";
        
        ?>
    </body>
</html>