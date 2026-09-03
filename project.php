<?php
require 'data/project-details.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$project = isset($projects_data[$slug]) ? $projects_data[$slug] : null;

$current_page = 'projects';
$page_title = $project ? $project['name'] . ' — Daniel Chidera' : 'Project Not Found — Daniel Chidera';
$page_description = $project ? $project['tagline'] : 'This case study could not be found.';
$page_image = $project ? $project['image'] : 'https://danielchidera.com/assets/img/office.jpg';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">

  <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">

  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $page_title; ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($page_image); ?>">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $page_title; ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="<?php echo htmlspecialchars($page_image); ?>">

  <script>
    if (localStorage.getItem('theme') === 'light') {
      document.documentElement.setAttribute('data-theme', 'light');
    }
  </script>
  <link rel="stylesheet" href="assets/css/global.css">
  <link rel="stylesheet" href="assets/css/project.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>

  <?php require 'partials/header.php'; ?>

  <main>

    <?php if (!$project): ?>

      <section class="section">
        <div class="container" style="text-align: center;">
          <p class="section-marker" style="justify-content: center;">
            <span class="marker-dash">—</span>
            <span>Not Found</span>
          </p>
          <h1 style="margin-bottom: var(--space-4);">Project not found.</h1>
          <p style="color: var(--color-muted); margin-bottom: var(--space-5);">
            That case study doesn't exist, or the link may be out of date.
          </p>
          <a href="projects.php" class="btn btn-outline">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Projects</span>
          </a>
        </div>
      </section>

    <?php else: ?>

      <section class="case-hero">
        <div class="container">
          <a href="projects.php" class="case-back-link">
            <i class="fa-solid fa-arrow-left"></i>
            <span>All Projects</span>
          </a>

          <div class="case-media">
            <img src="<?php echo $project['image']; ?>" alt="<?php echo htmlspecialchars($project['name']); ?> screenshot">
          </div>

          <div class="case-badges">
            <span class="case-badge"><?php echo htmlspecialchars($project['badge']); ?></span>
            <span class="case-badge-status">
              <i class="fa-solid fa-circle"></i>
              <span><?php echo htmlspecialchars($project['status']); ?></span>
            </span>
          </div>

          <h1 class="case-title"><?php echo htmlspecialchars($project['name']); ?></h1>
          <p class="case-tagline"><?php echo htmlspecialchars($project['tagline']); ?></p>
        </div>
      </section>

      <section class="section" style="padding-top: 0;">
        <div class="container">
          <div class="case-layout">

            <div class="case-body">

              <div class="case-block case-overview" data-aos="fade-up">
                <p class="case-block-heading">
                  <span class="step-number">01</span>
                  <span>Overview</span>
                  <hr>
                </p>
                <p><?php echo htmlspecialchars($project['overview']); ?></p>
              </div>

              <div class="case-block" data-aos="fade-up">
                <p class="case-block-heading">
                  <span class="step-number">02</span>
                  <span>Key Features</span>
                  <hr>
                </p>
                <div class="features-table">
                  <?php foreach ($project['features'] as $index => $feature): ?>
                    <div class="feature-item">
                      <span class="feature-number">/<?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></span>
                      <p><?php echo htmlspecialchars($feature); ?></p>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>

              <div class="case-block" data-aos="fade-up">
                <p class="case-block-heading">
                  <span class="step-number">03</span>
                  <span>Tech Stack</span>
                  <hr>
                </p>
                <div class="tag-row">
                  <?php foreach ($project['tech'] as $tech): ?>
                    <span class="tag-pill"><?php echo htmlspecialchars($tech); ?></span>
                  <?php endforeach; ?>
                </div>
              </div>

              <div class="case-block" data-aos="fade-up" style="margin-bottom: 0;">
                <p class="case-block-heading">
                  <span class="step-number">04</span>
                  <span>Team</span>
                  <hr>
                </p>
                <div class="case-team">
                  <div class="case-team-person">
                    <span class="case-team-avatar">DC</span>
                    <div>
                      <h3>Daniel Chidera</h3>
                      <p>Full-Stack Developer</p>
                    </div>
                  </div>
                  <a href="https://github.com/Daniel-Chidera" class="social-link" target="_blank" rel="noopener" aria-label="GitHub">
                    <i class="fa-brands fa-github"></i>
                  </a>
                </div>
              </div>

            </div>

            <aside class="case-sidebar" data-aos="fade-up">
              <div class="case-meta-card">
                <p class="case-meta-label">Client</p>
                <p class="case-meta-value"><?php echo htmlspecialchars($project['client']); ?></p>
              </div>
              <div class="case-meta-card">
                <p class="case-meta-label">Type</p>
                <p class="case-meta-value"><?php echo htmlspecialchars($project['type']); ?></p>
              </div>
              <div class="case-meta-card">
                <p class="case-meta-label">Status</p>
                <p class="case-meta-value"><?php echo htmlspecialchars($project['status']); ?></p>
              </div>
              <div class="case-meta-card">
                <p class="case-meta-label">Stack</p>
                <p class="case-meta-value"><?php echo count($project['tech']); ?> technologies</p>
              </div>

              <?php if ($project['live_url'] !== '#'): ?>
                <a href="<?php echo htmlspecialchars($project['live_url']); ?>" class="btn btn-primary" target="_blank" rel="noopener" style="justify-content: center;">
                  <span>View Live Project</span>
                  <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
              <?php else: ?>
                <p class="case-unavailable-note">
                  <i class="fa-solid fa-circle-info"></i>
                  <span>Not publicly available</span>
                </p>
              <?php endif; ?>

              <?php if ($project['source_url'] !== '#'): ?>
                <a href="<?php echo htmlspecialchars($project['source_url']); ?>" class="btn btn-outline" target="_blank" rel="noopener" style="justify-content: center;">
                  <span>View Source</span>
                  <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
              <?php endif; ?>
            </aside>

          </div>
        </div>
      </section>

    <?php endif; ?>

  </main>

  <?php require 'partials/footer.php'; ?>
  <?php require 'partials/modal.php'; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="assets/js/global.js"></script>
</body>
</html>
