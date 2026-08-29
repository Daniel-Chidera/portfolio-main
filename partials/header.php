  <header class="site-header" data-header>
    <div class="container header-inner">
      <a href="index.php" class="logo">Daniel Chidera</a>

      <nav class="nav" data-nav-menu>
        <ul>
          <li><a href="index.php" class="<?php echo ($current_page ?? '') === 'home' ? 'is-active' : ''; ?>">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="projects.php" class="<?php echo ($current_page ?? '') === 'projects' ? 'is-active' : ''; ?>">Projects</a></li>
          <li><a href="assets/nwankwo daniel chidera cv.pdf">Resume</a></li>
        </ul>
      </nav>

      <div class="header-actions">
        <a href="https://github.com/Daniel-Chidera" class="social-link" target="_blank" rel="noopener" aria-label="GitHub">
          <i class="fa-brands fa-github"></i>
        </a>
        <a href="https://www.linkedin.com/in/daniel-chidera-9b784431b" class="social-link" target="_blank" rel="noopener" aria-label="LinkedIn">
          <i class="fa-brands fa-linkedin"></i>
        </a>
        <button type="button" class="theme-toggle" data-theme-toggle aria-label="Toggle theme">
          <i class="fa-solid fa-sun icon-sun"></i>
          <i class="fa-solid fa-moon icon-moon"></i>
        </button>
        <button type="button" class="nav-toggle" data-nav-toggle aria-label="Toggle navigation" aria-expanded="false">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>
