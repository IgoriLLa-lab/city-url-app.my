#### Задача

Создание модуля мультирегиональности на подпапках и демонстрация его работы. Работа должна представлять из себя готовый проект, на главной странице которого будет список городов (на выбор исполнителя). И каждый должен иметь свою ссылку. Например: Казань – site.com/kazan; Москва – site.com/msk и так далее.
При клике на город должна открываться ссылка. Появляться тот же список городов, но выбранный город должен быть выделен жирным (либо подчеркнут – самое главное чтобы было понятно в каком городе мы находимся сейчас).
При этом при переходе на основной домен, если мы уже выбрали город – нас должно редиректить на подпапку с городом.
К примеру: выбрали город Москва, при переходе на основной домен site.com, должен происходить 301-ый редирект site.com/msk.
Также если мы перешли на подпапку другого города сразу из адресной строки – город должен автоматически запоминаться. Например, если мы сразу в адресной строке вбили site.com/kazan – город Казань сразу запоминается, не имеет значения, был ли у нас изначально другой город сохранен.


## Используемые технологии (Tech):
- [PHP 8.1]
- [MySQL 8.0]
- [OpenServer 5.4.2] - локально

## Разворачивание проекта:

- клонируем проект из github: git clone https://github.com/IgoriLLa-lab/city-url-app.my.git;

- настраиваем файл .env для подключения к базе данных;

- устанавливаем зависимости проекта: composer install, npm install

- выполняем миграции и заполняем таблицы фейковыми данными



