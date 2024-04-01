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
      <nav class="mb-2" aria-label="breadcrumb">

      </nav>
      <div class="mb-9">
        <div class="row g-2 mb-4">
          <div class="col-auto">
            <h2 class="mb-0">Scholars</h2>
          </div>
        </div>
        <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
          <li class="nav-item"><a class="nav-link " aria-current="page" href="scholar-list.php"><span>Active Scholar </span><span class="text-body-tertiary fw-semibold">(500)</span></a></li>
          <li class="nav-item"><a class="nav-link active" href="inactive-scholar-list.php"><span>Inactive Scholar </span><span class="text-body-tertiary fw-semibold">(209)</span></a></li>
          <li class="nav-item"><a class="nav-link active" href="graduated-scholar-list.php"><span>Graduated Scholar </span><span class="text-body-tertiary fw-semibold">(17)</span></a></li>
          <li class="nav-item"><a class="nav-link active" href="terminated-scholar-list.php"><span>Terminated Scholar </span><span class="text-body-tertiary fw-semibold">(8)</span></a></li>

        </ul>
        <div id="products" data-list='{"valueNames":["customer","email","total-orders","total-spent","city","last-seen","last-order"],"page":10,"pagination":true}'>
          <div class="mb-4">
            <div class="row g-3">
              <div class="col-auto">
                <div class="search-box">
                  <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search" aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                  </form>
                </div>
              </div>
              <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                <div class="btn-group position-static" role="group">
                  <div class="btn-group position-static text-nowrap"><button class="btn btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> Provinces<span class="fas fa-angle-down ms-2"></span></button>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">All</a></li>
                      <li><a class="dropdown-item" href="#">Oriental Mindoro</a></li>
                      <li><a class="dropdown-item" href="#">Occidental Mindoro</a></li>
                      <li><a class="dropdown-item" href="#">Marinduque</a></li>
                      <li><a class="dropdown-item" href="#">Romblon</a></li>
                      <li><a class="dropdown-item" href="#">Palawan</a></li>
                    </ul>
                  </div>

                   <!--<button class="btn btn-phoenix-secondary px-7 flex-shrink-0">More filters</button> -->
                </div>
              </div>
              <div class="col-12 col-md-auto d-flex"><button class="btn btn-link text-body me-4 px-0"><span class="fa-solid fa-file-export fs-9 me-2"></span>Export</button>
                
                <div class="col-12 col-md-auto d-flex">
                  <div><button class="btn px-3 btn-phoenix-secondary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent" ><span class="fa-solid fa-ellipsis"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0" style="z-index: 9999;">
                      <li><a class="dropdown-item">Add Scholar</a></li>
                      <li><a class="dropdown-item">Add to Graduate List</a></li>
                      <li><a class="dropdown-item">Add to Terminated Scholar</a></li>
                    </ul>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="table-responsive scrollbar mx-n1 px-1 border-top border-translucent">
            <table class="table fs-9 mb-0 leads-table">
              <thead>
                <tr>
                  <th class="white-space-nowrap fs-9 align-middle ps-0" style="max-width:20px; width:18px;">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select='{"body":"leal-tables-body"}' /></div>
                  </th>
                  <th class="sort white-space-nowrap align-middle  ps-0" scope="col" data-sort="name" style="width:25%;">Name</th>
                  <th class="sort align-middle ps-4 pe-5  border-end border-translucent" scope="col" data-sort="email" style="width:15%;">
                    <div class="d-inline-flex flex-center">
                      <div class="d-flex align-items-center px-1 py-1 bg-success-subtle rounded me-2"><span class="text-success-dark"></span></div><span>Email</span>
                    </div>
                  </th>
                  <th class="sort align-middle ps-4 pe-5 border-end border-translucent" scope="col" data-sort="phone" style="width:15%;">
                    <div class="d-inline-flex flex-center">
                      <div class="d-flex align-items-center px-1 py-1 bg-primary-subtle rounded me-2"><span class="text-primary-dark"></span></div><span>Program</span>
                    </div>
                  </th>
                  <th class="sort align-middle ps-4 pe-5 border-end border-translucent" scope="col" data-sort="contact" style="width:15%;">
                    <div class="d-inline-flex flex-center">
                      <div class="d-flex align-items-center px-1 py-1 bg-info-subtle rounded me-2"><span class="text-info-dark" ></span></div><span>School</span>
                    </div>
                  </th>
                  <th class="sort align-middle ps-4 pe-5 border-end border-translucent" scope="col" data-sort="company" style="width:15%;">
                    <div class="d-inline-flex flex-center">
                      <div class="d-flex align-items-center px-1 py-1 bg-warning-subtle rounded me-2"><span class="text-warning-dark"></span></div><span>Action</span>
                    </div>
                  </th>
                  <th class="sort align-middle ps-4 pe-5" scope="col" data-sort="date" style="width:15%;">Status</th>
                  
                </tr>
              </thead>
              <tbody class="list" id="leal-tables-body">
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs-9 align-middle">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/32.webp","name":"Anthoney Michael","designation":"VP Accounting","status":{"label":"new lead","type":"badge-phoenix-primary"}},"email":"anth125@gmail.com","phone":"+1-202-555-0126","contact":"Ally Aagaard","company":"Google.inc","date":"Jan 01, 12:56 PM"}' /></div>
                  </td>
                  <td class="name align-middle white-space-nowrap ps-0">
                      <div><a href="view-submitted-documents.php">Anthoney Michael</a>
                      </div>
                    </div>
                  </td>
                  <td class="email align-middle white-space-nowrap fw-semibold ps-4 border-end border-translucent">am2@gmail.com</td>
                  <td class="phone align-middle white-space-nowrap fw-semibold ps-4 border-end border-translucent">EDSP</td>
                  <td class="contact align-middle white-space-nowrap ps-4 border-end border-translucent fw-semibold text-body-highlight">Fullbright University</td>
                  <td class="company align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4 border-end border-translucent fw-semibold text-body-highlight">
                    <div class="d-flex">
                      <button title="View Information" class="btn btn-primary me-1 mb-1" type="button"><span class="fas fa-eye"></span></button>
                      <button title="Approved" class="btn btn-success me-1 mb-1" type="button"><span class="fa-solid fa-check"></span></button>
                      <button title="Disapproved" class="btn btn-danger me-1 mb-1"  type="button"><span class="fa-solid fa-times"></span></button>
                    </div>
                  </td>
                  <td class="date align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4 text-body-tertiary">                      
                    <button class="btn btn-secondary me-1 mb-1" type="button">Deactivate</button>
                  </td>
          
                </tr>
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs-9 align-middle">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/33.webp","name":"Jacob Russell","designation":"Executive Manager","status":{"label":"Cancelled","type":"badge-phoenix-secondary"}},"email":"jacob@yahoo.com","phone":"+1-202-555-0135","contact":"Alex Abadi","company":"Google.inc","date":"Dec 31, 11:51 PM"}' /></div>
                  </td>
                  <td class="name align-middle white-space-nowrap ps-0">
                    <div class="d-flex align-items-center">
                      <div><a href="view-submitted-documents.php">Jacob Russell</a>
                      </div>
                    </div>
                  </td>
                  <td class="email align-middle white-space-nowrap fw-semibold ps-4 border-end border-translucent">jrus@gmail.com</td>
                  <td class="phone align-middle white-space-nowrap fw-semibold ps-4 border-end border-translucent">2nd Semester</td>
                  <td class="contact align-middle white-space-nowrap ps-4 border-end border-translucent fw-semibold text-body-highlight">Batangas State University</td>
                  <td class="company align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4 border-end border-translucent fw-semibold text-body-highlight">
                    <div class="d-flex">
                      <button title="View Information" class="btn btn-primary me-1 mb-1" type="button"><span class="fas fa-eye"></span></button>
                    </div>
                  </td>
                  <td class="date align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4 text-body-tertiary">                      
                    <button class="btn btn-secondary me-1 mb-1" type="button">Deactivate</button>
                  </td>
                  
                </tr>
               
              </tbody>
            </table>
          </div>
          <div class="row align-items-center justify-content-end py-4 pe-0 fs-9">
            <div class="col-auto d-flex">
              <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
            </div>
            <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
              <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
            </div>
          </div>
         
            
          </div>
        </div>
      </div>
      <footer class="footer position-absolute">
       
      </footer>
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
  <script src="../../assets/js/phoenix.js"></script>
</body>


<!-- Mirrored from prium.github.io/phoenix/v1.14.0/apps/crm/add-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2024 02:15:58 GMT -->
</html>