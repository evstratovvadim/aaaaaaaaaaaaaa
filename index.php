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
        <?php echo'Вы ввели : <br>';
        if (isset($_POST['data'])) {
            
            print($_POST['data']);
        }
        ?>
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