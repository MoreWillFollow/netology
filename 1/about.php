<?php
error_reporting(E_ALL);
$name = "Анар Набиев";
$title = "Маркетолог-мечтатель";
$gender = "Мужчина";
$age = "29 лет";
$birthday ="11 января 1988";
$phone = "+99 455 653 47 40";
$email = "AnarNebiyev@gmail.com";
$facebook_profile = "https://www.facebook.com/AnarNebiyev";
$city = "Баку";
$citizenship = "Азербайджан";

$image=rand(1,2);
if ($image==1) {
    $image_link = "me.jpg";
}
else {
    $image_link = "sparky.jpg";
}

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание №1: Мое резюме</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<hr>
<img src="<?=$image_link?>" alt="Моя фотография" height="250">

<h1><?=$name?></h1>
<h2><?=$title?></h2>

<p><?=$gender?>, <?=$age?>, родился <?=$birthday?></p>

<table>
    <tr>
        <td width="220px"><b>Телефон:</b></td>
        <td><a href="tel:<?=$phone?>"><?=$phone?></a></td>
    </tr>
    <tr>
        <td width="220"><b>Электронная почта:</b></td>
        <td><a href="mailto:<?=$email?>"><?=$email?></a></td>
    </tr>
    <tr>
        <td width="220px"><b>Ссылка на Facebook:</b></td>
        <td><a href="<?=$facebook_profile?>" target="_blank"><?=$facebook_profile?></a></td>
    </tr>
    <tr>
        <td width="220px"><b>Проживает:</b></td>
        <td><?=$city?></td>
    </tr>
    <tr>
        <td width="200px"><b>Гражданство:</b></td>
        <td><?=$citizenship?></td>
    </tr>
</table>

<p><i>Готов к переезду, готов к командировкам</i></p>

<h3>Желаемая должность</h3>
<hr>
<h2>Маркетолог, Digital - специалист</h2>
<p>Маркетинг, реклама, PR</p>
<ul>
    <li>Управление маркетингом</li>
    <li>PR, Маркетинговые коммуникации</li>
    <li>Бренд-менеджмент</li>
    <li>Digital, SMM</li>
</ul>

<p>Занятость: полная занятость, частичная занятость, проектная работа</p>
<p>График работы: полный день, гибкий график, удаленная работа</p>
<p><i>Желательное время в пути до работы: не имеет значения</i></p>



