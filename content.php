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
            <div class="content-filter-wrap">
                <button class="filter-btn active" onclick="filterContent('all')">All Work</button>
                <button class="filter-btn" onclick="filterContent('poster')">Posters</button>
                <button class="filter-btn" onclick="filterContent('banner')">Banners</button>
                <button class="filter-btn" onclick="filterContent('flyer')">Flyers</button>
                <button class="filter-btn" onclick="filterContent('video')">Videos</button>
            </div>

            <!-- Grid -->
            <div class="portfolio-grid" id="portfolio-grid">

                <!-- Poster 1 (Tall) -->
                <div class="content-item tall" data-category="poster">
                    <div class="content-media">
                        <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?auto=format&fit=crop&q=80&w=800"
                            alt="Creative Poster">
                    </div>
                    <div class="content-overlay">
                        <span class="content-cat">Poster</span>
                        <h3 class="content-title">Brand Identity Concept</h3>
                    </div>
                </div>

                <!-- Video 1 (Wide) -->
                <div class="content-item wide" data-category="video">
                    <div class="content-media">
                        <img src="https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?auto=format&fit=crop&q=80&w=1200"
                            alt="Video Placeholder">
                        <div class="video-play-hint">
                            <i data-lucide="play" fill="white"></i>
                        </div>
                    </div>
                    <div class="content-overlay">
                        <span class="content-cat">Cinematic</span>
                        <h3 class="content-title">Global Brand TVC</h3>
                    </div>
                </div>

                <!-- Banner 1 -->
                <div class="content-item" data-category="banner">
                    <div class="content-media">
                        <img src="https://images.unsplash.com/photo-1542744094-24638eff58bb?auto=format&fit=crop&q=80&w=800"
                            alt="Web Banner">
                    </div>
                    <div class="content-overlay">
                        <span class="content-cat">Banner</span>
                        <h3 class="content-title">SaaS Launch Campaign</h3>
                    </div>
                </div>

                <!-- Flyer 1 -->
                <div class="content-item" data-category="flyer">
                    <div class="content-media">
                        <img src="https://images.unsplash.com/photo-1586717791821-3f44a563dc4c?auto=format&fit=crop&q=80&w=800"
                            alt="Flyer Design">
                    </div>
                    <div class="content-overlay">
                        <span class="content-cat">Flyer</span>
                        <h3 class="content-title">Event Outreach Material</h3>
                    </div>
                </div>

                <!-- Poster 2 -->
                <div class="content-item" data-category="poster">
                    <div class="content-media">
                        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?auto=format&fit=crop&q=80&w=800"
                            alt="Minimal Poster">
                    </div>
                    <div class="content-overlay">
                        <span class="content-cat">Poster</span>
                        <h3 class="content-title">Minimalist Art Series</h3>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="content-item" data-category="video">
                    <div class="content-media">
                        <img src="https://images.unsplash.com/photo-1536240478700-b869070f9279?auto=format&fit=crop&q=80&w=800"
                            alt="Social Video">
                        <div class="video-play-hint">
                            <i data-lucide="play" fill="white"></i>
                        </div>
                    </div>
                    <div class="content-overlay">
                        <span class="content-cat">Motion</span>
                        <h3 class="content-title">Social Media Hook</h3>
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
         SCRIPTS
    ════════════════════════════════════════════════ -->
    <script src="assets/Script.js"></script>
    <script>
        function filterContent(category) {
            const items = document.querySelectorAll('.content-item');
            const buttons = document.querySelectorAll('.filter-btn');

            // Update buttons
            buttons.forEach(btn => {
                btn.classList.remove('active');
                if (btn.innerText.toLowerCase().includes(category) || (category === 'all' && btn.innerText.includes('All'))) {
                    btn.classList.add('active');
                }
            });

            // Filter items
            items.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                    setTimeout(() => { item.style.opacity = '1'; item.style.transform = 'scale(1)'; }, 10);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.95)';
                    setTimeout(() => { item.style.display = 'none'; }, 300);
                }
            });
        }
    </script>

</body>

</html>