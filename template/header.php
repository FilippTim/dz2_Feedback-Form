<html>
    <head>
        <title>Домашняя работа 2. </title>
    </head>
    <body>
        <img src="template/logo.jpg"
            width="300">
        <div><br><center>4.1. Домашняя работа: Feedback Form.<br><br></center></div>
        <p><br><br><br><br><br><br></p>

        <h2>Введите свои данные</h2>
        <form action="template/display.php" method="POST">
            <p>Имя <input type="text" name="firstname" /></p>
            <p>E-mail <input type="text" name="email" /></p>
            <p>
                Тип обращения 
                <select id="type_contacting" name="type_contacting">
                <option value="Жалоба">Жалоба</option>
                <option value="Предложение">Предложение</option>
                <option value="Благодарность">Благодарность</option>
                </select>
            </p>
            <p>
                Текст обращения:<br>
                <textarea id="text_contacting" name ="text_contacting" cols="100" rows="15"></textarea>
            </p>
            <p>
                Вариант ответа:<br>   
                    <input type="checkbox" name="answer_option[]" value="sms">sms
                    <input type="checkbox" name="answer_option[]" value="email">email
            </p>
            <input type="submit" value="Отправить">
        </form>

    </body>
</html>