<h3>Опыт работы —7 лет 10 месяцев</h3>
<hr>
<table>
    <tr>
        <td width="200px" valign="top">
            <p>Декабрь 2014 — Январь 2016</p>
            <p>1 год 2 месяца</p>
        </td>
        <td >
            <h4>Universal McCann Azerbaijan</h4>
            <a href="www.umww.com">www.umww.com</a>
            <p><b>SMM Team Manager</b></p>
            <ul>
                <li>Создание SMM стратегии, контента: Coca-Cola, Sprite, Fanta, Burn, Elidor, Clear, Access Bank, AXE и тд.;</li>
                <li>Анализ SMM активности конкурентных брендов;</li>
                <li>Подготовка и организация проведение SMM активностей;</li>
                <li>Управление и контроль работы SMM команды, распределение задач, приоритизация, контроль за соблюдением дедлайнов, коммуникации с клиентами;</li>
                <li> Участие и организация брейнштормингов с целью создания креативных концепций для Digital предложений.</li>
            </ul>
            <p><b><i>Подробнее по брендам:</i></b></p>
            <p><b>MasterCard (Facebook)</b></p>
            <ul>
                <li>Разработка стратегии в социальных сетях, с учетом особенностей локального рынка (не является адаптацией глобальной стратегии продвижения в соц. сетях MasterCard);</li>
                <li>Запуск в работу утвежденной стратегии страницы в Facebook;</li>
                <li>Создание контент плана согласно стратегии;</li>
                <li>SMM поддержка «Priceless Preks»;</li>
                <li>SMM поддержка стимулирующей лотереи «Priceless Preks» - поездка в Нью Йорк. Организация онлайн SMM трансляции победителей с Нью Йорка.
                    <ul>
                        <li>Выиграла молодая пара, которая действительно была счастлива поехать в Нью Йорк (Я бы тоже был счастлив).</li>
                        <li>Они честно высылали фотки с поездки каждый вечер, по WhatsApp. Хотя обычно победители забивают на просьбу агенства.</li>
                    </ul>
                </li>
                <li>Разработка, реализация конкурса для MasterCard UEFA 2015 SuperCup - конкурс с участием детей. Более 120 заявок, 90 участников (критерии по росту и возрасту);
                    <ul>
                        <li>Очень сложная кампания была. Нужны были не просто дети, а дети в определенной возрастной категории и с определенным ростом. Представляете как сложно найти детей, которым скажем 13 лет и рост 130-135 см?</li>
                        <li>Были задействованы разные каналы продвижения. В том числе и статьи в тематических локальных ресурсах. Но, самым эффективным оказался Facebook.</li>
                    </ul>
                </li>
            </ul>
            <p><b>Coca-Cola (Facebook, Instagram)</b></p>
            <p><b>Coca-Cola XMAS 2015</b></p>
            <ul>
                <li>Адаптация глобальной стратегии Coca-Cola XMAS 2015;</li>
                <li>Создание контент плана;</li>
                <li>Анализ текущих результатов и внесение соответствующих корректив.</li>
            </ul>
            <p><b>Coca-Cola Novruz</b></p>
            <ul>
                <li>Разработка стратегии продвижения в социальных сетях;</li>
                <li>Создание контент плана.</li>
            </ul>
            <p><b>Coca-Cola Baku 2015</b></p>
            <ul>
                <li>Разработка стратегии на основании общей стратегии продвижения Coca-Cola Baku 2015 в социальных сетях;</li>
                <li>Создание контента;</li>
                <li>Коммуникации с контент-комнадой (съемки с мест проведения соревнований и тд.);</li>
                <li>Работа с негативом (огромное количество негатива, связанное с проведением игр в Азербайджане, как в случае с Олимпиадой в Сочи). К середине кампании негатив удалось свести к обычному минимуму (Coca-Cola постоянно получает негативные комментарии - «Coca-Cola спонсирует терроризм, спонсирует Израиль, убивает детей, безумно вредна для детей, для здоровья и тд и тп.»).</li>
            </ul>
            <p><b>Coke and Meal</b></p>
            <ul>
                <li>Разработка стратегии продвижения в социальных сетях;</li>
                <li>Создание контент плана, на основе предложенной идеи - «Так как ярче всего, мозг запоминает запахи, мы продвигаем Coca-Cola привязывая бренд к запоминающимся запахам еды»;</li>
                <li>Работа с негативом.</li>
            </ul>
            <p><b>Coca-Cola Contour 100</b></p>
            <ul>
                <li>Разработка “core idea” – “Be my friend for next 100 year”;</li>
                <li>Разработка и проведение активностей;</li>
                <li>Создание контент плана, основываясь на “core idea”;</li>
                <li>SMM поддержка лотереи «Найди под крышкой».</li>
            </ul>
            <p><b>Fuse (Facebook)</b></p>
            <ul>
                <li>Разработка стратегии в социальных сетях согласно запросу клиента;</li>
                <li>Создание интересного сообщества, с ценным, уникальным контентом;</li>
                <li>Запуск официальной страницы Fuse Azerbaijan;</li>
                <li>Создание контент плана (первый месяц) и подготовка и обучение специалиста для дальнейшей работы;</li>
                <li>Модерирование, создание контента и ведение страницы.</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td width="200px" valign="top">
            <p>Май 2014 — Июль 2015</p>
            <p>1 год 3 месяца</p>
        </td>
        <td>
            <h3>Jolla Kazakhstan</h3>
            <p>Алматы, <a href="www.jolla.com.kz">www.jolla.com.kz</a></p>
            <p>Social Media Specialist</p>
            <ul>
                <li>Разработка стратегии продвижения бренда в социальных сетях;
                    <ul>
                        <li>Бренд вышел на рынок и оказался в центре внимания в социальных сетях.</li>
                        <li>Страница набрала 2000 подписчиков, из которых за полтора года без рекламы отписалось всего 5%.
                            <ol>
                                <li>То есть, удалось собрать целевую аудиторию</li>
                                <li>Удалось создать у пользователья привязанность к бренду</li>
                                <li>Удалось остаться ценной площадкой для ЦА</li>
                            </ol>
                        </li>
                        <li>Удачное позиционирование привлекло внимание специализированных СМИ.</li>
                    </ul>
                </li>
                <li>Запуск и поддержка рекламной компании групп и страниц в социальных сетьях(VKontakte, Facebook, Instagram) с нуля; Проведение конкурсов, подготовка контента;</li>
                <li>Подготовка и обучение сотрудников для самостоятельной работы в направлении продвижение бренда в социальных сетях.</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td width="200px" valign="top">
            <p>Май 2013 — Декабрь 2014</p>
            <p>1 год 8 месяцев</p>
        </td>
        <td>
            <h3>Apple Premium Reseller "Alma Store"</h3>
            <p>Баку, <a href="www.almastore.az">www.almastore.az</a></p>
            <p>Менеджер по маркетингу</p>
            <ul>
                <li>Создание стратегии продвижения бренда на локальном рынке;</li>
                <li>Планирование и организация рекламных активностей совместно с Apple;</li>
                <li>Формирование и подготовка отчетности по системе Apple;</li>
                <li>Проведение PR компаний и работа со СМИ;</li>
                <li>Организация и контроль торговых акций для увелечение продаж или минимизации остатков;</li>
                <li>Анализ деятельности конкурентов;</li>
                <li>Разработка стратегии продвижения бренда в социальных сетях;</li>
                <li>Создание интересного сообщества, с ценным, уникальным контентом;</li>
                <li>Модерирование, создание контента и ведение страницы.</li>
            </ul>
        </td>
    </tr>
</table>
<hr>
<h3 align="center">Спасибо за внимание!</h3>
</body>
</html>
