<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> | IT-школа нового поколения
    </title>

    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect x='20' y='20' width='60' height='60' rx='12' fill='%23e11d48'/><path d='M35 50L45 60L65 40' stroke='white' stroke-width='8' stroke-linecap='round' stroke-linejoin='round' fill='none'/></svg>"
        type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#courses" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav" id="main-nav">
                <ul class="nav__list">
                    <li><a href="./#courses" class="nav__link">Курсы</a></li>
                    <li><a href="./#benefits" class="nav__link">Преимущества</a></li>
                    <li><a href="./#method" class="nav__link">Обучение</a></li>
                    <li><a href="./#career" class="nav__link">Карьера</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--primary">Связаться</a>
                <button class="burger" aria-label="Menu" id="burger-menu">
                    <span></span>
                </button>
            </div>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-down">Политика использования файлов cookie</h1>

            <p data-aos="fade-up">
                Добро пожаловать в IT-школу <strong><?= $domainTitle ?></strong>! Чтобы сделать ваше обучение 
                максимально эффективным, обеспечить корректную работу интерактивных модулей и
                анализировать активность пользователей для улучшения курсов, мы используем файлы cookie. 
                Настоящая политика объясняет, как мы применяем эти технологии в рамках нашей цифровой инфраструктуры.
            </p>

            <h2 data-aos="fade-up">Что такое файлы cookie?</h2>
            <p data-aos="fade-up">
                Файл cookie — это небольшой текстовый файл, который сохраняется на вашем устройстве при посещении сайта. 
                Это позволяет платформе <strong><?= $domainTitle ?></strong> "запоминать" ваши предпочтения 
                (выбранный язык, прогресс в обучении, настройки региона Великобритания и другие параметры), 
                чтобы вам не приходилось вводить их повторно при каждом переходе между страницами.
            </p>

            <h2 data-aos="fade-up">Какие типы файлов cookie мы используем?</h2>
            <p data-aos="fade-up">
                Мы классифицируем файлы cookie на сайте <strong><?= $fullDomain ?></strong> по следующим категориям:
            </p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Строго необходимые файлы cookie:</strong> Критически важны для работы сайта. Они обеспечивают 
                    безопасную авторизацию и навигацию по учебным разделам <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    <strong>Аналитические файлы cookie:</strong> Собирают анонимную информацию о том, как студенты 
                    взаимодействуют с контентом, помогая нам оптимизировать программу обучения.
                </li>
                <li>
                    <strong>Функциональные файлы cookie:</strong> Позволяют сайту предлагать персонализированный опыт, 
                    запоминая ваши настройки в личном кабинете или на страницах курсов.
                </li>
                <li>
                    <strong>Маркетинговые файлы cookie:</strong> Используются для показа релевантных предложений 
                    о новых программах и карьерных возможностях в IT.
                </li>
            </ul>

            <h2 data-aos="fade-up">Зачем мы их используем?</h2>
            <p data-aos="fade-up">Основные цели на платформе <strong><?= $domainTitle ?></strong>:</p>
            <ul data-aos="fade-up">
                <li>Обеспечение быстрой загрузки интерактивных элементов (анимаций AOS и Anime.js).</li>
                <li>Анализ эффективности методологии обучения для студентов в Англии и Европе.</li>
                <li>Персонализация карьерных рекомендаций и предложений по пассивному доходу.</li>
                <li>Защита ваших данных и предотвращение мошенничества.</li>
            </ul>

            <h2 data-aos="fade-up">Управление файлами cookie</h2>
            <p data-aos="fade-up">
                Вы имеете полный контроль над данными. Вы можете в любой момент изменить настройки в своем браузере. 
                Однако помните: отключение некоторых типов cookie может повлиять на отображение анимаций и 
                доступ к некоторым функциям образовательной платформы.
            </p>

            <h2 data-aos="fade-up">Файлы cookie третьих сторон</h2>
            <p data-aos="fade-up">
                Для визуализации данных и аналитики мы используем проверенные внешние инструменты, такие как 
                Google Fonts, FontAwesome и скрипты аналитики. Мы рекомендуем ознакомиться с их политиками 
                конфиденциальности для полного понимания обработки данных.
            </p>

            <h2 data-aos="fade-up">Контактная информация</h2>
            <p data-aos="fade-up">
                Если у вас возникли вопросы касательно использования файлов cookie в <strong><?= $domainTitle ?></strong>, 
                свяжитесь с нашей службой поддержки:
                <br><br>
                Email: <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+442049271757">+44 204 927 1757</a><br>
                Адрес: 22-24 Ely Pl, London EC1N 6TE, United Kingdom
            </p>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col footer__col--info">
                <a href="./#courses" class="logo logo--footer">
                    <span class="logo__icon"></span>
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__description">
                    Технологии, которые работают на вас. Мы готовим специалистов, способных переосмыслить подход к
                    развитию цифрового мира.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#courses">Курсы</a></li>
                    <li><a href="./#benefits">Преимущества</a></li>
                    <li><a href="./#method">Методология</a></li>
                    <li><a href="./#career">Карьера</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookies Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Personal Data</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact-list">
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:+442049271757">+44 204 927 1757</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@
                            <?= $fullDomain ?>
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>22-24 Ely Pl, London EC1N 6TE, United Kingdom</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom container">
            <p>&copy;
                2026
                <?= $domainTitle ?>. Программа пассивного дохода и инновации.
            </p>
        </div>
    </footer>
        <div class="mobile-menu" id="mobile-menu">
            <div class="mobile-menu__content">
                <ul class="mobile-menu__list">
                    <li><a href="./#courses">Курсы</a></li>
                    <li><a href="./#benefits">Преимущества</a></li>
                    <li><a href="./#method">Обучение</a></li>
                    <li><a href="./#career">Карьера</a></li>
                    <li><a href="./#contact" class="btn btn--primary">Начать сейчас</a></li>
                </ul>
            </div>
        </div>
        
        <div class="cookie-popup" id="cookie-popup">
            <div class="cookie-popup__content">
                <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                        политике</a>.</p>
                <button class="btn btn--primary btn--sm" id="accept-cookies">Принять</button>
            </div>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
</body>

</html>