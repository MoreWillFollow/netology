<?php
session_start();

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

    body * {
    }
    form {
        text-align: left;
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

    h1, h4 {
        text-align: center;
    }

    .center_txt {
        display: block;
        text-align: center;
        margin: 40px;
    }

</style>
<body>



<form action="" method="POST">
    <?


    if (isset($_POST["name"])) {
        $text_name = $_POST["name"];
        $_SESSION['text_name'] = $text_name;
        echo "<img src=\"certificate.php\" alt=\"certificate\">";
    }


    else if ($_SERVER['REQUEST_METHOD'] === 'POST') {

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

            $j = 0;
            $correct_count = count($questions);
            while ($j < $correct_count) {
                $correct["answer".(1+$j)] = $questions[$j]['correct'];
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

            $i = 0;
            $w = 0;
            $r = 0;

            echo "</pre>";
            foreach ($answers as $key => $answer) {
                if ($key == 'send') {
                    continue;
                };
                if ($key == 'name') {
                    $name = $answers[$key];
                    continue;
                };


                if ($answers[$key] === $correct[$key]) {
                    $result[$key] = "Верный ответ";
                    ++$r;
                }
                else {
                    $result[$key] = "Не верный ответ";
                    ++$w;
                }
            }


            $m = $k - ($r+$w);

            $totalq = ($w+$r+$m)*0.8;
            if ($totalq > $r) {
                $text_greeting = "сожалеем...";
                $text_result = "Тест завален...";
            }
            elseif ($totalq == $r) {
                $text_greeting = "прошел тест.";
                $text_result = "С минимальным результатом.";
            }
            elseif ($r === ($w+$r+$m)) {
                $text_greeting = " прошел тест.";
                $text_result = "С отличием.";
            }
            elseif ($totalq < $r) {
                $text_greeting = " прошел тест." ;
                $text_result = "Тест пройден!";
            }

            echo "<h1>".$text_result."</h1>";
            $_SESSION['text_greeting'] = $text_greeting;
            $_SESSION['text_result'] = $text_result;
            if ($totalq <= $r && !($totalq === NULL || $r === NULL)) {
                if (!isset($_POST["name"])) {
                    echo <<<HTML
                    <label class="center_txt">Введите имя, чтобы получить сертификат.<br>
<input type="text" name="name" value="" placeholder="Введите имя">
<input type="submit" value="Отправить">
</label>
HTML;
                }
            }
            echo <<<HTML
<table><tr><th>Вопрос #</th><th>Результат</th></tr>
HTML;

            $i = 0;
             foreach ($result as $key => $value) {
                if ($value === "Не верный ответ") {
                    $class = " class=\"wrong\"";
                }
                elseif ($value === "Верный ответ") {
                    $class = " class=\"correct\"";
                }
                elseif ($value === "Ответ пропущен") {
                    $class = " class=\"missed\"";
                }
                ++$i;
                echo "<tr".$class.">";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $value . "</td>";
                echo "</tr>";
            }

            echo "</table>";

        }

    }
    else {
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
