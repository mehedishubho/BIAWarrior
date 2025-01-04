<?php

/*

Template Name: motivation-worksheet

*/


get_header(); ?>
<section class="guide">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 pe-lg-5 text-center">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/free-resources/motivated.png"
          class="img-fluid guide-img"
          alt="" />
      </div>
      <div
        class="align-items-center col-lg-6 d-flex justify-content-center ps-lg-5">
        <div class="guide-form-wrapper">
          <h1 class="page-title text-center">Motivation Worksheet</h1>
          <form id="subscribeForm" class="theme-form">
            <div class="form-wrapper">
              <label for="sName">Name</label>
              <input
                type="text"
                id="sName"
                class="form-control"
                placeholder="Enter your name"
                required="" />
            </div>
            <div class="form-wrapper">
              <label for="sEmail">Email</label>
              <input
                type="email"
                id="sEmail"
                class="form-control"
                placeholder="Your Email Address"
                required="" />
            </div>
            <div class="text-center">
              <button
                type="submit"
                class="btn btn-primary"
                id="downloadBtn">
                Download the guide
              </button>
            </div>
          </form>
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
  document.addEventListener("DOMContentLoaded", function() {
    const downloadBtn = document.getElementById("downloadBtn");
    const nameField = document.getElementById("name");
    const emailField = document.getElementById("email");
    (function() {
      emailjs.init({
        publicKey: "OrJlrENkNt4qye0yY",
      });
    })();

    if (downloadBtn) {
      document
        .getElementById("subscribeForm")
        .addEventListener("submit", function(event) {
          event.preventDefault(); // Prevent the default form submission behavior.

          const formData = {
            name: document.getElementById("sName").value,
            email: document.getElementById("sEmail").value,
            subject: "Free download",
          };

          emailjs
            .send("service_u8w5aig", "template_ropmz18", formData)
            .then(
              function(response) {
                console.log("test");
                const link = document.createElement("a");
                link.href = "assets/pdf/BiaWarriorMotivationsWorksheet.pdf";
                link.download = "BiaWarriorMotivationsWorksheet.pdf";
                link.style.display = "none";
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
              },
              function(error) {
                alert("Failed to send email. Please try again later.");
                console.error("FAILED...", error);
              }
            );
        });
    }
  });

  const downloadButton = document.getElementById("downloadBtn");

  function validateFields() {
    if (nameField.value.trim() !== "" && emailField.value.trim() !== "") {
      downloadButton.disabled = false;
    } else {
      downloadButton.disabled = true;
    }
  }
</script>
</body>

</html>