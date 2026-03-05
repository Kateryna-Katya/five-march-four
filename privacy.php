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
            <h1 data-aos="fade-down">Политика конфиденциальности</h1>

            <p data-aos="fade-up">
                Политика конфиденциальности распространяется на персональные данные,
                предоставляемые студентами и клиентами <strong><?= $domainTitle ?></strong>, как для оказания 
                образовательных услуг и IT-обучения, так и для других взаимодействий в электронном
                формате, а также при участии пользователей в учебных программах, карьерных марафонах и акциях.
            </p>

            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                в действующие положения Политики. Эти изменения будут иметь приоритет над текущими
                положениями. Обратите внимание, что наши ресурсы могут содержать ссылки на сторонние инструменты (например, библиотеки анимаций или шрифтов), которые имеют свои
                собственные положения. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за содержание и соблюдение
                конфиденциальности сторонними компаниями.
            </p>

            <h2 data-aos="fade-up">Порядок сбора, хранения и защиты данных</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> собирает персональные данные исключительно с согласия
                пользователя для предоставления качественного обучения: доступа к образовательной платформе,
                участия в live-сессиях, получения фидбека от менторов и внедрения AI-инструментов в учебный процесс. Для
                предотвращения утечки данных мы используем современные протоколы шифрования и меры безопасности, соответствующие стандартам Великобритании.
            </p>

            <p data-aos="fade-up">
                Максимальный срок хранения персональных данных определяется требованиями законодательства UK или до момента официального отзыва согласия пользователем. Уничтожение или обезличивание данных осуществляется при достижении целей обучения или по запросу студента.
            </p>

            <h2 data-aos="fade-up">Категории собираемых данных:</h2>
            
            <h3 data-aos="fade-up">Техническая информация:</h3>
            <ul data-aos="fade-up">
                <li>время доступа, IP-адрес и тип браузера;</li>
                <li>источники перехода на ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>посещенные страницы и взаимодействие с интерактивными блоками (AOS, Anime.js);</li>
                <li>номер телефона (в случае обращения в службу поддержки по указанным контактам).</li>
            </ul>

            <h3 data-aos="fade-up">Персональная информация:</h3>
            <p data-aos="fade-up">Для аутентификации и персонализации обучения мы собираем:</p>
            <ul data-aos="fade-up">
                <li>имя и фамилию пользователя;</li>
                <li>e-mail и контактный номер телефона для оперативной связи с куратором.</li>
            </ul>

            <h2 data-aos="fade-up">Информация о действиях пользователя:</h2>
            <ul data-aos="fade-up">
                <li>сведения об учебных контрактах и соглашениях с <strong><?= $domainTitle ?></strong>;</li>
                <li>данные о запросах на консультации и выбранных курсах;</li>
                <li>информация о пройденных программах и карьерных успехах;</li>
                <li>произведенные платежи и иная финансовая информация, предусмотренная законодательством Великобритании.</li>
            </ul>

            <h2 data-aos="fade-up">Цели обработки:</h2>
            <ul data-aos="fade-up">
                <li>предоставление доступа к IT-курсам и карьерному лифту;</li>
                <li>анализ успеваемости для улучшения методологии обучения;</li>
                <li>информирование о новых программах, скидках и полезных материалах через e-mail;</li>
                <li>обеспечение экспертной поддержки 24/7.</li>
            </ul>

            <h2 data-aos="fade-up">Передача данных третьим лицам:</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> не передает данные клиентов третьим лицам, за исключением случаев получения прямого согласия, требований компетентных органов Великобритании (UK) или в рамках стратегического развития компании.
            </p>

            <h2 data-aos="fade-up">Использование файлов cookie</h2>
            <p data-aos="fade-up">
                Cookies позволяют анализировать трафик и сохранять ваши предпочтения (например, настройки региона Великобритания). Это делает использование платформы <strong><?= $fullDomain ?></strong> максимально эффективным. Вы можете отключить их в настройках браузера в любое время.
            </p>

            <h2 data-aos="fade-up">Права пользователя</h2>
            <p data-aos="fade-up">
                Для редактирования своих данных или их удаления в соответствии с нормами <strong>UK GDPR</strong>, 
                пожалуйста, свяжитесь с командой <strong><?= $domainTitle ?></strong>: 
                <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
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