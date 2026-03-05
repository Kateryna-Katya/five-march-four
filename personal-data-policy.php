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
            <h1 data-aos="fade-down">Политика обработки персональных данных</h1>

            <section data-aos="fade-up">
                <h2>1. Общие положения</h2>
                <p>
                    Настоящая политика обработки персональных данных (далее —
                    «Политика») определяет порядок и условия обработки персональных
                    данных, предпринимаемые образовательной платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                    устанавливает меры по обеспечению безопасности этих данных в соответствии с регламентом UK GDPR.
                </p>
                <p>
                    1.1. Важнейшей целью Оператора является соблюдение прав и свобод человека при
                    обработке его данных, включая защиту права на неприкосновенность частной жизни и личную тайну студентов и посетителей.
                </p>
                <p>
                    1.2. Настоящая Политика применяется ко всей информации, которую
                    Оператор может получить о посетителях (далее — «Пользователи»)
                    веб-сайта <strong><?= $fullDomain ?></strong>.
                </p>
            </section>

            <section data-aos="fade-up">
                <h2>2. Основные понятия</h2>
                <ul>
                    <li>
                        <strong>Веб-сайт</strong> — совокупность графических и программных материалов, доступных по адресу 
                        <strong><?= $fullDomain ?></strong>.
                    </li>
                    <li><strong>Пользователь</strong> — любой посетитель сайта <?= $domainTitle ?>.</li>
                    <li>
                        <strong>Персональные данные</strong> — любая информация, относящаяся к определенному Пользователю (имя, контактные данные, учебный прогресс).
                    </li>
                    <li>
                        <strong>Обработка данных</strong> — любое действие, совершаемое с данными (сбор, хранение, уточнение, удаление).
                    </li>
                </ul>
            </section>

            <section data-aos="fade-up">
                <h2>3. Данные, которые мы обрабатываем</h2>
                <p>Оператор обрабатывает следующие категории данных:</p>
                <ul>
                    <li>
                        <strong>Данные, предоставляемые Пользователем:</strong>
                        <ul>
                            <li>Имя и фамилия;</li>
                            <li>Адрес электронной почты (для доступа к курсам);</li>
                            <li>Номера телефонов (валидация по стандартам Великобритании).</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Данные, собираемые автоматически:</strong>
                        <ul>
                            <li>
                                Сбор обезличенных данных о посетителях (файлы «cookie», IP-адреса) для корректной работы 
                                анимаций (AOS, Anime.js) и аналитики посещаемости через Google Analytics.
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>

            <section data-aos="fade-up">
                <h2>4. Цели обработки персональных данных</h2>
                <ul>
                    <li>
                        Предоставление доступа к учебным модулям и сервисам IT-школы.
                    </li>
                    <li>
                        Установление обратной связи, включая уведомления о новых курсах и карьерных возможностях.
                    </li>
                    <li>
                        Заключение и исполнение договоров на обучение и программу пассивного дохода в Англии.
                    </li>
                    <li>
                        Информирование Пользователя посредством email-рассылок. Пользователь всегда может отказаться, направив письмо на 
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a> с пометкой «Отказ от уведомлений».
                    </li>
                </ul>
            </section>

            <section data-aos="fade-up">
                <h2>5. Правовые основания</h2>
                <p>Оператор обрабатывает данные только при:</p>
                <ul>
                    <li>Наличии добровольного согласия Пользователя через формы на сайте.</li>
                    <li>Разрешении сохранения «cookie» в настройках вашего браузера.</li>
                </ul>
            </section>

            <section data-aos="fade-up">
                <h2>6. Безопасность и сроки хранения</h2>
                <ul>
                    <li>
                        Оператор принимает все технические меры для защиты данных от неправомерного доступа в соответствии с нормами защиты данных Великобритании.
                    </li>
                    <li>
                        Данные никогда не передаются третьим лицам без вашего согласия, кроме случаев, предусмотренных законодательством UK.
                    </li>
                    <li>
                        Вы можете в любой момент отозвать согласие, написав нам на 
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>.
                    </li>
                </ul>
            </section>

            <section data-aos="fade-up" class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.1);">
                <h2>7. Контакты</h2>
                <p>
                    Если у вас есть вопросы по поводу обработки ваших данных в <strong><?= $domainTitle ?></strong>:
                    <br><br>
                    Email: <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a><br>
                    Адрес: 22-24 Ely Pl, London EC1N 6TE, United Kingdom<br>
                    Телефон: <a href="tel:+442049271757">+44 204 927 1757</a>
                </p>
            </section>
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