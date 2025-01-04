<?php get_header(); ?>
<section class="hero index-hero" id="hero">
  <div class="container-fluid">
    <div class="row">
      <div class="align-items-center col-lg-6 d-flex">
        <div class="hero-wrapper">
          <h1 class="page-title">Overcome any obstacle in your life</h1>
          <div class="hero-content">
            <p>
              Fitness and wellness programs for every stage of womanhood.
            </p>
            <button
              data-bs-toggle="modal"
              data-bs-target="#consultationModal"
              class="btn btn-primary">
              Book a free consultation
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hero-img">
          <div class="img-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-banner-1.png" alt="" />
          </div>
          <div class="img-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-banner-2.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="coaching home-text-slide text-center">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h2 class="page-title from-left">Holistic support</h2>
        <h2 class="page-title text-end from-right">to help you thrive</h2>
      </div>
    </div>
    <div class="theme-tabs d-md-none">
      <div id="tabcontainer">
        <div id="tabcontent1" class="tabs">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-coaching-1.png" alt="" />
        </div>
        <div id="tabcontent2" class="tabs">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-coaching-2.png" alt="" />
        </div>
        <div id="tabcontent3" class="tabs">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-coaching-3.png" alt="" />
        </div>
      </div>
      <ul id="tabs" class="theme-navtabs">
        <li><a>Programs</a></li>
        <li><a>Events</a></li>
        <li><a>Retreats</a></li>
      </ul>
      <div id="tabcontainer-2">
        <div id="tabcontent1-2" class="tabs">
          <h4>Fitness Programs for Women</h4>
          <a href="programs.html" class="btn btn-primary">Learn More</a>
        </div>
        <div id="tabcontent2-2" class="tabs">
          <h4>
            Mindful Mornings and <br />
            Empowering Experiences
          </h4>
          <a href="events.html" class="btn btn-primary">Learn More</a>
        </div>
        <div id="tabcontent3-3" class="tabs">
          <h4>Wellness Getaways for the <br />Mind, Body & Soul</h4>
          <a href="theretreat.html" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
    <div class="coaching-grid d-md-block d-none">
      <div class="row">
        <div class="col-md-4">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-coaching-1.png"
            alt=""
            class="img-fluid" />
          <h5 class="text-uppercase">Programs</h5>
          <h3>
            <a href="programs.html">
              Fitness Programs <br />
              for Women
            </a>
          </h3>
        </div>
        <div class="col-md-4">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-coaching-2.png"
            alt=""
            class="img-fluid" />
          <h5 class="text-uppercase">Events</h5>
          <h3>
            <a href="events.html">Mindful Mornings and <br />Empowering Experiences</a>
          </h3>
        </div>
        <div class="col-md-4">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-coaching-3.png"
            alt=""
            class="img-fluid" />
          <h5 class="text-uppercase">The Retreat</h5>
          <h3>
            <a href="theretreat.html">Wellness Getaways for <br />the Mind, Body & Soul</a>
          </h3>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="wellness">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h2 class="page-title">Physical and Mental <br />Wellbeing</h2>
        <div class="wellness-text">
          <p>
            Bia Warrior helps you overcome obstacles, both mental and
            physical, through fitness programs, community events and
            wellness retreats.
          </p>
          <p>
            Born to champion and empower women like you, we are dedicated to
            helping you thrive in every aspect of your life.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="our-programs overflow-hidden">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-12 text-center text-white">
        <div class="programs-text">
          <h2 class="page-title">Our Programs</h2>
          <p>
            Get the support you need to be the most fulfilled version of
            yourself
          </p>
        </div>
        <div class="swiper program-swiper home-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-program-obstacle.png"
                class="img-fluid"
                alt="" />
              <div class="our-programs-obstacle">
                <h2 class="page-title">Obstacle Program</h2>
                <p>
                  Learn new skills, rediscover play, get stronger, move
                  better, and overcome fears and mental barriers - all while
                  having fun!
                </p>
                <a href="obstacle-program.html" class="btn btn-light">Discover the program</a>
              </div>
            </div>
            <div class="swiper-slide">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-program-warrior-strong.png"
                class="img-fluid"
                alt="" />
              <div class="our-programs-obstacle">
                <h2 class="page-title">Warrior Strong</h2>
                <p>
                  Get stronger, lose fat, build muscle, and feel confident
                  in your own skin through a structured, semi-private
                  personalized strength training program.
                </p>
                <a href="warrior-strong.html" class="btn btn-light">Discover the program</a>
              </div>
            </div>
            <div class="swiper-slide">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-program-bia-mama.png"
                class="img-fluid"
                alt="" />
              <div class="our-programs-obstacle">
                <h2 class="page-title">Bia Mama</h2>
                <p>
                  Get the confidence to workout safely, and feel strong and
                  functional throughout your pregnancy and postpartum
                  recovery, in a structured semi-private personalized
                  program.
                </p>
                <a href="bia-mama.html" class="btn btn-light">Discover the program</a>
              </div>
            </div>
            <div class="swiper-slide">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-program-bia-girls.png"
                class="img-fluid"
                alt="" />
              <div class="our-programs-obstacle">
                <h2 class="page-title">Bia Girls</h2>
                <p>
                  Open to 9-14 year olds, empower your daughter to thrive
                  with Bia Girls. Build her strength, confidence, and
                  resilience through fun obstacle training in a supportive,
                  all-female environment.
                </p>
                <a href="bia-girls.html" class="btn btn-light">Discover the program</a>
              </div>
            </div>
          </div>
          <div class="swiper-arrows-wrapper">
            <div class="swiper-button-prev swiper-arrows">
              <svg
                width="37"
                height="29"
                viewBox="0 0 37 29"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M14.4428 28.877L17.2874 26.0708L7.79254 16.5759H36.6616V12.5776H7.79254L17.2874 3.08314L14.4428 0.276951L0.142422 14.5766L14.4428 28.877Z"
                  fill="#F7E488" />
              </svg>
            </div>
            <div class="swiper-button-next swiper-arrows">
              <svg
                width="37"
                height="29"
                viewBox="0 0 37 29"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M22.3614 0.277344L19.5168 3.08353L29.0117 12.5784H0.142578V16.5767H29.0117L19.5168 26.0712L22.3614 28.8773L36.6618 14.5777L22.3614 0.277344Z"
                  fill="#F7E488" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="champion">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="champion-text text-center">
          <h2 class="page-title">We were born to champion women</h2>
          <p>
            We've empowered over 500 women like you to achieve things they
            once thought impossible through our expertly designed programs,
            community events and holistic approach.
          </p>
        </div>
        <div>
          <div class="champion-gallery">
            <div class="gallery-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-champion-1.png" alt="" />
            </div>
            <div class="gallery-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-champion-2.png" alt="" />
            </div>
            <div class="gallery-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-champion-3.png" alt="" />
            </div>
            <div class="gallery-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-champion-4.png" alt="" />
            </div>
            <div class="gallery-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-champion-5.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="our-clients">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h2 class="page-title text-center">What our members are saying</h2>
      </div>
    </div>
    <div class="members-swiper-wrapper">
      <div class="row">
        <div class="col-xxl-6 col-xl-7 col-lg-7">
          <div class="swiper members-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div
                  class="client-text d-flex flex-column justify-content-between">
                  <h5>YARA</h5>
                  <p>
                    The training can LOOK intimidating but I'm here to tell
                    you it is NOT. If you are a beginner, postpartum or
                    regularly exercise and looking for a FUN challenge, this
                    place is for you.
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div
                  class="client-text d-flex flex-column justify-content-between">
                  <h5>NANCY</h5>
                  <p>
                    Oh wow! This community is everything I hoped it would be
                    and more. I am in the Bia Mama programand let me just
                    say I have never seen a more loving, compassionate,
                    caring community of highly skilled women dedicated to
                    facilitate and empower your personal growth/wellbeing. I
                    am so grateful! Keep it up! Keep changing lives! ❤️
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div
                  class="client-text d-flex flex-column justify-content-between">
                  <h5>SAIRA</h5>
                  <p>
                    I joined Bia Warrior when I was at a very low point in
                    my life physically, with no motivation to work out on my
                    own. After one class of Bia Warrior, I wasn't sure if I
                    was going to continue. It was the encouragement and
                    motivation of Samia & Domia that kept me going. The
                    coaches genuinely care about all their warriors. They
                    managed to build my strength and skills from zero into
                    advanced abilities. I thank them from all my heart for
                    believing in me when I was not even believing in my own
                    capabilities to tackle obstacles. This year, I competed
                    in my first OCR Challenge and I am so proud of myself
                    for achieving this. I am also going towards the next OCR
                    challenges.. Bia Warrior has not only helped me
                    physically to nurture strength and skill abilities, it
                    also supported me mentally to find a great community and
                    a loving home full of warrior friends in a country that
                    is foreign to me.
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div
                  class="client-text d-flex flex-column justify-content-between">
                  <h5>OLGA</h5>
                  <p>
                    This is the best community I have ever been part of! The
                    professional approach, passion and the vibe girls spread
                    around is all you need sometimes as a woman. I joined
                    Warrior Strong andObstacle to fill my week with
                    activities, focusing on muscles, skills and mobility.
                    All coaches pay a lot of attention to technique, I never
                    felt overlooked.All the girls support each other and
                    cheer for each other's achievements. I wish I found them
                    earlier. In 1 month I increased my weights by 20kg
                    average and got closer to my first pull-up! If you want
                    results, work with the best.
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div
          class="col-xxl-6 col-xl-5 col-lg-5 d-flex justify-content-center justify-content-lg-end">
          <div class="client-video">
            <iframe
              src="https://www.youtube.com/embed/HVjFVMsEEV4?si=K1161tKNnYWljnPe"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="cta-programs">
  <div class="container-fluid">
    <div class="cta-programs-text">
      <h2 class="page-title">Are you ready to make this your reality?</h2>
      <a href="programs.html" class="btn btn-primary">Check out the programs</a>
    </div>
  </div>
