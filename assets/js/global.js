document.addEventListener('DOMContentLoaded', function () {
  initHeaderScroll();
  initMobileNav();
  initThemeToggle();
  initAOS();
  initWatermarkFit();
  initContactModal();
});

function initHeaderScroll() {
  var header = document.querySelector('[data-header]');
  if (!header) return;

  var lastScroll = window.scrollY;

  window.addEventListener('scroll', function () {
    var currentScroll = window.scrollY;
    header.classList.toggle('is-scrolled', currentScroll > 8);
    lastScroll = currentScroll;
  });
}

function initMobileNav() {
  var toggle = document.querySelector('[data-nav-toggle]');
  var nav = document.querySelector('[data-nav-menu]');
  if (!toggle || !nav) return;

  toggle.addEventListener('click', function () {
    var isOpen = nav.classList.toggle('is-open');
    toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    document.body.classList.toggle('nav-open', isOpen);
  });

  nav.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', function () {
      nav.classList.remove('is-open');
      toggle.setAttribute('aria-expanded', 'false');
      document.body.classList.remove('nav-open');
    });
  });
}

function initThemeToggle() {
  var toggle = document.querySelector('[data-theme-toggle]');
  if (!toggle) return;

  toggle.addEventListener('click', function () {
    var root = document.documentElement;
    var isLight = root.getAttribute('data-theme') === 'light';
    var nextTheme = isLight ? 'dark' : 'light';

    if (nextTheme === 'dark') {
      root.removeAttribute('data-theme');
    } else {
      root.setAttribute('data-theme', 'light');
    }

    localStorage.setItem('theme', nextTheme);
  });
}

function initWatermarkFit() {
  var WATERMARK_SCALE = 1;
  var WATERMARK_HEIGHT_RATIO = 0.4;

  var wrapper = document.querySelector('.footer-watermark');
  var text = wrapper ? wrapper.querySelector('span') : null;
  if (!wrapper || !text) return;

  function fit() {
    text.style.transform = 'none';
    text.style.fontSize = '100px';
    var textWidth = text.scrollWidth;
    var wrapperWidth = wrapper.clientWidth;

    if (!textWidth || !wrapperWidth) return;

    var newSize = (wrapperWidth / textWidth) * 100 * WATERMARK_SCALE;
    text.style.fontSize = newSize + 'px';

    wrapper.style.height = (newSize * WATERMARK_HEIGHT_RATIO) + 'px';
    text.style.transformOrigin = 'top center';
    text.style.transform = 'scaleY(' + WATERMARK_HEIGHT_RATIO + ')';
  }

  fit();

  window.addEventListener('resize', fit);
  window.addEventListener('load', fit);

  if (document.fonts && document.fonts.ready) {
    document.fonts.ready.then(fit);
  }
}

function initContactModal() {
  var overlay = document.querySelector('[data-modal-overlay]');
  var openTriggers = document.querySelectorAll('[data-modal-open]');
  var closeTriggers = document.querySelectorAll('[data-modal-close]');
  var form = document.querySelector('[data-contact-form]');
  if (!overlay) return;

  function openModal(event) {
    if (event) event.preventDefault();
    overlay.hidden = false;
    requestAnimationFrame(function () {
      overlay.classList.add('is-visible');
    });
    document.body.classList.add('modal-open');
  }

  function closeModal() {
    overlay.classList.remove('is-visible');
    document.body.classList.remove('modal-open');
    window.setTimeout(function () {
      overlay.hidden = true;
    }, 250);
  }

  openTriggers.forEach(function (trigger) {
    trigger.addEventListener('click', openModal);
  });

  closeTriggers.forEach(function (trigger) {
    trigger.addEventListener('click', closeModal);
  });

  overlay.addEventListener('click', function (event) {
    if (event.target === overlay) closeModal();
  });

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape' && !overlay.hidden) closeModal();
  });

  if (form) {
    var submitButton = form.querySelector('.modal-submit');
    var statusEl = form.querySelector('[data-modal-status]');

    form.addEventListener('submit', function (event) {
      event.preventDefault();

      var formData = new FormData(form);

      submitButton.disabled = true;
      submitButton.querySelector('span').textContent = 'Sending...';
      statusEl.hidden = true;
      statusEl.classList.remove('is-success', 'is-error');

      fetch('api/contact.php', {
        method: 'POST',
        body: formData
      })
        .then(function (response) {
          return response.json();
        })
        .then(function (data) {
          statusEl.hidden = false;
          statusEl.textContent = data.message;

          if (data.success) {
            statusEl.classList.add('is-success');
            form.reset();
            window.setTimeout(closeModal, 1800);
          } else {
            statusEl.classList.add('is-error');
          }
        })
        .catch(function () {
          statusEl.hidden = false;
          statusEl.textContent = 'Something went wrong. Please try again.';
          statusEl.classList.add('is-error');
        })
        .finally(function () {
          submitButton.disabled = false;
          submitButton.querySelector('span').textContent = 'Send Message';
        });
    });
  }
}

function initAOS() {
  if (typeof AOS === 'undefined') return;

  AOS.init({
    duration: 650,
    easing: 'ease-out-cubic',
    once: true,
    offset: 30
  });

  window.addEventListener('load', function () {
    AOS.refresh();
  });
}
