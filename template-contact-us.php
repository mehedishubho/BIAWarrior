<?php

/*

Template Name: contact-us

*/


get_header(); ?>
<section class="contact-us">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="guide-form-wrapper">
          <h1 class="page-title text-center">Get in touch</h1>
          <p class="text-md-center">
            If you have any questions, would like to collaborate, or just
            want to say hi, please drop us a note.
          </p>
          <form id="consultationForm" class="theme-form">
            <div class="form-wrapper">
              <label for="name">Name</label>
              <input
                type="text"
                id="name"
                class="form-control"
                placeholder="Enter your name"
                required="" />
            </div>
            <div class="form-wrapper">
              <label for="email">Email</label>
              <input
                type="email"
                id="email"
                class="form-control"
                placeholder="Your Email Address"
                required="" />
            </div>
            <div class="form-wrapper">
              <label for="phone">Phone Number</label>
              <input
                type="text"
                id="phone"
                class="form-control"
                placeholder="+971"
                required="" />
            </div>
            <div class="form-wrapper">
              <label for="phone">Subject</label>
              <select id="subject" class="form-control">
                <option value="">General Inquiry</option>
                <option value="">Bia Girls</option>
                <option value="">Obstacle Program</option>
                <option value="">Gov Games Training</option>
                <option value="">Warrior Strong</option>
                <option value="">Online Coaching</option>
                <option value="">Bia Mama</option>
              </select>
            </div>
            <div class="form-wrapper">
              <label for="message">Message</label>
              <textarea
                id="message"
                class="form-control"
                placeholder="Type your message here…"></textarea>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">
                Send Message
              </button>
            </div>
            <p id="successMsg" class="form-detail successMsgcontact"></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="lets-chat">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="lets-chat-inner">
          <h2 class="page-title">Let's Chat</h2>
          <div>
            <p class="flex-md-shrink-0 mb-0">
              Need to get in touch urgently?
            </p>
            <p class="flex-md-shrink-0 mb-0">
              Start a real-time conversation via WhatsApp
              <br class="d-none d-md-block" />
              (Monday-Friday 8AM - 8PM)
            </p>
          </div>
          <a href="https://wa.me/971585284756" class="btn btn-light">Start Chat</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
<div
  class="modal fade"
  id="iframeModal"
  data-bs-backdrop="static"
  data-bs-keyboard="false"
  tabindex="-1"
  aria-labelledby="iframeBackdropLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header py-4">
        <button
          type="button"
          class="btn-close position-relative"
          data-bs-dismiss="modal"
          aria-label="Close"
          style="right: 0"></button>
      </div>
      <div class="modal-body p-4">
        <iframe
          src="https://app.glofox.com/portal/#/branch/632c4c4de7442665a049173e/classes-day-view"
          frameborder="0"
          width="100%"
          height="1200"></iframe><a href="https://www.glofox.com">powered by <b>Glofox</b></a>
      </div>
    </div>
  </div>
</div>


<!-- form submittion -->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<script>
  (function() {
    emailjs.init({
      publicKey: "OrJlrENkNt4qye0yY",
    });
  })();
  const successMsg = document.getElementById("successMsg");
  document
    .getElementById("consultationForm")
    .addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent the default form submission behavior.

      const subjectSelect = document.getElementById("subject");

      const selectedText =
        subjectSelect.options[subjectSelect.selectedIndex].text; // Gets the displayed text of the selected option

      const formData = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        phone: document.getElementById("phone").value,
        message: document.getElementById("message").value,
        subject: selectedText,
      };

      emailjs.send("service_u8w5aig", "template_4blrp0a", formData).then(
        function(response) {
          successMsg.innerText = "Message sent! We'll be in touch soon.";
          console.log("SUCCESS!", response.status, response.text);
        },
        function(error) {
          alert("Failed to send email. Please try again later.");
          console.error("FAILED...", error);
        }
      );
    });
</script>
</body>

</html>