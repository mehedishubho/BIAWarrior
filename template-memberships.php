<?php

/*

Template Name: memberships

*/


get_header(); ?>
<section class="coaching membership-tabs membership-textslide">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h2 class="page-title">
          <span class="from-left"> Choose the membership </span>
          <span class="from-right">that's right for you</span>
        </h2>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="obstacle-tab"
              data-bs-toggle="tab"
              data-bs-target="#obstacle-tab-pane"
              type="button"
              role="tab"
              aria-controls="obstacle-tab-pane"
              aria-selected="true">
              Obstacle Program
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="warrior-tab"
              data-bs-toggle="tab"
              data-bs-target="#warrior-tab-pane"
              type="button"
              role="tab"
              aria-controls="warrior-tab-pane"
              aria-selected="false">
              Warrior Strong
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="bia-mama-tab"
              data-bs-toggle="tab"
              data-bs-target="#bia-mama-tab-pane"
              type="button"
              role="tab"
              aria-controls="bia-mama-tab-pane"
              aria-selected="false">
              Bia Mama
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="bia-girls-tab"
              data-bs-toggle="tab"
              data-bs-target="#bia-girls-tab-pane"
              type="button"
              role="tab"
              aria-controls="bia-girls-tab-pane"
              aria-selected="false">
              Bia Girls
            </button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div
            class="tab-pane fade show active"
            id="obstacle-tab-pane"
            role="tabpanel"
            aria-labelledby="obstacle-tab"
            tabindex="0">
            <h6 class="obstacle-program-text">
              Our signature group training obstacle program
            </h6>
            <div class="row">
              <div class="col-lg-4">
                <div class="member-plan">
                  <h3 class="plan-title">Basic</h3>
                  <div class="plan-price">
                    <span class="price-symbol">AED</span>
                    <span class="price">549</span><span class="duration">/mo</span>
                  </div>
                  <a
                    href="http://biawarriordxb.com/memberships"
                    data-bs-toggle="modal"
                    data-bs-target="#iframeModalPrice"
                    class="btn btn-outline-primary">
                    Get started
                  </a>
                  <p class="plan-detail">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                      alt=""
                      class="d-lg-none" />
                    One Obstacle Program class per week <br />(4 classes per
                    month)
                  </p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="member-plan">
                  <h3 class="plan-title">Double Take</h3>
                  <div class="plan-price">
                    <span class="price-symbol">AED</span>
                    <span class="price">799</span><span class="duration">/mo</span>
                  </div>
                  <a
                    href="http://biawarriordxb.com/memberships"
                    data-bs-toggle="modal"
                    data-bs-target="#iframeModalPrice"
                    class="btn btn-outline-primary">
                    Get started
                  </a>
                  <p class="plan-detail">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                      alt=""
                      class="d-lg-none" />
                    Two Obstacle Program classes per week <br />(8 classes
                    per month)
                  </p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="member-plan">
                  <h6 class="best-value">Best Value!</h6>
                  <h3 class="plan-title">Unlimited</h3>
                  <div class="plan-price">
                    <span class="price-symbol">AED</span>
                    <span class="price">999</span><span class="duration">/mo</span>
                  </div>
                  <a
                    href="http://biawarriordxb.com/memberships"
                    data-bs-toggle="modal"
                    data-bs-target="#iframeModalPrice"
                    class="btn btn-outline-primary">
                    Get started
                  </a>
                  <p class="plan-detail">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                      alt=""
                      class="d-lg-none" />
                    Unlimited Obstacle Program classes every month
                    <br />Unlimited gym access
                  </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 member-plan-support">
                <h2 class="page-title">
                  Want more support in your journey?
                </h2>
                <p class="d-lg-none mb-4">
                  Get the tools you need to thrive in every aspect of your
                  life
                </p>
                <div class="member-plan">
                  <div
                    class="member-plan-detail d-flex gap-4 justify-content-between">
                    <div>
                      <h3 class="plan-title">The Ultimate</h3>
                      <p class="plan-subheading d-none d-lg-block">
                        Get the tools you need to thrive in every aspect of
                        your life
                      </p>
                      <a
                        href="http://biawarriordxb.com/memberships"
                        data-bs-toggle="modal"
                        data-bs-target="#iframeModalPrice"
                        class="btn btn-outline-primary d-none d-lg-inline-block">
                        Get started
                      </a>
                    </div>
                    <div class="plan-price">
                      <span class="price-symbol">AED</span>
                      <span class="price">1,499</span><span class="duration">/mo</span>
                    </div>
                    <button
                      data-bs-toggle="modal"
                      data-bs-target="#iframeModalPrice"
                      class="btn btn-outline-primary d-lg-none">
                      Get started
                    </button>
                  </div>
                  <div class="plan-detail-wrapper d-none d-lg-flex">
                    <ul class="plan-detail">
                      <li>
                        Unlimited Obstacle Program classes every month
                        including Mobility + Stretch classes
                      </li>
                      <li>
                        Set SMART Goals + create an action plan with a
                        dedicated Bia Warrior mentor
                      </li>
                    </ul>
                    <ul class="plan-detail">
                      <li>
                        Customized nutrition support and tracking with
                        weekly personalized feedback to reach your goals
                      </li>
                      <li>Monthly Mental Health Consultation</li>
                    </ul>
                    <ul class="plan-detail">
                      <li>
                        Personal Bia Warrior mentor with weekly check-ins
                      </li>
                    </ul>
                  </div>
                  <div
                    class="accordion plan-accordion d-lg-none"
                    id="accordionUltimate">
                    <div class="accordion-item border-0">
                      <div
                        id="collapseOne"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionUltimate">
                        <div class="plan-detail-wrapper mt-0">
                          <ul class="plan-detail">
                            <li>
                              <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                                alt="" />
                              Unlimited Obstacle Program classes every month
                              including Mobility + Stretch classes
                            </li>
                            <li>
                              <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                                alt="" />
                              Set SMART Goals + create an action plan with a
                              dedicated Bia Warrior mentor
                            </li>
                          </ul>
                          <ul class="plan-detail">
                            <li>
                              <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                                alt="" />
                              Customized nutrition support and tracking with
                              weekly personalized feedback to reach your
                              goals
                            </li>
                            <li>
                              <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                                alt="" />Monthly Mental Health Consultation
                            </li>
                          </ul>
                          <ul class="plan-detail">
                            <li>
                              <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                                alt="" />
                              Personal Bia Warrior mentor with weekly
                              check-ins
                            </li>
                          </ul>
                        </div>
                      </div>
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button show-btn shadow-none bg-transparent border-top"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseOne"
                          aria-expanded="true"
                          aria-controls="collapseOne">
                          Show membership features
                        </button>
                        <button
                          class="accordion-button hide-btn shadow-none bg-transparent border-top"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseOne"
                          aria-expanded="true"
                          aria-controls="collapseOne">
                          Hide membership features
                        </button>
                      </h2>
                    </div>
                  </div>
                </div>
                <p class="disclaimer">
                  * All memberships are monthly auto recurring and not
                  inclusive of VAT
                </p>
              </div>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="warrior-tab-pane"
            role="tabpanel"
            aria-labelledby="warrior-tab"
            tabindex="0">
            <h6 class="obstacle-program-text d-lg-none">
              Semi-private personalized strength training program
            </h6>
            <div class="row">
              <div class="col-12 member-plan-support">
                <div class="member-plan">
                  <div
                    class="member-plan-detail d-flex gap-4 justify-content-between">
                    <div>
                      <h3 class="plan-title">Warrior Strong Membership</h3>
                      <p class="plan-subheading d-none d-lg-block">
                        Semi-private personalized strength training program
                      </p>
                    </div>
                    <div
                      class="align-items-end d-flex flex-column theme-tabs">
                      <div
                        class="theme-navtabs mb-0"
                        id="nav-tab"
                        role="tablist">
                        <button
                          class="nav-link active"
                          id="nav-2x-tab"
                          data-bs-toggle="tab"
                          data-bs-target="#nav-2x"
                          type="button"
                          role="tab"
                          aria-controls="nav-2x"
                          aria-selected="true">
                          2x per week
                        </button>
                        <button
                          class="nav-link"
                          id="nav-3x-tab"
                          data-bs-toggle="tab"
                          data-bs-target="#nav-3x"
                          type="button"
                          role="tab"
                          aria-controls="nav-3x"
                          aria-selected="false">
                          3x per week
                        </button>
                      </div>
                      <div
                        class="tab-content text-center"
                        id="nav-tabContent">
                        <div
                          class="tab-pane fade show active"
                          id="nav-2x"
                          role="tabpanel"
                          aria-labelledby="nav-2x-tab">
                          <div class="plan-price">
                            <span class="price-symbol">AED</span>
                            <span class="price">1,500</span><span class="duration">/mo</span>
                          </div>
                        </div>
                        <div
                          class="tab-pane fade"
                          id="nav-3x"
                          role="tabpanel"
                          aria-labelledby="nav-3x-tab">
                          <div class="plan-price">
                            <span class="price-symbol">AED</span>
                            <span class="price">2,000</span><span class="duration">/mo</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="plan-detail-wrapper">
                    <ul class="plan-detail">
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />
                        2 Warrior Strong sessions per week
                      </li>
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />
                        Monthly progressive program with progress tracker
                      </li>
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />Monthly body measurements and optional photos
                      </li>
                    </ul>
                    <ul class="plan-detail">
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />
                        Customized nutrition support and tracking with
                        weekly personalized feedback to reach your goals
                      </li>
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />
                        Discount to combined Obstacle Program membership and
                        Mobility + Stretch classes
                      </li>
                    </ul>
                    <ul class="plan-detail">
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />
                        Invite to community WhatsApp group with exclusive
                        resources
                      </li>
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />
                        Access to community events with exclusive warrior
                        discount
                      </li>
                      <li>Instant access to Facebook community group</li>
                    </ul>
                  </div>
                  <button
                    class="btn btn-outline-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#consultationModal">
                    Book a free consultation
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="bia-mama-tab-pane"
            role="tabpanel"
            aria-labelledby="bia-mama-tab"
            tabindex="0">
            <h6 class="obstacle-program-text d-lg-none">
              Semi-private personalized pregnancy + postpartum program
            </h6>
            <div class="row">
              <div class="col-12 member-plan-support">
                <div class="member-plan">
                  <div
                    class="member-plan-detail d-flex gap-4 justify-content-between">
                    <div>
                      <h3 class="plan-title">Bia Mama Membership</h3>
                      <p class="plan-subheading d-none d-lg-block">
                        Semi-private personalized pregnancy + postpartum
                        program
                      </p>
                    </div>
                    <div
                      class="align-items-end d-flex flex-column theme-tabs">
                      <div
                        class="theme-navtabs mb-0"
                        id="nav-tab"
                        role="tablist">
                        <button
                          class="nav-link active"
                          id="nav-2x-tab"
                          data-bs-toggle="tab"
                          data-bs-target="#nav-2x-mama"
                          type="button"
                          role="tab"
                          aria-controls="nav-2x"
                          aria-selected="true">
                          2x per week
                        </button>
                        <button
                          class="nav-link"
                          id="nav-3x-tab"
                          data-bs-toggle="tab"
                          data-bs-target="#nav-3x-mama"
                          type="button"
                          role="tab"
                          aria-controls="nav-3x"
                          aria-selected="false">
                          3x per week
                        </button>
                      </div>
                      <div
                        class="tab-content text-center"
                        id="nav-tabContent">
                        <div
                          class="tab-pane fade show active"
                          id="nav-2x-mama"
                          role="tabpanel"
                          aria-labelledby="nav-2x-tab">
                          <div class="plan-price">
                            <span class="price-symbol">AED</span>
                            <span class="price">1,500</span><span class="duration">/mo</span>
                          </div>
                        </div>
                        <div
                          class="tab-pane fade"
                          id="nav-3x-mama"
                          role="tabpanel"
                          aria-labelledby="nav-3x-tab">
                          <div class="plan-price">
                            <span class="price-symbol">AED</span>
                            <span class="price">2,000</span><span class="duration">/mo</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="plan-detail-wrapper">
                    <ul class="plan-detail">
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />3 Bia Mama sessions per week
                      </li>
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />Personalized program tailored to your unique needs
                      </li>
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />Customized nutrition support and guidance on your
                        journey
                      </li>
                    </ul>
                    <ul class="plan-detail">
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />Discount to Mobility + Stretch classes
                      </li>
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />Invite to community WhatsApp group with exclusive
                        resources
                      </li>
                    </ul>
                    <ul class="plan-detail">
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />Access to community events with exclusive warrior
                        discount
                      </li>
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />Instant access to Facebook community group
                      </li>
                    </ul>
                  </div>
                  <button
                    class="btn btn-outline-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#consultationModal">
                    Book a free consultation
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="bia-girls-tab-pane"
            role="tabpanel"
            aria-labelledby="bia-girls-tab"
            tabindex="0">
            <h6 class="obstacle-program-text d-lg-none">
              12 week term-based program for 9-14 year old girls
            </h6>
            <div class="row">
              <div class="col-12 member-plan-support">
                <div class="member-plan">
                  <div
                    class="member-plan-detail d-flex gap-4 justify-content-between">
                    <div>
                      <h3 class="plan-title">Bia Girls Membership</h3>
                      <p class="plan-subheading d-none d-lg-block">
                        12 week term-based program for 9-14 year old girls
                      </p>
                    </div>
                    <div
                      class="align-items-end d-flex flex-column theme-tabs">
                      <div
                        class="theme-navtabs mb-0"
                        id="nav-tab"
                        role="tablist">
                        <button
                          class="nav-link active"
                          id="nav-2x-tab"
                          data-bs-toggle="tab"
                          data-bs-target="#nav-2x-girls"
                          type="button"
                          role="tab"
                          aria-controls="nav-2x"
                          aria-selected="true">
                          2x per week
                        </button>
                        <button
                          class="nav-link"
                          id="nav-3x-tab"
                          data-bs-toggle="tab"
                          data-bs-target="#nav-3x-girls"
                          type="button"
                          role="tab"
                          aria-controls="nav-3x"
                          aria-selected="false">
                          3x per week
                        </button>
                      </div>
                      <div
                        class="tab-content text-center"
                        id="nav-tabContent">
                        <div
                          class="tab-pane fade show active"
                          id="nav-2x-girls"
                          role="tabpanel"
                          aria-labelledby="nav-2x-tab">
                          <div class="plan-price">
                            <span class="price-symbol">AED</span>
                            <span class="price">2,985</span><span class="duration">/term</span>
                          </div>
                        </div>
                        <div
                          class="tab-pane fade"
                          id="nav-3x-girls"
                          role="tabpanel"
                          aria-labelledby="nav-3x-tab">
                          <div class="plan-price">
                            <span class="price-symbol">AED</span>
                            <span class="price">3,810</span><span class="duration">/term</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="plan-detail-wrapper">
                    <ul class="plan-detail">
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />2-3 Bia Girls sessions per week
                      </li>
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />Personalized program tailored to your unique needs
                      </li>
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />Bia Girls welcome pack and journal
                      </li>
                    </ul>
                    <ul class="plan-detail">
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />Access to community events with exclusive warrior
                        discount
                      </li>
                      <li>
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/main/tick-icon.svg"
                          alt=""
                          class="d-lg-none" />Instant access to Facebook community group
                      </li>
                    </ul>
                  </div>
                  <a
                    data-bs-toggle="modal"
                    data-bs-target="#iframeModal"
                    class="btn btn-outline-primary">
                    Get started
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="cta-programs cta-membership">
  <div class="container-fluid">
    <div class="cta-programs-text">
      <h2 class="page-title">
        Want to join two different Bia Warrior programs?
      </h2>
      <p class="cta-desc">Combo memberships are available.</p>
      <button
        data-bs-toggle="modal"
        data-bs-target="#consultationModal"
        class="btn btn-primary">
        Request a combo membership
      </button>
    </div>
  </div>
