<?php

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_regex_encoding('UTF-8');
$file_dir = "tests/questions/".$_GET["test_number"].".json";
$questions = file_get_contents($file_dir);
$questions = json_decode($questions, true);

if (empty($questions) || $questions === NULL) {
    header('Content-Type: text/html; charset=UTF-8;');
    echo "Невозможно получить вопросы. Вы перейдете к списку тестов.";
    echo "<h2>Нажмите <a href='list.php'>сюда</a>, чтобы перейти к списку тестов.</h2>";
    die;
}
header('Content-Type: text/html; charset=UTF-8;');

?>




<html>

<style>


    form {
        width: 50%;
        margin: 0 auto;
    }

    fieldset {
        margin: 10px;
    }


    label {
        margin-right: 20px;
    }

    table {
        margin: 0 auto;
    }

    td {
        padding: 5px;
    }

    .wrong {
        color: red;
    }

    .correct {
        color: green;
    }

    .missed {
        color: grey;
    }

    h4 {
        text-align: center;
    }

</style>
<body>



<form action="" method="POST">
    <?

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_POST['send'] !== NULL) {
            $answer_dir = "tests/answers/".$_GET["test_number"].".json";
            $data_answers = file_get_contents($answer_dir);
            $data_answers = json_decode($data_answers, true);

            if (empty($data_answers)) {
                echo "Невозможно получить ответы";
                die;
            }



            $correct = [];
            $answers = [];
            $result = [];

/*echo "THIS IS QUESTIONS";
echo "<pre>";
var_dump($questions);
echo "<pre><hr>";*/

            $j = 0;
            $correct_count = count($questions);
            while ($j < $correct_count) {
                $correct[$j] = $questions[$j]['correct'];
                ++$j;

            }

            $question_count = count($questions);
            $k = 0;
            while ($k<$question_count) {
                ++$k;
                $result["answer".$k] = "Ответ пропущен";
            }


            foreach ($_POST as $test => $answer) {
                $answers[$test] = $answer;
            }

            $c = 0;
            foreach ($answers as $key => $answer) {
                if ($key == 'send') {
                    continue;
                };
                if ($key == 'name') {
                    $name = $answers[$key];
                    continue;
                };


                if ($answers[$key] === $correct[$c]) {
                    $result[$key] = "Верный ответ";

                }
                else {
                    $result[$key] = "Не верный ответ";
                }
                ++$c;
            }
/*            echo "THIS IS answers";
            echo "<pre>";
            var_dump($answers);
            echo "<pre><hr>";

            echo "THIS IS correct";
            echo "<pre>";
            var_dump($correct);
            echo "<pre><hr>";

            echo "THIS IS Result";
            echo "<pre>";
            var_dump($result);
            echo "<pre><hr>";*/


            echo <<<PHP
<table><tr><th>Вопрос #</th><th>Результат</th></tr>
PHP;

            $i = 0;
            $w = 0;
            $r = 0;
            $m = 0;
            foreach ($result as $key => $value) {
                if ($value === "Не верный ответ") {
                    $class = " class=\"wrong\"";
                    ++$w;
                }
                elseif ($value === "Верный ответ") {
                    $class = " class=\"correct\"";
                    ++$r;
                }
                elseif ($value === "Ответ пропущен") {
                    $class = " class=\"missed\"";
                    ++$m;

                }
                ++$i;
                echo "<tr".$class.">";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $value . "</td>";
                echo "</tr>";
            }


            $totalq = ($w+$r+$m)*0.8;
            if ($totalq > $r) {
                $text_greeting = "сожалеем...";
                $text_result = "Тест завален...";
            }
            elseif ($totalq == $r) {
                $text_greeting = "фух...";
                $text_result = "Вы прошлив тютелька в тютелтку.";
            }
            elseif ($r === ($w+$r+$m)) {
                $text_greeting = "ВАУ!";
                $text_result = "Чистая, совершенная пятерочка!";
            }
            elseif ($totalq < $r) {
                $text_greeting = "подздравляем!" ;
                $text_result = "Тест пройден!";
            }

$imgSrc = "functions.php";
            $functionsphp = file_get_contents($imgSrc);
            echo $functionsphp;
            var_dump($functionsphp);

            echo "</table>";
            echo('<img src="'.$imgSrc.'"/ alt="result">');

        }
    }
    else {
        echo <<<PHP
<input type="text" name="name" value="" placeholder="Введите имя">
PHP;

        $i = 0;
        //print answers
        foreach ($questions as $array => $data) {
            ++$i;
            $question = 'question' . "$i";
            echo "<fieldset>";
            echo "<legend>".$i.") ".$data[$question]."</legend>\r\n";
            foreach ($data as $key => $value) {
                foreach ($value as $version => $text) {
                    echo "<label>";
                    echo "<input type=\"radio\" name=\"$key\" value=\"$version\">" . $text . "";
                    echo "</label>";
                }
            }
            $_POST['questions_count'] = $i;
            echo "</fieldset>";
        }

        echo <<<PHP
<input type="submit" name="send" value="Отправить">
PHP;
    }
    ?>

</form>
</body>
</html>
