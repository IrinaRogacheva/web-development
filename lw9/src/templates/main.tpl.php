<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
    <title>Рогачева Ирина</title>
    <script src="js/form.js" defer></script>
    <link  href="css/style.css" rel="stylesheet">
</head>
<body>
<header class="menu">
    <a class="menu about_me_button">Обо мне</a>
    <a class="menu hobby_button">Мое хобби</a>
    <a class="menu video_button">Любимые фильмы</a>
</header>
<div class="main_background"></div>
<main class="main_block">
    <div class="left_column">
        <img class="selfie" src="images/selfie.jpg" alt="Мое фото"/>
        <div>
            <div class="authors_container">
                <h3 class="lists_title">Любимые писатели:</h3>
                <ul class="list authors_list">
                    <li>Владимир Маяковский</li>
                    <li>Александр Пушкин</li>
                    <li>Стивен Кинг </li>
                    <li>Эдгар По</li>
                </ul>
            </div>
            <div class="films_container">
                <h3 class="lists_title">Любимые фильмы:</h3>
                <ol class="list films_list">
                    <li class="first_string">1+1</li>
                    <li>Любовь и голуби</li>
                    <li>Звездная пыль</li>
                    <li>Хранители снов</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="quote_block">
        <p class="quote">Грамм собственного опыта стоит дороже тонны чужих наставлений.</p>
        <p class="quote_author">Махатма Ганди</p>
    </div>
    <div class="right_column">
        <div>
            <h1 class="about_me_title">Ирина Рогачева</h1>
            <img class="rectangle" src="images/rectangle.png" alt="Прямоугольник"/>
            <div class="about_me">
                <p>
                    Меня зовут Рогачева Ирина. Окончила Корляковскую школу Санчурского района Кировской области.
                    Мне очень понравилось программировать на уроках информатики.
                    Программируя, я сразу же загоралась желанием решить данную задачу. Поэтому я пошла на ПС.
                </p>
            </div>
            <div>
                <h2 class="hobby_and_films_title hobby_title">Мое хобби</h2>
                <p class="hobby">Я увлекаюсь рукоделием. Особенно люблю делать поделки в разных техниках, пробовать что-то новое.</p>
            </div>
            <a class="link" href="https://vk.com/id378187288">Напиши мне</a>
            <hr class="link_line">
        </div>
    </div>
</main>
<div class="films_description_block">
    <h2 class="hobby_and_films_title films_title">Любимые фильмы</h2>
    <div class="one_plus_one">
        <img class="image_film" src="/images/1+1.jpg" alt="1+1"/>
        <h4 class="all_films_titles">1+1</h4>
        <p class="description">
            Пострадав в результате несчастного случая, богатый аристократ Филипп нанимает в помощники человека, который менее всего
            подходит для этой работы, – молодого жителя предместья Дрисса, только что освободившегося из тюрьмы. Несмотря на то, что
            Филипп прикован к инвалидному креслу, Дриссу удается привнести в размеренную жизнь аристократа дух приключений.
        </p>
    </div>
    <div class="love_and_pigeons">
        <img class="image_film" src="images/love_and_pigeons.jpg" alt="Любовь и голуби"/>
        <h4 class="all_films_titles">Любовь и голуби</h4>
        <p class="description">
            Ликвидируя неисправность лебедки, Василий Кузякин получил травму и путевку на юг. Встретил роковую женщину Раису Захаровну
            и... вернулся Вася с курорта не к себе в деревню, а в дом Раисы Захаровны. Началась для него новая жизнь, в которой было
            много непонятного и интересного, но не было дома, где остались Надя, дети и голуби...
        </p>
    </div>
    <div class="stardust">
        <img class="image_film" src="images/stardust.jpg" alt="Звездная пыль"/>
        <h4 class="all_films_titles">Звездная пыль</h4>
        <p class="description">
            Маленькая английская деревенька отделена древней стеной от сверхъестественной параллельной вселенной, где царят магия и
            волшебство. Молодой Тристан Торн опрометчиво обещает самой красивой девушке деревни, что принесёт ей слетевшую с неба
            звезду, упавшую по ту сторону стены.
        </p>
    </div>
    <div class="rise_of_the_guardians">
        <img class="image_film" src="images/rise_of_the_guardians.jpg" alt="Хранители снов"/>
        <h4 class="all_films_titles">Хранители снов</h4>
        <p class="description">
            Когда злой дух Кромешник посягает на самое дорогое – детские мечты, Северянин, Ледяной Джек, Кролик, Зубная Фея и Песочный
            Человек впервые объединяются, чтобы создать команду Хранителей снов...
        </p>
    </div>
    <button class="all_films_button">Все фильмы</button>
