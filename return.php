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
            <h1 data-aos="fade-down">Политика возврата средств</h1>
            
            <section data-aos="fade-up">
                <h2>Условия для оформления возврата</h2>
                <p>
                    В IT-школе <strong><?= $domainTitle ?></strong> мы стремимся к максимальному качеству образования. 
                    Вы можете претендовать на полный или частичный возврат средств в следующих ситуациях:
                </p>
                <ul>
                    <li>
                        <strong>Несоответствие учебной программы:</strong> Если содержание предоставленных курсов 
                        или практических модулей существенно отличается от учебного плана, заявленного на сайте 
                        <strong><?= $domainTitle ?></strong> на момент совершения оплаты.
                    </li>
                    <li>
                        <strong>Технические сбои платформы:</strong> При возникновении критических неисправностей в нашей 
                        цифровой инфраструктуре <strong><?= $fullDomain ?></strong>, которые делают невозможным прохождение 
                        обучения и не были устранены службой поддержки в течение 5 рабочих дней.
                    </li>
                    <li>
                        <strong>Период охлаждения (UK Regulations):</strong> Согласно законодательству Великобритании, 
                        вы имеете право отказаться от обучения в течение 14 (четырнадцати) календарных дней с момента оплаты, 
                        если вы еще не приступили к изучению материалов (см. раздел «Исключения»).
                    </li>
                </ul>
            </section>

            <section data-aos="fade-up">
                <h2>Процедура запроса на возврат</h2>
                <p>
                    Чтобы инициировать процедуру возврата средств на платформе <strong><?= $domainTitle ?></strong>, 
                    пожалуйста, следуйте инструкции:
                </p>
                <ol class="custom-list">
                    <li>
                        Отправьте официальный запрос на наш email: 
                        <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                    </li>
                    <li>
                        Укажите в теме письма: «Refund Request / Запрос на возврат».
                    </li>
                    <li>
                        В тексте письма укажите: ФИО, email (использованный при регистрации) и название курса.
                    </li>
                    <li>
                        Опишите причину возврата со ссылкой на соответствующий пункт условий.
                    </li>
                    <li>
                        Ваша заявка будет рассмотрена финансовым отделом в течение 3-х рабочих дней.
                    </li>
                </ol>
            </section>

            <section data-aos="fade-up">
                <h2>Сроки и способ выплаты</h2>
                <p>
                    После одобрения заявки возврат денежных средств производится в течение 7–14 рабочих дней. 
                    Средства возвращаются строго на те же реквизиты, с которых производилась оплата. 
                    Фактический срок зачисления зависит от регламента вашего банка в <strong>Великобритании</strong> 
                    или стране вашего банка-эмитента.
                </p>
            </section>

            <section data-aos="fade-up">
                <h2>Исключения и ограничения</h2>
                <p>Возврат средств невозможен в следующих случаях:</p>
                <ul>
                    <li>
                        Запрос подан по истечении 14 календарных дней с момента покупки курса.
                    </li>
                    <li>
                        Пользователь просмотрел, изучил или скачал более 25% учебных материалов программы 
                        (включая видеолекции и методические пособия).
                    </li>
                    <li>
                        Причиной невозможности обучения являются технические проблемы на стороне пользователя 
                        (отсутствие интернета, неисправное оборудование или несовместимое ПО).
                    </li>
                    <li>
                        Нарушение правил внутреннего распорядка IT-школы <strong><?= $domainTitle ?></strong> 
                        или условий использования платформы.
                    </li>
                </ul>
            </section>

            <section data-aos="fade-up">
                <h2>Обновление политики</h2>
                <p>
                    <strong><?= $domainTitle ?></strong> оставляет за собой право изменять условия возврата. 
                    Актуальная версия всегда находится по адресу: <strong><?= $fullDomain ?>/return.php</strong>.
                </p>
            </section>

            <section data-aos="fade-in" class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.1);">
                <h2>Контактная информация</h2>
                <p>
                    По всем вопросам возврата или качества обучения обращайтесь к нам:
                    <br><br>
                    Email: <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a><br>
                    Телефон: <a href="tel:+442049271757">+44 204 927 1757</a><br>
                    Адрес: 22-24 Ely Pl, London EC1N 6TE, United Kingdom
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