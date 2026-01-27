<?php
/**
 * Main template file
 */

get_header();
?>

<main id="main" class="site-main">
    <section class="hero-section">
        <div class="hero-background"></div>
        <div class="hero-grid"></div>
        <div class="hero-particles" id="particles"></div>
        
        <div class="hero-content">
            <h1 class="hero-headline">
                Сколько <span class="highlight">часов</span> в неделю вы <span class="highlight">тратите</span> на то, что должна делать <span class="highlight">система</span>?
            </h1>
            
            <p class="hero-subtitle">
                Мы строим digital-инфраструктуру, которая работает без вас. Автоматизация. AI. Разработка. Бренд Технологический партнёр для бизнеса $IM-
            </p>
            
            <div class="hero-cta">
                <a href="#contact" class="cta-button cta-button-primary">
                    ОСВОБОДИТЬ ВРЕМЯ
                    <div class="cta-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </a>
                <a href="#how-it-works" class="cta-button cta-button-secondary">
                    КАК ЭТО РАБОТАЕТ
                    <div class="cta-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </a>
            </div>
            
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-value">$1M</div>
                    <div class="stat-label">Клиенты с годовым оборотом</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">70%</div>
                    <div class="stat-label">Остаются на сопровождении</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">10х</div>
                    <div class="stat-label">Масштабируемость бизнеса</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">24/7</div>
                    <div class="stat-label">Техническая поддержка</div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
