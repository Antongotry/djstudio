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
                <div class="check-header-corners">
                    <div class="check-label">
                        <span class="check-number">001</span>
                        <span class="check-divider">|</span>
                        <span class="check-brand">Upgrade <span class="check-brand-light">lab</span></span>
                    </div>
                    <p class="check-placeholder">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
                <div class="check-header-center">
                    <h2 class="check-title">Проверьте <span class="check-title-accent">себя</span></h2>
                    <p class="check-question">Сколько пунктов про ваш бизнес?</p>
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
</main>

<?php
get_footer();
