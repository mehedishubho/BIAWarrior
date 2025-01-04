<?php

/*

Template Name: events

*/


get_header(); ?>
<section class="hero event-hero">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="hero-wrapper">
          <h1 class="page-title">Mindful Mornings</h1>
          <div class="hero-content">
            <p>
              Events, workshops, and activities to help you relax, reset,
              learn, and grow - empowering you to thrive in all areas of
              your life.
            </p>
            <a
              data-bs-toggle="modal"
              data-bs-target="#iframeModal"
              class="btn btn-primary">See All Events</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hero-img">
          <div class="img-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/events/event-header-1.png" alt="" />
          </div>
          <div class="img-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/events/event-header-2.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="coaching text-center">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h2 class="m-0 page-title">Upcoming Events</h2>
      </div>
    </div>
    <div class="coaching-grid">
      <div class="row d-md-flex d-none">
        <div class="col-md-4">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/events/Events/Website-Empire-Race 1.png"
            alt=""
            class="img-fluid" />
          <h5 class="text-uppercase">DECEMBER 1</h5>
          <h3>Bia Warrior Gov <br />Games Team Qualifier</h3>
          <a
            data-bs-toggle="modal"
            data-bs-target="#iframeModal"
            class="btn btn-primary">Register</a>
        </div>
        <div class="col-md-4">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/events/Events/Bia-Girls-Challenge.png"
            alt=""
            class="img-fluid" />
          <h5 class="text-uppercase">DECEMBER 8</h5>
          <h3>The Bia Girls <br />Challenge</h3>
          <a
            data-bs-toggle="modal"
            data-bs-target="#iframeModal"
            class="btn btn-primary">Register</a>
        </div>
        <div class="col-md-4">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/events/Events/Women's-Wellness-Morning.png"
            alt=""
            class="img-fluid" />
          <h5 class="text-uppercase">JANUARY</h5>
          <h3>Women’s Wellness <br />Morning</h3>
          <a style="opacity: 0.6" class="btn btn-primary" disabled>Stay tuned</a>
        </div>
      </div>
      <div class="swiper event-coaching-swiper d-md-none">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/events/women's-wellness-morning.png"
              alt=""
              class="img-fluid" />
            <h5 class="text-uppercase">JANUARY</h5>
            <h3>Women's Wellness <br />Morning</h3>
            <a style="opacity: 0.6" class="btn btn-primary" disabled>Stay tuned</a>
          </div>
          <div class="swiper-slide">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/events/Events/Website-Empire-Race 1.png"
              alt=""
              class="img-fluid" />
            <h5 class="text-uppercase">DECEMBER 1</h5>
            <h3>Bia Warrior Gov <br />Games Team Qualifier</h3>
            <a
              data-bs-toggle="modal"
              data-bs-target="#iframeModal"
              class="btn btn-primary"
              disabled>Register</a>
          </div>
          <div class="swiper-slide">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/events/bia-girls-challenge.png"
              alt=""
              class="img-fluid" />
            <h5 class="text-uppercase">DECEMBER 8</h5>
            <h3>The Bia Girls <br />Challenge</h3>
            <a
              hdata-bs-toggle="modal"
              data-bs-target="#iframeModal"
              class="btn btn-primary">Register</a>
          </div>
        </div>
        <div class="swiper-arrows-wrapper">
          <div class="swiper-button-prev swiper-arrows">
            <svg
              width="29"
              height="24"
              viewBox="0 0 29 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M11.356 24L13.6149 21.6452L6.07498 13.6774H29V10.3223H6.07498L13.6149 2.35484L11.356 0L0 11.9997L11.356 24Z"
                fill="#DBB962" />
            </svg>
          </div>
          <div class="swiper-button-next swiper-arrows">
            <svg
              width="29"
              height="24"
              viewBox="0 0 29 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.644 3.08498e-06L15.3851 2.35484L22.925 10.3226L-1.80486e-06 10.3226L-2.39149e-06 13.6777L22.925 13.6777L15.3851 21.6452L17.644 24L29 12.0003L17.644 3.08498e-06Z"
                fill="#DBB962" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="event-gallery">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-title">
          Workshops to transform your mindset and your life
        </h1>
        <div class="text-center event-gallery-item">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/events/event-collage.png"
            class="img-fluid"
            alt="" />
        </div>
        <p class="event-gallery-text">
          Our mission is to help all women thrive by fostering connection,
          support and guidance. Join our fun monthly events and mindfulness
          workshops designed to empower you to confidently overcome
          challenges and reach your goals.
        </p>
      </div>
    </div>
  </div>
</section>
<section class="our-programs community-event overflow-hidden">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-12 text-center">
        <div class="programs-text">
          <h2 class="page-title">Community Events</h2>
          <p>
            Engage in workshops and activities covering a range of topics,
            from mental health to personal development. Gain valuable
            insights and practical tools to lead a healthier, more joyful,
            and fulfilled life.
          </p>
        </div>
        <div class="swiper program-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/events/climbing-mountain-extreme.png"
                class="img-fluid"
                alt="" />
            </div>
            <div class="swiper-slide">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/events/galentines.png"
                class="img-fluid"
                alt="" />
            </div>
            <div class="swiper-slide">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/events/hiking.png"
                class="img-fluid"
                alt="" />
            </div>
            <div class="swiper-slide">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/events/hiking2.png"
                class="img-fluid"
                alt="" />
            </div>
            <div class="swiper-slide">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/events/ice-bath.png"
                class="img-fluid"
                alt="" />
            </div>
            <div class="swiper-slide">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/events/sup-morning.png"
                class="img-fluid"
                alt="" />
            </div>
          </div>
          <div class="swiper-arrows-wrapper">
            <div class="swiper-button-prev swiper-arrows">
              <svg
                width="38"
                height="29"
                viewBox="0 0 38 29"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M15.2231 28.999L18.0677 26.1928L8.57281 16.6979H37.4419V12.6997H8.57281L18.0677 3.20521L15.2231 0.399021L0.922695 14.6986L15.2231 28.999Z"
                  fill="#CC914A" />
              </svg>
            </div>
            <div class="swiper-button-next swiper-arrows">
              <svg
                width="38"
                height="29"
                viewBox="0 0 38 29"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M22.7764 0.400391L19.9318 3.20657L29.4267 12.7015H0.557617V16.6997H29.4267L19.9318 26.1942L22.7764 29.0004L37.0768 14.7008L22.7764 0.400391Z"
                  fill="#CC914A" />
              </svg>
            </div>
          </div>
        </div>
        <div class="our-programs-obstacle">
          <a
            data-bs-toggle="modal"
            data-bs-target="#iframeModal"
            class="btn btn-light">Check out events</a>
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
          src="https://app.glofox.com/portal/#/branch/632c4c4de7442665a049173e/courses?header=courses"
          frameborder="0"
          width="100%"
          height="1200"></iframe><a href="https://www.glofox.com">powered by <b>Glofox</b></a>
      </div>
    </div>
  </div>
</div>

<div
  class="modal fade"
  id="iframeModalSchedule"
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

</body>

</html>