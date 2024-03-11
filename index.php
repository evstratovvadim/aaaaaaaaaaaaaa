<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тестовое задание</title>
</head>
<body class="full">
    <form class="userDate" method="post" action="index2.php" enctype="multipart/form-data">
        <ul>
            <li><div>
                <P class="labelInput">Адрес портала</P>
                <input type="text" id="1" name="url">
            </div></li>
            <li><div>
                <P class="labelInput">Тариф портала</P>
                <input type="text" id="2" name="rate">
            </div></li>
            <li><div>
                <P class="labelInput">Дата продления тарифа</P>
                <input type="date" id="3" name="dateRate">
            </div></li>
            <li><div>
                <P class="labelInput">Пульс портала</P>
                <input type="file" name="Pulse">
            </div></li>
            <li><div>
                <P class="labelInput">Количество сотрудников</P>
                <input type="text" id="4" name="numbEmpl">
            </div></li>
            <li><div>
                <P class="labelInput">Количество администраторов</P>
                <input type="text" id="5" name="numbAdm">
            </div></li>
            <li><div>
                <P class="labelInput">Почты администраторов</P>
                <input type="text" multiple id="6" name="emailAdm">
            </div></li>
            <li><div>
                <P class="labelInput">Реквизиты компании</P>
                <input type="file" multiple name="comDet[]">
            </div></li>
            <li><div>
                <P class="labelInput">Наличие подписки на маркет</P>
                <select size="1" id="7" name="subMarket">
                    <option value=''>Выберите вариант</option>
                    <option value="Нет">Нет</option>
                    <option value="Да">Да</option>
                </select>
            </div></li>
            <li><div class="hiddenElement1">
                <P class="labelInput">Дата действия подписки</P>
                <input type="date" id="8" name="dateSub">
            </div></li>
            <li><div>
                <P class="labelInput">SIP-конектор</P>
                <select size="1" id="9" name="SIP">
                    <option value=''>Выберите вариант</option>
                    <option value="Нет">Нет</option>
                    <option value="Да">Да</option>
                </select>
            </div></li>
            <li><div class="hiddenElement2">
                <P class="labelInput">Если есть SIP-Коннектор, то до какого числа оплачен</P>
                <input type="date" id="10" name="SIPDesc">
            </div></li>
            <li><div>
                <P class="labelInput">Телефония</P>
                <input type="text" id="11" name="telephony">
            </div></li>
            <li><div>
                <P class="labelInput">Права доступа телефонии</P>
                <input type="file" multiple name="telephonyFile[]">
            </div></li>
            <li><div>
                <P class="labelInput">Есть ли бизнес-процессы</P>
                <select size="1" id="12" name="busProc">
                    <option value=''>Выберите вариант</option>
                    <option value="Нет">Нет</option>
                    <option value="Да">Да</option>
                </select>
            </div></li>
            <li><div class="hiddenElement3">
                <P class="labelInput">Если есть бизнес-процессы описание</P>
                <input type="text" id="13" name="busProcDesc">
            </div></li>
            <li><div>
                <P class="labelInput">Есть ли смарт-процессы</P>
                <select size="1" id="14" name="smartProc">
                    <option value=''>Выберите вариант</option>
                    <option value="Нет">Нет</option>
                    <option value="Да">Да</option>
                </select>
            </div></li>
            <li><div class="hiddenElement4">
                <P class="labelInput">Если есть смарт-процессы описание</P>
                <input type="text" id="15" name="smartProcDesc">
            </div></li>
            <li><div>
                <P class="labelInput">Бизнес-процессы живой ленты</P>
                <input type="text" id="16" name="liveFeed">
            </div></li>
            <li><div>
                <P class="labelInput">Количество установленных приложений</P>
                <input type="text" id="17" name="countInsApp">
            </div></li>
            <li><div>
                <P class="labelInput">Какие приложения установлены</P>
                <input type="text" id="18" name="descInsApp">
            </div></li>
            <li><div>
                <P class="labelInput">Воронка ЛИДов</P>
                <input type="file" multiple name="LID[]">
            </div></li>
            <li><div>
                <P class="labelInput">Работы ЛИДов</P>
                <input type="text" id="19" name="workLID">
            </div></li>
            <li><div>
                <P class="labelInput">Воронка сделок</P>
                <input type="file" multiple name="deal[]">
            </div></li>
            <li><div>
                <P class="labelInput">Работы сделок</P>
                <input type="text" id="20" name="workDeal">
            </div></li>
            <li><div>
                <P class="labelInput">Права доступа в CRM</P>
                <input type="file" name="accessCRM">
            </div></li>
            <li><div>
                <P class="labelInput">CRM-Документы</P>
                <input type="file" multiple name="docCRM[]">
            </div></li>
            <li><div>
                <P class="labelInput">Дополнительные поля сущностей</P>
                <input type="file" multiple name="addFields[]">
            </div></li>
            <li><div>
                <P class="labelInput">Источники</P>
                <input type="file" multiple name="Sour[]">
            </div></li>
            <li><div>
                <P class="labelInput">Контакт-центр</P>
                <input type="text" id="21" name="callCenter">
            </div></li>
            <li><div>
                <P class="labelInput">Список открытых линий</P>
                <input type="text" id="22" name="listOpLi">
            </div></li>
            <li><div>
                <P class="labelInput">Список CRM-форм</P>
                <input type="file" name="listCRMForm">
            </div></li>
            <li><div>
                <P class="labelInput">База знаний</P>
                <input type="file" name="baseKnow">
            </div></li>
            <li><div>
                <P class="labelInput">Диск,место</P>
                <input type="file" name="disk">
            </div></li>
            <li><div>
                <P class="labelInput">Рабочие группы</P>
                <input type="file" multiple name="workGroup">
            </div></li>
            <li><div>
                <P class="labelInput">Сайты и маркетинг</P>
                <input type="file" multiple name="webMarket">
            </div></li>
        </ul>
        <div class="globalButton">
            <input type="submit" name="send" value="Сохранить">
        </div>
    </form>

    <style>
        .full{
            background-color: #fff7fc;
        }
        .userDate{
            background-color: #ffffff;
            margin: auto;
            width: 60%;
        }
        ul{
            list-style-type: none;
            display: grid;
            grid-template-columns: repeat(2,1fr);
            grid-gap: 5px;
           /*grid-auto-rows: minmax(100px, 2px); */
        }
        li{
            padding: 2px;
            margin-left: 3px;
            margin-bottom: -1%;
            display: block;
        }
        .labelInput{
            margin-left: 2%;
            margin-bottom: -0.5%;
        }
        input {
            width: 100%;
            box-sizing: border-box;
            border: 2px solid #a4d2fa;
            border-radius: 4px;
        }
        select{
            width: 100%;
            box-sizing: border-box;
            border: 2px solid #a4d2fa;
            border-radius: 4px;
        }
        .globalButton{
            margin-left: 75%;
        }
    </style>
</body>
</html>