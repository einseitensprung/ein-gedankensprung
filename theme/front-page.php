<?php
/**
 * The front page template — the one-pager itself.
 *
 * front-page.php takes priority over index.php for the site root
 * regardless of the Settings > Reading > "homepage displays" choice,
 * so no extra WordPress configuration is required after activating
 * the theme.
 *
 * @package Ein_Gedankensprung
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

  <div class="hero ink-band">
    <div class="wrap">
      <div class="hero-slider" id="heroSlider" aria-roledescription="Karussell" aria-label="Leistungsversprechen">
        <div class="slides">
          <article class="slide is-active" id="slide-panel-0" role="tabpanel" aria-labelledby="slide-tab-0" tabindex="0">
            <p class="eyebrow">Projektbegleitung · Coaching · Websites</p>
            <div class="leap-stage">
              <svg class="leap-svg" viewBox="0 0 600 300" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <path class="trail" d="M46,190 C190,-10 420,-10 556,150" />
                <g class="takeoff-mark" transform="translate(46,190)">
                  <circle class="takeoff-glow" r="26" />
                  <path class="takeoff-spark" d="M0,-9 C1,-3 3,-1 9,0 C3,1 1,3 0,9 C-1,3 -3,1 -9,0 C-3,-1 -1,-3 0,-9 Z" />
                </g>
                <g class="landing-mark" transform="translate(556,150)">
                  <circle class="landing-glow" r="30" />
                  <circle class="landing-ring" r="13" />
                  <circle class="landing-dot" r="3.5" />
                </g>
              </svg>
              <h1 class="leap-heading">
                <span class="leap-word take-off">Gedanken</span>
                <span class="leap-word landing">Sprung</span>
              </h1>
            </div>
            <p class="tagline">„Ist Ihr Projekt nur noch einen Gedankensprung weit weg?"</p>
            <p class="hero-sub">Lisa Kuhn begleitet Ideen und Projekte von der ersten Überlegung bis zur erfolgreichen Umsetzung – als verlässliche Partnerin für Unterstützung und Inspiration.</p>
          </article>

          <article class="slide" id="slide-panel-1" role="tabpanel" aria-labelledby="slide-tab-1" tabindex="0">
            <p class="eyebrow">Projektmanagement</p>
            <div class="leap-stage">
              <svg class="leap-svg" viewBox="0 0 600 300" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <path class="trail" d="M46,190 C190,-10 420,-10 556,150" />
                <g class="takeoff-mark" transform="translate(46,190)">
                  <circle class="takeoff-glow" r="26" />
                  <path class="takeoff-spark" d="M0,-9 C1,-3 3,-1 9,0 C3,1 1,3 0,9 C-1,3 -3,1 -9,0 C-3,-1 -1,-3 0,-9 Z" />
                </g>
                <g class="landing-mark" transform="translate(556,150)">
                  <circle class="landing-glow" r="30" />
                  <circle class="landing-ring" r="13" />
                  <circle class="landing-dot" r="3.5" />
                </g>
              </svg>
              <h1 class="leap-heading">
                <span class="leap-word take-off">Idee</span>
                <span class="leap-word landing">Umsetzung</span>
              </h1>
            </div>
            <p class="tagline">„Aus der Idee wird ein Plan – aus dem Plan ein Ergebnis."</p>
            <p class="hero-sub">Strukturiertes Projektmanagement für Vorhaben jeder Größe – von der ersten Skizze bis zum erfolgreichen Abschluss.</p>
          </article>

          <article class="slide" id="slide-panel-2" role="tabpanel" aria-labelledby="slide-tab-2" tabindex="0">
            <p class="eyebrow">Prozessanalyse &amp; KPI</p>
            <div class="leap-stage">
              <svg class="leap-svg" viewBox="0 0 600 300" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <path class="trail" d="M46,190 C190,-10 420,-10 556,150" />
                <g class="takeoff-mark" transform="translate(46,190)">
                  <circle class="takeoff-glow" r="26" />
                  <path class="takeoff-spark" d="M0,-9 C1,-3 3,-1 9,0 C3,1 1,3 0,9 C-1,3 -3,1 -9,0 C-3,-1 -1,-3 0,-9 Z" />
                </g>
                <g class="landing-mark" transform="translate(556,150)">
                  <circle class="landing-glow" r="30" />
                  <circle class="landing-ring" r="13" />
                  <circle class="landing-dot" r="3.5" />
                </g>
              </svg>
              <h1 class="leap-heading">
                <span class="leap-word take-off">Chaos</span>
                <span class="leap-word landing">Struktur</span>
              </h1>
            </div>
            <p class="tagline">„Wo Prozesse stocken, entsteht Klarheit."</p>
            <p class="hero-sub">Abläufe durchleuchten, Reibung erkennen und Kennzahlen etablieren, die Erfolg tatsächlich sichtbar machen.</p>
          </article>

          <article class="slide" id="slide-panel-3" role="tabpanel" aria-labelledby="slide-tab-3" tabindex="0">
            <p class="eyebrow">Change-Management &amp; Coaching</p>
            <div class="leap-stage">
              <svg class="leap-svg" viewBox="0 0 600 300" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <path class="trail" d="M46,190 C190,-10 420,-10 556,150" />
                <g class="takeoff-mark" transform="translate(46,190)">
                  <circle class="takeoff-glow" r="26" />
                  <path class="takeoff-spark" d="M0,-9 C1,-3 3,-1 9,0 C3,1 1,3 0,9 C-1,3 -3,1 -9,0 C-3,-1 -1,-3 0,-9 Z" />
                </g>
                <g class="landing-mark" transform="translate(556,150)">
                  <circle class="landing-glow" r="30" />
                  <circle class="landing-ring" r="13" />
                  <circle class="landing-dot" r="3.5" />
                </g>
              </svg>
              <h1 class="leap-heading">
                <span class="leap-word take-off">Wandel</span>
                <span class="leap-word landing">Wirkung</span>
              </h1>
            </div>
            <p class="tagline">„Veränderung gelingt, wenn man sie gemeinsam trägt."</p>
            <p class="hero-sub">Einfühlsame Begleitung durch Veränderungsprozesse – zielorientiert, ehrlich und auf Augenhöhe.</p>
          </article>
        </div>

        <div class="slider-controls">
          <button type="button" class="slider-arrow prev" aria-label="Vorheriger Slide">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 5l-7 7 7 7"/></svg>
          </button>
          <div class="slider-dots" role="tablist" aria-label="Slides">
            <button type="button" class="dot is-active" role="tab" id="slide-tab-0" aria-controls="slide-panel-0" aria-selected="true" aria-label="Gedankensprung"></button>
            <button type="button" class="dot" role="tab" id="slide-tab-1" aria-controls="slide-panel-1" aria-selected="false" aria-label="Projektmanagement"></button>
            <button type="button" class="dot" role="tab" id="slide-tab-2" aria-controls="slide-panel-2" aria-selected="false" aria-label="Prozessanalyse &amp; KPI"></button>
            <button type="button" class="dot" role="tab" id="slide-tab-3" aria-controls="slide-panel-3" aria-selected="false" aria-label="Change-Management"></button>
          </div>
          <button type="button" class="slider-arrow next" aria-label="Nächster Slide">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 5l7 7-7 7"/></svg>
          </button>
        </div>
      </div>

      <div class="hero-actions">
        <a class="btn" href="#kontakt">Kontakt aufnehmen ↗</a>
        <a class="text-link" href="mailto:office@eingedankensprung.at">office@eingedankensprung.at</a>
      </div>
    </div>

    <div class="cred-strip">
      <div class="wrap">
        <span>IPMA-C ZERTIFIZIERTE PROJEKTMANAGERIN</span>
        <span class="sep">·</span>
        <span>SCRUM MASTER</span>
        <span class="sep">·</span>
        <span>IREP REQUIREMENTS ENGINEER</span>
        <span class="sep">·</span>
        <span>20 JAHRE IT-CONSULTING &amp; GESCHÄFTSFÜHRUNG</span>
      </div>
    </div>
  </div>

  <div class="light" id="ueber">
    <div class="wrap">
      <div class="section-head">
        <p class="eyebrow">Über mich</p>
        <h2>Zwanzig Jahre zwischen Idee und Kennzahl</h2>
      </div>

      <div class="about-grid">
        <div class="id-card">
          <div class="id-badge"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/lisa-kuhn.jpg' ); ?>" alt="Mag. Lisa Kuhn" width="320" height="320" loading="lazy"></div>
          <p class="id-name">Mag. Lisa Kuhn</p>
          <p class="id-role">Projektmanagerin &amp; Beraterin</p>
          <dl class="spec-list">
            <div><dt>Studium</dt><dd>Betriebswirtschaft</dd></div>
            <div><dt>Erfahrung</dt><dd>20 Jahre IT-Consulting, Projektmanagement &amp; Geschäftsführung (COO)</dd></div>
            <div><dt>Zertifiziert</dt><dd>IPMA-C, Scrum Master, IREP Requirements Engineer</dd></div>
            <div><dt>Privat</dt><dd>Mutter einer Tochter</dd></div>
          </dl>
        </div>

        <div class="about-copy">
          <p>Lisa Kuhn verwandelt Ideen und Projekte in Realität – und begleitet sie bis zur erfolgreichen Umsetzung. Nach dem Studium der Betriebswirtschaft und rund 20 Jahren in IT-Consulting, Projektmanagement und als Geschäftsführerin kennt sie Projekte aus jeder Perspektive: von der ersten Idee bis zur letzten Kennzahl.</p>
          <p>Sie ist zertifizierte IPMA-C-Projektmanagerin, Scrum Master und IREP-zertifizierte Requirements Engineerin. Privat ist sie Mutter einer Tochter – analytisch denkend, humorvoll und mit echter Freude daran, andere weiterzubringen.</p>
          <blockquote class="pull">Jeder Gedankensprung kann der Beginn einer großen Reise sein.</blockquote>
          <div class="tag-row">
            <span class="tag">IPMA-C</span>
            <span class="tag">Scrum Master</span>
            <span class="tag">IREP</span>
            <span class="tag">COO</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="light" id="leistungen" style="padding-top:0;">
    <div class="wrap">
      <div class="section-head">
        <p class="eyebrow">Leistungen</p>
        <h2>Von der ersten Idee bis zur messbaren Umsetzung</h2>
        <p class="section-sub">Sechs Wege, wie ich Sie und Ihr Projekt konkret weiterbringe.</p>
      </div>

      <div class="services-grid">
        <div class="service-card">
          <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><line x1="3" y1="6" x2="13" y2="6"/><line x1="3" y1="12" x2="19" y2="12"/><line x1="3" y1="18" x2="16" y2="18"/><circle cx="19" cy="12" r="1.6" fill="currentColor" stroke="none"/></svg>
          <h3>Projektmanagement</h3>
          <p>Von der Planung bis zum Abschluss: Ihr Projekt gelingt, unabhängig von Größe oder Branche.</p>
        </div>
        <div class="service-card">
          <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 6h11a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H9l-4 3v-3H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z"/><path d="M20 10h.01"/></svg>
          <h3>Coaching &amp; Sparring</h3>
          <p>Ein ehrlicher Sparringpartner für Ihr operatives Management – analytisch und auf Augenhöhe.</p>
        </div>
        <div class="service-card">
          <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="1.5"/><line x1="3" y1="9" x2="21" y2="9"/><circle cx="6" cy="7" r="0.6" fill="currentColor" stroke="none"/><path d="M9 14l-2 2 2 2"/><path d="M14 14l2 2-2 2"/></svg>
          <h3>Website-Entwicklung</h3>
          <p>Tatkräftige Unterstützung beim Aufbau Ihrer Website, von der Idee bis zum Go-live.</p>
        </div>
        <div class="service-card">
          <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="5" cy="18" r="2"/><circle cx="12" cy="6" r="2"/><circle cx="19" cy="18" r="2"/><path d="M6.6 16.6L10.6 7.6"/><path d="M13.4 7.6L17.4 16.6"/></svg>
          <h3>Prozessanalyse &amp; -optimierung</h3>
          <p>Abläufe durchleuchten, Reibung erkennen und Prozesse spürbar verbessern.</p>
        </div>
        <div class="service-card">
          <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="9" width="6" height="6" rx="1"/><rect x="16" y="9" width="6" height="6" rx="1"/><path d="M8 10c3-6 7-6 10 0"/><path d="M15.5 7l2.5 3-3 1.2"/></svg>
          <h3>Change-Management</h3>
          <p>Veränderung einfühlsam begleiten, ohne das Ziel aus den Augen zu verlieren.</p>
        </div>
        <div class="service-card">
          <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="20" x2="4" y2="12"/><line x1="10" y1="20" x2="10" y2="7"/><line x1="16" y1="20" x2="16" y2="14"/><path d="M4 12l6-5 6 4 6-7" stroke-dasharray="2 3"/></svg>
          <h3>KPI-Entwicklung &amp; -Monitoring</h3>
          <p>Kennzahlen etablieren, die Erfolg tatsächlich sichtbar machen.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="closing ink-band" id="kontakt">
    <svg class="closing-arc" viewBox="0 0 1200 300" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,110 C300,260 500,260 700,140 C900,20 1000,20 1200,90" />
    </svg>
    <div class="wrap closing-inner">
      <p class="eyebrow">Bereit für den nächsten Schritt?</p>
      <h2>Lassen Sie uns landen, wo Ihr Projekt hin soll.</h2>
      <p class="lede">Schreiben Sie mir, rufen Sie an oder schicken Sie eine Nachricht per WhatsApp – ich melde mich zurück.</p>

      <dl class="contact-grid">
        <div class="contact-item">
          <dt>E-Mail</dt>
          <dd><a href="mailto:office@eingedankensprung.at">office@eingedankensprung.at</a></dd>
        </div>
        <div class="contact-item">
          <dt>Telefon &amp; WhatsApp</dt>
          <dd><a href="tel:+436642018094">+43 664 2018094</a></dd>
        </div>
        <div class="contact-item">
          <dt>Adresse</dt>
          <dd>Brandmayerstraße 7a<br>3400 Weidling, Österreich</dd>
        </div>
        <div class="contact-item">
          <dt>LinkedIn</dt>
          <dd><a href="https://www.linkedin.com/in/lisa-kuhn-it/" target="_blank" rel="noopener">lisa-kuhn-it</a></dd>
        </div>
      </dl>
    </div>
  </div>

<?php get_footer(); ?>
