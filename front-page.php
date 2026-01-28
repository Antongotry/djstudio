<?php
/**
 * Front Page template — кастомная главная страница.
 */

get_header();
?>

<main id="main" class="site-main">
    <section class="hero-section" aria-label="Главный экран">
        <div class="hero-bg" aria-hidden="true"></div>
        <div class="hero-grid" aria-hidden="true"></div>
        <div class="hero-inner">
            <h1 class="hero-headline">
                <span class="hero-headline-line">Сколько часов в неделю</span>
                <span class="hero-headline-line">вы тратите на то, что</span>
                <span class="hero-headline-line">должна делать система?</span>
            </h1>
            <p class="hero-subtitle">
                Мы строим digital-инфраструктуру, которая работает без вас.<br>
                Автоматизация. AI. Разработка. Бренд.<br>
                Технологический партнёр для бизнеса $1M+.
            </p>
            <div class="hero-cta">
                <a href="#contact" class="cta-btn cta-primary">
                    <span class="cta-btn-text">ОСВОБОДИТЬ ВРЕМЯ</span>
                    <span class="cta-icon-box">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M7 7h10v10"/></svg>
                    </span>
                </a>
                <a href="#check-yourself" class="cta-btn cta-secondary">
                    <span class="cta-btn-text">КАК ЭТО РАБОТАЕТ</span>
                    <span class="cta-icon-box">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </span>
                </a>
            </div>
            <div class="hero-stats">
                <div class="hero-stat">
                    <span class="hero-stat-value">$1M<sup>+</sup></span>
                    <div class="hero-stat-text">
                        <span class="hero-stat-line1">Клиенты</span>
                        <span class="hero-stat-line2">с годовым оборотом</span>
                    </div>
                </div>
                <span class="hero-stats-sep" aria-hidden="true"></span>
                <div class="hero-stat">
                    <span class="hero-stat-value">70%</span>
                    <div class="hero-stat-text">
                        <span class="hero-stat-line1">Остаются</span>
                        <span class="hero-stat-line2">на сопровождении</span>
                    </div>
                </div>
                <span class="hero-stats-sep" aria-hidden="true"></span>
                <div class="hero-stat">
                    <span class="hero-stat-value">10<sup>×</sup></span>
                    <div class="hero-stat-text">
                        <span class="hero-stat-line1">Масштабируемость</span>
                        <span class="hero-stat-line2">бизнеса</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-nav" aria-hidden="true">
            <span class="hero-dot hero-dot--active"></span>
            <span class="hero-dot"></span>
            <span class="hero-dot"></span>
            <span class="hero-dot"></span>
            <span class="hero-dot"></span>
        </div>
    </section>

    <section class="check-section" id="check-yourself" aria-label="Проверьте себя">
        <div class="check-bg" aria-hidden="true"></div>
        <div class="check-grid-bg" aria-hidden="true"></div>
        <div class="check-inner">
            <div class="check-header">
                <div class="check-header-center">
                    <h2 class="check-title">Сколько пунктов про ваш бизнес?</h2>
                    <p class="check-question">Проверьте себя</p>
                </div>
            </div>
            <div class="check-grid" id="checkGrid">
                <div class="check-card checked" data-index="0">
                    <div class="check-card-checkbox">
                        <input type="checkbox" id="check-0" class="check-input" checked>
                        <label for="check-0" class="check-label-custom"></label>
                    </div>
                    <p class="check-card-text">Каждый новый проект требует моего личного участия</p>
                </div>
                <div class="check-card" data-index="1">
                    <div class="check-card-checkbox">
                        <input type="checkbox" id="check-1" class="check-input">
                        <label for="check-1" class="check-label-custom"></label>
                    </div>
                    <p class="check-card-text">Боюсь трогать IT-инфраструктуру — непонятно, что сломается</p>
                </div>
                <div class="check-card checked" data-index="2">
                    <div class="check-card-checkbox">
                        <input type="checkbox" id="check-2" class="check-input" checked>
                        <label for="check-2" class="check-label-custom"></label>
                    </div>
                    <p class="check-card-text">Сайт/бренд не отражает текущий масштаб компании</p>
                </div>
                <div class="check-card" data-index="3">
                    <div class="check-card-checkbox">
                        <input type="checkbox" id="check-3" class="check-input">
                        <label for="check-3" class="check-label-custom"></label>
                    </div>
                    <p class="check-card-text">Большая часть дня уходит на операционку, не на стратегию</p>
                </div>
                <div class="check-card" data-index="4">
                    <div class="check-card-checkbox">
                        <input type="checkbox" id="check-4" class="check-input">
                        <label for="check-4" class="check-label-custom"></label>
                    </div>
                    <p class="check-card-text">Данные разбросаны по разным системам, нет единой картины</p>
                </div>
                <div class="check-card" data-index="5">
                    <div class="check-card-checkbox">
                        <input type="checkbox" id="check-5" class="check-input">
                        <label for="check-5" class="check-label-custom"></label>
                    </div>
                    <p class="check-card-text">Масштабирование упирается в ручные процессы</p>
                </div>
            </div>
            <div class="check-summary">
                <div class="check-summary-left">
                    <p class="check-summary-text">
                        <span class="check-summary-label">Отмечено: </span>
                        <span class="check-summary-count" id="checkCount">2/6</span>
                    </p>
                    <p class="check-summary-message">Если 2+ вам точно стоит поговорить с нами</p>
                </div>
                <a href="#contact" class="check-cta-button">
                    ОБСУДИТЬ СИТУАЦИЮ
                    <span class="check-cta-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M7 7h10v10"/></svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <section class="infra-section" id="infrastructure" aria-label="Инфраструктура вместо проектов">
        <div class="infra-bg" aria-hidden="true"></div>
        <div class="infra-inner">
            <h2 class="infra-title">Мы не делаем «проекты». Мы строим инфраструктуру.</h2>
            <p class="infra-label">Выберите, что важно для вашего бизнеса:</p>
            <div class="infra-tabs" role="tablist">
                <button type="button" class="infra-tab" data-tab="automation" role="tab" aria-selected="false">
                    <span class="infra-tab-number">01</span>
                    Автоматизация
                </button>
                <button type="button" class="infra-tab is-active" data-tab="digitization" role="tab" aria-selected="true">
                    <span class="infra-tab-number">02</span>
                    Оцифровка
                    <span class="infra-tab-check" aria-hidden="true">✓</span>
                </button>
                <button type="button" class="infra-tab" data-tab="scale" role="tab" aria-selected="false">
                    <span class="infra-tab-number">03</span>
                    Масштаб
                </button>
            </div>
            <div class="infra-panels">
                <div class="infra-panel is-active" data-tab="digitization" role="tabpanel">
                    <div class="infra-panel-header">
                        <h3 class="infra-panel-title">Оцифровка процессов</h3>
                        <p class="infra-panel-desc">Прозрачная система с метриками вместо «так исторически сложилось». Управление по цифрам в реальном времени.</p>
                    </div>
                    <div class="infra-deliverables">
                        <p class="infra-deliverables-title">Что получите:</p>
                        <ul class="infra-deliverables-list">
                            <li>Дашборды с ключевыми метриками для бизнеса</li>
                            <li>Сквозная аналитика от лида до выручки</li>
                            <li>Автоматические отчеты без ручной работы</li>
                            <li>Алерты при отклонении от нормы</li>
                        </ul>
                    </div>
                    <div class="infra-result">
                        <span class="infra-result-label">Типичный результат:</span>
                        <div class="infra-result-items">
                            <span class="infra-result-item">-40% Времени на отчетность</span>
                            <span class="infra-result-item">x3 Скорость решений</span>
                            <span class="infra-result-item">100% Прозрачность процессов</span>
                        </div>
                    </div>
                    <a href="#contact" class="infra-cta">
                        ОБСУДИТЬ СИТУАЦИЮ
                        <span class="infra-cta-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M7 7h10v10"/></svg>
                        </span>
                    </a>
                </div>
                <div class="infra-panel" data-tab="automation" role="tabpanel" hidden>
                    <div class="infra-panel-header">
                        <h3 class="infra-panel-title">Автоматизация</h3>
                        <p class="infra-panel-desc">AI и автоматизация снимают ручной труд и стабилизируют процессы.</p>
                    </div>
                    <div class="infra-deliverables">
                        <p class="infra-deliverables-title">Что получите:</p>
                        <ul class="infra-deliverables-list">
                            <li>Роботы и интеграции без ручной работы</li>
                            <li>Единая логика процессов и контроль качества</li>
                            <li>Авто-отчеты и алерты по ключевым метрикам</li>
                        </ul>
                    </div>
                    <div class="infra-result">
                        <span class="infra-result-label">Типичный результат:</span>
                        <div class="infra-result-items">
                            <span class="infra-result-item">-30% Операционки</span>
                            <span class="infra-result-item">x2 Скорость запуска</span>
                            <span class="infra-result-item">24/7 Контроль</span>
                        </div>
                    </div>
                    <a href="#contact" class="infra-cta">
                        ОБСУДИТЬ СИТУАЦИЮ
                        <span class="infra-cta-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M7 7h10v10"/></svg>
                        </span>
                    </a>
                </div>
                <div class="infra-panel" data-tab="scale" role="tabpanel" hidden>
                    <div class="infra-panel-header">
                        <h3 class="infra-panel-title">Масштаб</h3>
                        <p class="infra-panel-desc">Системы, готовые выдержать рост x10 без переделок и потерь.</p>
                    </div>
                    <div class="infra-deliverables">
                        <p class="infra-deliverables-title">Что получите:</p>
                        <ul class="infra-deliverables-list">
                            <li>Архитектура под рост и нагрузку</li>
                            <li>Единые стандарты и документация</li>
                            <li>Гибкая инфраструктура и прозрачные метрики</li>
                        </ul>
                    </div>
                    <div class="infra-result">
                        <span class="infra-result-label">Типичный результат:</span>
                        <div class="infra-result-items">
                            <span class="infra-result-item">x10 Потенциал роста</span>
                            <span class="infra-result-item">-25% Рисков</span>
                            <span class="infra-result-item">100% Прозрачность</span>
                        </div>
                    </div>
                    <a href="#contact" class="infra-cta">
                        ОБСУДИТЬ СИТУАЦИЮ
                        <span class="infra-cta-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M7 7h10v10"/></svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="benefits-section" id="results" aria-label="Что вы получите">
        <div class="benefits-bg" aria-hidden="true"></div>
        <div class="benefits-inner">
            <div class="benefits-header">
                <p class="benefits-label">Что вы получите:</p>
                <h2 class="benefits-title">Не услуги – результаты для вашего бизнеса</h2>
            </div>
            <div class="benefits-grid">
                <div class="benefits-card">
                    <span class="benefits-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></span>
                    <h3 class="benefits-card-title">Лиды вместо трафика</h3>
                    <p class="benefits-card-desc">Сайт, который не просто «есть в интернете», а системно конвертирует посетителей в заявки. Управляемый. Измеримый.</p>
                    <div class="benefits-tags">
                        <span class="benefits-tag">Разработка сайтов</span>
                        <span class="benefits-tag">Сквозная аналитика</span>
                    </div>
                </div>
                <div class="benefits-card">
                    <span class="benefits-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="9"/><path d="M12 6v6l4 2"/></svg></span>
                    <h3 class="benefits-card-title">Часы вместо рутины</h3>
                    <p class="benefits-card-desc">Процессы, которые раньше съедали до 20 часов в неделю, работают автоматически. Вы занимаетесь стратегией.</p>
                    <div class="benefits-tags">
                        <span class="benefits-tag">Автоматизация</span>
                        <span class="benefits-tag">AI-инструменты</span>
                        <span class="benefits-tag">RPA & боты</span>
                    </div>
                </div>
                <div class="benefits-card">
                    <span class="benefits-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v4M12 14v4M16 14v4"/></svg></span>
                    <h3 class="benefits-card-title">Цифры вместо ощущений</h3>
                    <p class="benefits-card-desc">Управление бизнесом на основе данных в реальном времени. Прозрачность. Предсказуемость. Контроль.</p>
                    <div class="benefits-tags">
                        <span class="benefits-tag">Дашборды</span>
                        <span class="benefits-tag">Оцифровка процессов</span>
                    </div>
                </div>
                <div class="benefits-card">
                    <span class="benefits-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></span>
                    <h3 class="benefits-card-title">Масштаб вместо потолка</h3>
                    <p class="benefits-card-desc">Продукты, построенные под ×10 рост. Не придётся переделывать, когда бизнес вырастет.</p>
                    <div class="benefits-tags">
                        <span class="benefits-tag">IT-продукты</span>
                        <span class="benefits-tag">Платформы</span>
                        <span class="benefits-tag">Интеграции</span>
                    </div>
                </div>
                <div class="benefits-card">
                    <span class="benefits-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 17l4-4 4 4 6-8 4 4"/><path d="M7 7h14v14H7z"/></svg></span>
                    <h3 class="benefits-card-title">Капитализация вместо затрат</h3>
                    <p class="benefits-card-desc">Бренд, который отражает реальный масштаб бизнеса и работает на его стоимость. Не косметика — трансформация.</p>
                    <div class="benefits-tags">
                        <span class="benefits-tag">Брендинг</span>
                        <span class="benefits-tag">Дизайн</span>
                    </div>
                </div>
                <div class="benefits-card">
                    <span class="benefits-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/><path d="M8.5 10.5c-1.5 0-2.5 1-2.5 2.5s1 2.5 2.5 2.5c1.5 0 2.5-1 2.5-2.5S10 10.5 8.5 10.5zM15.5 10.5c-1.5 0-2.5 1-2.5 2.5s1 2.5 2.5 2.5c1.5 0 2.5-1 2.5-2.5S17 10.5 15.5 10.5z"/></svg></span>
                    <h3 class="benefits-card-title">Актуальность вместо «сделали и забыли»</h3>
                    <p class="benefits-card-desc">Продукты, построенные под ×10 рост. Не придётся переделывать, когда бизнес вырастет.</p>
                    <div class="benefits-tags">
                        <span class="benefits-tag">Сопровождение</span>
                    </div>
                    <p class="benefits-card-note">70% наших клиентов на постоянном сопровождении</p>
                </div>
            </div>
            <div class="benefits-footer">
                <a href="#contact" class="benefits-cta">
                    ОБСУДИТЬ СИТУАЦИЮ
                    <span class="benefits-cta-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M7 7h10v10"/></svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <section class="clients-section" id="clients" aria-label="Проблемы наших клиентов">
        <div class="clients-bg" aria-hidden="true"></div>
        <div class="clients-inner">
            <div class="clients-header">
                <h2 class="clients-title">Проблемы наших клиентов</h2>
                <p class="clients-subtitle">Мы работаем с теми, кто готов к трансформации. Компаниями которые уже доказали product-market fit, но упёрлись в инфраструктурный потолок.</p>
            </div>
            <div class="clients-grid">
                <div class="clients-card is-active">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="9"/><path d="M12 12L8.5 10.2M12 12L17.2 9"/></svg></span>
                    <p class="clients-card-text">На стратегию времени нет</p>
                </div>
                <div class="clients-card">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="3"/><path d="M5 21v-2a4 4 0 014-4h6a4 4 0 014 4v2"/></svg></span>
                    <p class="clients-card-text">Всё завязано на собственнике</p>
                </div>
                <div class="clients-card">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/><path d="M12 13h.01"/></svg></span>
                    <p class="clients-card-text">Уход человека — риск</p>
                </div>
                <div class="clients-card">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 7h16M4 12h16M4 17h16"/></svg></span>
                    <p class="clients-card-text">Системы разрознены</p>
                </div>
                <div class="clients-card">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
                    <p class="clients-card-text">Инфраструктура хрупкая</p>
                </div>
                <div class="clients-card">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg></span>
                    <p class="clients-card-text">Сложные правки</p>
                </div>
                <div class="clients-card">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 17l4-4 4 4 6-8 4 4"/></svg></span>
                    <p class="clients-card-text">Сайт отстал от масштаба</p>
                </div>
                <div class="clients-card">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v4M12 14v4M16 14v4"/></svg></span>
                    <p class="clients-card-text">Решения без цифр</p>
                </div>
                <div class="clients-card">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></span>
                    <p class="clients-card-text">Лиды теряются</p>
                </div>
            </div>
        </div>
    </section>

    <section class="reject-section" id="qualification" aria-label="Честно скажем: мы не для всех">
        <div class="reject-bg" aria-hidden="true"></div>
        <div class="reject-inner">
            <h2 class="reject-title">Честно скажем: мы не для всех</h2>
            <div class="reject-columns">
                <div class="reject-column">
                    <p class="reject-item">✕ Стартапы без бюджета</p>
                    <p class="reject-item">✕ Просто сайт подешевле</p>
                </div>
                <div class="reject-column">
                    <p class="reject-item">✕ Компании без готовности к изменениям</p>
                    <p class="reject-item">✕ Ищущие исполнителей, а не партнеров</p>
                </div>
            </div>
            <div class="reject-quote">
                <p>Отказываем, чтобы сохранить фокус. Каждый неподходящий проект отнимает ресурс у тех, кому действительно можем помочь.</p>
            </div>
        </div>
    </section>

    <section class="who-section" id="who-we-are" aria-label="Кто мы для вас?">
        <div class="who-bg" aria-hidden="true"></div>
        <div class="who-inner">
            <div class="who-header">
                <div class="who-header-left">
                    <h2 class="who-title">Кто мы для вас?</h2>
                    <p class="who-subtitle">Ваш digital-отдел, только без найма в штат</p>
                </div>
            </div>
            <div class="who-grid">
                <div class="who-card">
                    <span class="who-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></span>
                    <h4 class="who-card-title">Один партнёр вместо пяти подрядчиков</h4>
                    <p class="who-card-desc">Отвечаем за всю связку: стратегия, разработка, поддержка.</p>
                </div>
                <div class="who-card">
                    <span class="who-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="9"/><path d="M12 6v6l4 2"/></svg></span>
                    <h4 class="who-card-title">Отвечаем за результат, а не за часы</h4>
                    <p class="who-card-desc">Фиксируем результат и отвечаем за него.</p>
                </div>
                <div class="who-card">
                    <span class="who-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></span>
                    <h4 class="who-card-title">Меняем бизнес, не просто делаем сайты</h4>
                    <p class="who-card-desc">Строим инфраструктуру, которая живёт и растёт вместе с бизнесом.</p>
                </div>
                <div class="who-card">
                    <span class="who-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
                    <h4 class="who-card-title">Берём не всех</h4>
                    <p class="who-card-desc">Фокус на сильных проектах и партнёрстве.</p>
                </div>
            </div>
            <div class="who-footer">
                <a href="#contact" class="who-cta">
                    ОБСУДИТЬ СИТУАЦИЮ
                    <span class="who-cta-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M7 7h10v10"/></svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <section class="faq-section" id="faq" aria-label="Частые вопросы">
        <div class="faq-bg" aria-hidden="true"></div>
        <div class="faq-inner">
            <div class="faq-header">
                <div class="faq-header-left">
                    <h2 class="faq-title">Частые вопросы</h2>
                    <p class="faq-intro">Простые объяснения, которые помогут вам начать работу и двигаться быстрее.</p>
                </div>
            </div>
            <div class="faq-content">
                <div class="faq-list">
                    <div class="faq-item">
                        <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-answer-1" id="faq-q-1">
                            <span class="faq-question-text">Сколько стоят ваши услуги?</span>
                            <span class="faq-toggle" aria-hidden="true"><span></span><span></span><span></span></span>
                        </button>
                        <div class="faq-answer" id="faq-answer-1" aria-labelledby="faq-q-1" hidden>
                            <p>Мы не работаем по прайс-листу. Каждый проект индивидуален. Стоимость зависит от сложности, сроков и объема работ. Минимальный бюджет проекта — от $X. Для понимания вашего бюджета проводим бесплатную консультацию.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-answer-2" id="faq-q-2">
                            <span class="faq-question-text">Как долго длится типичный проект?</span>
                            <span class="faq-toggle" aria-hidden="true"><span></span><span></span><span></span></span>
                        </button>
                        <div class="faq-answer" id="faq-answer-2" aria-labelledby="faq-q-2" hidden>
                            <p>Честный ответ: типичного проекта не существует. Сроки полностью определяются вашими целями и текущей ситуацией. Кому-то нужно быстро проверить гипотезу и выйти на рынок — это один подход. Кому-то — построить систему, которая выдержит x10 роста без сбоев. Это совершенно разные задачи с разными временными рамками. Именно поэтому мы начинаем с консультации: понять вашу ситуацию, цели и ограничения — и только после этого говорить о сроках.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-answer-3" id="faq-q-3">
                            <span class="faq-question-text">Работаете ли вы с бизнесом за пределами СНГ?</span>
                            <span class="faq-toggle" aria-hidden="true"><span></span><span></span><span></span></span>
                        </button>
                        <div class="faq-answer" id="faq-answer-3" aria-labelledby="faq-q-3" hidden>
                            <p>Да. Мы работаем удаленно с клиентами по всему миру. Часовые пояса и языковые барьеры — не проблема.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-answer-4" id="faq-q-4">
                            <span class="faq-question-text">Что, если нам нужен "просто сайт"?</span>
                            <span class="faq-toggle" aria-hidden="true"><span></span><span></span><span></span></span>
                        </button>
                        <div class="faq-answer" id="faq-answer-4" aria-labelledby="faq-q-4" hidden>
                            <p>Если вам нужен простой сайт без претензий на трансформацию — мы, вероятно, не лучший выбор. Мы специализируемся на комплексных проектах. Но на консультации поможем понять, что вам действительно нужно.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-answer-5" id="faq-q-5">
                            <span class="faq-question-text">Как вы обеспечиваете качество?</span>
                            <span class="faq-toggle" aria-hidden="true"><span></span><span></span><span></span></span>
                        </button>
                        <div class="faq-answer" id="faq-answer-5" aria-labelledby="faq-q-5" hidden>
                            <ul class="faq-answer-list">
                                <li>Детальный discovery перед началом</li>
                                <li>Архитектура первична — строим правильно с самого начала</li>
                                <li>Регулярные демонстрации — вы видите прогресс</li>
                                <li>Тестирование на каждом этапе</li>
                                <li>Поддержка после запуска</li>
                            </ul>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-answer-6" id="faq-q-6">
                            <span class="faq-question-text">Можно ли начать с небольшого проекта?</span>
                            <span class="faq-toggle" aria-hidden="true"><span></span><span></span><span></span></span>
                        </button>
                        <div class="faq-answer" id="faq-answer-6" aria-labelledby="faq-q-6" hidden>
                            <p>Можно. Многие долгосрочные партнерства начинаются с пилотного проекта. Это позволяет обеим сторонам понять, подходим ли мы друг другу.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-answer-7" id="faq-q-7">
                            <span class="faq-question-text">Что входит в сопровождение?</span>
                            <span class="faq-toggle" aria-hidden="true"><span></span><span></span><span></span></span>
                        </button>
                        <div class="faq-answer" id="faq-answer-7" aria-labelledby="faq-q-7" hidden>
                            <p>Техническая поддержка, мониторинг, обновления, консультации по развитию, приоритетная реакция на запросы. Конкретный пакет обсуждается индивидуально.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-inquiry">
                    <h3 class="faq-inquiry-title">У вас остались вопросы?</h3>
                    <p class="faq-inquiry-desc">Потребности каждой команды уникальны. Позвольте нашим экспертам показать вам, как платформа может удовлетворить ваши конкретные требования — давайте обсудим это и найдем правильное решение для вас.</p>
                    <a href="#contact" class="faq-inquiry-btn">
                        ЗАДАТЬ ВОПРОС
                        <span class="faq-inquiry-btn-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M7 7h10v10"/></svg>
                        </span>
                    </a>
                    <div class="faq-inquiry-pattern" aria-hidden="true"></div>
                </div>
            </div>
            <div class="faq-footer">
                <a href="#contact" class="faq-cta">
                    ОБСУДИТЬ СИТУАЦИЮ
                    <span class="faq-cta-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M7 7h10v10"/></svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <section class="contact-section" id="contact" aria-label="Контакты">
        <div class="contact-bg" aria-hidden="true"></div>
        <div class="contact-inner">
            <div class="contact-header">
                <h2 class="contact-title">Давайте поговорим</h2>
                <div class="contact-info">
                    <a class="contact-email" href="mailto:hello@upgradelab.com">hello@upgradelab.com</a>
                    <div class="contact-socials">
                        <a href="#" class="contact-social">X</a>
                        <a href="#" class="contact-social">Instagram</a>
                        <a href="#" class="contact-social">Behance</a>
                        <a href="#" class="contact-social">YouTube</a>
                        <a href="#" class="contact-social">WhatsApp</a>
                    </div>
                </div>
            </div>
            <form class="contact-form" action="#" method="post">
                <div class="contact-fields">
                    <div class="contact-field">
                        <label for="contact-name">Имя</label>
                        <input type="text" id="contact-name" name="name" placeholder="Ваше имя" required>
                    </div>
                    <div class="contact-field">
                        <label for="contact-email">Email</label>
                        <input type="email" id="contact-email" name="email" placeholder="name@email.com" required>
                    </div>
                    <div class="contact-field">
                        <label for="contact-subject">Тематика</label>
                        <input type="text" id="contact-subject" name="subject" placeholder="Например, автоматизация" required>
                    </div>
                    <div class="contact-field contact-field--full">
                        <label for="contact-message">Сообщение</label>
                        <textarea id="contact-message" name="message" rows="5" placeholder="Сообщение..." required></textarea>
                    </div>
                </div>
                <div class="contact-submit">
                    <p class="contact-privacy">Нажимая кнопку, вы соглашаетесь с политикой конфиденциальности</p>
                    <button type="submit" class="contact-submit-btn" aria-label="Отправить">
                        <span>↗</span>
                    </button>
                </div>
            </form>
            <div class="contact-bottom">
                <div class="contact-logo">Upgrade lab</div>
                <p class="contact-legal">© 2026. Upgrade Lab. Все права защищены. Информация на сайте не является офертой.</p>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
