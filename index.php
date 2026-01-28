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
                Сколько <span class="highlight">часов</span> в неделю вы <span class="highlight">тратите</span> на то, что <span class="highlight">должна делать система</span>?
            </h1>
            
            <p class="hero-subtitle">
                Мы строим digital-инфраструктуру, которая работает без вас. Автоматизация. AI. Разработка. Бренд. Технологический партнёр для бизнеса $1M+
            </p>
            
            <div class="hero-cta">
                <a href="#contact" class="cta-button cta-button-primary">
                    ОСВОБОДИТЬ ВРЕМЯ
                    <div class="cta-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 17L17 7M7 7h10v10"/>
                        </svg>
                    </div>
                </a>
                <a href="#check-yourself" class="cta-button cta-button-secondary">
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
                    <div class="stat-value">10x</div>
                    <div class="stat-label">Масштабируемость бизнеса</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Check Yourself Section -->
    <section class="check-section" id="check-yourself">
        <div class="check-container">
            <div class="check-header">
                <div class="check-header-left">
                    <h2 class="check-title">Проверьте себя</h2>
                    <div class="check-label">
                        <span class="check-number">001</span>
                        <span class="check-divider">|</span>
                        <span class="check-brand">Upgrade <span class="check-brand-light">lab</span></span>
                    </div>
                </div>
                <div class="check-header-right">
                    <p class="check-question">Сколько пунктов про ваш бизнес?</p>
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
                    <div class="check-card-corner check-card-corner-tl"></div>
                    <div class="check-card-corner check-card-corner-br"></div>
                </div>

                <div class="check-card checked" data-index="1">
                    <div class="check-card-checkbox">
                        <input type="checkbox" id="check-1" class="check-input" checked>
                        <label for="check-1" class="check-label-custom"></label>
                    </div>
                    <p class="check-card-text">Боюсь трогать ІТ-инфраструктуру - непонятно, что сломается</p>
                    <div class="check-card-corner check-card-corner-tl"></div>
                    <div class="check-card-corner check-card-corner-br"></div>
                    <div class="check-card-accent"></div>
                </div>

                <div class="check-card" data-index="2">
                    <div class="check-card-checkbox">
                        <input type="checkbox" id="check-2" class="check-input">
                        <label for="check-2" class="check-label-custom"></label>
                    </div>
                    <p class="check-card-text">Сайт/бренд не отражает текущий масштаб компании</p>
                    <div class="check-card-corner check-card-corner-tl"></div>
                    <div class="check-card-corner check-card-corner-br"></div>
                </div>

                <div class="check-card checked" data-index="3">
                    <div class="check-card-checkbox">
                        <input type="checkbox" id="check-3" class="check-input" checked>
                        <label for="check-3" class="check-label-custom"></label>
                    </div>
                    <p class="check-card-text">Большая часть дня уходит на операционку, не на стратегию</p>
                    <div class="check-card-corner check-card-corner-tl"></div>
                    <div class="check-card-corner check-card-corner-br"></div>
                </div>

                <div class="check-card" data-index="4">
                    <div class="check-card-checkbox">
                        <input type="checkbox" id="check-4" class="check-input">
                        <label for="check-4" class="check-label-custom"></label>
                    </div>
                    <p class="check-card-text">Данные разбросаны по разным системам, нет единой картины</p>
                    <div class="check-card-corner check-card-corner-tl"></div>
                    <div class="check-card-corner check-card-corner-br"></div>
                </div>

                <div class="check-card" data-index="5">
                    <div class="check-card-checkbox">
                        <input type="checkbox" id="check-5" class="check-input">
                        <label for="check-5" class="check-label-custom"></label>
                    </div>
                    <p class="check-card-text">Масштабирование упирается в ручные процессы</p>
                    <div class="check-card-corner check-card-corner-tl"></div>
                    <div class="check-card-corner check-card-corner-br"></div>
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
                    <div class="check-cta-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Choose Section -->
    <section class="choose-section" id="choose-section">
        <div class="choose-container">
            <div class="choose-headline">
                <h2 class="choose-headline-text">
                    Мы не делаем <span class="choose-headline-quote">«проекты».</span>
                </h2>
                <h2 class="choose-headline-text">
                    Мы строим <span class="choose-headline-highlight">инфраструктуру.</span>
                </h2>
            </div>

            <div class="choose-content">
                <div class="choose-header">
                    <div class="choose-header-left">
                        <span class="choose-number">002</span>
                        <div class="choose-brand-wrapper">
                            <span class="choose-brand-line"></span>
                            <span class="choose-brand">Upgrade <span class="choose-brand-light">lab</span></span>
                            <span class="choose-divider">|</span>
                        </div>
                    </div>
                    <div class="choose-header-center">
                        <p class="choose-prompt">Выберете, что важно для вашего бизнеса:</p>
                    </div>
                    <div class="choose-header-right">
                        <p class="choose-placeholder">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>
                </div>

                <div class="choose-buttons" id="chooseButtons">
                    <button class="choose-button" data-tab="automation">
                        <div class="choose-button-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2v4m0 12v4M5.64 5.64l2.83 2.83m7.06 7.06l2.83 2.83M2 12h4m12 0h4M5.64 18.36l2.83-2.83m7.06-7.06l2.83-2.83"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </div>
                        <span class="choose-button-text">Автоматизация</span>
                    </button>

                    <button class="choose-button choose-button-active" data-tab="digitization">
                        <div class="choose-button-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/>
                                <circle cx="12" cy="12" r="7"/>
                                <circle cx="12" cy="12" r="4"/>
                            </svg>
                        </div>
                        <span class="choose-button-text">Оцифровка процессов</span>
                    </button>

                    <button class="choose-button" data-tab="scale">
                        <div class="choose-button-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"/>
                            </svg>
                        </div>
                        <span class="choose-button-text">Масштаб</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section (Dynamic based on selection) -->
    <section class="content-section" id="content-section">
        <div class="content-container">
            <div class="content-header">
                <div class="content-header-left">
                    <span class="content-number">003</span>
                    <div class="content-brand-wrapper">
                        <span class="content-brand-line"></span>
                        <span class="content-brand">Upgrade <span class="content-brand-light">lab</span></span>
                        <span class="content-divider">|</span>
                    </div>
                </div>
            </div>

            <div class="content-tabs" id="contentTabs">
                <!-- Automation Content -->
                <div class="content-tab active" data-tab="automation">
                    <h2 class="content-title">Автоматизация бизнес-процессов</h2>
                    <p class="content-description">
                        Мы создаем системы, которые работают без вашего участия. Автоматизируем рутинные задачи, 
                        настраиваем интеграции между системами и освобождаем ваше время для стратегических решений.
                    </p>
                    <div class="content-features">
                        <div class="content-feature">
                            <div class="content-feature-icon">⚙️</div>
                            <h3>Автоматизация процессов</h3>
                            <p>Настраиваем автоматические workflows для ваших бизнес-процессов</p>
                        </div>
                        <div class="content-feature">
                            <div class="content-feature-icon">🔗</div>
                            <h3>Интеграции систем</h3>
                            <p>Подключаем все ваши инструменты в единую экосистему</p>
                        </div>
                        <div class="content-feature">
                            <div class="content-feature-icon">🤖</div>
                            <h3>AI и машинное обучение</h3>
                            <p>Внедряем умные решения для оптимизации работы</p>
                        </div>
                    </div>
                </div>

                <!-- Digitization Content -->
                <div class="content-tab" data-tab="digitization">
                    <h2 class="content-title">Оцифровка процессов</h2>
                    <p class="content-description">
                        Переводим ваши бизнес-процессы в цифровой формат. Создаем единую систему управления данными, 
                        настраиваем аналитику и даем вам полный контроль над бизнесом.
                    </p>
                    <div class="content-features">
                        <div class="content-feature">
                            <div class="content-feature-icon">📊</div>
                            <h3>Централизация данных</h3>
                            <p>Объединяем все данные в единую систему управления</p>
                        </div>
                        <div class="content-feature">
                            <div class="content-feature-icon">📈</div>
                            <h3>Аналитика и отчетность</h3>
                            <p>Создаем дашборды и отчеты для принятия решений</p>
                        </div>
                        <div class="content-feature">
                            <div class="content-feature-icon">💾</div>
                            <h3>Миграция данных</h3>
                            <p>Безопасно переносим данные из старых систем</p>
                        </div>
                    </div>
                </div>

                <!-- Scale Content -->
                <div class="content-tab" data-tab="scale">
                    <h2 class="content-title">Масштабирование бизнеса</h2>
                    <p class="content-description">
                        Строим инфраструктуру, которая растет вместе с вашим бизнесом. Создаем масштабируемые решения, 
                        которые выдерживают любые нагрузки и позволяют быстро расширяться.
                    </p>
                    <div class="content-features">
                        <div class="content-feature">
                            <div class="content-feature-icon">🚀</div>
                            <h3>Масштабируемая архитектура</h3>
                            <p>Проектируем системы, готовые к росту</p>
                        </div>
                        <div class="content-feature">
                            <div class="content-feature-icon">⚡</div>
                            <h3>Производительность</h3>
                            <p>Оптимизируем системы для максимальной скорости</p>
                        </div>
                        <div class="content-feature">
                            <div class="content-feature-icon">🌐</div>
                            <h3>Глобальное расширение</h3>
                            <p>Подготавливаем инфраструктуру для международного роста</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
