<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тестовое задание</title>
</head>
<body class="full">
    <form method="post">
        <div>
            <P class="data">Введите строку</P>
            <input type="text" id="21" name="data">
        </div>
        <div class="globalButton">
            <input type="submit" name="send" value="Преобразовать">
        </div>
    </form>
    <div>
        <?php 
        if (isset($_POST['data'])) {
            $data = $_POST['data'];
            echo'Вы ввели : <br>';
            print($_POST['data']);
            echo '<br> Строка после преобразования: <br>';
            print(splitWords($data)); // Выводим строку после преобразования 
        }
        ?>
    </div>

    <?php 
        function splitWords($str){
            $arr =  explode(' ', $str); // Отделяем слова
            foreach ($arr as $key => $elem) {
                $arr[$key] = reversWords($elem); // пробегаем по каждому слову и применяем функцию для изменения порядка символов 
            }
            return implode(' ', $arr); // Восстанавливаем строку 
        };
        function reversWords($word){ // функция для изменения порядка символов
            $arr = str_split($word); // Разбиваем строку на элементы массива 
            $arrRev = str_split(mb_strtolower(preg_replace('/\pP/iu', '', $word)));// Разбиваем строку на элементы массива и приводим их к нижнему регистру без учета знаков пунктуации  
            $num = count( $arrRev ) -1; // Колличество элементов реверсированного массива

            for ($i = 0; $i < count($arr); $i++) {
                if(ctype_punct($arr[$i])) continue; // Если элемент массива это знак пунктуации
                if(ctype_upper($arr[$i])){ // Если элемент массива в верхнем регистре 
                    $arr[$i] = strtoupper($arrRev[$num]); // приводим элемент реверсированного массива к верхнему регистру и заменяем им элемент основного массива 
                } else {
                    $arr[$i] = $arrRev[$num]; // Заменям элемент основного массива
                }
                $num --;
            }
            return implode($arr); // Восстанавливаем строку  
        }
        function test1(){
            $tstr = "Cat";
            $rstr = "Tac";
            $trev = splitWords($tstr);
            if($trev == $rstr){
                echo "Реверс работает для пары " . $tstr . " => " . $rstr ;
            }
            else return "Тест для пары " . $tstr . " => " . $rstr . " не сработал";
        }
    function test2(){
            $tstr = "elEpHant";
            $rstr = "tnAhPele";
            $trev = splitWords($tstr);
            if($trev == $rstr){
                echo "Реверс работает для пары " . $tstr . " => " . $rstr ;
            }
            else return "Тест для пары " . $tstr . " => " . $rstr . " не сработал";
        }
function test3(){
            $tstr = "cat,";
            $rstr = "tac,";
            $trev = splitWords($tstr);
            if($trev == $rstr){
                echo "Реверс работает для пары " . $tstr . " => " . $rstr ;
            }
            else return "Тест для пары " . $tstr . " => " . $rstr . " не сработал";
        }
function test4(){
            $tstr = "is 'cold' now";
            $rstr = "si 'dloc' won";
            $trev = splitWords($tstr);
            if($trev == $rstr){
                echo "Реверс работает для пары " . $tstr . " => " . $rstr ;
            }
            else return "Тест для пары " . $tstr . " => " . $rstr . " не сработал";
        }
function test5(){
            $tstr = "third-part";
            $rstr = "driht-trap";
            $trev = splitWords($tstr);
            if($trev == $rstr){
                echo "Реверс работает для пары " . $tstr . " => " . $rstr ;
            }
            else return "Тест для пары " . $tstr . " => " . $rstr . " не сработал";
        }
function test6(){
            $tstr = "can`t";
            $rstr = "nac`t";
            $trev = splitWords($tstr);
            if($trev == $rstr){
                echo "Реверс работает для пары " . $tstr . " => " . $rstr ;
            }
            else return "Тест для пары " . $tstr . " => " . $rstr . " не сработал";
        }
    ?>
    <div>
        <p>Unit-Тесты:</p>
        <? printf(test1());?><br>
	<? printf(test2());?><br>
	<? printf(test3());?><br>
	<? printf(test4());?><br>
	<? printf(test5());?><br>
	<? printf(test6());?><br>
    </div> 

    <style>
        .full{
            background-color: #fff7fc;
        }
        .globalButton{
            margin-left: 75%;
        }
    </style>
</body>
</html> 