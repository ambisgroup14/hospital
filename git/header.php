<?php
include('connection.php');

if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!==''){

}else{
    header("location:login.php");
}

$script_name=$_SERVER['SCRIPT_NAME'];
$script_name_arr=explode('/',$script_name);
$mypage=$script_name_arr[count($script_name_arr)-1];



?>
<!DOCTYPE html>
<html lang="en">
<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <title>Dashboard | Lotus Hospital CRM </title>
  <link rel="shortcut icon" href="favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/vendor.min.css">
  <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">
  <link rel="preload" href="assets/css/theme.min.css" data-hs-appearance="default" as="style">
  <link rel="preload" href="assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style">
  <style data-hs-appearance-onload-styles>
    *
    {
      transition: unset !important;
    }
    body
    {
      opacity: 0;
    }
  </style>
  <!-- ONLY DEV -->
  <style>
    body
    {
      opacity: 0;
    }
  </style>
  <!-- END ONLY DEV -->
  <script src="<?php echo SITE_PATH."include/" ?>main.js?v=1"></script>
</head>
<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">
  <script src="assets/js/hs.theme-appearance.js"></script>
  <script src="assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>  
  <header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white">
    <div class="navbar-nav-wrap">      
      <a class="navbar-brand" href="javascript:void(0)" aria-label="Hospital CRM">
      Hospital CRM
      </a>      
      <div class="navbar-nav-wrap-content-start">        
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
          <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
          <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
        </button>        
        <div class="dropdown ms-2">          
          <div class="d-none d-lg-block">
            <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
              <div class="input-group-prepend input-group-text">
                <i class="bi-search"></i>
              </div>
              <input type="search" class="js-form-search form-control" placeholder="Search in front" aria-label="Search in front" data-hs-form-search-options='{
                       "clearIcon": "#clearSearchResultsIcon",
                       "dropMenuElement": "#searchDropdownMenu",
                       "dropMenuOffset": 20,
                       "toggleIconOnFocus": true,
                       "activeClass": "focus"
                     }'>
              <a class="input-group-append input-group-text" href="javascript:;">
                <i id="clearSearchResultsIcon" class="bi-x-lg" style="display: none;"></i>
              </a>
            </div>
          </div>
          <button class="js-form-search js-form-search-mobile-toggle btn btn-ghost-secondary btn-icon rounded-circle d-lg-none" type="button" data-hs-form-search-options='{
                       "clearIcon": "#clearSearchResultsIcon",
                       "dropMenuElement": "#searchDropdownMenu",
                       "dropMenuOffset": 20,
                       "toggleIconOnFocus": true,
                       "activeClass": "focus"
                     }'>
            <i class="bi-search"></i>
          </button>         
          <div id="searchDropdownMenu" class="hs-form-search-menu-content dropdown-menu dropdown-menu-form-search navbar-dropdown-menu-borderless">            
            <div class="card-body-height">
              <div class="d-lg-none">
                <div class="input-group input-group-merge navbar-input-group mb-5">
                  <div class="input-group-prepend input-group-text">
                    <i class="bi-search"></i>
                  </div>
                  <input type="search" class="form-control" placeholder="Search in front" aria-label="Search in front">
                  <a class="input-group-append input-group-text" href="javascript:;">
                    <i class="bi-x-lg"></i>
                  </a>
                </div>
              </div>
              <span class="dropdown-header">Recent searches</span>
              <div class="dropdown-item bg-transparent text-wrap">
                <a class="btn btn-soft-dark btn-xs rounded-pill" href="javascript:void(0)">
                  Gulp <i class="bi-search ms-1"></i>
                </a>
                <a class="btn btn-soft-dark btn-xs rounded-pill" href="javascript:void(0)">
                  Notification panel <i class="bi-search ms-1"></i>
                </a>
              </div>
              <div class="dropdown-divider"></div>
              <span class="dropdown-header">Tutorials</span>
              <a class="dropdown-item" href="javascript:void(0)">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <span class="icon icon-soft-dark icon-xs icon-circle">
                      <i class="bi-sliders"></i>
                    </span>
                  </div>
                  <div class="flex-grow-1 text-truncate ms-2">
                    <span>How to set up Gulp?</span>
                  </div>
                </div>
              </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <span class="icon icon-soft-dark icon-xs icon-circle">
                      <i class="bi-paint-bucket"></i>
                    </span>
                  </div>
                  <div class="flex-grow-1 text-truncate ms-2">
                    <span>How to change theme color?</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <span class="dropdown-header">Members</span>
              <a class="dropdown-item" href="javascript:void(0)">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img class="avatar avatar-xs avatar-circle" src="assets/img/160x160/img10.jpg" alt="Image Description">
                  </div>
                  <div class="flex-grow-1 text-truncate ms-2">
                    <span>Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                  </div>
                </div>
              </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img class="avatar avatar-xs avatar-circle" src="assets/img/160x160/img3.jpg" alt="Image Description">
                  </div>
                  <div class="flex-grow-1 text-truncate ms-2">
                    <span>David Harrison</span>
                  </div>
                </div>
              </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <div class="avatar avatar-xs avatar-soft-info avatar-circle">
                      <span class="avatar-initials">A</span>
                    </div>
                  </div>
                  <div class="flex-grow-1 text-truncate ms-2">
                    <span>Anne Richard</span>
                  </div>
                </div>
              </a>
            </div>
            <!-- End Body -->
            <!-- Footer -->
            <a class="card-footer text-center" href="javascript:void(0)">
              See all results <i class="bi-chevron-right small"></i>
            </a>
            <!-- End Footer -->
          </div>
          <!-- End Card Search Content -->
        </div>
        <!-- End Search Form -->
      </div>
      <div class="navbar-nav-wrap-content-end">
        <!-- Navbar -->
        <ul class="navbar-nav">
          <li class="nav-item d-none d-sm-inline-block">
            <!-- Notification -->
            <div class="dropdown">
              <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                <i class="bi-bell"></i>
                <span class="btn-status btn-sm-status btn-status-danger"></span>
              </button>
              <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdown" style="width: 25rem;">
                <!-- Header -->
                <div class="card-header card-header-content-between">
                  <h4 class="card-title mb-0">Notifications</h4>
                  <!-- Unfold -->
                  <div class="dropdown">
                    <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" id="navbarNotificationsDropdownSettings" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi-three-dots-vertical"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdownSettings">
                      <span class="dropdown-header">Settings</span>
                      <a class="dropdown-item" href="javascript:void(0)">
                        <i class="bi-archive dropdown-item-icon"></i> Archive all
                      </a>
                      <a class="dropdown-item" href="javascript:void(0)">
                        <i class="bi-check2-all dropdown-item-icon"></i> Mark all as read
                      </a>
                      <a class="dropdown-item" href="javascript:void(0)">
                        <i class="bi-toggle-off dropdown-item-icon"></i> Disable notifications
                      </a>
                      <a class="dropdown-item" href="javascript:void(0)">
                        <i class="bi-gift dropdown-item-icon"></i> What's new?
                      </a>
                      <div class="dropdown-divider"></div>
                      <span class="dropdown-header">Feedback</span>
                      <a class="dropdown-item" href="javascript:void(0)">
                        <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                      </a>
                    </div>
                  </div>
                  <!-- End Unfold -->
                </div>
                <!-- End Header -->
                <!-- Nav -->
                <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#notificationNavOne" id="notificationNavOne-tab" data-bs-toggle="tab" data-bs-target="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#notificationNavTwo" id="notificationNavTwo-tab" data-bs-toggle="tab" data-bs-target="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                  </li>
                </ul>
                <!-- End Nav -->
                <!-- Body -->
                <div class="card-body-height">
                  <!-- Tab Content -->
                  <div class="tab-content" id="notificationTabContent">
                    <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                      <!-- List Group -->
                      <ul class="list-group list-group-flush navbar-card-list-group">
                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck1" checked>
                                  <label class="form-check-label" for="notificationCheck1"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <img class="avatar avatar-sm avatar-circle" src="assets/img/160x160/img3.jpg" alt="Image Description">
                              </div>
                            </div>
                            <!-- End Col -->
                            <div class="col ms-n2">
                              <h5 class="mb-1">Brian Warner</h5>
                              <p class="text-body fs-5">changed an issue from "In Progress" to <span class="badge bg-success">Review</span></p>
                            </div>
                            <!-- End Col -->
                            <small class="col-auto text-muted text-cap">2hr</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->
                          <a class="stretched-link" href="javascript:void(0)"></a>
                        </li>
                        <!-- End Item -->
                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck2" checked>
                                  <label class="form-check-label" for="notificationCheck2"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                  <span class="avatar-initials">K</span>
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->
                            <div class="col ms-n2">
                              <h5 class="mb-1">Klara Hampton</h5>
                              <p class="text-body fs-5">mentioned you in a comment</p>
                              <blockquote class="blockquote blockquote-sm">
                                Nice work, love! You really nailed it. Keep it up!
                              </blockquote>
                            </div>
                            <!-- End Col -->
                            <small class="col-auto text-muted text-cap">10hr</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->
                          <a class="stretched-link" href="javascript:void(0)"></a>
                        </li>
                        <!-- End Item -->
                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck3" checked>
                                  <label class="form-check-label" for="notificationCheck3"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-circle">
                                  <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->
                            <div class="col ms-n2">
                              <h5 class="mb-1">Ruby Walter</h5>
                              <p class="text-body fs-5">joined the Slack group HS Team</p>
                            </div>
                            <!-- End Col -->
                            <small class="col-auto text-muted text-cap">3dy</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->
                          <a class="stretched-link" href="javascript:void(0)"></a>
                        </li>
                        <!-- End Item -->
                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck4">
                                  <label class="form-check-label" for="notificationCheck4"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-circle">
                                  <img class="avatar-img" src="assets/svg/brands/google-icon.svg" alt="Image Description">
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->
                            <div class="col ms-n2">
                              <h5 class="mb-1">from Google</h5>
                              <p class="text-body fs-5">Start using forms to capture the information of prospects visiting your Google website</p>
                            </div>
                            <!-- End Col -->
                            <small class="col-auto text-muted text-cap">17dy</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->
                          <a class="stretched-link" href="javascript:void(0)"></a>
                        </li>
                        <!-- End Item -->
                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck5">
                                  <label class="form-check-label" for="notificationCheck5"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-circle">
                                  <img class="avatar-img" src="assets/img/160x160/img7.jpg" alt="Image Description">
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->
                            <div class="col ms-n2">
                              <h5 class="mb-1">Sara Villar</h5>
                              <p class="text-body fs-5">completed <i class="bi-journal-bookmark-fill text-primary"></i> FD-7 task</p>
                            </div>
                            <!-- End Col -->
                            <small class="col-auto text-muted text-cap">2mn</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->
                          <a class="stretched-link" href="javascript:void(0)"></a>
                        </li>
                        <!-- End Item -->
                      </ul>
                      <!-- End List Group -->
                    </div>
                    <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                      <!-- List Group -->
                      <ul class="list-group list-group-flush navbar-card-list-group">
                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck6">
                                  <label class="form-check-label" for="notificationCheck6"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                  <span class="avatar-initials">A</span>
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->
                            <div class="col ms-n2">
                              <h5 class="mb-1">Anne Richard</h5>
                              <p class="text-body fs-5">accepted your invitation to join Notion</p>
                            </div>
                            <!-- End Col -->
                            <small class="col-auto text-muted text-cap">1dy</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->
                          <a class="stretched-link" href="javascript:void(0)"></a>
                        </li>
                        <!-- End Item -->
                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck7">
                                  <label class="form-check-label" for="notificationCheck7"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-circle">
                                  <img class="avatar-img" src="assets/img/160x160/img5.jpg" alt="Image Description">
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->
                            <div class="col ms-n2">
                              <h5 class="mb-1">Finch Hoot</h5>
                              <p class="text-body fs-5">left Slack group HS projects</p>
                            </div>
                            <!-- End Col -->
                            <small class="col-auto text-muted text-cap">1dy</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->
                          <a class="stretched-link" href="javascript:void(0)"></a>
                        </li>
                        <!-- End Item -->
                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck8">
                                  <label class="form-check-label" for="notificationCheck8"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-dark avatar-circle">
                                  <span class="avatar-initials">HS</span>
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->
                            <div class="col ms-n2">
                              <h5 class="mb-1">Htmlstream</h5>
                              <p class="text-body fs-5">you earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>
                            </div>
                            <!-- End Col -->
                            <small class="col-auto text-muted text-cap">6dy</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->
                          <a class="stretched-link" href="javascript:void(0)"></a>
                        </li>
                        <!-- End Item -->
                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck9">
                                  <label class="form-check-label" for="notificationCheck9"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-circle">
                                  <img class="avatar-img" src="assets/img/160x160/img8.jpg" alt="Image Description">
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->
                            <div class="col ms-n2">
                              <h5 class="mb-1">Linda Bates</h5>
                              <p class="text-body fs-5">Accepted your connection</p>
                            </div>
                            <!-- End Col -->
                            <small class="col-auto text-muted text-cap">17dy</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->
                          <a class="stretched-link" href="javascript:void(0)"></a>
                        </li>
                        <!-- End Item -->
                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck10">
                                  <label class="form-check-label" for="notificationCheck10"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                  <span class="avatar-initials">L</span>
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->
                            <div class="col ms-n2">
                              <h5 class="mb-1">Lewis Clarke</h5>
                              <p class="text-body fs-5">completed <i class="bi-journal-bookmark-fill text-primary"></i> FD-134 task</p>
                            </div>
                            <!-- End Col -->
                            <small class="col-auto text-muted text-cap">2mts</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->
                          <a class="stretched-link" href="javascript:void(0)"></a>
                        </li>
                        <!-- End Item -->
                      </ul>
                      <!-- End List Group -->
                    </div>
                  </div>
                  <!-- End Tab Content -->
                </div>
                <!-- End Body -->
                <!-- Card Footer -->
                <a class="card-footer text-center" href="javascript:void(0)">
                  View all notifications <i class="bi-chevron-right"></i>
                </a>
                <!-- End Card Footer -->
              </div>
            </div>
            <!-- End Notification -->
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <!-- Apps -->
            <div class="dropdown">
              <button type="button" class="btn btn-icon btn-ghost-secondary rounded-circle" id="navbarAppsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                <i class="bi-app-indicator"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarAppsDropdown" style="width: 25rem;">
                <!-- Header -->
                <div class="card-header">
                  <h4 class="card-title">Web apps &amp; services</h4>
                </div>
                <!-- End Header -->
                <!-- Body -->
                <div class="card-body card-body-height">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-xs avatar-4x3" src="assets/svg/brands/atlassian-icon.svg" alt="Image Description">
                      </div>
                      <div class="flex-grow-1 text-truncate ms-3">
                        <h5 class="mb-0">Atlassian</h5>
                        <p class="card-text text-body">Security and control across Cloud</p>
                      </div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-xs avatar-4x3" src="assets/svg/brands/slack-icon.svg" alt="Image Description">
                      </div>
                      <div class="flex-grow-1 text-truncate ms-3">
                        <h5 class="mb-0">Slack <span class="badge bg-primary rounded-pill text-uppercase ms-1">Try</span></h5>
                        <p class="card-text text-body">Email collaboration software</p>
                      </div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-xs avatar-4x3" src="assets/svg/brands/google-webdev-icon.svg" alt="Image Description">
                      </div>
                      <div class="flex-grow-1 text-truncate ms-3">
                        <h5 class="mb-0">Google webdev</h5>
                        <p class="card-text text-body">Work involved in developing a website</p>
                      </div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-xs avatar-4x3" src="assets/svg/brands/frontapp-icon.svg" alt="Image Description">
                      </div>
                      <div class="flex-grow-1 text-truncate ms-3">
                        <h5 class="mb-0">Frontapp</h5>
                        <p class="card-text text-body">The inbox for teams</p>
                      </div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-xs avatar-4x3" src="assets/svg/illustrations/review-rating-shield.svg" alt="Image Description">
                      </div>
                      <div class="flex-grow-1 text-truncate ms-3">
                        <h5 class="mb-0">HS Support</h5>
                        <p class="card-text text-body">Customer service and support</p>
                      </div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-soft-dark">
                          <span class="avatar-initials"><i class="bi-grid"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1 text-truncate ms-3">
                        <h5 class="mb-0">More Front products</h5>
                        <p class="card-text text-body">Check out more HS products</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Body -->
                <!-- Footer -->
                <a class="card-footer text-center" href="javascript:void(0)">
                  View all apps <i class="bi-chevron-right"></i>
                </a>
                <!-- End Footer -->
              </div>
            </div>
            <!-- End Apps -->
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <!-- Activity -->
            <button class="btn btn-ghost-secondary btn-icon rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasActivityStream" aria-controls="offcanvasActivityStream">
              <i class="bi-x-diamond"></i>
            </button>
            <!-- Activity -->
          </li>
          <li class="nav-item">
            <!-- Account -->
            <div class="dropdown">
              <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                <div class="avatar avatar-sm avatar-circle">
                  <img class="avatar-img" src="assets/img/160x160/img6.jpg" alt="Image Description">
                  <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                <div class="dropdown-item-text">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-sm avatar-circle">
                      <img class="avatar-img" src="assets/img/160x160/img6.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="mb-0">Mark Williams</h5>
                      <p class="card-text text-body">mark@site.com</p>
                    </div>
                  </div>
                </div>
                <div class="dropdown-divider"></div>
                <!-- Dropdown -->
                <div class="dropdown">
                  <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown1" data-bs-toggle="dropdown" aria-expanded="false">Set status</a>
                  <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown1">
                    <a class="dropdown-item" href="javascript:void(0)">
                      <span class="legend-indicator bg-success me-1"></span> Available
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <span class="legend-indicator bg-danger me-1"></span> Busy
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <span class="legend-indicator bg-warning me-1"></span> Away
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void(0)"> Reset status
                    </a>
                  </div>
                </div>
                <!-- End Dropdown -->
                <a class="dropdown-item" href="javascript:void(0)">Profile &amp; account</a>
                <a class="dropdown-item" href="javascript:void(0)">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-dark avatar-circle">
                        <span class="avatar-initials">HS</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-2">
                      <h5 class="mb-0">Htmlstream <span class="badge bg-primary rounded-pill text-uppercase ms-1">PRO</span></h5>
                      <span class="card-text">hs.example.com</span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <!-- Dropdown -->
                <div class="dropdown">
                  <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown2" data-bs-toggle="dropdown" aria-expanded="false">Customization</a>
                  <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown2">
                    <a class="dropdown-item" href="javascript:void(0)">
                      Invite people
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      Analytics
                      <i class="bi-box-arrow-in-up-right"></i>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      Customize Front
                      <i class="bi-box-arrow-in-up-right"></i>
                    </a>
                  </div>
                </div>
                <!-- End Dropdown -->
                <a class="dropdown-item" href="javascript:void(0)">Manage team</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">Sign out</a>
              </div>
            </div>
            <!-- End Account -->
          </li>
        </ul>
        <!-- End Navbar -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->
  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->
  <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
    <div class="navbar-vertical-container">
      <div class="navbar-vertical-footer-offset">
        <!-- Logo -->
        <a class="navbar-brand" href="javascript:void(0)" aria-label="Hospital CRM">
        Hospital CRM
        </a>
        <!-- End Logo -->
        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
          <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
          <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
        </button>
        <!-- End Navbar Vertical Toggle -->
        <!-- Content -->
        <div class="navbar-vertical-content">
          <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
            <!-- Collapse -->
           
              <div class="nav-item">
                <a class="nav-link " href="javascript:void(0)" data-placement="left">
                <i class="bi-house-door nav-icon"></i>
                <span class="nav-link-title">Dashboards</span>
                </a>
              </div>
              
            <!-- <div id="navbarVerticalMenuDashboards" class="nav-collapse collapse show" data-bs-parent="#navbarVerticalMenu">
                <a class="nav-link active" href="index-2.html">Default</a>
                <a class="nav-link " href="dashboard-alternative.html">Alternative</a>
              </div>
            </div> -->
            <!-- End Collapse -->
            <span class="dropdown-header mt-4">Apps</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>
            <!-- Collapse -->
            <div class="navbar-nav nav-compact">
            </div>
            <div id="navbarVerticalMenuPagesMenu">
              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link " href="javascript:void(0)" data-placement="left">
                <i class="bi bi-cash-stack nav-icon"></i>
                <span class="nav-link-title">Billing</span>
                </a>
              </div>
                <!--<div id="navbarVerticalMenuPagesUsersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="users.html">Overview</a>
                  <a class="nav-link " href="users-leaderboard.html">Leaderboard</a>
                  <a class="nav-link " href="users-add-user.html">Add User <span class="badge bg-info rounded-pill ms-1">Hot</span></a>
                </div>
              </div> -->
              <!-- End Collapse -->
              <!-- Collapse -->
              
              <div class="nav-item">
                <a class="nav-link " href="javascript:void(0)" data-placement="left">
                <i class="bi bi-file-text nav-icon"></i>
                <span class="nav-link-title">Appoinments</span>
                </a>
              </div>
               <!-- <div id="navbarVerticalMenuPagesUserProfileMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="user-profile.html">Profile</a>
                  <a class="nav-link " href="user-profile-teams.html">Teams</a>
                  <a class="nav-link " href="user-profile-projects.html">Projects</a>
                  <a class="nav-link " href="user-profile-connections.html">Connections</a>
                  <a class="nav-link " href="user-profile-my-profile.html">My Profile</a>
                </div>
              </div> -->
              <!-- End Collapse -->
              <!-- Collapse -->
              
              <div class="nav-item">
                <a class="nav-link " href="javascript:void(0)" data-placement="left">
                <i class="bi bi-person-check-fill nav-icon"></i>
                <span class="nav-link-title">Out Patients</span>
                </a>
              </div>
                <!--<div id="navbarVerticalMenuPagesAccountMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="account-settings.html">Settings</a>
                  <a class="nav-link " href="account-billing.html">Billing</a>
                  <a class="nav-link " href="account-invoice.html">Invoice</a>
                </div>
              </div> -->
              <!-- End Collapse -->
              <!-- Collapse -->
                <div class="nav-item">
                <a class="nav-link " href="javascript:void(0)" data-placement="left">
                <i class="bi bi-person-dash-fill nav-icon"></i>
                <span class="nav-link-title">In Patients</span>
                </a>
              </div>
               <!-- <div id="navbarVerticalMenuPagesEcommerceMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="ecommerce.html">Overview</a>
                  <div id="navbarVerticalMenuPagesMenuEcommerce">
                  
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesEcommerceProductsMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceProductsMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceProductsMenu">
                        Products
                      </a>
                      <div id="navbarVerticalMenuPagesEcommerceProductsMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                        <a class="nav-link " href="ecommerce-products.html">Products</a>
                        <a class="nav-link " href="ecommerce-product-details.html">Product Details</a>
                        <a class="nav-link " href="ecommerce-add-product.html">Add Product</a>
                      </div>
                    </div>
                     
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesEcommerceOrdersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceOrdersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceOrdersMenu">
                        Orders
                      </a>
                      <div id="navbarVerticalMenuPagesEcommerceOrdersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                        <a class="nav-link " href="ecommerce-orders.html">Orders</a>
                        <a class="nav-link " href="ecommerce-order-details.html">Order Details</a>
                      </div>
                    </div>
                    
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesEcommerceCustomersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceCustomersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceCustomersMenu">
                        Customers
                      </a>
                      <div id="navbarVerticalMenuPagesEcommerceCustomersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                        <a class="nav-link " href="ecommerce-customers.html">Customers</a>
                        <a class="nav-link " href="ecommerce-customer-details.html">Customer Details</a>
                        <a class="nav-link " href="ecommerce-add-customers.html">Add Customers</a>
                      </div>
                    </div>
                   End Collapse 
                  </div>
                  <a class="nav-link " href="ecommerce-referrals.html">Referrals</a>
                  <a class="nav-link " href="ecommerce-manage-reviews.html">Manage Reviews</a>
                  <a class="nav-link " href="ecommerce-checkout.html">Checkout</a>
                </div>
              </div> -->
              <!-- End Collapse -->
              <!-- Collapse -->
              
              <div class="nav-item">
                <a class="nav-link " href="pharmacy.php" data-placement="left">
                <i class="bi bi-cart-plus-fill nav-icon"></i>
                <span class="nav-link-title">Pharmacy</span>
                </a>
              </div>
               <!-- <div id="navbarVerticalMenuPagesProjectsMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="projects.html">Overview</a>
                  <a class="nav-link " href="projects-timeline.html">Timeline</a>
                </div>
              </div> -->
              <!-- End Collapse -->
              <!-- Collapse -->
             
              <div class="nav-item">
              <a class="nav-link " href="staff.php" data-placement="left">
                <i class="bi bi-file-person-fill nav-icon"></i>
                <span class="nav-link-title">HR</span>
              </a>
            </div>
                <!--<div id="navbarVerticalMenuPagesProjectMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="project.html">Overview</a>
                  <a class="nav-link " href="project-files.html">Files</a>
                  <a class="nav-link " href="project-activity.html">Activity</a>
                  <a class="nav-link " href="project-teams.html">Teams</a>
                  <a class="nav-link " href="project-settings.html">Settings</a>
                </div>
              </div> -->
              <!-- End Collapse -->
              <!-- Collapse -->
              <div class="nav-item">
              <a class="nav-link " href="javascript:void(0)" data-placement="left">
                <i class="bi bi-people-fill nav-icon"></i>
                <span class="nav-link-title">Referral</span>
              </a>
            </div>
                
                <!-- <div id="navbarVerticalMenuAuthentication" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenu">
                  <div id="navbarVerticalMenuAuthenticationMenu">
                 Collapse 
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthenticationLoginMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationLoginMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationLoginMenu">
                        Log In
                      </a>
                      <div id="navbarVerticalMenuAuthenticationLoginMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                        <a class="nav-link " href="authentication-login-basic.html">Basic</a>
                        <a class="nav-link " href="authentication-login-cover.html">Cover</a>
                      </div>
                    </div>
                   End Collapse 
                     Collapse 
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthenticationSignupMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationSignupMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationSignupMenu">
                        Sign Up
                      </a>
                      <div id="navbarVerticalMenuAuthenticationSignupMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                        <a class="nav-link " href="authentication-signup-basic.html">Basic</a>
                        <a class="nav-link " href="authentication-signup-cover.html">Cover</a>
                      </div>
                    </div>
                     End Collapse
                    Collapse
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthenticationResetPasswordMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationResetPasswordMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationResetPasswordMenu">
                        Reset Password
                      </a>
                      <div id="navbarVerticalMenuAuthenticationResetPasswordMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                        <a class="nav-link " href="authentication-reset-password-basic.html">Basic</a>
                        <a class="nav-link " href="authentication-reset-password-cover.html">Cover</a>
                      </div>
                    </div>
                   
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthenticationEmailVerificationMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationEmailVerificationMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationEmailVerificationMenu">
                        Email Verification
                      </a>
                      <div id="navbarVerticalMenuAuthenticationEmailVerificationMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                        <a class="nav-link " href="authentication-email-verification-basic.html">Basic</a>
                        <a class="nav-link " href="authentication-email-verification-cover.html">Cover</a>
                      </div>
                    </div>
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthentication2StepVerificationMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthentication2StepVerificationMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthentication2StepVerificationMenu">
                        2-step Verification
                      </a>
                      <div id="navbarVerticalMenuAuthentication2StepVerificationMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                        <a class="nav-link " href="authentication-2-step-verification-basic.html">Basic</a>
                        <a class="nav-link " href="authentication-2-step-verification-cover.html">Cover</a>
                      </div>
                    </div>
                    
                    <a class="nav-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#welcomeMessageModal">Welcome Message</a>
                    <a class="nav-link " href="error-404.html">Error 404</a>
                    <a class="nav-link " href="error-500.html">Error 500</a>
                  </div>
                </div>
              </div> -->
              <!-- End Collapse -->
              <div class="nav-item">
                <a class="nav-link " href="javascript:void(0)" data-placement="left">
                  <i class="bi bi-shield-fill-plus nav-icon"></i>
                  <span class="nav-link-title">TPA</span>
                </a>
              </div>
              <div class="nav-item">
                <a class="nav-link " href="javascript:void(0)" data-placement="left">
                  <i class="bi bi-cash-coin nav-icon"></i>
                  <span class="nav-link-title">Finance</span>
                </a>
              </div>
              <div class="nav-item">
                <a class="nav-link " href="javascript:void(0)" data-placement="left">
                  <i class="bi bi-house-door-fill nav-icon"></i>
                  <span class="nav-link-title">Inventory</span>
                </a>
              </div>
            </div>
            <!-- End Collapse -->
            <!-- <span class="dropdown-header mt-4">Apps</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small> -->
            <div class="nav-item">
              <a class="nav-link " href="javascript:void(0)" data-placement="left">
                <i class="bi-kanban nav-icon"></i>
                <span class="nav-link-title">Report</span>
              </a>
            </div>
            <div class="nav-item">
              <a class="nav-link" href="javascript:void(0)" id="builderOffcanvas" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBuilder" aria-controls="offcanvasBuilder" data-placement="left">
                <i class="bi-grid-1x2 nav-icon"></i>
                <span class="nav-link-title">Menu Settings</span>
              </a>
            </div>
           
            <span class="dropdown-header mt-4">Master</span>

            <div class="nav-item">
              <a class="nav-link" href="department.php">
                <i class="bi-layers nav-icon"></i>
                <span class="nav-link-title">Department</span>
              </a>
            </div>
           
        
            <!-- Footer -->
          <div class="navbar-vertical-footer">
            <ul class="navbar-vertical-footer-list">
              <li class="navbar-vertical-footer-list-item">
                <!-- Style Switcher -->
                <div class="dropdown dropup">
                  <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                  </button>
                  <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectThemeDropdown">
                    <a class="dropdown-item" href="javascript:void(0)" data-icon="bi-moon-stars" data-value="auto">
                      <i class="bi-moon-stars me-2"></i>
                      <span class="text-truncate" title="Auto (system default)">Auto (system default)</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)" data-icon="bi-brightness-high" data-value="default">
                      <i class="bi-brightness-high me-2"></i>
                      <span class="text-truncate" title="Default (light mode)">Default (light mode)</span>
                    </a>
                    <a class="dropdown-item active" href="javascript:void(0)" data-icon="bi-moon" data-value="dark">
                      <i class="bi-moon me-2"></i>
                      <span class="text-truncate" title="Dark">Dark</span>
                    </a>
                  </div>
                </div>
                <!-- End Style Switcher -->
              </li>
              <li class="navbar-vertical-footer-list-item">
                <!-- Other Links -->
                <div class="dropdown dropup">
                  <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                    <i class="bi-info-circle"></i>
                  </button>
                  <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="otherLinksDropdown">
                    <span class="dropdown-header">Help</span>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="bi-journals dropdown-item-icon"></i>
                      <span class="text-truncate" title="Resources &amp; tutorials">Resources &amp; tutorials</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="bi-command dropdown-item-icon"></i>
                      <span class="text-truncate" title="Keyboard shortcuts">Keyboard shortcuts</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="bi-alt dropdown-item-icon"></i>
                      <span class="text-truncate" title="Connect other apps">Connect other apps</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="bi-gift dropdown-item-icon"></i>
                      <span class="text-truncate" title="What's new?">What's new?</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <span class="dropdown-header">Contacts</span>
                    <a class="dropdown-item" href="javascript:void(0)">
                      <i class="bi-chat-left-dots dropdown-item-icon"></i>
                      <span class="text-truncate" title="Contact support">Contact support</span>
                    </a>
                  </div>
                </div>
                <!-- End Other Links -->
              </li>           
            </ul>
          </div>
        <!-- End Footer -->
      </div>
    </div>
  </aside>

  <?php include('modal.php'); ?>
