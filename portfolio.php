<!DOCTYPE html>
<html lang="en" id="html-root">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Content | iDEAGO Creative Showcase</title>
    <meta name="description"
        content="Dive into iDEAGO's creative factory. Explore our portfolio of high-impact posters, banners, flyers, and cinematic video productions.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;600&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/Style.css">
</head>

<body>

    <!-- ════════════════════════════════════════════════
         NAVIGATION (Handled by Protocol)
    ════════════════════════════════════════════════ -->
    <div id="shared-nav"></div>

    <!-- ════════════════════════════════════════════════
         CONTENT HERO
    ════════════════════════════════════════════════ -->
    <header class="service-hero">
        <!-- Background Animations -->
        <div class="blob-bg" style="top:0; left:0;"></div>
        <div class="blob-bg blob-cyan blob-delay-2" style="top:0; right:0;"></div>
        <div class="blob-bg blob-purple blob-delay-4" style="bottom:-8rem; left:5rem;"></div>
        <div class="hero-grid-bg"></div>

        <div class="container">
            <div class="hero-badge">
                <span class="ping-dot"></span>
                The Creative Factory
            </div>
            <h1 class="hero-title font-display">
                VISUAL <br>
                <span class="text-gradient-purple-rose">MASTERPIECES</span>
            </h1>
            <p class="hero-subtitle">
                Where data meets high-end aesthetics. Explore our arsenal of
                content designed to capture attention and drive dominance
                across every medium.
            </p>
        </div>
    </header>

    <!-- ════════════════════════════════════════════════
         PORTFOLIO SECTION
    ════════════════════════════════════════════════ -->
    <section class="section-impact" style="padding-top: 0;">
        <div class="container">

            <!-- Filters -->
            <div class="portfolio-filter-nav">
                <button class="filter-pill active" data-filter="all">All Industries</button>
                <button class="filter-pill" data-filter="healthcare">HealthCare</button>
                <button class="filter-pill" data-filter="real-estate">Real Estate</button>
                <button class="filter-pill" data-filter="education">Education</button>
                <button class="filter-pill" data-filter="it-solution">IT Product Solution</button>
                <button class="filter-pill" data-filter="brand-marketing">Brand Marketing</button>
                <button class="filter-pill" data-filter="hotel-tourism">Hotel & Tourism</button>
                <button class="filter-pill" data-filter="printable">Creative Printable</button>
            </div>

            <!-- Grid -->
            <div class="portfolio-grid" id="portfolio-grid">

                <!-- HealthCare Item (Tall) -->
                <div class="content-item portfolio-item tall bento-card" data-industry="healthcare" data-type="image" data-src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=80&w=800">
                    <div class="content-media">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=80&w=800" alt="HealthCare Creative">
                    </div>
                    <div class="content-overlay">
                        <span class="content-cat">Digital Poster</span>
                        <h3 class="content-title">MediCare Campaign</h3>
                    </div>
                </div>

                <!-- Real Estate Item (Wide) -->
                <div class="content-item portfolio-item wide bento-card" data-industry="real-estate" data-type="video" data-src="https://www.w3schools.com/html/mov_bbb.mp4">
                    <div class="content-media">
                        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&q=80&w=1200" alt="Real Estate Promo">
                        <div class="video-play-hint">
                            <i data-lucide="play" fill="white"></i>
                        </div>
                    </div>
                    <div class="content-overlay">
                        <span class="content-cat">Cinematic Video</span>
                        <h3 class="content-title">Luxury Villas Promo</h3>
                    </div>
                </div>

                <!-- Education Item -->
                <div class="content-item portfolio-item bento-card" data-industry="education" data-type="image" data-src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&q=80&w=800">
                    <div class="content-media">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&q=80&w=800" alt="Education Banner">
                    </div>
                    <div class="content-overlay">
                        <span class="content-cat">Social Banner</span>
                        <h3 class="content-title">University Admissions</h3>
                    </div>
                </div>

                <!-- IT Product Solution Item -->
                <div class="content-item portfolio-item bento-card" data-industry="it-solution" data-type="image" data-src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800">
                    <div class="content-media">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800" alt="IT Solutions">
                    </div>
                    <div class="content-overlay">
                        <span class="content-cat">App Interface</span>
                        <h3 class="content-title">SaaS Dashboard</h3>
                    </div>
                </div>

                <!-- Brand Marketing Item (Tall) -->
                <div class="content-item portfolio-item tall bento-card" data-industry="brand-marketing" data-type="image" data-src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=800">
                    <div class="content-media">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=800" alt="Brand Marketing Strategy">
                    </div>
                    <div class="content-overlay">
                        <span class="content-cat">Campaign Strategy</span>
                        <h3 class="content-title">Rebranding Rollout</h3>
                    </div>
                </div>

                <!-- Hotel & Tourism Item -->
                <div class="content-item portfolio-item bento-card" data-industry="hotel-tourism" data-type="image" data-src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&q=80&w=800">
                    <div class="content-media">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&q=80&w=800" alt="Hotel Resort">
                    </div>
                    <div class="content-overlay">
                        <span class="content-cat">Flyer</span>
                        <h3 class="content-title">Summer Getaway</h3>
                    </div>
                </div>

                <!-- Creative Printable Item -->
                <div class="content-item portfolio-item bento-card" data-industry="printable" data-type="image" data-src="https://images.unsplash.com/photo-1586717791821-3f44a563dc4c?auto=format&fit=crop&q=80&w=800">
                    <div class="content-media">
                        <img src="https://images.unsplash.com/photo-1586717791821-3f44a563dc4c?auto=format&fit=crop&q=80&w=800" alt="Printable Brochure">
                    </div>
                    <div class="content-overlay">
                        <span class="content-cat">Printable</span>
                        <h3 class="content-title">Corporate Brochure</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         CTA: COLLABORATION
    ════════════════════════════════════════════════ -->
    <section class="section-cta">
        <div class="blob-bg blob-yellow" style="top:50%;left:50%;transform:translate(-50%,-50%);"></div>
        <div class="cta-texture"></div>
        <div class="cta-inner">
            <h2 class="cta-title font-display">Need Custom <br>Creative Work?</h2>
            <p class="cta-subtitle">Our design warriors are ready to bring your vision to life.</p>
            <a href="contact.php" class="btn-cta-main">
                Let's Talk Design
                <i data-lucide="arrow-right" style="width:1.25rem;height:1.25rem;"></i>
            </a>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         FOOTER (Handled by Protocol)
    ════════════════════════════════════════════════ -->
    <div id="shared-footer"></div>

    <!-- ════════════════════════════════════════════════
         SCRIPTS & MODALS
    ════════════════════════════════════════════════ -->
    <!-- Lightbox Modal -->
    <div id="portfolio-modal" class="portfolio-modal">
        <button id="close-modal-btn" class="btn-close-modal" aria-label="Close modal">
            <i data-lucide="x" style="width:1.5rem;height:1.5rem;"></i>
        </button>
        <div id="portfolio-modal-content" class="portfolio-modal-content">
            <!-- Media injected here -->
        </div>
    </div>

    <script src="assets/Script.js"></script>

</body>

</html>