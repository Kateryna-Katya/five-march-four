document.addEventListener('DOMContentLoaded', () => {
    // === 1. Инициализация AOS ===
    AOS.init({ 
        duration: 800, 
        once: true, 
        offset: 100 
    });

    // === 2. Мобильное меню ===
    const burger = document.getElementById('burger-menu');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuLinks = document.querySelectorAll('.mobile-menu a');

    const toggleMenu = () => {
        mobileMenu.classList.toggle('mobile-menu--active');
        document.body.style.overflow = mobileMenu.classList.contains('mobile-menu--active') ? 'hidden' : '';
    };

    if (burger) burger.addEventListener('click', toggleMenu);
    menuLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // === 3. Анимация счетчиков в секции Career (Anime.js + Observer) ===
    const statsSection = document.querySelector('.career__stats');
    const statValues = document.querySelectorAll('.stat-card__val');

    const startCounter = () => {
        statValues.forEach(val => {
            const target = +val.getAttribute('data-val');
            anime({
                targets: val,
                innerText: [0, target],
                round: 1, // Округляем до целых чисел
                easing: 'easeOutExpo',
                duration: 2000
            });
        });
    };

    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            if(entries[0].isIntersecting) {
                startCounter();
                observer.unobserve(statsSection); // Запускаем только один раз
            }
        }, { threshold: 0.5 });
        
        observer.observe(statsSection);
    }

    // === 4. Капча для формы ===
    const captchaText = document.getElementById('captcha-question');
    let captchaResult;

    const initCaptcha = () => {
        if (!captchaText) return;
        const n1 = Math.floor(Math.random() * 10) + 1;
        const n2 = Math.floor(Math.random() * 10) + 1;
        captchaResult = n1 + n2;
        captchaText.innerText = `Сколько будет ${n1} + ${n2}?`;
    };
    initCaptcha();

    // Валидация телефона (только цифры)
    const phoneInput = document.getElementById('phone-input');
    if (phoneInput) {
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/\D/g, '');
        });
    }

    // === 5. AJAX-отправка формы ===
    const contactForm = document.getElementById('contact-form');
    const formMessage = document.getElementById('form-message');

    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const userAnswer = parseInt(document.getElementById('captcha-answer').value);

            if (userAnswer !== captchaResult) {
                formMessage.className = 'form-message error';
                formMessage.innerText = 'Ошибка капчи. Попробуйте снова.';
                initCaptcha();
                return;
            }

            const btn = contactForm.querySelector('button');
            const originalBtnText = btn.innerText;
            btn.innerText = 'Отправка...';
            btn.disabled = true;

            // Имитация задержки сети
            setTimeout(() => {
                formMessage.className = 'form-message success';
                formMessage.innerText = 'Успешно! Мы свяжемся с вами в ближайшее время.';
                contactForm.reset();
                initCaptcha();
                btn.innerText = originalBtnText;
                btn.disabled = false;
            }, 1500);
        });
    }

    // === 6. Cookie Popup ===
    const cookiePopup = document.getElementById('cookie-popup');
    const acceptBtn = document.getElementById('accept-cookies');

    if (cookiePopup && !localStorage.getItem('cookies-accepted')) {
        setTimeout(() => cookiePopup.classList.add('cookie-popup--show'), 2000);
    }

    if (acceptBtn) {
        acceptBtn.addEventListener('click', () => {
            localStorage.setItem('cookies-accepted', 'true');
            cookiePopup.classList.remove('cookie-popup--show');
        });
    }

    // === 7. Прочие микро-анимации ===
    // Анимация лого
    anime({
        targets: '.logo__icon',
        rotate: '1turn',
        duration: 1200,
        easing: 'easeInOutExpo'
    });

    // Плавный скролл
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
});