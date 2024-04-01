<!--add-contact.html is basically adding scholar, link sya papuntang add scholar-->

<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

  
<!-- Mirrored from prium.github.io/phoenix/v1.14.0/apps/crm/add-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2024 02:15:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
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
        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
          <!-- scrollbar removed-->
          
          <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
              <li class="nav-item">
                <!-- parent pages-->
                <div class="nav-item-wrapper">
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-home">
                      
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
            <li class="nav-item">
                <!-- label-->
                <hr class="navbar-vertical-line" /><!-- parent pages-->
                <div class="nav-item-wrapper">

                  <div class="nav-item-wrapper"><a class="nav-link label-1" href="../dashboard/dashboard.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="pie-chart"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Dashboard</span></span></div>
                  </a></div><!-- parent pages-->
    
            
                  <div class="nav-item-wrapper"><a class="nav-link label-1" href="../social/announcement.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="file"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Announcements</span></span></div>
                  </a></div><!-- parent pages-->    



                  <div class="nav-item-wrapper"><a class="nav-link label-1" href="../requests/pending-request.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="file-text"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Pending Requests</span></span></div>
                  </a></div><!-- parent pages-->



            
            
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-CRM" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-CRM">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="user"></span></span><span class="nav-link-text">Scholar</span><span class="fa-solid fa-circle text-info ms-1 new-page-indicator" style="font-size: 6px"></span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                <!---->    <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse" id="nv-CRM">
                
                      </li>
                      <li class="nav-item"><a class="nav-link" href="add-scholar.php" data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Add Scholar</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link active" href="scholar-list.php" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Scholar List</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="submitted-documents.php" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Submitted Documents</span></div>
                    </a> <!--more inner pages-->
                  </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->




                <div class="nav-item-wrapper"><a class="nav-link label-1" href="../users/users.php" role="button" data-bs-toggle="" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="users"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Users</span></span></div>
                </a></div><!-- parent pages-->




               
      
        <div class="navbar-vertical-footer"><button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
      </nav>
      <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault" style="display:none;">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="../../index.php">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="../../assets/img/icons/owwa.png" alt="phoenix" width="27" />
                  <p class="logo-text ms-2 d-none d-sm-block">owwaspom</p>
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
                    <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../requests/notifications.php">Notification history</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
             
             
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
                      <h6 class="mt-2 text-body-emphasis">ADMIN</h6>
                    </div>
                    </div>
                  <div class="overflow-auto scrollbar">
                    <ul class="nav d-flex flex-column mb-2 pb-1">
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="settings"></span>Change Password </a></li>
                    </ul>
                  </div>
                  
                   
                    <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                    <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>


      <!--     ------------------------      END   -------------------------              -->
      <!--     ------------------------      END   -------------------------              -->
      <!--     ------------------------      END   -------------------------              -->
      <!--     ------------------------      END   -------------------------              -->
      <!--     ------------------------      END   -------------------------              -->
      <!--     ------------------------      END   -------------------------              -->
      <!--     ------------------------      END   -------------------------              -->
      <!--     ------------------------      END   -------------------------              -->
      <!--     ------------------------      END   -------------------------              -->
      <!--     ------------------------      END   -------------------------              -->



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
       <div class="content">
        
        <div class="pb-9">
          <div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="col-12 col-md-auto">
              <h2 class="mb-0">Profile</h2>
            </div>
            <div class="col-12 col-md-auto d-flex"><button class="btn btn-phoenix-secondary px-3 px-sm-5 me-2"><span class="fa-solid fa-edit me-sm-2"></span><span class="d-none d-sm-inline">Edit		</span></button><button class="btn btn-phoenix-danger me-2"><span class="fa-solid fa-trash me-2"></span><span>Delete Deal</span></button>
              
            </div>
          </div>
          <div class="row g-4 g-xl-6">
            <div class="col-xl-5 col-xxl-4">
              <div class="sticky-leads-sidebar">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="row align-items-center g-3 text-center text-xxl-start">
                      <div class="col-12 col-xxl-auto">
                        <div class="avatar avatar-5xl"><img class="rounded-circle" src="../../assets/img/team/33.webp" alt="" /></div>
                      </div>
                      <div class="col-12 col-sm-auto flex-1">
                        <h3 class="fw-bolder mb-2">Ansolo Lazinatov</h3>
                        <p class="mb-0">ODSP</p><a class="fw-bold" href="#!">3rd Year - 2nd sem</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h4 class="mb-5">Personal Information</h4>
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="mb-4">
                          <div class="d-flex flex-wrap justify-content-between mb-2">

                          <!--Email-->
                            <h5 class="mb-0 text-body-highlight me-2">Email</h5>
                          </div>
                            <label><a class="text-body-highlight" href="mailto:annac34@gmail.com">abcdefg@gmail.com</a></label>
                          
                        </div>
                        
                        <div class="mb-4">
                          <h5 class="mb-0 text-body-highlight mb-2">Address</h5>
                          <label>Boac, Marinduque</label>
                        </div>



                        <div class="mb-4">
                          <h5 class="mb-0 text-body-highlight mb-2">Contact No.</h5> 
                          <label>+63 997 807 2285</label>
                        </div>



                        <div class="mb-4">
                          <h5 class="mb-0 text-body-highlight mb-2">Birthdate</h5> 
                          <label>March 2, 2004</label>
                        </div>
                        

                        <div class="mb-4">
                          <h5 class="mb-0 text-body-highlight mb-2">Gender</h5> 
                          <label>Male</label>
                        </div>


                        <div class="mb-4">
                          <h5 class="mb-0 text-body-highlight mb-2">Citizenship</h5> 
                          <label>Filipino</label>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-7 col-xxl-8">
              
             
              <ul class="nav nav-underline fs-9 deal-details scrollbar flex-nowrap w-100 pb-1 mb-6" id="myTab" role="tablist" style="overflow-y: hidden;">
                <li class="nav-item text-nowrap me-2" role="presentation"><a class="nav-link active" id="activity-tab" data-bs-toggle="tab" href="#tab-activity" role="tab" aria-controls="tab-activity" aria-selected="false" tabindex="-1"> <span class="fa-solid fa-chart-line me-2 tab-icon-color"></span>Education</a></li>
                <li class="nav-item text-nowrap me-2" role="presentation"><a class="nav-link" id="notes-tab" data-bs-toggle="tab" href="#tab-notes" role="tab" aria-controls="tab-notes" aria-selected="false" tabindex="-1"> <span class="fa-solid fa-clipboard me-2 tab-icon-color"></span>Background</a></li>
                <li class="nav-item text-nowrap me-2" role="presentation"><a class="nav-link" id="meeting-tab" data-bs-toggle="tab" href="#tab-meeting" role="tab" aria-controls="tab-meeting" aria-selected="true"> <span class="fa-solid fa-video me-2 tab-icon-color"></span>Grantor</a></li>
                <li class="nav-item text-nowrap me-2" role="presentation"><a class="nav-link" id="attachments-tab" data-bs-toggle="tab" href="#tab-attachments" role="tab" aria-controls="tab-attachments" aria-selected="true"> <span class="fa-solid fa-paperclip me-2 tab-icon-color"></span>Attachments</a></li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="tab-activity" role="tabpanel" aria-labelledby="activity-tab">
                  <h3 class="mb-4">Education</h3>
                  <div class="row align-items-center g-3 justify-content-between justify-content-start">
                    <div class="col-12 col-sm-auto">
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    <div class="px-xl-4 mb-7">
                      <div class="row mx-0 mx-sm-3 mx-lg-0 px-lg-0">
                        <div class="col-sm-12 col-xxl-6 border-bottom border-end-xxl border-translucent py-3">
                          <table class="w-100 table-stats table-stats">
                            
                            <tr>
                              <th>Tertiary</th>
                              <th></th>
                              <th></th>
                            </tr>
                            <tr>
                              <td class="py-2">
                                <div class="d-inline-flex align-items-center">
                                  <div class="d-flex bg-success-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-success-dark" data-feather="bar-chart-2" style="width:16px; height:16px"></span></div>
                                  <p class="fw-bold mb-0">College</p>
                                </div>
                              </td>
                              <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                              <td class="py-2">
                                <p class="ps-6 ps-sm-0 fw-semibold mb-0 mb-0 pb-3 pb-sm-0">Marinduque State University</p>
                              </td>
                            </tr>
                            <tr>
                              <td class="py-2">
                                <div class="d-flex align-items-center">
                                  <div class="d-flex bg-info-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-info-dark" data-feather="trending-up" style="width:16px; height:16px"></span></div>
                                  <p class="fw-bold mb-0">Course</p>
                                </div>
                              </td>
                              <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                              <td class="py-2">
                                <p class="ps-6 ps-sm-0 fw-semibold mb-0">Bachelor of Science in Business Administration</p>
                              </td>
                            </tr>
                            <tr>
                              
                           
                            
                          </table>
                        </div>
                       
                        <div class="col-sm-12 col-xxl-6 border-end-xxl border-bottom border-bottom-xxl-0 py-3 border-translucent">
                          <table class="w-100 table-stats">
                            <th>Secondary Education</th>
                              <th></th>
                              <th></th>
                            </tr>
                            <tr>
                              <td class="py-2">
                                <div class="d-inline-flex align-items-center">
                                  <div class="d-flex bg-primary-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-primary-dark" data-feather="phone" style="width:16px; height:16px"></span></div>
                                  <p class="fw-bold mb-0">Senior High School</p>
                                </div>
                              </td>
                              <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                              <td class="py-2">ABC National High School</td>
                            </tr>
                            <tr>
                              <td class="py-2">
                                <div class="d-flex align-items-center">
                                  <div class="d-flex bg-warning-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-warning-dark" data-feather="mail" style="width:16px; height:16px"></span></div>
                                  <p class="fw-bold mb-0">Junior High School</p>
                                </div>
                              </td>
                              <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                              <td class="py-2">ABC National High School</td>
                            </tr>
                          </table>
                        </div>
                        <div class="col-sm-12 col-xxl-6 py-3">
                          <table class="w-100 table-stats">
                            <tr>
                              <th>Primary School</th>
                              <th></th>
                              <th></th>
                            </tr>
                            <tr>
                              <td class="py-2">
                                <div class="d-flex align-items-center">
                                  <div class="d-flex bg-warning-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-warning-dark" data-feather="mail" style="width:16px; height:16px"></span></div>
                                  <p class="fw-bold mb-0">Elementary</p>
                                </div>
                              </td>
                              <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                              <td class="py-2"> ABC Elementary School</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>



               <!--BACKGROUND--> 


                <div class="tab-pane fade" id="tab-notes" role="tabpanel" aria-labelledby="notes-tab">
                  <h3 class="mb-4">Background Information</h3>
                  <div class="row gy-4">
                    <div class="col-12 col-xl-auto flex-1">
                      <div class="px-xl-4 mb-7">
                        <div class="row mx-0 mx-sm-3 mx-lg-0 px-lg-0">
                          <div class="col-sm-12 col-xxl-6 border-bottom border-end-xxl border-translucent py-3">
                            <table class="w-100 table-stats table-stats">
                              
                              <tr>
                                <th><h4>Father's Information</h4></th>
                                <th></th>
                                <th></th>
                              </tr>
                              <tr>
                                <td class="py-2">
                                  <div class="d-inline-flex align-items-center">
                                    <div class="d-flex bg-success-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-success-dark" data-feather="bar-chart-2" style="width:16px; height:16px"></span></div>
                                    <p class="fw-bold mb-0">Name</p>
                                  </div>
                                </td>
                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-2">
                                  <p class="ps-6 ps-sm-0 fw-semibold mb-0 mb-0 pb-3 pb-sm-0">Nomer Sanchez</p>
                                </td>
                              </tr>
                              <tr>
                                <td class="py-2">
                                  <div class="d-flex align-items-center">
                                    <div class="d-flex bg-info-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-info-dark" data-feather="trending-up" style="width:16px; height:16px"></span></div>
                                    <p class="fw-bold mb-0">Contact No.</p>
                                  </div>
                                </td>
                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-2">
                                  <p class="ps-6 ps-sm-0 fw-semibold mb-0">09878899988</p>
                                </td>
                              </tr>
                              <tr>
                                <td class="py-2">
                                  <div class="d-flex align-items-center">
                                    <div class="d-flex bg-info-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-info-dark" data-feather="trending-up" style="width:16px; height:16px"></span></div>
                                    <p class="fw-bold mb-0">Email address</p>
                                  </div>
                                </td>
                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-2">
                                  <p class="ps-6 ps-sm-0 fw-semibold mb-0"><a class="text-body-highlight" href="mailto:annac34@gmail.com">qwe@gmail.com</a></p>
                                </td>
                              </tr>
                              <tr>
                                <td class="py-2">
                                  <div class="d-flex align-items-center">
                                    <div class="d-flex bg-info-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-info-dark" data-feather="trending-up" style="width:16px; height:16px"></span></div>
                                    <p class="fw-bold mb-0">Occupation</p>
                                  </div>
                                </td>
                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-2">
                                  <p class="ps-6 ps-sm-0 fw-semibold mb-0">Farming</p>
                                </td>
                              </tr>
                              <tr>
                                <td class="py-2">
                                  <div class="d-flex align-items-center">
                                    <div class="d-flex bg-info-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-info-dark" data-feather="trending-up" style="width:16px; height:16px"></span></div>
                                    <p class="fw-bold mb-0">Educational Attainment</p>
                                  </div>
                                </td>
                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-2">
                                  <p class="ps-6 ps-sm-0 fw-semibold mb-0">High School</p>
                                </td>
                              </tr>
                            </table>
                          </div>
                         
                          <div class="col-sm-12 col-xxl-6 border-end-xxl border-bottom border-bottom-xxl-0 py-3 border-translucent">
                            <table class="w-100 table-stats table-stats">
                              
                              <tr>
                                <th><h4>Mothers's Information</h4></th>
                                <th></th>
                                <th></th>
                              </tr>
                              <tr>
                                <td class="py-2">
                                  <div class="d-inline-flex align-items-center">
                                    <div class="d-flex bg-success-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-success-dark" data-feather="bar-chart-2" style="width:16px; height:16px"></span></div>
                                    <p class="fw-bold mb-0">Name</p>
                                  </div>
                                </td>
                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-2">
                                  <p class="ps-6 ps-sm-0 fw-semibold mb-0 mb-0 pb-3 pb-sm-0">Nomer Sanchez</p>
                                </td>
                              </tr>
                              <tr>
                                <td class="py-2">
                                  <div class="d-flex align-items-center">
                                    <div class="d-flex bg-info-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-info-dark" data-feather="trending-up" style="width:16px; height:16px"></span></div>
                                    <p class="fw-bold mb-0">Contact No.</p>
                                  </div>
                                </td>
                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-2">
                                  <p class="ps-6 ps-sm-0 fw-semibold mb-0">09878899988</p>
                                </td>
                              </tr>
                              <tr>
                                <td class="py-2">
                                  <div class="d-flex align-items-center">
                                    <div class="d-flex bg-info-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-info-dark" data-feather="trending-up" style="width:16px; height:16px"></span></div>
                                    <p class="fw-bold mb-0">Email address</p>
                                  </div>
                                </td>
                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-2">
                                  <p class="ps-6 ps-sm-0 fw-semibold mb-0"><a class="text-body-highlight" href="mailto:annac34@gmail.com">gyhjjbh@gmail.com</a></p>
                                </td>
                              </tr>
                              <tr>
                                <td class="py-2">
                                  <div class="d-flex align-items-center">
                                    <div class="d-flex bg-info-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-info-dark" data-feather="trending-up" style="width:16px; height:16px"></span></div>
                                    <p class="fw-bold mb-0">Occupation</p>
                                  </div>
                                </td>
                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-2">
                                  <p class="ps-6 ps-sm-0 fw-semibold mb-0">Farming</p>
                                </td>
                              </tr>
                              <tr>
                                <td class="py-2">
                                  <div class="d-flex align-items-center">
                                    <div class="d-flex bg-info-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-info-dark" data-feather="trending-up" style="width:16px; height:16px"></span></div>
                                    <p class="fw-bold mb-0">Educational Attainment</p>
                                  </div>
                                </td>
                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-2">
                                  <p class="ps-6 ps-sm-0 fw-semibold mb-0">High School</p>
                                </td>
                              </tr>
 
                            </table>
                          </div>
                          <div class="col-sm-12 col-xxl-6 py-3">
                            <table class="w-100 table-stats">
                              <tr>
                                <th><h4>Other Information</h4></th>
                                <th></th>
                                <th></th>
                              </tr>
                              <tr>
                                <td class="py-2">
                                  <div class="d-flex align-items-center">
                                    <div class="d-flex bg-warning-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-warning-dark" data-feather="mail" style="width:16px; height:16px"></span></div>
                                    <p class="fw-bold mb-0">No. of Siblings</p>
                                  </div>
                                </td>
                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-2">4</td>
                              </tr>
                              <tr>
                                <td class="py-2">
                                  <div class="d-flex align-items-center">
                                    <div class="d-flex bg-warning-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-warning-dark" data-feather="mail" style="width:16px; height:16px"></span></div>
                                    <p class="fw-bold mb-0">Religion</p>
                                  </div>
                                </td>
                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-2">Roman Catholic</td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div> 

                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-meeting" role="tabpanel" aria-labelledby="meeting-tab">
                  <h3 class="mb-4">OFW Grantor</h3>
                  <div class="row align-items-center g-2 flex-wrap justify-content-start mb-3">
                    <div class="col-12 col-sm-auto">
 
                      <div class="px-xl-4 mb-7">
                        <div class="row mx-0 mx-sm-3 mx-lg-0 px-lg-0">
                          <div class="col-sm-12 col-xxl-6 border-bottom border-end-xxl border-translucent py-3">
                            <table class="w-100 table-stats table-stats">
                              
                              <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                              </tr>
                              <tr>
                                <td class="py-2">
                                  <div class="d-inline-flex align-items-center">
                                    <div class="d-flex bg-success-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-success-dark" data-feather="bar-chart-2" style="width:16px; height:16px"></span></div>
                                    <p class="fw-bold mb-0">Name</p>
                                  </div>
                                </td>
                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-2">
                                  <p class="ps-6 ps-sm-0 fw-semibold mb-0 mb-0 pb-3 pb-sm-0">Raymond Sanchez</p>
                                </td>
                              </tr>
                              <tr>
                                <td class="py-2">
                                  <div class="d-flex align-items-center">
                                    <div class="d-flex bg-info-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-info-dark" data-feather="trending-up" style="width:16px; height:16px"></span></div>
                                    <p class="fw-bold mb-0">Relationship</p>
                                  </div>
                                </td>
                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-2">
                                  <p class="ps-6 ps-sm-0 fw-semibold mb-0">Brother</p>
                                </td>
                              </tr>
                              <tr>
                                <td class="py-2">
                                  <div class="d-flex align-items-center">
                                    <div class="d-flex bg-info-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-info-dark" data-feather="trending-up" style="width:16px; height:16px"></span></div>
                                    <p class="fw-bold mb-0">Email address</p>
                                  </div>
                                </td>
                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-2">
                                  <p class="ps-6 ps-sm-0 fw-semibold mb-0"><a class="text-body-highlight" href="mailto:annac34@gmail.com">bghsjdb@gmail.com</a></p>
                                </td>
                              </tr>
                              <tr>
                                <td class="py-2">
                                  <div class="d-flex align-items-center">
                                    <div class="d-flex bg-info-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-info-dark" data-feather="trending-up" style="width:16px; height:16px"></span></div>
                                    <p class="fw-bold mb-0">Category</p>
                                  </div>
                                </td>
                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-2">
                                  <p class="ps-6 ps-sm-0 fw-semibold mb-0">Land-based</p>
                                </td>
                              </tr>
                              <tr>
                                <td class="py-2">
                                  <div class="d-flex align-items-center">
                                    <div class="d-flex bg-info-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-info-dark" data-feather="trending-up" style="width:16px; height:16px"></span></div>
                                    <p class="fw-bold mb-0">Occupation</p>
                                  </div>
                                </td>
                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-2">
                                  <p class="ps-6 ps-sm-0 fw-semibold mb-0">Aircraft Mechanic</p>
                                </td>
                              </tr>
 
                            </table>

                          </div>             
                        </div>
                      </div> 

                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
            
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
    <script src="../../vendors/dropzone/dropzone.min.js"></script>
    <script src="../../assets/js/phoenix.js"></script>
  </body>


<!-- Mirrored from prium.github.io/phoenix/v1.14.0/apps/crm/deal-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2024 02:15:42 GMT -->
</html>