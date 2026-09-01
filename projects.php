<?php
$page_title = "Projects — Daniel Chidera";
$current_page = 'projects';
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
  <link rel="stylesheet" href="assets/css/projects.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>

  <?php require 'partials/header.php'; ?>

  <main>

    <section class="projects-hero">
      <div class="container projects-hero-inner">
        <p class="section-marker" style="justify-content: center;">
          <span class="marker-dash">—</span>
          <span>All Projects</span>
        </p>
        <h1>Real projects, real problems.</h1>
        <p>From automating emails to helping a livestock business reach bulk buyers, here's what I've shipped.</p>
      </div>
    </section>

    <section class="section" style="padding-top: 0;">
      <div class="container">
        <div class="project-grid">

          <div class="project-card" data-aos="fade-up">
            <div class="project-card-header">
              <h2>A PHP-powered automation tool for scheduling emails</h2>
              <a href="project.php?slug=email-scheduler" class="project-card-arrow" aria-label="View Email Scheduler">
                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
            <div class="project-card-media">
              <img src="https://daniel-chidera.github.io/main-portfolio/assets/email-scheduler-preview.png" alt="Email Scheduler project screenshot">
            </div>
            <h3 class="project-card-name">Email Scheduler</h3>
            <p class="project-card-description">
              Lets users compose emails, set a future delivery time, and have
              them sent automatically, with a confirmation email on success
              or failure.
            </p>
            <div class="project-card-tags">
              <span class="tag-pill">PHP</span>
              <span class="tag-pill">MySQL</span>
              <span class="tag-pill">SMTP</span>
              <span class="tag-pill">Cron Jobs</span>
            </div>
          </div>

          <div class="project-card" data-aos="fade-up">
            <div class="project-card-header">
              <h2>Full company website for a Lagos-based tech startup</h2>
              <a href="project.php?slug=ntds" class="project-card-arrow" aria-label="View NTDS">
                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
            <div class="project-card-media">
              <img src="https://daniel-chidera.github.io/main-portfolio/assets/ntds-preview.png" alt="NTDS Company Website screenshot">
            </div>
            <h3 class="project-card-name">NTDS — Tech Startup Site</h3>
            <p class="project-card-description">
              Full company website for NextGen Technova Digital Solutions.
              Features service showcases, a team section, process workflow,
              FAQ, and a staff login portal.
            </p>
            <div class="project-card-tags">
              <span class="tag-pill">HTML5</span>
              <span class="tag-pill">CSS3</span>
              <span class="tag-pill">JavaScript</span>
            </div>
          </div>

          <div class="project-card" data-aos="fade-up">
            <div class="project-card-header">
              <h2>A full restaurant website for a Lagos-based food brand</h2>
              <a href="project.php?slug=eatery-247" class="project-card-arrow" aria-label="View Eatery 24/7">
                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
            <div class="project-card-media">
              <img src="https://daniel-chidera.github.io/main-portfolio/assets/eatery-preview.png" alt="Eatery 24/7 Restaurant Website screenshot">
            </div>
            <h3 class="project-card-name">Eatery 24/7</h3>
            <p class="project-card-description">
              Includes an online menu, food ordering system, table
              reservations, and a contact form. A volunteer project for a
              real brand.
            </p>
            <div class="project-card-tags">
              <span class="tag-pill">HTML5</span>
              <span class="tag-pill">CSS3</span>
              <span class="tag-pill">JavaScript</span>
            </div>
          </div>

          <div class="project-card" data-aos="fade-up">
            <div class="project-card-header">
              <h2>A restaurant website for a Port Harcourt-based brand</h2>
              <a href="project.php?slug=treehouse-afriq" class="project-card-arrow" aria-label="View Treehouse Afriq">
                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
            <div class="project-card-media">
              <img src="https://daniel-chidera.github.io/main-portfolio/assets/treehouse.png" alt="Treehouse Afriq project screenshot">
            </div>
            <h3 class="project-card-name">Treehouse Afriq</h3>
            <p class="project-card-description">
              Built to establish an online presence and attract new
              customers, with a menu showcase, brand identity, and contact
              section.
            </p>
            <div class="project-card-tags">
              <span class="tag-pill">HTML5</span>
              <span class="tag-pill">CSS3</span>
              <span class="tag-pill">JavaScript</span>
            </div>
          </div>

          <div class="project-card" data-aos="fade-up">
            <div class="project-card-header">
              <h2>An animal farm business site built to reach bulk buyers</h2>
              <a href="project.php?slug=marys-farm" class="project-card-arrow" aria-label="View Mary's Farm">
                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
            <div class="project-card-media">
              <img src="https://daniel-chidera.github.io/main-portfolio/assets/mary%20farm.png" alt="Mary's Farm project screenshot">
            </div>
            <h3 class="project-card-name">Mary's Farm</h3>
            <p class="project-card-description">
              A website for an animal farm business in Port Harcourt selling
              pigs, broilers, fish, maggot, and eggs, built to help the client
              reach bulk buyers beyond the local market.
            </p>
            <div class="project-card-tags">
              <span class="tag-pill">HTML5</span>
              <span class="tag-pill">CSS3</span>
              <span class="tag-pill">JavaScript</span>
            </div>
          </div>

          <div class="project-card" data-aos="fade-up">
            <div class="project-card-header">
              <h2>A full e-commerce site for a modern clothing brand</h2>
              <a href="project.php?slug=new-world" class="project-card-arrow" aria-label="View New World">
                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
            <div class="project-card-media">
              <img src="assets/img/new%20world.png" alt="New World clothing brand screenshot">
            </div>
            <h3 class="project-card-name">New World</h3>
            <p class="project-card-description">
              A PHP and MySQL backend behind an HTML5, CSS3, and JavaScript
              storefront, with product categories for men's, women's, and
              children's wear, a shopping cart, and checkout flow.
            </p>
            <div class="project-card-tags">
              <span class="tag-pill">PHP</span>
              <span class="tag-pill">MySQL</span>
              <span class="tag-pill">HTML5</span>
              <span class="tag-pill">CSS3</span>
              <span class="tag-pill">JavaScript</span>
            </div>
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
