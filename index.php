<?php
/**
 * Main template file
 */

get_header();
?>

<main id="main" class="site-main">
    <section class="hero-section" aria-label="Главный экран">
        <div class="hero-bg" aria-hidden="true"></div>
        <div class="hero-grid" aria-hidden="true"></div>
        <div class="hero-inner">
            <h1 class="hero-headline">
                <span class="hero-headline-line">СКОЛЬКО <span class="highlight">ЧАСОВ</span> В НЕДЕЛЮ</span>
                <span class="hero-headline-line">ВЫ <span class="highlight">ТРАТИТЕ НА ТО, ЧТО</span></span>
                <span class="hero-headline-line">ДОЛЖНА <span class="highlight">ДЕЛАТЬ СИСТЕМА?</span></span>
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
    </section>

    <section class="check-section" id="check-yourself" aria-label="Проверьте себя">
        <div class="check-bg" aria-hidden="true"></div>
        <div class="check-grid-bg" aria-hidden="true"></div>
        <div class="check-inner">
            <div class="check-header">
                <div class="check-header-center">
                    <h2 class="check-title">Проверьте <span class="check-title-accent">себя</span></h2>
                </div>
                <div class="check-header-corners">
                    <div class="check-header-left">
                        <div class="check-label">
                            <span class="check-number">001</span>
                            <span class="check-brand">Upgrade <span class="check-brand-light">lab</span></span>
                        </div>
                        <span class="check-vline" aria-hidden="true"></span>
                        <p class="check-question">Сколько пунктов про ваш бизнес?</p>
                    </div>
                    <p class="check-placeholder">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="check-grid" id="checkGrid">
                <div class="check-card" data-index="0">
                    <div class="check-card-checkbox">
                        <input type="checkbox" id="check-0" class="check-input">
                        <label for="check-0" class="check-label-custom"></label>
                    </div>
                    <p class="check-card-text">Каждый новый проект требует моего личного участия</p>
                </div>
                <div class="check-card checked" data-index="1">
                    <div class="check-card-checkbox">
                        <input type="checkbox" id="check-1" class="check-input" checked>
                        <label for="check-1" class="check-label-custom"></label>
                    </div>
                    <p class="check-card-text">Боюсь трогать ІТ-инфраструктуру — непонятно, что сломается</p>
                </div>
                <div class="check-card" data-index="2">
                    <div class="check-card-checkbox">
                        <input type="checkbox" id="check-2" class="check-input">
                        <label for="check-2" class="check-label-custom"></label>
                    </div>
                    <p class="check-card-text">Сайт/бренд не отражает текущий масштаб компании</p>
                </div>
                <div class="check-card checked" data-index="3">
                    <div class="check-card-checkbox">
                        <input type="checkbox" id="check-3" class="check-input" checked>
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

    <section class="digit-section" id="digitization" aria-label="Оцифровка процессов">
        <div class="digit-bg" aria-hidden="true"></div>
        <div class="digit-inner">
            <h2 class="digit-title">Оцифровка процессов</h2>
            <div class="digit-desc-block">
                <span class="digit-vline" aria-hidden="true"></span>
                <div class="digit-desc-text">
                    <p>Прозрачная система с метриками вместо <em class="digit-quote">«так исторически сложилось».</em></p>
                    <p>Управление по цифрам в реальном времени.</p>
                </div>
            </div>
            <div class="digit-subhead-block">
                <span class="digit-vline" aria-hidden="true"></span>
                <h3 class="digit-subhead">Что получите:</h3>
            </div>
            <div class="digit-grid">
                <div class="digit-card">
                    <div class="digit-card-pattern" aria-hidden="true"></div>
                    <div class="digit-card-num">01</div>
                    <span class="digit-card-line" aria-hidden="true"></span>
                    <p class="digit-card-text">Дашборды с ключевыми метриками для бизнеса</p>
                    <div class="digit-card-icons">
                        <span class="digit-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 17l4-4 4 4 6-8 4 4"/></svg></span>
                        <span class="digit-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="9"/><path d="M12 3v9l7 4"/></svg></span>
                    </div>
                </div>
                <div class="digit-card">
                    <div class="digit-card-pattern digit-card-pattern--tl" aria-hidden="true"></div>
                    <div class="digit-card-num">02</div>
                    <span class="digit-card-line" aria-hidden="true"></span>
                    <p class="digit-card-text">Сквозная аналитика от лица до выручки</p>
                    <div class="digit-card-icons">
                        <span class="digit-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 17l4-4 4 4 6-8 4 4"/></svg></span>
                        <span class="digit-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="3"/><path d="M5 21v-2a4 4 0 014-4h6a4 4 0 014 4v2"/></svg></span>
                    </div>
                </div>
                <div class="digit-card">
                    <div class="digit-card-pattern digit-card-pattern--bl" aria-hidden="true"></div>
                    <div class="digit-card-num">03</div>
                    <span class="digit-card-line" aria-hidden="true"></span>
                    <p class="digit-card-text">Автоматические отчёты без ручной работы</p>
                    <div class="digit-card-icons">
                        <span class="digit-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/></svg></span>
                        <span class="digit-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2l3 7h7l-5.5 4 2 7-6.5-4.5L5.5 20l2-7L2 9h7z"/></svg></span>
                    </div>
                </div>
                <div class="digit-card">
                    <div class="digit-card-pattern digit-card-pattern--br" aria-hidden="true"></div>
                    <div class="digit-card-num">04</div>
                    <span class="digit-card-line" aria-hidden="true"></span>
                    <p class="digit-card-text">Алерты при отклонении от нормы</p>
                    <div class="digit-card-icons">
                        <span class="digit-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 3H5a2 2 0 00-2 2v3m18 0V5a2 2 0 00-2-2h-3m0 0h18M8 21H5a2 2 0 01-2-2v-3m18 0v3a2 2 0 01-2 2h-3m0 0h18M3 8v8m0 0h18M3 16h18"/></svg></span>
                        <span class="digit-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v4M12 14v4M16 14v4"/></svg></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="result-section" id="typical-result" aria-label="Типичный результат">
        <div class="result-bg" aria-hidden="true"></div>
        <div class="result-inner">
            <div class="result-header">
                <span class="result-vline" aria-hidden="true"></span>
                <h2 class="result-title">Типичный результат:</h2>
            </div>
            <div class="result-cards">
                <div class="result-card">
                    <span class="result-value">-40%</span>
                    <span class="result-label">Времени на<br>отчетность</span>
                </div>
                <div class="result-card">
                    <span class="result-value">×3</span>
                    <span class="result-label">Скорость<br>решений</span>
                </div>
                <div class="result-card">
                    <span class="result-value">100%</span>
                    <span class="result-label">Прозрачность<br>процессов</span>
                </div>
            </div>
            <div class="result-footer">
                <div class="result-nav" aria-hidden="true">
                    <span class="result-dot result-dot--active"></span>
                    <span class="result-dot"></span>
                    <span class="result-dot"></span>
                    <span class="result-dot"></span>
                    <span class="result-dot"></span>
                    <span class="result-dot"></span>
                    <span class="result-dot"></span>
                    <span class="result-dot"></span>
                </div>
                <a href="#contact" class="result-cta">
                    ОБСУДИТЬ СИТУАЦИЮ
                    <span class="result-cta-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M7 7h10v10"/></svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <section class="clients-section" id="clients" aria-label="Мы работаем с теми, кто готов к трансформации">
        <div class="clients-bg" aria-hidden="true"></div>
        <div class="clients-inner">
            <div class="clients-header">
                <h2 class="clients-title">Мы работаем с теми, кто готов к трансформации</h2>
                <div class="clients-header-row">
                    <div class="clients-label">
                        <span class="clients-number">003</span>
                        <span class="clients-brand">Upgrade lab</span>
                    </div>
                    <p class="clients-subtitle">Компаниями которые уже доказали product-market fit, но упёрлись в инфраструктурный потолок.</p>
                </div>
            </div>
            <div class="clients-problems-head">
                <span class="clients-vline" aria-hidden="true"></span>
                <h3 class="clients-problems-title">Проблемы наших клиентов:</h3>
            </div>
            <div class="clients-grid">
                <div class="clients-card">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="9"/><path d="M12 6v6l4 2"/></svg></span>
                    <p class="clients-card-text">На стратегию времени нет — только операционка</p>
                </div>
                <div class="clients-card">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="3"/><path d="M5 21v-2a4 4 0 014-4h6a4 4 0 014 4v2"/></svg></span>
                    <p class="clients-card-text">Всё завязано на собственнике</p>
                </div>
                <div class="clients-card">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/><path d="M12 13h.01"/></svg></span>
                    <p class="clients-card-text">Уход одного человека ставит процессы под угрозу</p>
                </div>
                <div class="clients-card">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 7h16M4 12h16M4 17h16"/></svg></span>
                    <p class="clients-card-text">Данные разбросаны по системам без единой картины</p>
                </div>
                <div class="clients-card">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
                    <p class="clients-card-text">Риски и зависимость от ключевых людей</p>
                </div>
                <div class="clients-card">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg></span>
                    <p class="clients-card-text">Ручные процессы съедают ресурсы</p>
                </div>
                <div class="clients-card">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 17l4-4 4 4 6-8 4 4"/></svg></span>
                    <p class="clients-card-text">Рост упирается в узкие места</p>
                </div>
                <div class="clients-card">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v4M12 14v4M16 14v4"/></svg></span>
                    <p class="clients-card-text">Нет прозрачности по метрикам</p>
                </div>
                <div class="clients-card">
                    <span class="clients-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></span>
                    <p class="clients-card-text">Цели есть, но нет системы их достижения</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
