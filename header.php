<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <title>BIA Warrior</title> -->
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-xl navbar-light">
            <div class="container-fluid p-0">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main/logo.svg" class="colored-logo" alt="" />
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/main/logo-website.svg"
                        class="white-logo"
                        alt="" />
                </a>
                <button
                    class="navbar-toggler"
                    id="toggle-menu"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <svg
                        class="menu-bar"
                        xmlns="http://www.w3.org/2000/svg"
                        width="40"
                        height="40"
                        fill="#cc914a"
                        class="bi bi-list"
                        viewBox="0 0 16 16">
                        <path
                            fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                    </svg>
                    <svg
                        class="menu-close"
                        xmlns="http://www.w3.org/2000/svg"
                        width="30"
                        height="30"
                        fill="#fff"
                        class="bi bi-x-lg"
                        viewBox="0 0 16 16">
                        <path
                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2">
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="https://bdtchain.com/programs/"
                                id="navbarDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Programs
                                <svg
                                    width="16"
                                    height="10"
                                    viewBox="0 0 16 10"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 1.65916L14.4301 1.87208e-08L8.16241 6.53456L7.99979 6.53456L1.56989 1.72077e-07L1.97852e-08 1.65916L7.99979 10L11.9999 5.82958L16 1.65916Z"
                                        fill="#CC914A" />
                                </svg>
                            </a>
                            <div
                                id="megaMenu"
                                class="dropdown-menu container-fluid"
                                aria-labelledby="navbarDropdown">
                                <div class="row">
                                    <div
                                        class="col-md-6 d-flex d-none d-xl-flex justify-content-center">
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/obstacle.png"
                                            alt=""
                                            class="mega-menu-img"
                                            id="megaMenuImage" />
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mega-menu-listing-wrapper text-white">
                                            <div class="mega-menu-listing">
                                                <div
                                                    class="list-itens"
                                                    data-image="<?php echo get_template_directory_uri(); ?>/assets/img/menu/obstacle.png">
                                                    <h4>
                                                        <a href="https://bdtchain.com/programs/">All Programs</a>
                                                    </h4>
                                                    <p>Compare + find yours</p>
                                                </div>
                                                <div
                                                    class="list-itens"
                                                    data-image="<?php echo get_template_directory_uri(); ?>/assets/img/menu/obstacle.png">
                                                    <h4>
                                                        <a href="https://bdtchain.com/obstacle-program/">Obstacle Program</a>
                                                    </h4>
                                                    <p>Learn skills + get fit</p>
                                                </div>
                                                <div
                                                    class="list-itens"
                                                    data-image="<?php echo get_template_directory_uri(); ?>/assets/img/menu/warrior-strong.png">
                                                    <h4>
                                                        <a href="https://bdtchain.com/warrior-strong/">Warrior Strong</a>
                                                    </h4>
                                                    <p>Get strong + build muscle</p>
                                                </div>
                                                <div
                                                    class="list-itens"
                                                    data-image="<?php echo get_template_directory_uri(); ?>/assets/img/menu/bia-mama.png">
                                                    <h4><a href="https://bdtchain.com/bia-mama/">Bia Mama</a></h4>
                                                    <p>Pregnancy + postpartum</p>
                                                </div>
                                            </div>
                                            <div class="mega-menu-listing">
                                                <div
                                                    class="list-itens"
                                                    data-image="<?php echo get_template_directory_uri(); ?>/assets/img/menu/bia-girls.png">
                                                    <h4><a href="https://bdtchain.com/bia-girls/">Bia Girls</a></h4>
                                                    <p>Obstacles for 9-14 years</p>
                                                </div>
                                                <div
                                                    class="list-itens"
                                                    data-image="<?php echo get_template_directory_uri(); ?>/assets/img/menu/gov-games.png">
                                                    <h4>
                                                        <a href="https://bdtchain.com/gov-games/">Gov Games Training</a>
                                                    </h4>
                                                    <p>Unmatched team training</p>
                                                </div>
                                                <div
                                                    class="list-itens"
                                                    data-image="<?php echo get_template_directory_uri(); ?>/assets/img/menu/online-coaching.png">
                                                    <h4>
                                                        <a href="https://bdtchain.com/online-coaching/">Online Coaching</a>
                                                    </h4>
                                                    <p>1-1 coaching or home programs</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://bdtchain.com/events/">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://bdtchain.com/the-retreat/">The Retreat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://bdtchain.com/memberships/">Memberships</a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                data-bs-toggle="modal"
                                data-bs-target="#iframeModal">Schedule</a>
                        </li>
                    </ul>
                    <a href="https://wa.me/971585284756" class="btn btn-primary">Chat with us</a>
                </div>
            </div>
        </nav>
    </header>
	<div class="modal fade" id="iframeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="iframeBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header py-4">
          <button type="button" class="btn-close position-relative" data-bs-dismiss="modal" aria-label="Close"
            style="right: 0"></button>
        </div>
        <div class="modal-body p-4">
          <iframe src="https://app.glofox.com/portal/#/branch/632c4c4de7442665a049173e/classes-day-view" frameborder="0"
            width="100%" height="1200"></iframe><a href="https://www.glofox.com">powered by <b>Glofox</b></a>
        </div>
      </div>
    </div>
  </div>