<?php

function requestAddressPage(): void
{
    renderTemplate('feedbacks.tpl.php');
}

function feedbacksListPage() {
    $email = getPostParameter('email');
    $data['email'] = $email;

    $file = ("../src/data/" . mb_strtolower($email) . ".txt");
    if (!(file_exists($file))) {
        $data['error_msg'] = 'Такой человек не отправлял вам сообщение';
        renderTemplate('feedbacks.tpl.php', $data);
        return;
    }

        $content = file_get_contents("$file");
        $data['answers'] = explode("|", $content);
        $data['titles'] = ['Имя','Пол', 'Страна', 'Сообщение'];

    renderTemplate('feedbacks.tpl.php', $data);
}
