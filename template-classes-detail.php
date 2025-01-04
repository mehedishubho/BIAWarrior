<?php

/*

Template Name: classes-detail

*/


get_header(); ?>
<section class="classes-detail text-center">
  <div class="container-fluid">
    <h1 class="main-heading">Classes</h1>
    <h2 class="page-title">Obstacle Program</h2>
    <p class="page-content">
      All cbstacle classes take place at Gravity Gym, Al Quoz
    </p>
  </div>
</section>
<section class="program-gallery">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="program-gallery-listing">
          <div class="program-about">
            <img
              class="program-about-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/classes/classes-1.png"
              alt="" />
            <div class="program-about-content">
              <h3>Strength & Skills</h3>
              <p>
                The foundation of Obstacle Program: functional strength
                training exercises designed to work on your power, stability
                and overall performance, followed by a focused dive into
                practicing new skills.
              </p>
            </div>
          </div>
          <div class="program-about">
            <img
              class="program-about-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/classes/classes-2.png"
              alt="" />
            <div class="program-about-content">
              <h3>Ninja Warrior</h3>
              <p>
                This class lays the groundwork for Ninja Warrior skills,
                combining grip strength, agility and calisthenics, in a
                fast-paced environment. Suitable for all levels, this is
                where you'll build confidence to conquer any obstacle
                course. Every class ends with a fun obstacle challenge.
              </p>
            </div>
          </div>
          <div class="program-about">
            <img
              class="program-about-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/classes/classes-3.png"
              alt="" />
            <div class="program-about-content">
              <h3>Warrior MetCon</h3>
              <p>
                Challenge your endurance, strength, and power in this
                high-intensity class. Think circuit training with strength
                and conditioning movements, Warrior MetCon improves your
                overall fitness and prepares you for any challenge.
              </p>
            </div>
          </div>
          <div class="program-about">
            <img
              class="program-about-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/classes/classes-4.png"
              alt="" />
            <div class="program-about-content">
              <h3>Obstacle Flow</h3>
              <p>
                Master the art of seamless movement in this dynamic class.
                You'll break down and combine skills to overcome obstacles
                with agility, efficiency, fluidity and creativity. Suitable
                for all levels, this class boosts your confidence to flow
                through any barrier in your path.
              </p>
            </div>
          </div>
          <div class="program-about">
            <img
              class="program-about-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/classes/classes-5.png"
              alt="" />
            <div class="program-about-content">
              <h3>Mobility & Flexibility</h3>
              <p>
                Improve your range of motion and unlock mobility
                restrictions. Develop a flexible and strong body so that you
                can move more freely and improve your performance.
              </p>
            </div>
          </div>
          <div class="program-about">
            <img
              class="program-about-img"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/classes/classes-6.png"
              alt="" />
            <div class="program-about-content">
              <h3>OCR Circuit</h3>
              <p>
                Get race-ready with this class focused on perfecting
                obstacle course performance. Elevate your OCR-specific
                strength and conditioning, learn new obstacle techniques,
                and improve running, to tackle every course with confidence.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="program-cta classes-cta text-center text-white">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h2 class="page-title">
          Are you ready to feel strong and empowered?
        </h2>
        <p>Start your warrior journey today!</p>
        <button
          data-bs-toggle="modal"
          data-bs-target="#iframeModal"
          class="btn btn-light">
          See Class Schedule
        </button>
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
</body>

</html>