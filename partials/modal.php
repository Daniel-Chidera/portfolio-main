  <div class="modal-overlay" data-modal-overlay hidden>
    <div class="modal" role="dialog" aria-modal="true" aria-labelledby="modal-title">
      <div class="modal-handle"></div>
      <button type="button" class="modal-close" data-modal-close aria-label="Close">
        <i class="fa-solid fa-xmark"></i>
      </button>

      <h2 id="modal-title" class="modal-title">Send A Message</h2>
      <p class="modal-subtitle">Fill the form below and I'll get back to you.</p>

      <form class="modal-form" data-contact-form>
        <div class="modal-form-row">
          <div class="modal-field">
            <label for="contact-name">Name</label>
            <input type="text" id="contact-name" name="name" placeholder="Enter your name" required>
          </div>
          <div class="modal-field">
            <label for="contact-email">Email</label>
            <input type="email" id="contact-email" name="email" placeholder="Enter your email" required>
          </div>
        </div>

        <div class="modal-field">
          <label for="contact-phone">Phone / WhatsApp <span class="modal-field-optional">(optional)</span></label>
          <input type="tel" id="contact-phone" name="phone" placeholder="e.g. 08012345678">
        </div>

        <div class="modal-field">
          <label for="contact-message">Message</label>
          <textarea id="contact-message" name="message" placeholder="Enter your message" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary modal-submit">
          <span>Send Message</span>
        </button>

        <p class="modal-status" data-modal-status hidden></p>
      </form>
    </div>
  </div>
