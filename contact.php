<!DOCTYPE html>
<html lang="en" id="html-root">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Initiate Connection | Contact iDEAGO</title>
    <meta name="description"
        content="Ready for total market dominance? Contact iDEAGO's HQ in Bangladesh, Singapore, or Thailand. Let's build your growth engine together.">

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
         CONTACT HERO
    ════════════════════════════════════════════════ -->
    <header class="service-hero" style="min-height: 70vh;">
        <!-- Background Animations -->
        <div class="blob-bg" style="top:0; left:0;"></div>
        <div class="blob-bg blob-cyan blob-delay-2" style="top:0; right:0;"></div>
        <div class="blob-bg blob-purple blob-delay-4" style="bottom:-8rem; left:5rem;"></div>
        <div class="hero-grid-bg"></div>

        <div class="container">
            <div class="hero-badge">
                <span class="ping-dot"></span>
                Global Command Center
            </div>
            <h1 class="hero-title font-display">
                INITIATE <br>
                <span class="text-gradient-purple-rose">CONNECTION</span>
            </h1>
            <p class="hero-subtitle">
                Your journey to dominance begins here. Reach out to our strategists
                across any of our global hubs and let's deploy your 360° arsenal.
            </p>
        </div>
    </header>

    <!-- ════════════════════════════════════════════════
         CONTACT GRID SECTION
    ════════════════════════════════════════════════ -->
    <section class="section-impact" style="padding-top: 0; padding-bottom: 8rem;">
        <div class="container">
            <div class="contact-layout-grid">

                <!-- Left: Office Info -->
                <div class="contact-info-col">

                    <!-- Bangladesh -->
                    <div class="office-card oc-bd">
                        <span class="office-tag">Headquarters</span>
                        <h3 class="office-title">Bangladesh</h3>
                        <div class="office-details">
                            <div class="off-detail-item">
                                <i data-lucide="map-pin"></i>
                                <span>3rd Floor, House 12, Road 4, Sector 3, Uttara, Dhaka 1230</span>
                            </div>
                            <div class="off-detail-item">
                                <i data-lucide="phone"></i>
                                <span>+880 1783 756185</span>
                            </div>
                            <div class="off-detail-item">
                                <i data-lucide="mail"></i>
                                <span>hello@ideago.xyz</span>
                            </div>
                        </div>
                    </div>

                    <!-- Singapore/Thailand -->
                    <div class="office-card oc-sg">
                        <span class="office-tag">Strategic Hubs</span>
                        <h3 class="office-title">Singapore & Thailand</h3>
                        <div class="office-details">
                            <div class="off-detail-item">
                                <i data-lucide="globe"></i>
                                <span>Multi-regional support for South East Asian market scaling.</span>
                            </div>
                            <div class="off-detail-item">
                                <i data-lucide="mail"></i>
                                <span>global@ideago.xyz</span>
                            </div>
                        </div>
                    </div>

                    <!-- Social Presence -->
                    <div class="office-card oc-th">
                        <span class="office-tag">Connectivity</span>
                        <h3 class="office-title">Follow the Force</h3>
                        <div class="team-premium-socials" style="justify-content: flex-start; margin-top: 1rem;">
                            <a href="#" class="social-circle-btn"><i data-lucide="facebook"></i></a>
                            <a href="#" class="social-circle-btn"><i data-lucide="linkedin"></i></a>
                            <a href="#" class="social-circle-btn"><i data-lucide="instagram"></i></a>
                            <a href="#" class="social-circle-btn"><i data-lucide="twitter"></i></a>
                        </div>
                    </div>

                </div>

                <!-- Right: Contact Form -->
                <div class="contact-form-wrap">
                    <div class="contact-form-card">
                        <div class="form-header">
                            <h2 class="form-title">Send a Brief</h2>
                            <p class="form-subtitle">Tell us about your project goals and we'll get back to you within
                                24 hours.</p>
                        </div>

                        <form id="contact-form">
                            <div class="form-group-grid">
                                <div class="form-group">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" id="contact-name" class="form-input" placeholder="Your Name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" id="contact-email" class="form-input"
                                        placeholder="example@mail.com" required>
                                </div>
                            </div>

                            <div class="form-group-grid">
                                <div class="form-group">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" id="contact-phone" class="form-input"
                                        placeholder="+880 1234 567890">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Service Required</label>
                                    <input type="text" id="contact-service" class="form-input"
                                        placeholder="e.g. Digital Marketing" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Mission Message</label>
                                <textarea id="contact-message" class="form-input"
                                    placeholder="Describe your goals..."></textarea>
                            </div>

                            <button type="submit" id="submit-btn" class="btn-form-submit">
                                <span class="btn-text">Deploy Message</span>
                                <i data-lucide="send" class="btn-icon" style="width:1.25rem;height:1.25rem;"></i>
                            </button>

                            <div id="form-feedback"
                                style="margin-top: 1.5rem; padding: 1rem; border-radius: 8px; display: none; text-align: center; font-size: 0.9rem; font-weight: 600;">
                            </div>
                        </form>

                        <script>
                            document.getElementById('contact-form').addEventListener('submit', async function (e) {
                                e.preventDefault();

                                const submitBtn = document.getElementById('submit-btn');
                                const btnText = submitBtn.querySelector('.btn-text');
                                const feedback = document.getElementById('form-feedback');

                                // Reset feedback
                                feedback.style.display = 'none';
                                feedback.className = '';

                                // Loading state
                                btnText.innerHTML = 'Deploying...';
                                submitBtn.disabled = true;
                                submitBtn.style.opacity = '0.7';

                                const nameValue = document.getElementById('contact-name').value.trim();
                                const nameParts = nameValue.split(' ');
                                const firstName = nameParts[0] || '';
                                const lastName = nameParts.slice(1).join(' ') || '';

                                const formData = {
                                    firstName: firstName,
                                    lastName: lastName,
                                    email: document.getElementById('contact-email').value,
                                    phone: document.getElementById('contact-phone').value,
                                    service: document.getElementById('contact-service').value,
                                    message: document.getElementById('contact-message').value
                                };

                                try {
                                    const response = await fetch('send_email.php', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json'
                                        },
                                        body: JSON.stringify(formData)
                                    });

                                    const result = await response.json();

                                    if (result.success) {
                                        feedback.innerHTML = 'Mission Successful! Your brief has been received.';
                                        feedback.style.background = 'rgba(34, 197, 94, 0.1)';
                                        feedback.style.color = '#22c55e';
                                        feedback.style.display = 'block';
                                        this.reset();
                                    } else {
                                        throw new Error(result.message || 'Transmission failed.');
                                    }
                                } catch (error) {
                                    feedback.innerHTML = 'Transmission Error: ' + error.message;
                                    feedback.style.background = 'rgba(239, 68, 68, 0.1)';
                                    feedback.style.color = '#ef4444';
                                    feedback.style.display = 'block';
                                } finally {
                                    btnText.innerHTML = 'Deploy Message';
                                    submitBtn.disabled = false;
                                    submitBtn.style.opacity = '1';
                                }
                            });
                        </script>
                    </div>
                </div>

            </div>
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

</body>

</html>