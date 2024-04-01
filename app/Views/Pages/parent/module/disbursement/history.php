<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>OWWASPOMS</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../../vendors/prism/prism-okaidia.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
      var phoenixIsRTL = window.config.config.phoenixIsRTL;
      if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
        <script>
          var navbarStyle = window.config.config.phoenixNavbarStyle;
          if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
          }
        </script>

        <!-- SIDEBAR -->
        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
          <!-- scrollbar removed-->
          <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
              <li class="nav-item">

              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label"></p>
                <hr class="navbar-vertical-line" />

                <!--DASHBOARD parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="../../index.php"role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="pie-chart"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Dashboard</span></span></div></a></div> 
                  <!-- END OF DASHBOARD -->

                  <!--ANNOUNCEMENT parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="../announcement/feed.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="clipboard"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Announcements</span></span></div></a></div> 
                  <!-- END OF ANNOUNCEMENT -->

                  <!--DISBURSEMENT parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="../disbursement/history.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-history me-1"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Disbursement History</span></span></div></a></div> 
                  <!-- END OF DISBURSEMENT -->

                  <!--GRADE parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="../grade/viewgrades.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="award"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Grades</span></span></div></a></div> 
                  <!-- END OF GRADE -->
              </li>

              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label"></p>
                <hr class="navbar-vertical-line" />
              </li>

              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label"></p>
                <hr class="navbar-vertical-line" />
              </li>

              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label"></p>
                <hr class="navbar-vertical-line" />
              </li>
            </ul>
          </div>
        </div> 
        <!-- END OF SIDEBAR -->
        
        <div class="navbar-vertical-footer"><button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
      </nav>

      <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault" style="display:none;">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="../../index.html">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="../../assets/img/icons/owwa.png" alt="phoenix" width="27" />
                  <p class="logo-text ms-2 d-none d-sm-block">owwaspoms</p>
                </div>
              </div>
            </a>
          </div>

          <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
              <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span data-feather="bell" style="height:20px;width:20px;"></span></a>
              <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                <div class="card position-relative border-0">
                  <div class="card-header p-2">
                    <div class="d-flex justify-content-between">
                      <h5 class="text-body-emphasis mb-0">Notificatons</h5><button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="scrollbar-overlay" style="height: 27rem;">
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../../assets/img/team/40x40/30.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3">
                              <div class="avatar-name rounded-circle"><span>J</span></div>
                            </div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../../assets/img/team/40x40/avatar.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../../assets/img/team/40x40/57.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../../assets/img/team/40x40/59.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../../assets/img/team/40x40/58.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer p-0 border-top border-translucent border-0">
                    <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../../pages/notifications.html">Notification history</a></div>
                  </div>
                </div>
              </div>
            </li>

            <!-- PROFILE DD STARTS -->
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-l ">
                  <img class="rounded-circle " src="../../assets/img/team/40x40/57.webp" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                  <div class="card-body p-0">
                    <div class="text-center pt-4 pb-3">
                      <div class="avatar avatar-xl ">
                        <img class="rounded-circle " src="../../assets/img/team/72x72/57.webp" alt="" />
                      </div>
                      <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                    </div>
                  <div class="overflow-auto scrollbar" style="height: 8rem;">
                    <ul class="nav d-flex flex-column mb-2 pb-1">
                      <li class="nav-item"><a class="nav-link px-3" href="../profile/profile.php"> <span class="me-2 text-body" data-feather="user"></span><span>Profile</span></a></li>
                    </ul>
                  
                  <div class="card-footer p-3 border-top border-translucent">
                    
                    <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!-- PROFILE DD ENDS -->
          </ul>
        </div>
      </nav>

      <nav class="navbar navbar-top navbar-slim fixed-top navbar-expand" id="topNavSlim" style="display:none;">
      </nav>
      <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarTop" style="display:none;">  
      </nav>
      <nav class="navbar navbar-top navbar-slim justify-content-between fixed-top navbar-expand-lg" id="navbarTopSlim" style="display:none;">
      </nav>
      <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarCombo" data-navbar-top="combo" data-move-target="#navbarVerticalNav" style="display:none;">
      </nav>
      <nav class="navbar navbar-top fixed-top navbar-slim justify-content-between navbar-expand-lg" id="navbarComboSlim" data-navbar-top="combo" data-move-target="#navbarVerticalNav" style="display:none;">
      </nav>
      <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="dualNav" style="display:none;"> 
      </nav>

      <script>
        var navbarTopShape = window.config.config.phoenixNavbarTopShape;
        var navbarPosition = window.config.config.phoenixNavbarPosition;
        var body = document.querySelector('body');
        var navbarDefault = document.querySelector('#navbarDefault');
        var navbarTop = document.querySelector('#navbarTop');
        var topNavSlim = document.querySelector('#topNavSlim');
        var navbarTopSlim = document.querySelector('#navbarTopSlim');
        var navbarCombo = document.querySelector('#navbarCombo');
        var navbarComboSlim = document.querySelector('#navbarComboSlim');
        var dualNav = document.querySelector('#dualNav');

        var documentElement = document.documentElement;
        var navbarVertical = document.querySelector('.navbar-vertical');

        if (navbarPosition === 'dual-nav') {
          topNavSlim.remove();
          navbarTop.remove();
          navbarVertical.remove();
          navbarTopSlim.remove();
          navbarCombo.remove();
          navbarComboSlim.remove();
          navbarDefault.remove();
          dualNav.removeAttribute('style');
          document.documentElement.setAttribute('data-navigation-type', 'dual');

        } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
          navbarDefault.remove();
          navbarTop.remove();
          navbarTopSlim.remove();
          navbarCombo.remove();
          navbarComboSlim.remove();
          topNavSlim.style.display = 'block';
          navbarVertical.style.display = 'inline-block';
          document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');

        } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
          navbarDefault.remove();
          navbarVertical.remove();
          navbarTop.remove();
          topNavSlim.remove();
          navbarCombo.remove();
          navbarComboSlim.remove();
          navbarTopSlim.removeAttribute('style');
          document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
        } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
          navbarDefault.remove();
          navbarTop.remove();
          topNavSlim.remove();
          navbarCombo.remove();
          navbarTopSlim.remove();
          navbarComboSlim.removeAttribute('style');
          navbarVertical.removeAttribute('style');
          document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
        } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
          navbarDefault.remove();
          topNavSlim.remove();
          navbarVertical.remove();
          navbarTopSlim.remove();
          navbarCombo.remove();
          navbarComboSlim.remove();
          navbarTop.removeAttribute('style');
          document.documentElement.setAttribute('data-navigation-type', 'horizontal');
        } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
          topNavSlim.remove();
          navbarTop.remove();
          navbarTopSlim.remove();
          navbarDefault.remove();
          navbarComboSlim.remove();
          navbarCombo.removeAttribute('style');
          navbarVertical.removeAttribute('style');
          document.documentElement.setAttribute('data-navigation-type', 'combo');


        } else {
          topNavSlim.remove();
          navbarTop.remove();
          navbarTopSlim.remove();
          navbarCombo.remove();
          navbarComboSlim.remove();
          navbarDefault.removeAttribute('style');
          navbarVertical.removeAttribute('style');
        }

        var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
        var navbarTop = document.querySelector('.navbar-top');
        if (navbarTopStyle === 'darker') {
          navbarTop.setAttribute('data-navbar-appearance', 'darker');
        }

        var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
        var navbarVertical = document.querySelector('.navbar-vertical');
        if (navbarVerticalStyle === 'darker') {
          navbarVertical.setAttribute('data-navbar-appearance', 'darker');
        }
      </script>

      <!-- GRANT START -->
      <div class="content">
        <h2 class="mb-2 lh-sm">Disbursement History</h2>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Review Grant History</h4>
                      </div>
                    </div>
                  </div>
                  
                    <div class="p-4 code-to-copy">
                      <form class="row g-3 needs-validation" novalidate="">
                        <div class="mb-6">
                <h3 class="mb-4">GRANTS<span class="text-body-tertiary fw-normal">(15)</span></h3>
                <div class="border-top border-bottom border-translucent" id="customerOrdersTable" data-list='{"valueNames":["order","total","payment_status","fulfilment_status","delivery_type","date"],"page":6,"pagination":true}'>
                  <div class="table-responsive scrollbar">
                    <table class="table table-sm fs-9 mb-0">
                      <thead>
                        <tr>
                          <th class="align-middle ps-0 pe-3" scope="col" data-sort="order" style="width:10%;">ID
                          </th>
                          <th class="align-middle text-start pe-7" scope="col" data-sort="amount" style="width:10%;">AMOUNT
                          </th>
                          <th class="align-middle white-space-nowrap pe-3" scope="col" data-sort="payment_status" style="width:15%;">PAYMENT STATUS
                          </th>
                          <th class="align-middle white-space-nowrap text-start" scope="col" data-sort="date" style="width:20%;">DATE
                          </th>
                        </tr>
                      </thead>
                      <tbody class="list" id="customer-order-table-body">
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semibold" href="#!">1</a></td>
                          <td class="total align-middle text-start fw-semibold pe-7 text-body-highlight">₱3,000.00</td>
                          <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="date align-middle white-space-nowrap text-body-tertiary fs-9 text-start">Pending</td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semibold" href="#!">1</a></td>
                          <td class="total align-middle text-start fw-semibold pe-7 text-body-highlight">₱3,000.00</td>
                          <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Received</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="date align-middle white-space-nowrap text-body-tertiary fs-9 text-start">Mar 20, 2024 10:00 AM</td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semibold" href="#!">1</a></td>
                          <td class="total align-middle text-start fw-semibold pe-7 text-body-highlight">₱3,000.00</td>
                          <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Received</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="date align-middle white-space-nowrap text-body-tertiary fs-9 text-start">Dec 13, 2023 2:30 PM</td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semibold" href="#!">1</a></td>
                          <td class="total align-middle text-start fw-semibold pe-7 text-body-highlight">₱3,000.00</td>
                          <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Received</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="date align-middle white-space-nowrap text-body-tertiary fs-9 text-start">Dec 12, 2023 9:45 AM</td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semibold" href="#!">1</a></td>
                          <td class="total align-middle text-start fw-semibold pe-7 text-body-highlight">₱3,000.00</td>
                          <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Received</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="date align-middle white-space-nowrap text-body-tertiary fs-9 text-start">Dec 11, 2023 1:15 PM</td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semibold" href="#!">1</a></td>
                          <td class="total align-middle text-start fw-semibold pe-7 text-body-highlight">₱3,000.00</td>
                          <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Received</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="date align-middle white-space-nowrap text-body-tertiary fs-9 text-start">Dec 10, 2023 3:30 PM</td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semibold" href="#!">1</a></td>
                          <td class="total align-middle text-start fw-semibold pe-7 text-body-highlight">₱3,000.00</td>
                          <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Received</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="date align-middle white-space-nowrap text-body-tertiary fs-9 text-start">Dec 9, 2023 10:00 AM</td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semibold" href="#!">1</a></td>
                          <td class="total align-middle text-start fw-semibold pe-7 text-body-highlight">₱3,000.00</td>
                          <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Received</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="date align-middle white-space-nowrap text-body-tertiary fs-9 text-start">Dec 8, 2023 3:00 PM</td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semibold" href="#!">1</a></td>
                          <td class="total align-middle text-start fw-semibold pe-7 text-body-highlight">₱3,000.00</td>
                          <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Received</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="date align-middle white-space-nowrap text-body-tertiary fs-9 text-start">Dec 7, 2023 2:40 PM</td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semibold" href="#!">1</a></td>
                          <td class="total align-middle text-start fw-semibold pe-7 text-body-highlight">₱3,000.00</td>
                          <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Received</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="date align-middle white-space-nowrap text-body-tertiary fs-9 text-start">Dec 6, 2023 1:00 PM</td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semibold" href="#!">1</a></td>
                          <td class="total align-middle text-start fw-semibold pe-7 text-body-highlight">₱3,000.00</td>
                          <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Received</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="date align-middle white-space-nowrap text-body-tertiary fs-9 text-start">Dec 5, 2023 10:45 AM</td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semibold" href="#!">1</a></td>
                          <td class="total align-middle text-start fw-semibold pe-7 text-body-highlight">₱3,000.00</td>
                          <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Received</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="date align-middle white-space-nowrap text-body-tertiary fs-9 text-start">Dec 4, 2023 12:15 PM</td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semibold" href="#!">1</a></td>
                          <td class="total align-middle text-start fw-semibold pe-7 text-body-highlight">₱3,000.00</td>
                          <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Received</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="date align-middle white-space-nowrap text-body-tertiary fs-9 text-start">Dec 3,2023 12:30 PM</td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semibold" href="#!">1</a></td>
                          <td class="total align-middle text-start fw-semibold pe-7 text-body-highlight">₱3,000.00</td>
                          <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Received</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="date align-middle white-space-nowrap text-body-tertiary fs-9 text-start">Dec 2, 2023 9:20 AM</td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semibold" href="#!">1</a></td>
                          <td class="total align-middle text-start fw-semibold pe-7 text-body-highlight">₱3,000.00</td>
                          <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Received</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="date align-middle white-space-nowrap text-body-tertiary fs-9 text-start">Dec 1, 2023 8:30 AM</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                    <div class="col-auto d-flex">
                      <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                      <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                    </div>
                  </div>
                </div>
              </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!-- FOOTER STARTS -->
        <footer class="footer position-absolute">
          <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 mt-2 mt-sm-0 text-body">owwaspoms<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy;<a class="mx-1" href="https://www.facebook.com/citycollegeofcalapan/">City Collegians</a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-body-tertiary text-opacity-85"></p>
            </div>
          </div>
        </footer>
        <!-- FOOTER ENDS -->
      </div>
      <!-- GRANT ENDS -->

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../vendors/popper/popper.min.js"></script>
    <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../vendors/is/is.min.js"></script>
    <script src="../../vendors/fontawesome/all.min.js"></script>
    <script src="../../vendors/lodash/lodash.min.js"></script>
    <script src="../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="../../vendors/list.js/list.min.js"></script>
    <script src="../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../vendors/prism/prism.js"></script>
    <script src="../../assets/js/phoenix.js"></script>
  </body>

</html>