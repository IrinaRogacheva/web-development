<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
    <title>Рогачева Ирина</title>
    <link  href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="form_title">
        <hr class="line fedbacks_left_line">
        <h2 class="write_me">ОТВЕЧАЕМ НА СООБЩЕНИЯ</h2>
        <hr class="line">
    </div>
    <div class="clear"></div>
    <form method="POST" class="write_me_form">
        <label for="email" class="form_text">Введите email человека, который написал вам</label>
        <input type="email" id="email" name="email" value="<?php echo $args['email'] ?? ''; ?>"
               class="email_field_fedbacks field name_field input_text all_fields"/>
        <input type="submit" value="Найти" class="send">
        <?php if (isset($args['error_msg'])): ?>
            <p class="error_messages"><?php echo $args['error_msg']; ?></p>
        <?php endif; ?>
    </form>
    <?php if (isset($args['answers'])): ?>
        <div class="flex">
            <div>
                <p class="form_text feegback_titles">Имя</p>
                <p class="form_text feegback_titles">Пол</p>
                <p class="form_text feegback_titles">Страна</p>
                <p class="form_text feegback_titles">Сообщение</p>
            </div>
            <div>
                <?php foreach($args['answers'] as $answer): ?>
                    <p class="field feegback_fields"><?php echo $answer; ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</body>
</html>