</section>
<section class="newsletter">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="newsletter-text">
          <h2 class="page-title text-white">Subscribe and thrive</h2>
          <p class="d-md-block d-none">
            A monthly curated guide of events, expert tips, special offers,
            updates and more for your journey.
          </p>
        </div>
      </div>
      <div class="col-lg-6">
        <form class="newsletter-form" id="subscribeForm">
          <div class="form-wrapper">
            <input
              type="text"
              id="sName"
              class="form-control"
              placeholder="Name"
              required />
          </div>
          <div class="form-wrapper">
            <input
              type="email"
              id="sEmail"
              class="form-control"
              placeholder="Email"
              required />
          </div>

          <button type="submit" class="btn btn-primary">Subscribe</button>
          <p style="color: white" id="sSuccessMsg"></p>
        </form>
        <p class="d-block d-md-none mb-0 text-white">
          A monthly curated guide of events and updates for your journey
        </p>
      </div>
    </div>
  </div>
</section>

<div
  class="modal fade"
  id="consultationModal"
  data-bs-backdrop="static"
  data-bs-keyboard="false"
  tabindex="-1"
  aria-labelledby="consultationBackdropLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="consultationBackdropLabel">
          Book a consultation
        </h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="form-detail">
          Please enter the details of you message, and a member of our team
          will respond within 2 business days.
        </p>
        <form class="theme-form" id="consultationForm">
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
            <label for="message">Message</label>
            <textarea
              id="message"
              class="form-control"
              placeholder="Type your message here…"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">
            Book a free consultation
          </button>
          <p id="successMsg" class="form-detail"></p>
        </form>
      </div>
    </div>
  </div>
</div>
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
<?php get_footer(); ?>

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

      const formData = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        phone: document.getElementById("phone").value,
        message: document.getElementById("message").value,
        subject: "Home",
      };

      emailjs.send("service_u8w5aig", "template_4blrp0a", formData).then(
        function(response) {
          successMsg.innerText = "Message sent! We'll be in touch soon.";
          // alert("Email sent successfully!");
          console.log("SUCCESS!", response.status, response.text);
        },
        function(error) {
          alert("Failed to send email. Please try again later.");
          console.error("FAILED...", error);
        }
      );
    });

  const sSuccessMsg = document.getElementById("sSuccessMsg");

  // subscribe
  document
    .getElementById("subscribeForm")
    .addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent the default form submission behavior.

      const formData = {
        name: document.getElementById("sName").value,
        email: document.getElementById("sEmail").value,
        subject: "subscribe",
      };

      emailjs.send("service_u8w5aig", "template_ropmz18", formData).then(
        function(response) {
          sSuccessMsg.innerText = "Thank you for subscribing!";
          // alert("Email sent successfully!");
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