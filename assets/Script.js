/**
 * iDEAGO Shared Components Protocol
 * This script handles shared elements like Navigation and Footer across all pages.
 */

document.addEventListener('DOMContentLoaded', () => {
    renderNavigation();
    renderFooter();
    initTheme();
    initMobileMenu();
    initPortfolio();
    lucide.createIcons();
});

function renderNavigation() {
    const navHTML = `
    <div class="nav-wrapper">
        <nav class="nav-pill">
            <!-- Brand -->
            <a href="index.php" class="nav-brand">
                <img src="assets/Logo.png" alt="iDEAGO logo">
                <span class="nav-brand-name">iDEAGO</span>
            </a>

            <!-- Desktop Links -->
            <div class="nav-links">
                <a href="index" class="nav-link">Home</a>
                <a href="about" class="nav-link hover-rose">About</a>
                <a href="service" class="nav-link hover-cyan">Services</a>
                <a href="portfolio" class="nav-link hover-orange">Portfolio</a>
                <a href="team" class="nav-link hover-default">Team</a>
            </div>

            <!-- Actions -->
            <div class="nav-actions">
                <button id="theme-toggle" class="btn-icon" aria-label="Toggle dark mode">
                    <i data-lucide="moon" class="icon-moon" style="width:1rem;height:1rem;"></i>
                    <i data-lucide="sun" class="icon-sun" style="width:1rem;height:1rem;"></i>
                </button>

                <a href="contact" class="btn-cta">Start Project</a>

                <!-- Hamburger -->
                <button id="hamburger-btn" class="btn-hamburger" aria-label="Open menu">
                    <i data-lucide="menu" style="width:1.5rem;height:1.5rem;"></i>
                </button>
            </div>
        </nav>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="mobile-menu hidden-menu">
        <div class="mobile-menu-links">
            <a href="index" class="mobile-link">Home</a>
            <a href="about" class="mobile-link hover-rose">About</a>
            <a href="service" class="mobile-link hover-cyan">Services</a>
            <a href="portfolio" class="mobile-link hover-orange">Portfolio</a>
            <a href="team" class="mobile-link hover-yellow">Team</a>
            <hr class="mobile-divider">
            <a href="contact" class="mobile-link mobile-cta">Start Project</a>
        </div>
        <button id="close-menu-btn" class="btn-close-menu" aria-label="Close menu">
            <i data-lucide="x" style="width:2rem;height:2rem;"></i>
        </button>
    </div>
    `;

    const navContainer = document.getElementById('shared-nav');
    if (navContainer) {
        navContainer.innerHTML = navHTML;
    }
}

function renderFooter() {
    const footerHTML = `
    <footer id="contact" class="site-footer">
        <div class="footer-bg-text" aria-hidden="true">iDEAGO</div>

        <div class="container">
            <div class="footer-grid">
                <!-- Brand Column -->
                <div>
                    <div class="footer-brand-logo">
                        <div class="footer-logo-mark"><img src="assets/Logo.png" alt="iDEAGO logo"></div>
                        <span class="footer-brand-name">iDEAGO</span>
                    </div>
                    <p class="footer-tagline">A full-service 360�� agency bridging the gap between where you are and where you want to be.</p>
                    <div class="footer-socials">
                        <a href="#" class="social-btn" aria-label="Facebook">
                            <i data-lucide="facebook" style="width:1.25rem;height:1.25rem;"></i>
                        </a>
                        <a href="#" class="social-btn" aria-label="LinkedIn">
                            <i data-lucide="linkedin" style="width:1.25rem;height:1.25rem;"></i>
                        </a>
                        <a href="#" class="social-btn" aria-label="Instagram">
                            <i data-lucide="instagram" style="width:1.25rem;height:1.25rem;"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="footer-col-title">Company</h4>
                    <ul class="footer-links">
                        <li><a href="about" class="footer-link">About Us</a></li>
                        <li><a href="index#impact" class="footer-link">Our Impact</a></li>
                        <li><a href="index#process" class="footer-link">The Process</a></li>
                        <li><a href="index#ecosystem" class="footer-link">Sister Concerns</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="footer-col-title">Services</h4>
                    <ul class="footer-links">
                        <li><a href="service" class="footer-link fl-cyan">Digital &amp; Social</a></li>
                        <li><a href="service" class="footer-link fl-cyan">Creative &amp; Motion</a></li>
                        <li><a href="service" class="footer-link fl-cyan">OVC &amp; TVC Production</a></li>
                        <li><a href="service" class="footer-link fl-cyan">Physical Activation</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="footer-col-title">Get in Touch</h4>
                    <ul class="footer-contact-list">
                        <li class="footer-contact-item">
                            <i data-lucide="map-pin" class="contact-icon" style="width:1.25rem;height:1.25rem;"></i>
                            <span>House 9, Road 3, Block I<br>Banani, Dhaka 1213, Bangladesh</span>
                        </li>
                        <li class="footer-contact-item">
                            <i data-lucide="phone" class="contact-icon" style="width:1.25rem;height:1.25rem;"></i>
                            <a href="tel:+8801842834040">+88 01842 834040</a>
                        </li>
                        <li class="footer-contact-item">
                            <i data-lucide="mail" class="contact-icon" style="width:1.25rem;height:1.25rem;"></i>
                            <a href="mailto:hello@ideago.xyz">hello@ideago.xyz</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>
                    &copy; 2025 iDEAGO Marketing Solutions. All rights reserved.
                    <span class="footer-divider">|</span>
                    Developed by <a href="https://vivagodigital.com" target="_blank" style="color: var(--color-purple); font-weight: 600; text-decoration: none;">Vivago Technologies</a>
                </p>
                <div class="footer-legal">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
    `;

    const footerContainer = document.getElementById('shared-footer');
    if (footerContainer) {
        footerContainer.innerHTML = footerHTML;
    }
}

