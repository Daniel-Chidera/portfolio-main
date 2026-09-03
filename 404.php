<?php
$page_title = "Page Not Found — Daniel Chidera";
$page_description = "The page you're looking for doesn't exist or may have moved.";
$current_page = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name="robots" content="noindex">

  <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">

  <script>
    if (localStorage.getItem('theme') === 'light') {
      document.documentElement.setAttribute('data-theme', 'light');
    }
  </script>
  <link rel="stylesheet" href="assets/css/global.css">
  <link rel="stylesheet" href="assets/css/404.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

  <?php require 'partials/header.php'; ?>

  <main>
    <section class="not-found">
      <div class="container not-found-inner">
        <p class="not-found-code">404</p>
        <h1>We can't find the page you're looking for</h1>
        <p class="not-found-subtitle">
          It may have been moved, renamed, or never existed in the first place.
        </p>
        <div class="not-found-actions">
          <a href="index.php" class="btn btn-primary">
            <span>Take Me Home</span>
          </a>
          <button type="button" class="btn btn-outline" data-modal-open>
            <span>Get In Touch</span>
          </button>
        </div>
      </div>
    </section>
  </main>

  <?php require 'partials/footer.php'; ?>
  <?php require 'partials/modal.php'; ?>

  <script src="assets/js/global.js"></script>
</body>
</html>
