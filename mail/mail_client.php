<p>Ваша заявка на <strong>"<?= $typeNameServices['type']['name'] ?> - <?= $typeNameServices['name']['name_services'] ?>
        "</strong> успешно отправлена!</p>
<p>Номер заказа: <strong>"<?= $idOrder ?>"</strong></p>

<p>Ожидайте звонка менеджера для уточнения деталей и подтверждения заказа.</p>

<p>--------------------------</p>

<p><strong>
        <ins>Текст заявки:</ins>
    </strong></p>
<p><strong>Заголовок:</strong> <?= $post['Index']['header'] ?> <br/>
    <strong>Подробности:</strong> <?= $post['more'] ?> <br/>
    <strong>Сроки:</strong> <?= $post['Index']['dateToStartWorking'] ?>
</p>

<p>--------------------------</p>

<p>Это письмо сформировано автоматически, пожалуйста, не отвечайте на него. Если Вы не делали заявок, возможно это
    ошибка, извините за беспокойство, просто проигнорируйте данное письмо.

<p>--------------------------------------------------------------</p>
<em>С уважением, Федерация Профессиональных Строителей<br/>
    <a href="http://www.fpbuilders.ru" style="color: #0000ff;">fpbuilders.ru</a></em>
</p>