function initTheme() {
    const themeToggle = document.getElementById('theme-toggle');
    const htmlRoot = document.getElementById('html-root');

    if (localStorage.theme === 'dark' ||
        (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        htmlRoot.classList.add('dark');
    }

    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            htmlRoot.classList.toggle('dark');
            localStorage.theme = htmlRoot.classList.contains('dark') ? 'dark' : 'light';
        });
    }
}

function initMobileMenu() {
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const closeMenuBtn = document.getElementById('close-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    function toggleMenu() {
        if (!mobileMenu) return;
        const isHidden = mobileMenu.classList.contains('hidden-menu');
        mobileMenu.classList.toggle('hidden-menu', !isHidden);
        mobileMenu.classList.toggle('visible-menu', isHidden);
        document.body.style.overflow = isHidden ? 'hidden' : '';
    }

    if (hamburgerBtn) hamburgerBtn.addEventListener('click', toggleMenu);
    if (closeMenuBtn) closeMenuBtn.addEventListener('click', toggleMenu);
    if (mobileLinks) mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));
}

function initPortfolio() {
    const filterPills = document.querySelectorAll('.filter-pill');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    // Filtering
    if (filterPills.length > 0) {
        filterPills.forEach(pill => {
            pill.addEventListener('click', () => {
                // Update active class
                filterPills.forEach(p => p.classList.remove('active'));
                pill.classList.add('active');

                const filterValue = pill.getAttribute('data-filter');

                portfolioItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-industry') === filterValue) {
                        item.style.display = 'block';
                        setTimeout(() => { 
                            item.style.opacity = '1'; 
                            item.style.transform = 'scale(1)'; 
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.95)';
                        setTimeout(() => { item.style.display = 'none'; }, 300);
                    }
                });
            });
        });
    }

    // Modal / Lightbox Logic
    const modal = document.getElementById('portfolio-modal');
    if (!modal) return;
    
    const modalContent = document.getElementById('portfolio-modal-content');
    const closeBtn = document.getElementById('close-modal-btn');

    portfolioItems.forEach(item => {
        item.addEventListener('click', () => {
            const mediaType = item.getAttribute('data-type');
            const mediaSrc = item.getAttribute('data-src');
            
            modalContent.innerHTML = ''; // clear old

            if (mediaType === 'video') {
                modalContent.innerHTML = `<video controls autoplay style="max-width:100%; max-height:90vh;"><source src="${mediaSrc}" type="video/mp4">Your browser does not support the video tag.</video>`;
            } else {
                modalContent.innerHTML = `<img src="${mediaSrc}" alt="Portfolio Full View" style="max-width:100%; max-height:90vh;">`;
            }

            modal.classList.add('active');
            document.body.style.overflow = 'hidden'; // prevent background scrolling
        });
    });

    function closeModal() {
        modal.classList.remove('active');
        document.body.style.overflow = '';
        setTimeout(() => { modalContent.innerHTML = ''; }, 300); // clear after animation
    }

    closeBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
    });
}
