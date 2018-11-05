<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Языковые ресурсы аутентификации
    |--------------------------------------------------------------------------
    |
    | Следующие языковые ресурсы используются во время аутентификации для
    | различных сообщений которые мы должны вывести пользователю на экран.
    | Вы можете свободно изменять эти языковые ресурсы в соответствии
    | с требованиями вашего приложения.
    |
    */

    'failed'        => 'Имя пользователя и пароль не совпадают.',
    'general_error' => 'У вас нет прав для просмотра этой страницы.',
    'password_rules' => 'Your password must be more than 8 characters long, should contain at least 1 uppercase, 1 lowercase and 1 number.',
    'password_used' => 'You can not set a password that you have previously used.',
    'socialite'     => [
        'unacceptable'  => ':provider не приемлемый тип для входа.',
    ],
    'throttle'      => 'Слишком много попыток входа. Пожалуйста, попробуйте еще раз через :seconds секунд.',
    'unknown'       => 'Упс..., произошла неизвестная ошибка',
];