</section>
<section class="membership-guide">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="membership-guide-detail">
          <h3 class="page-title">Warrior Resources</h3>
          <p>
            Get access to lifestyle, fitness, nutrition and mental health
            tips and resources in our community WhatsApp group.
          </p>
        </div>
        <div class="membership-guide-detail">
          <h3 class="page-title">Community Events</h3>
          <p>
            All memberships give you an exclusive warrior discount to Bia
            Warrior community events and retreats!
          </p>
        </div>
        <div class="membership-guide-detail">
          <h3 class="page-title">Warrior Discounts</h3>
          <p>
            Get exclusive member discounts to a range of useful products
            from our partners in sports apparel, equipment, and nutrition.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="cta-programs">
  <div class="container-fluid">
    <div class="cta-programs-text">
      <h2 class="page-title">Not sure which program is best for you?</h2>
      <button
        data-bs-toggle="modal"
        data-bs-target="#consultationModal"
        class="btn btn-primary">
        Book a free consultation
      </button>
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
      id="consultationModal"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="consultationBackdropLabel"
      aria-hidden="true"
    >
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
              aria-label="Close"
            ></button>
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
                  required=""
                />
              </div>
              <div class="form-wrapper">
                <label for="email">Email</label>
                <input
                  type="email"
                  id="email"
                  class="form-control"
                  placeholder="Your Email Address"
                  required=""
                />
              </div>
              <div class="form-wrapper">
                <label for="phone">Phone Number</label>
                <input
                  type="text"
                  id="phone"
                  class="form-control"
                  placeholder="+971"
                  required=""
                />
              </div>
              <div class="form-wrapper">
                <label for="message">Message</label>
                <textarea
                  id="message"
                  class="form-control"
                  placeholder="Type your message here…"
                ></textarea>
              </div>

              <button type="submit" class="btn btn-primary">
                Book a free consultation
              </button>
              <p id="successMsg" class="form-detail"></p>
              <!-- data-bs-dismiss="modal" -->
            </form>
          </div>
        </div>
      </div>
    </div>
    <div
      class="modal fade"
      id="iframeModalPrice"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="iframeBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header py-4">
            <button
              type="button"
              class="btn-close position-relative"
              data-bs-dismiss="modal"
              aria-label="Close"
              style="right: 0"
            ></button>
          </div>
          <div class="modal-body p-4">
            <iframe
              src="https://app.glofox.com/portal/#/branch/632c4c4de7442665a049173e/memberships?header=memberships"
              frameborder="0"
              id="myIframe"
              width="100%"
              height="1200"
            ></iframe
            ><a href="https://www.glofox.com">powered by <b>Glofox</b></a>
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
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header py-4">
            <button
              type="button"
              class="btn-close position-relative"
              data-bs-dismiss="modal"
              aria-label="Close"
              style="right: 0"
            ></button>
          </div>
          <div class="modal-body p-4">
            <iframe
              src="https://app.glofox.com/portal/#/branch/632c4c4de7442665a049173e/classes-day-view"
              frameborder="0"
              width="100%"
              height="1200"
            ></iframe
            ><a href="https://www.glofox.com">powered by <b>Glofox</b></a>
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
  document
    .getElementById("consultationForm")
    .addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent the default form submission behavior.

      const formData = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        phone: document.getElementById("phone").value,
        message: document.getElementById("message").value,
        subject: "Membership",
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