<html>
    <head>
        <title>display</title>
    </head>
    <body>
        
        <h1 align="center"><br>Результат работы функции get_headers("https://httpbin.org/post") <br></h1>
        <p>
            <textarea cols="100" rows="15"><?php print_r(get_headers("https://httpbin.org/post")) ?></textarea>
        </p>
        <?php
            $name = $_POST["firstname"];
            $email = $_POST["email"];
            $type_contacting = $_POST["type_contacting"];
            $text_contacting = $_POST["text_contacting"];
            $answer_option=$_POST["answer_option"];
            $whitespace="   ";
            echo "Ваше имя: <b>" .$name."</b><br>";
            echo "Ваш E-mail: <b>" .$email."</b><br>";
            echo "Тип обращения: <b>" .$type_contacting."</b><br>";
            echo "Вариант ответа: ";
            foreach($answer_option as $i) echo "<b>".$i. $whitespace." </b>";
        ?>
        <p>
            Текст обращения:<br>
            <textarea cols="100" rows="15"><?php print_r($text_contacting) ?></textarea>

        </p>

    </body>
</html>
<?php include ("footer.php");?>