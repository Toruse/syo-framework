# Syo

---

**Syo** - фреймворк с открытым кодом, предназначенный для разработки веб приложений на основе архитектурной модели MVC.

## Цель разработки:

Разрабатывался в учебных целях, чтобы понять основы архитектуры и принципы работы фреймворков. Более подробней ознакомиться с работой PHP, ООП и шаблонным (паттерным) программированием. 

## Разработанные компоненты

* Роутинг
* Контроллеры
* Базовый шаблонизатор
* Registry *(реестр глобальных переменных)*
* Классы для работы с cookie и session
* Валидаторы и Фильтры
* Генератор HTML тегов и форм
* Генератор token-ов
* Cache
* Логирование в файл, базу данных и на e-mail
* Помощник для работы со строками
* Widget
* Перехваты *(Hooks)*
* Mailer на основе библиотеки PHPMailer
* ORM *(объектно-реляционное отображение)*
* Конструктор запросов
* Компонент для работы с Nested Sets деревьями в базе данных
* Хранение констант в базе данных
* Генератор HTML-меню на основе Nested Sets деревьев
* EAV *(Сущность-Артибут-Значени)* для базы данных
* Базовая CAPTCHA
* Аутентификация
* RBAC *(Role Based Access Control)* - Система доступа на основе ролей
* Плагины 

## История

Разрабатывался с 2013 по 2015 год.

## Установка

Скопировать репозиторий.

## Использование

Вы можете протестировать работу запустив встроенный php-сервер из папки public:

`$ php -S localhost:8000`

После чего перейдите по ссылке [http://localhost:8000](http://localhost:8000).
