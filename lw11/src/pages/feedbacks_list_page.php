<?php

function requestAddressPage(): void
{
    renderTemplate('feedbacks.tpl.php');
}

function getFeedback(string $email): array
{
    $connection = database();
    $email = $connection -> quote($email);
    $checking = "SELECT EXISTS (SELECT * FROM senders WHERE email = ${email}) AS found";
    $result = $connection -> query($checking)->fetch();
    if ($result['found'])
    {
        $sql = "SELECT name, email, country, gender, message FROM senders WHERE email = ${email}";
        $stmt = $connection -> query($sql);
        return $stmt -> fetch(PDO::FETCH_ASSOC);
    }
    return[];
}

function feedbacksListPage()
{
    $email = getPostParameter('email');

    if (!(getFeedback($email)))
    {
        $feedback['error_msg'] = 'Такой человек не писал вам сообщение';
    }
    else
    {
        $feedback['answers'] = getFeedback($email);
    }

    renderTemplate('feedbacks.tpl.php', $feedback);
}
