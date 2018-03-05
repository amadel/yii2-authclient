Настройка HTTP клиента
======================

Это расширение использует [yii2-httpclient](https://github.com/yiisoft/yii2-httpclient) для отправления HTTP запросов.
Вам может понадобиться исзменить конфигурацию по умолчанию для используемого HTTP клиента, например, в случае если вам
нужно использовать особый траспорт для запросов.

Каждый Auth клиент имеет свойство `httpClient`, которое может быть использовано для задания HTTP клиента для Auth клиента.
Например:

```php
use yii\custom\authclient\Google;

$authClient = new Google([
    'httpClient' => [
        'transport' => 'yii\httpclient\CurlTransport',
    ],
]);
```

В случае, если вы используете копонент [[\yii\custom\authclient\Collection]], вы можете воспользоваться его свойством `httpClient`
для задания конфигурации HTTP клиента для всех внутренних Auth клиентов.
Пример конфигурации приложения:

```php
return [
    'components' => [
        'authClientCollection' => [
            'class' => 'yii\custom\authclient\Collection',
            // все Auth клиенты будут использовать эту конфигурацию для HTTP клиента:
            'httpClient' => [
                'transport' => 'yii\httpclient\CurlTransport',
            ],
            'clients' => [
                'google' => [
                    'class' => 'yii\custom\authclient\clients\Google',
                    'clientId' => 'google_client_id',
                    'clientSecret' => 'google_client_secret',
                ],
                'facebook' => [
                    'class' => 'yii\custom\authclient\clients\Facebook',
                    'clientId' => 'facebook_client_id',
                    'clientSecret' => 'facebook_client_secret',
                ],
                // etc.
            ],
        ]
        //...
    ],
    // ...
];
```
