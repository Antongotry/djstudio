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
                    ОСВОБОДИТЬ ВРЕМЯ
                    <span class="cta-icon-box">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M7 7h10v10"/></svg>
                    </span>
                </a>
                <a href="#check-yourself" class="cta-btn cta-secondary">
                    КАК ЭТО РАБОТАЕТ
                    <span class="cta-icon-box">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </span>
                </a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
