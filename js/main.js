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

    // Add parallax effect to hero background
    window.addEventListener('scroll', function() {
        const heroSection = document.querySelector('.hero-section');
        if (!heroSection) return;
        
        const scrolled = window.pageYOffset;
        const heroContent = document.querySelector('.hero-content');
        
        if (heroContent && scrolled < window.innerHeight) {
            heroContent.style.transform = `translateY(${scrolled * 0.5}px)`;
            heroContent.style.opacity = 1 - (scrolled / window.innerHeight) * 0.5;
        }
    });

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

    // Initialize check section when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            initCheckSection();
            initChooseSection();
            // Show default content (digitization is active by default)
            showContentTab('digitization');
        });
    } else {
        initCheckSection();
        initChooseSection();
        // Show default content (digitization is active by default)
        showContentTab('digitization');
    }

    // Choose section functionality
    function initChooseSection() {
        const chooseButtons = document.querySelectorAll('.choose-button');
        if (!chooseButtons.length) return;

        chooseButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                chooseButtons.forEach(btn => {
                    btn.classList.remove('choose-button-active');
                });
                
                // Add active class to clicked button
                this.classList.add('choose-button-active');
                
                // Get the tab data attribute
                const tab = this.getAttribute('data-tab');
                
                // Show corresponding content tab
                showContentTab(tab);
            });
        });
    }

    // Show content tab based on selection
    function showContentTab(tabName) {
        const contentTabs = document.querySelectorAll('.content-tab');
        if (!contentTabs.length) return;

        contentTabs.forEach(tab => {
            tab.classList.remove('active');
            if (tab.getAttribute('data-tab') === tabName) {
                tab.classList.add('active');
                
                // Smooth scroll to content section
                const contentSection = document.getElementById('content-section');
                if (contentSection) {
                    setTimeout(() => {
                        contentSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }, 100);
                }
            }
        });
    }

})();
