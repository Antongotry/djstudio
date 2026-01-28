/**
 * djstudio Theme JavaScript
 */

(function() {
    'use strict';

    // Create particles effect
    function createParticles() {
        const particlesContainer = document.getElementById('particles');
        if (!particlesContainer) return;

        const particleCount = 100;
        
        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            
            // Random position
            particle.style.left = Math.random() * 100 + '%';
            particle.style.top = Math.random() * 100 + '%';
            
            // Random animation delay
            particle.style.animationDelay = Math.random() * 20 + 's';
            particle.style.animationDuration = (15 + Math.random() * 10) + 's';
            
            // Random size
            const size = 1 + Math.random();
            particle.style.width = size + 'px';
            particle.style.height = size + 'px';
            
            particlesContainer.appendChild(particle);
        }
    }

    // Menu toggle functionality
    function initMenuToggle() {
        const menuToggle = document.querySelector('.menu-toggle');
        if (!menuToggle) return;

        menuToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            // Add menu functionality here if needed
        });
    }

    // Smooth scroll for anchor links
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#' || href === '#!') {
                    e.preventDefault();
                    return;
                }
                
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            createParticles();
            initMenuToggle();
            initSmoothScroll();
        });
    } else {
        createParticles();
        initMenuToggle();
        initSmoothScroll();
    }

    // Check section functionality
    function initCheckSection() {
        const checkGrid = document.getElementById('checkGrid');
        if (!checkGrid) return;

        const checkboxes = checkGrid.querySelectorAll('.check-input');
        const checkCount = document.getElementById('checkCount');
        const totalChecks = checkboxes.length;

        // Update count function
        function updateCount() {
            const checked = Array.from(checkboxes).filter(cb => cb.checked).length;
            if (checkCount) {
                checkCount.textContent = `${checked}/${totalChecks}`;
            }
            
            // Update card classes
            checkboxes.forEach((checkbox, index) => {
                const card = checkbox.closest('.check-card');
                if (card) {
                    if (checkbox.checked) {
                        card.classList.add('checked');
                    } else {
                        card.classList.remove('checked');
                    }
                }
            });
        }

        // Add event listeners to checkboxes
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', updateCount);
            
            // Also allow clicking on card to toggle
            const card = checkbox.closest('.check-card');
            if (card) {
                card.addEventListener('click', function(e) {
                    // Don't trigger if clicking directly on checkbox
                    if (e.target !== checkbox && e.target !== checkbox.nextElementSibling) {
                        checkbox.checked = !checkbox.checked;
                        updateCount();
                    }
                });
            }
        });

        // Initial count update
        updateCount();
    }

    // FAQ accordion
    function initFaqSection() {
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', function() {
                const expanded = this.getAttribute('aria-expanded') === 'true';
                const answerId = this.getAttribute('aria-controls');
                const answer = answerId ? document.getElementById(answerId) : null;
                this.setAttribute('aria-expanded', !expanded);
                if (answer) {
                    answer.hidden = expanded;
                }
            });
        });
    }

    // Initialize sections when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            initCheckSection();
            initFaqSection();
            initInfraTabs();
        });
    } else {
        initCheckSection();
        initFaqSection();
        initInfraTabs();
    }

    // Infrastructure tabs
    function initInfraTabs() {
        const tabs = document.querySelectorAll('.infra-tab');
        const panels = document.querySelectorAll('.infra-panel');
        if (!tabs.length || !panels.length) return;

        function activateTab(tab) {
            const name = tab.getAttribute('data-tab');
            tabs.forEach(btn => {
                const isActive = btn === tab;
                btn.classList.toggle('is-active', isActive);
                btn.setAttribute('aria-selected', isActive ? 'true' : 'false');
            });

            panels.forEach(panel => {
                const isActive = panel.getAttribute('data-tab') === name;
                panel.classList.toggle('is-active', isActive);
                if (isActive) {
                    panel.removeAttribute('hidden');
                } else {
                    panel.setAttribute('hidden', '');
                }
            });
        }

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                activateTab(this);
            });
        });
    }

})();
