<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
    <title>Рогачева Ирина</title>
    <link  href="css/style.css" rel="stylesheet">
    <script src="js/showSender.js" defer></script>
</head>
<body>
<div class="form_title">
    <hr class="line fedbacks_left_line">
    <h2 class="write_me">ЧИТАЕМ СООБЩЕНИЯ</h2>
    <hr class="line">
</div>
<div class="clear"></div>
<form method="POST" class="write_me_form" id="form">
    <label for="email" class="form_text">Введите email человека, который написал вам</label>
    <input type="email" id="email" name="email" class="email_field_fedbacks field name_field input_text all_fields"/>
    <input type="submit" value="Найти" class="send">
    <p class="error_message" id="error_message">Такой человек не отправлял вам письмо</p>
</form>
    <div class="flex">
        <div>
            <p class="form_text feegback_titles">Имя</p>
            <p class="form_text feegback_titles">Пол</p>
            <p class="form_text feegback_titles">Страна</p>
            <p class="form_text feegback_titles">Сообщение</p>
        </div>
        <div>
            <p class="field feegback_fields" id="name"></p>
            <p class="field feegback_fields" id="gender"></p>
            <p class="field feegback_fields" id="country"></p>
            <p class="field feegback_fields" id="message"></p>
        </div>
    </div>
</body>
</html>