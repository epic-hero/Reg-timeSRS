Проект позволяет осуществлять операций регистрация домена, проверка доступности домена, получение полной информации о домене, с помочью
систем распределённой регистрации RegTime (RegTime Shared Registry System — RegTimeSRS). Обращения к HTTPS-шлюзу производится на следующий URL
адрес https://www.webnames.ru:81/RegTimeSRS.pl, в режиме тестового доступа (username: test, password: test). На официальной странице предоставлена
документация на русском языке с подробным описанием всех функций и хотелось бы обратить внимание на то, что кодировкой по умолчанию является
кодировке cp1251. Если вы желаете использовать utf-8, то в запрос нужно добавить флаг utf8 с значением "1".

Для создания проекта был выбран Фреймворк codeigniter 3, а для удобства отправки HTTP запросов, библиотека Guzzle.

И так в файле application/config/config.php указываем URL через который мы будем иметь доступ к нашему сайту
$config['base_url'] = 'http://codeigniter-develop/';

В соответствующем представлении мы отправляем POST запрос с данными,
а в контроллере получаем, обрабатываем и добавляем имя и пароль пользователя. После чего отправляется еще один POST запрос на страницу
https://www.webnames.ru:81/RegTimeSRS.pl, в результате к нам на страницу отправляется ответ с сервера, мы его обрабатываем $response->getBody();
и отправляем в представление и выводим конечному пользователю.
