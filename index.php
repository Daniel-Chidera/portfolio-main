<?php
$page_title = "Daniel Chidera — Web Developer & Operations Professional";
$current_page = 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page_title; ?></title>
  <script>
    if (localStorage.getItem('theme') === 'light') {
      document.documentElement.setAttribute('data-theme', 'light');
    }
  </script>
  <link rel="stylesheet" href="assets/css/global.css">
  <link rel="stylesheet" href="assets/css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>

  <?php require 'partials/header.php'; ?>

  <main>

    <section class="hero">
      <div class="container hero-inner">
        <p class="eyebrow" data-aos="fade-down">Web Developer • Full-Stack Development • Digital Solutions</p>
        <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
          I build projects that run without babysitting.
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
          I'm <strong>Daniel Chidera</strong>. I spent years keeping a
          federal aviation agency's communications running with zero
          recorded errors, then brought that same discipline to building
          websites for real businesses, from restaurant brands to bulk
          livestock sellers. Code that doesn't need to be watched.
        </p>
        <div class="hero-actions" data-aos="fade-up" data-aos-delay="300">
          <button type="button" class="btn btn-primary" data-modal-open>
            <span>Let's Talk</span>
          </button>
          <a href="projects.php" class="btn btn-outline">
            <span>See The Work</span>
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </section>

    <section class="about section" id="about">
      <div class="container">

        <div class="about-intro" data-aos="fade-up">
          <p class="section-marker">
            <span class="marker-dash">—</span>
            <span>About</span>
          </p>
          <h2>
            Precision isn't optional when communications can't fail.
            I build the same way.
          </h2>

          <details class="bio-expand">
            <summary>
              <span>Read more about my background</span>
              <i class="fa-solid fa-arrow-down"></i>
            </summary>
            <p class="bio-expand-content">
              I move between two very different modes of work: exact,
              zero-error operational work in a regulated government
              environment, and independent, self-directed client work where
              I own the whole project lifecycle, from first brief to
              deployment. Both taught me the same lesson, that reliability
              is a feature you build in, not something you hope for.
            </p>
          </details>
        </div>

        <hr class="divider" style="margin-bottom: var(--space-6);">

        <div class="about-inner">
          <div class="about-text" data-aos="fade-right">
            <h3 class="about-bio-heading">Hi, I'm Daniel</h3>
            <p>
              I'm a Computer Science graduate with hands-on experience across
              <strong>web development, operations, and client-facing
              work</strong>. I've built and shipped real websites for real
              businesses, an automation tool for scheduling emails, a
              restaurant brand's online presence, a livestock business's
              storefront, and more, while also managing official
              communications at a federal aviation agency without a single
              recorded error.
            </p>
            <p>
              I work primarily in <strong>PHP, MySQL, JavaScript, HTML5, and
              CSS3</strong>. I care about documentation, accuracy, and things
              working the same way every time, not just on launch day.
            </p>

            <div class="about-social">
              <a href="https://github.com/Daniel-Chidera" class="social-link" target="_blank" rel="noopener" aria-label="GitHub">
                <i class="fa-brands fa-github"></i>
              </a>
              <a href="mailto:danielchidera2001@gmail.com" class="social-link" aria-label="Email">
                <i class="fa-regular fa-envelope"></i>
              </a>
              <a href="https://www.linkedin.com/in/daniel-chidera-9b784431b" class="social-link" target="_blank" rel="noopener" aria-label="LinkedIn">
                <i class="fa-brands fa-linkedin"></i>
              </a>
              <a href="https://www.instagram.com/daniel.wanna.be" class="social-link" target="_blank" rel="noopener" aria-label="Instagram">
                <i class="fa-brands fa-instagram"></i>
              </a>
            </div>
          </div>

          <div class="about-photo" data-aos="fade-left" data-aos-delay="100">
            <img src="https://daniel-chidera.github.io/main-portfolio/assets/office.jpg" alt="Daniel Chidera">
          </div>
        </div>

      </div>
    </section>

    <section class="projects section" id="projects">
      <div class="container">

        <div class="section-heading" style="margin-bottom: var(--space-6);">
          <p class="section-marker">
            <span class="marker-dash">—</span>
            <span>Featured Projects</span>
          </p>
        </div>

        <div class="project-list">

          <div class="project-row">
            <div class="project-media" data-aos="fade-right">
              <img src="https://daniel-chidera.github.io/main-portfolio/assets/email-scheduler-preview.png" alt="Email Scheduler project screenshot">
            </div>
            <div class="project-details" data-aos="fade-left">
              <p class="project-name">
                <span class="marker-dash">—</span>
                <span>Email Scheduler</span>
              </p>
              <p class="project-description">
                A PHP-powered automation tool that lets users compose emails,
                set a future delivery time, and have them sent automatically,
                with a confirmation email on success or failure.
              </p>
              <ul class="project-bullets">
                <li>Cron-based job queue triggers scheduled sends without manual intervention</li>
                <li>Confirmation emails fire automatically on both successful delivery and failure</li>
                <li>SMTP integration handles outbound mail reliably across delivery windows</li>
              </ul>
              <p class="project-tech-label">Technologies</p>
              <div class="tag-row">
                <span class="tag-pill">PHP</span>
                <span class="tag-pill">MySQL</span>
                <span class="tag-pill">SMTP</span>
                <span class="tag-pill">Cron Jobs</span>
              </div>
              <div class="project-actions">
                <a href="#" class="btn btn-outline">
                  <i class="fa-solid fa-arrow-up-right-from-square"></i>
                  <span>View Live Project</span>
                </a>
                <a href="#" class="project-link-text">
                  <span>Case Study</span>
                  <i class="fa-solid fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="project-row">
            <div class="project-media" data-aos="fade-left">
              <img src="https://daniel-chidera.github.io/main-portfolio/assets/treehouse.png" alt="Treehouse Afriq project screenshot">
            </div>
            <div class="project-details" data-aos="fade-right">
              <p class="project-name">
                <span class="marker-dash">—</span>
                <span>Treehouse Afriq</span>
              </p>
              <p class="project-description">
                A restaurant website for a Port Harcourt-based brand, built
                to establish an online presence and attract new customers.
              </p>
              <ul class="project-bullets">
                <li>Menu showcase organized for fast browsing on mobile devices</li>
                <li>Brand identity carried through consistent visual design across every page</li>
                <li>Contact section built to convert visitors into direct inquiries</li>
              </ul>
              <p class="project-tech-label">Technologies</p>
              <div class="tag-row">
                <span class="tag-pill">HTML5</span>
                <span class="tag-pill">CSS3</span>
                <span class="tag-pill">JavaScript</span>
              </div>
              <div class="project-actions">
                <a href="#" class="btn btn-outline">
                  <i class="fa-solid fa-arrow-up-right-from-square"></i>
                  <span>View Live Project</span>
                </a>
                <a href="#" class="project-link-text">
                  <span>Case Study</span>
                  <i class="fa-solid fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="project-row" data-aos="fade-up">
            <div class="project-media">
              <img src="https://daniel-chidera.github.io/main-portfolio/assets/mary%20farm.png" alt="Mary's Farm project screenshot">
            </div>
            <div class="project-details">
              <p class="project-name">
                <span class="marker-dash">—</span>
                <span>Mary's Farm</span>
              </p>
              <p class="project-description">
                A website for an animal farm business in Port Harcourt
                selling pigs, broilers, fish, maggot, and eggs, built to help
                the client reach bulk buyers beyond the local market.
              </p>
              <ul class="project-bullets">
                <li>Product catalog structured around bulk order categories</li>
                <li>Built to extend the client's reach beyond word-of-mouth local sales</li>
                <li>Contact flow designed specifically for wholesale buyer inquiries</li>
              </ul>
              <p class="project-tech-label">Technologies</p>
              <div class="tag-row">
                <span class="tag-pill">HTML5</span>
                <span class="tag-pill">CSS3</span>
                <span class="tag-pill">JavaScript</span>
              </div>
              <div class="project-actions">
                <a href="#" class="btn btn-outline">
                  <i class="fa-solid fa-arrow-up-right-from-square"></i>
                  <span>View Live Project</span>
                </a>
                <a href="#" class="project-link-text">
                  <span>Case Study</span>
                  <i class="fa-solid fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="project-row">
            <div class="project-media" data-aos="fade-left">
              <img src="assets/img/new world.png" alt="New World clothing brand screenshot">
            </div>
            <div class="project-details" data-aos="fade-right">
              <p class="project-name">
                <span class="marker-dash">—</span>
                <span>New World</span>
              </p>
              <p class="project-description">
                A full e-commerce site for a modern clothing brand, with a
                PHP and MySQL backend behind an HTML5, CSS3, and JavaScript
                storefront.
              </p>
              <ul class="project-bullets">
                <li>Product catalog organized across men's, women's, and children's wear categories</li>
                <li>Shopping cart and checkout flow backed by a MySQL product and order database</li>
                <li>Built to support seasonal drops, sales campaigns, and new arrivals</li>
              </ul>
              <p class="project-tech-label">Technologies</p>
              <div class="tag-row">
                <span class="tag-pill">PHP</span>
                <span class="tag-pill">MySQL</span>
                <span class="tag-pill">HTML5</span>
                <span class="tag-pill">CSS3</span>
                <span class="tag-pill">JavaScript</span>
              </div>
              <div class="project-actions">
                <a href="https://daniel-chidera.github.io/clothing-brand/" class="btn btn-outline" target="_blank" rel="noopener">
                  <i class="fa-solid fa-arrow-up-right-from-square"></i>
                  <span>View Live Project</span>
                </a>
                <a href="#" class="project-link-text">
                  <span>Case Study</span>
                  <i class="fa-solid fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

        </div>

        <div class="projects-footer">
          <a href="projects.php" class="btn btn-outline">
            <span>See All Projects</span>
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>

      </div>
    </section>

    <section class="tech-stack section">
      <div class="container">
        <p class="section-marker">
          <span class="marker-dash">—</span>
          <span>Tech Stack</span>
        </p>

        <div class="tech-row">
          <p class="tech-category">Languages</p>
          <div class="tech-items">
            <span class="tech-item"><i class="fa-brands fa-php"></i>PHP <span class="tech-level">(Experienced)</span></span>
            <span class="tech-item"><i class="fa-brands fa-js"></i>JavaScript <span class="tech-level">(Experienced)</span></span>
          </div>
        </div>

        <div class="tech-row">
          <p class="tech-category">Frontend</p>
          <div class="tech-items">
            <span class="tech-item"><i class="fa-brands fa-html5"></i>HTML <span class="tech-level">(Experienced)</span></span>
            <span class="tech-item"><i class="fa-brands fa-css3-alt"></i>CSS <span class="tech-level">(Experienced)</span></span>
            <span class="tech-item"><i class="fa-brands fa-react"></i>React <span class="tech-level">(Intermediate)</span></span>
          </div>
        </div>

        <div class="tech-row">
          <p class="tech-category">Backend &amp; Databases</p>
          <div class="tech-items">
            <span class="tech-item"><i class="fa-brands fa-php"></i>PHP</span>
            <span class="tech-item"><i class="fa-solid fa-database"></i>MySQL <span class="tech-level">(Intermediate)</span></span>
            <span class="tech-item"><i class="fa-brands fa-node-js"></i>Node.js <span class="tech-level">(Basic)</span></span>
            <span class="tech-item"><i class="fa-solid fa-server"></i>Express.js <span class="tech-level">(Basic)</span></span>
          </div>
        </div>

        <div class="tech-row">
          <p class="tech-category">Tools</p>
          <div class="tech-items">
            <span class="tech-item"><i class="fa-solid fa-code-branch"></i>Git</span>
            <span class="tech-item"><i class="fa-brands fa-github"></i>GitHub</span>
            <span class="tech-item"><i class="fa-solid fa-file-excel"></i>Excel</span>
            <span class="tech-item"><i class="fa-solid fa-file-word"></i>Word</span>
            <span class="tech-item"><i class="fa-brands fa-google"></i>Google Workspace</span>
          </div>
        </div>
      </div>
    </section>

    <section class="experience section">
      <div class="container">
        <p class="section-marker">
          <span class="marker-dash">—</span>
          <span>Experience</span>
        </p>

        <div class="experience-list">
          <div class="experience-entry" data-aos="fade-right">
            <div class="entry-meta">
              <span>Freelance</span>
              <span>September 2024 — Present</span>
            </div>
            <h3>Web Developer, Self Employed</h3>
            <p>
              Designed and developed custom websites for small business
              clients, handling the full project lifecycle from requirements
              gathering to deployment. Wrote clean frontend and backend code
              using PHP, MySQL, JavaScript, HTML, and CSS, ensuring cross
              device functionality and responsiveness. Managed client
              relationships independently from brief through final delivery.
            </p>
          </div>

          <div class="experience-entry" data-aos="fade-left">
            <div class="entry-meta">
              <span>Nigerian Airspace Management Agency (NAMA)</span>
              <span>July 2025 — May 2026</span>
            </div>
            <h3>Communication Operations Staff</h3>
            <p>
              Coordinated and transmitted official communications across
              local and international stations accurately and on time with
              zero recorded errors. Maintained structured operational records
              and filing systems, and managed full independent shifts in a
              regulated government environment.
            </p>
          </div>

          <div class="experience-entry" data-aos="fade-up">
            <div class="entry-meta">
              <span>NIIT Tech Academy, Festac, Lagos</span>
              <span>March 2023 — September 2023</span>
            </div>
            <h3>Web Development Intern</h3>
            <p>
              Completed intensive full stack web development training
              covering frontend and backend technologies. Updated and
              maintained operational data and inventory records, and
              contributed to team projects under professional supervision.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="education section">
      <div class="container">
        <p class="section-marker">
          <span class="marker-dash">—</span>
          <span>Education &amp; Certifications</span>
        </p>

        <div class="education-list">
          <div class="education-entry" data-aos="fade-up">
            <p class="education-label">Education</p>
            <div>
              <h3>BSc Computer Science</h3>
              <p>Godfrey Okoye University, Enugu State</p>
            </div>
            <span class="education-date">2020 — 2024</span>
          </div>

          <div class="education-entry" data-aos="fade-up">
            <p class="education-label">Certifications</p>
            <div>
              <h3>Full-Stack Web Development</h3>
              <p>NIIT Tech Academy</p>
            </div>
            <span class="education-date">2023</span>
          </div>

          <div class="education-entry" data-aos="fade-up">
            <p class="education-label">Certifications</p>
            <div>
              <h3>Full-Stack Web Development</h3>
              <p>Udemy — Angela Yu</p>
            </div>
            <span class="education-date">2024</span>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php require 'partials/footer.php'; ?>
  <?php require 'partials/modal.php'; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="assets/js/global.js"></script>
</body>
</html>