</div>
<div>
    <hr class="line left_line">
    <h2 class="write_me">НАПИШИ МНЕ</h2>
    <hr class="line">
    <div class="clear"></div>
    <form method="POST" id="form" class="write_me_form">
        <label for="name" class="form_text form_text_required">Ваше имя</label>
        <input type="text" id="name" name="name" value="<?php echo $args['name'] ?? ''; ?>"
               class="field name_field input_text all_fields isValidate"/>
        <label for="email" class="form_text form_text_required">Ваш email</label>
        <input type="text" id="email" name="email" value="<?php echo $args['email'] ?? ''; ?>"
               class="field email_field input_text all_fields isValidate"/>
        <label for="country" class="form_text">Откуда вы?</label>
        <select name="country" id="country" class="country_field all_fields">
            <?php if ($args['country'] === "uk"): ?>
                <option value="rus" class="input_text">Россия</option>
                <option value="uk" selected class="input_text">Украина</option>
                <option value="bel" class="input_text">Беларусь</option>
            <?php elseif ($args['country'] === "bel"): ?>
                <option value="rus" class="input_text">Россия</option>
                <option value="uk" class="input_text">Украина</option>
                <option value="bel" selected class="input_text">Беларусь</option>
            <?php else: ?>
                <option value="rus" selected class="input_text">Россия</option>
                <option value="uk" class="input_text">Украина</option>
                <option value="bel" class="input_text">Беларусь</option>
            <?php endif; ?>
        </select>
        <p class="form_text gender_margin">Ваш пол</p>
        <?php if (($args['gender'] === "male") || !(isset($args['gender']))): ?>
            <input type="radio" id="male" class="gender_radio" name="gender" value="male" checked>
            <label for="male" class="gender">Мужской</label>
            <input type="radio" id="female" class="gender_radio gender_radio_female" name="gender" value="female">
            <label for="female" class="gender">Женский</label>
        <?php else: ?>
            <input type="radio" id="male" class="gender_radio" name="gender" value="male">
            <label for="male" class="gender">Мужской</label>
            <input type="radio" id="female" class="gender_radio gender_radio_female" name="gender" value="female" checked>
            <label for="female" class="gender">Женский</label>
        <?php endif; ?>
        <label for="message" class="form_text message_margin form_text_required">Ваше сообщение</label>
        <textarea name="message" id="message"  class="message input_text all_fields"><?php echo $args['message'] ?? ''; ?></textarea>
        <input type="submit" value="Отправить" class="send">
        <?php if (isset($args['success'])): ?>
            <p class="success"><?php echo $args['success']; ?></p>
        <?php endif; ?>
        <div id="success">Ваше сообщение успешно отправлено</div>
        <?php if (isset($args['name_error_msg'])): ?>
            <p class="error_messages"><?php echo $args['name_error_msg']; ?></p>
        <?php endif; ?>
        <?php if (isset($args['email_error_msg'])): ?>
            <p class="error_messages"><?php echo $args['email_error_msg']; ?></p>
        <?php endif; ?>
        <?php if (isset($args['message_error_msg'])): ?>
            <p class="error_messages"><?php echo $args['message_error_msg']; ?></p>
        <?php endif; ?>
    </form>

</div>
<footer class="volgatech">© 2006-2018 Поволжский государственный технологический университет, ФГБОУ ВО <q>ПГТУ</q></footer>
</body>
</html>
